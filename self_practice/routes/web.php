<?php
// Auth::routes();

//管理權限

use Illuminate\Support\Facades\Auth;

Route::get('test', function () {
    $user = Auth::user();
    dd($user->role);
});

//front 前端
Route::get('/', 'FrontController@index');

//產品頁面
Route::get('/products', 'FrontController@products');

Route::get('/productType/{id}', 'FrontController@products_type');
Route::get('/products/{id}', 'FrontController@products_detail');

//新聞頁面
Route::get('/news', 'FrontController@news');
Route::get('/news/{id}', 'FrontController@news_detail');

//前端購物車

Route::post('/addcart', 'CartController@addcart'); //加入購物車ajax

Route::get('/cart', 'CartController@cart'); //結帳頁，更改數量

Route::post('/changeProductQty', 'CartController@changeProductQty'); //修改產品數量ajax

Route::post('/deleteProductInCart', 'CartController@deleteProductInCart'); //刪除在購物車的特定產品

Route::get('cart_check_out', 'CartController@cart_check_out'); //結帳頁，填寫收件人資料
Route::post('send_check_out', 'CartController@send_check_out');

Route::get('cart_success/{MerchantTradeNo}', 'CartController@cart_success');

Route::prefix('cart_ecpay')->group(function () {

    //當消費者付款完成後，綠界會將付款結果參數以幕後(Server POST)回傳到該網址。
    Route::post('notify', 'CartController@notifyUrl')->name('notify');

    //付款完成後，綠界會將付款結果參數以幕前(Client POST)回傳到該網址
    Route::post('return', 'CartController@returnUrl')->name('return');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//admin 後端
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'AdminController@index');
    Route::post('/ajax_upload_img', 'AdminController@ajax_upload_img');
    Route::post('/ajax_delete_img', 'AdminController@ajax_delete_img');

    Route::post('/ajax_delete_product_imgs', 'AdminController@ajax_delete_product_imgs');

    Route::get('news', 'newsController@index');
    Route::get('news/create', 'newsController@create');
    Route::post('news/store', 'newsController@store');
    Route::get('news/edit/{id}', 'newsController@edit');
    Route::post('news/update/{id}', 'newsController@update');
    Route::post('news/destroy/{id}', 'newsController@destroy');

    //訂單管理
    Route::get('order', 'OrderController@index'); //訂單總覽
    Route::get('order/show/{order_id}', 'OrderController@show'); //訂單詳細資料
    Route::post('order/changeStatus/{order_id}', 'OrderController@changeStatus'); //更改訂單狀態

    Route::post('order/destroy/{order_id}', 'OrderController@destroy'); //刪除訂單
    Route::get('order/select/{status}', 'OrderController@select'); //篩選訂單
});

//super_admin 後端
// prefix(路由前綴) + group(群組) + Auth middleware(中介層)
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'super_admin']], function () {
    //帳號管理
    Route::get('account', 'AccountController@index');
    Route::get('account/create', 'AccountController@create');
    Route::post('account/store', 'AccountController@store');
    Route::post('account/destroy/{id}', 'AccountController@destroy');

    Route::get('product_type', 'ProductTypeController@index');
    Route::get('product_type/create', 'ProductTypeController@create');
    Route::post('product_type/store', 'ProductTypeController@store');
    Route::get('product_type/edit/{id}', 'ProductTypeController@edit');
    Route::post('product_type/update/{id}', 'ProductTypeController@update');
    Route::post('product_type/destroy/{id}', 'ProductTypeController@destroy');

    Route::get('product', 'ProductController@index'); //----------------> 列出所有產品的頁面
    Route::get('product/create', 'ProductController@create'); //---------> 到建立產品的頁面
    Route::post('product/store', 'ProductController@store'); //----------> "儲存"產品資料
    Route::get('product/edit/{id}', 'ProductController@edit'); //--------> 到特定產品的頁面
    Route::post('product/update/{id}', 'ProductController@update'); //---> "更新"產品資料
    Route::post('product/destroy/{id}', 'ProductController@destroy'); //---> "刪除"產品資料

});
