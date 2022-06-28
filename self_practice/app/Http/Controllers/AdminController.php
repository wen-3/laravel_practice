<?php

namespace App\Http\Controllers;

use App\ProductImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function ajax_upload_img(){
        // A list of permitted file extensions
        $allowed = array('png', 'jpg', 'gif','zip');
        if(isset($_FILES['file']) && $_FILES['file']['error'] == 0){
            $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
            if(!in_array(strtolower($extension), $allowed)){
                echo '{"status":"error"}';
                exit;
            }
            $name = strval(time().md5(rand(100, 200)));
            $ext = explode('.', $_FILES['file']['name']);
            $filename = $name . '.' . $ext[1];
            //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
            if( ! is_dir('upload/')){
                mkdir('upload/');
            }
            //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
            if ( ! is_dir('upload/img')) {
                mkdir('upload/img');
            }
            $destination = public_path().'/upload/img/'. $filename; //change this directory
            $location = $_FILES["file"]["tmp_name"];
            move_uploaded_file($location, $destination);
            echo "/upload/img/".$filename;//change this URL
        }
        exit;
    }

    public function ajax_delete_img(Request $request){
        if(file_exists(public_path().$request->file_link)){
            File::delete(public_path().$request->file_link);
        }
    }

    public function ajax_delete_product_imgs(Request $request)
    {
    $product_imgs_id = $request->product_imgs_id;

    //多張圖片組的單一圖片刪除
    $product_img = ProductImg::where('id',$product_imgs_id)->first();
    $old_product_img = $product_img->productDetail_img;
    if(file_exists(public_path().$old_product_img)){
        File::delete(public_path().$old_product_img);
    }
    $product_img->delete();
    echo '{"status":"success","message":"delete file success"}';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
