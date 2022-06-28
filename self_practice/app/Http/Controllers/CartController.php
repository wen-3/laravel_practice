<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Carbon\Carbon;
use App\OrderItems;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use TsaiYiHua\ECPay\Checkout;
use TsaiYiHua\ECPay\Services\StringService;
use TsaiYiHua\ECPay\Collections\CheckoutResponseCollection;

class CartController extends Controller
{
    public function __construct(Checkout $checkout,CheckoutResponseCollection $checkoutResponse)
    {
        $this->checkout = $checkout;
        $this->checkoutResponse = $checkoutResponse;
    }

    public function addcart(Request $request){
        // add cart items to a specific user
        $product_id = $request->product_id;
        $product = Product::find($product_id);


        // $userId = auth()->user()->id; // or any string represents user identifier
        \Cart::add($product_id, $product->title, $product->price, 1, array());

        $cartTotalQuantity = \Cart::getTotalQuantity();
        return $cartTotalQuantity;
    }



    // public function getContent(){
    //     $Content = \Cart::getContent();
    //     dd($Content);
    // }

    // public function TotalCart(){
    //     $total = \Cart::getTotal();
    //     dd($total);
    // }

    public function cart()
    {
        $content = \Cart::getContent()->sort();//取得購物車產品後排序
        $total = \Cart::getTotal();

        return view("front.cart",compact('content','total'));
    }

    public function changeProductQty(Request $request)
    {
        $product_id = $request->product_id;
        $new_qty = $request->new_qty;

        \Cart::update($product_id , array(
            'quantity' => array(
                'relative' => false,
                'value' => $new_qty
            ),
          ));

        return "suceess";
    }


    public function deleteProductInCart(Request $request)
    {
        $product_id = $request->product_id;
        \Cart::remove($product_id);

        return "suceess";
    }

    public function cart_check_out()
    {
        $content = \Cart::getContent()->sort();
        $total = \Cart::getTotal();

        return view("front.cart_check_out",compact('content','total'));
    }

    public function send_check_out(Request $request)
    {
        //建立訂單
        // dd($request->all());
        $request_data = $request->all();
        $request_data["order_no"] = Carbon::now()->format('Ymd');
        $request_data["total_price"] = \Cart::getTotal();

        $new_order = Order::create($request_data);
        $new_order->order_no='qwe'.Carbon::now()->format('Ymd').$new_order->id;
        $new_order->save();
        // dd($new_order);

        $cat_contents = \Cart::getContent()->sort();

        $items= [];

        foreach ($cat_contents as $item) {
            $OrderItem = new OrderItems();
            $OrderItem->order_id = $new_order->id;
            $OrderItem->product_id = $item->id;
            $OrderItem->qty = $item->quantity;
            $OrderItem->price = $item->price;
            $OrderItem->save();

            $product = Product::find($item->id);
            $product_name = $product->title;

            $new_ary = [
                'name' => $product_name,
                'qty' => $item->quantity,
                'price' => $item->price,
                'unit' => '個',
            ];

            array_push($items, $new_ary);
        }

        // dd($items);

        //第三方支付
        $formData = [
            'UserId' => 1, // 用戶ID , Optional
            'ItemDescription' => '產品簡介',
            'Items' => $items,
            'OrderId' => 'qwe'.Carbon::now()->format('Ymd').$new_order->id,
            // 'ItemName' => 'Product Name',
            // 'TotalAmount' => \Cart::getTotal(),
            'PaymentMethod' => 'Credit', // ALL, Credit, ATM, WebATM
        ];
        return $this->checkout->setNotifyUrl(route('notify'))->setReturnUrl(route('return'))->setPostData($formData)->send();
    }

    public function notifyUrl(Request $request){
        $serverPost = $request->post();
        $checkMacValue = $request->post('CheckMacValue');
        unset($serverPost['CheckMacValue']);
        $checkCode = StringService::checkMacValueGenerator($serverPost);
        if ($checkMacValue == $checkCode) {
            return '1|OK';
        } else {
            return '0|FAIL';
        }
    }

    public function returnUrl(Request $request){
        $serverPost = $request->post();
        $checkMacValue = $request->post('CheckMacValue');
        unset($serverPost['CheckMacValue']);
        $checkCode = StringService::checkMacValueGenerator($serverPost);
        if ($checkMacValue == $checkCode) {
            if (!empty($request->input('redirect'))) {
                return redirect($request->input('redirect'));
            } else {

                //付款完成，下面接下來要將購物車訂單狀態改為已付款
                //目前是顯示所有資料將其DD出來
                $MerchantTradeNo = $serverPost['MerchantTradeNo'];
                $order = Order::where('order_no', $MerchantTradeNo)->first();
                $order->status = 'payment_done';
                $order->save();

                return redirect("/cart_success/{$MerchantTradeNo}");
                // dd($this->checkoutResponse->collectResponse($serverPost));
            }
        }
    }

    public function cart_success($MerchantTradeNo){

        $order = Order::where('order_no', $MerchantTradeNo)->first();
        return view('front.cart_success');
    }

}
