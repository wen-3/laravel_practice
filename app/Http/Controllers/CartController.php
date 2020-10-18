<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\OrderItems;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
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
        // dd($request->all());
        $request_data = $request->all();
        $request_data["order_no"] = "201912061";
        $request_data["total_price"] = \Cart::getTotal();

        $new_order = Order::create($request_data);
        // dd($new_order);

        $cat_contents = \Cart::getContent()->sort();

        foreach ($cat_contents as $item) {
            $OrderItem = new OrderItems();
            $OrderItem->order_id = $new_order->id;
            $OrderItem->product_id = $item->id;
            $OrderItem->qty = $item->quantity;
            $OrderItem->price = $item->price;
            $OrderItem->save();
        }
    }
}
