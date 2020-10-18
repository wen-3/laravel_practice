<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

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
    //加入購物車ajax
    Route::post('/addcart', 'CartController@addcart');
    //結帳頁，更改數量
    Route::get('/cart', 'CartController@cart');
    //修改產品數量ajax
    Route::post('/changeProductQty','CartController@changeProductQty');
    //刪除在購物車的特定產品
    Route::post('/deleteProductInCart','CartController@deleteProductInCart');
    //結帳頁，填寫收件人資料
    Route::get('cart_check_out','CartController@cart_check_out');
    Route::post('send_check_out','CartController@send_check_out');


    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');

//admin 後端
    // prefix(路由前綴) + group(群組) + Auth middleware(中介層)
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::get('/','AdminController@index');
    Route::post('/ajax_upload_img','AdminController@ajax_upload_img');
    Route::post('/ajax_delete_img','AdminController@ajax_delete_img');

    Route::post('/ajax_delete_product_imgs','AdminController@ajax_delete_product_imgs');

    Route::get('product_type', 'ProductTypeController@index');
    Route::get('product_type/create', 'ProductTypeController@create');
    Route::post('product_type/store', 'ProductTypeController@store');
    Route::get('product_type/edit/{id}', 'ProductTypeController@edit');
    Route::post('product_type/update/{id}', 'ProductTypeController@update');
    Route::post('product_type/destroy/{id}', 'ProductTypeController@destroy');

    Route::get('product', 'ProductController@index');  //----------------> 列出所有產品的頁面
    Route::get('product/create', 'ProductController@create'); //---------> 到建立產品的頁面
    Route::post('product/store', 'ProductController@store'); //----------> "儲存"產品資料
    Route::get('product/edit/{id}', 'ProductController@edit'); //--------> 到特定產品的頁面
    Route::post('product/update/{id}', 'ProductController@update'); //---> "更新"產品資料
    Route::post('product/destroy/{id}', 'ProductController@destroy'); //---> "刪除"產品資料

    Route::get('news', 'newsController@index');
    Route::get('news/create', 'newsController@create');
    Route::post('news/store', 'newsController@store');
    Route::get('news/edit/{id}', 'newsController@edit');
    Route::post('news/update/{id}', 'newsController@update');
    Route::post('news/destroy/{id}', 'newsController@destroy');

});



