<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImg;
use App\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $items = DB::table('product')->get();
        $items =  Product::with('ProductType')->get();
        // dd($items);
        return view('admin.product.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productTypes =  ProductType::all();
        return view('admin.product.create', compact('productTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requsetData = $request->all();

        //單一檔案
        if($request->hasFile('img')) {
            $file = $request->file('img');
            $path = $this->fileUpload($file,'product');
            $requsetData['img'] = $path;
        }

        Product::create($requsetData);

        return redirect('/admin/product');
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
        // $item=DB::table('product')->find($id);
        // $item = Product::find($id);

        $item = Product::find($id);
        $productTypes = ProductType::all();

        return view('admin.product.edit', compact('item','productTypes'));
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
        $item = Product::find($id);

        $requsetData = $request->all();
        if($request->hasFile('img')) {      //如果使用者有重新上傳圖片
            $old_image = $item->img;        //抓取舊圖片路徑
            File::delete(public_path().$old_image); //把舊圖片刪除

            //上傳圖片
            $file = $request->file('img');
            $path = $this->fileUpload($file,'product');
            $requsetData['img'] = $path;
        }


        $item->update($requsetData);

        return redirect('/admin/product');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

            Product::destroy($id);

            return redirect('/admin/product');
        }

        private function fileUpload($file,$dir){
            //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
            if( ! is_dir('upload/')){
                mkdir('upload/');
            }
            //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
            if ( ! is_dir('upload/'.$dir)) {
                mkdir('upload/'.$dir);
            }
            //取得檔案的副檔名
            $extension = $file->getClientOriginalExtension();
            //檔案名稱會被重新命名
            $filename = strval(time().md5(rand(100, 200))).'.'.$extension;
            //移動到指定路徑
            move_uploaded_file($file, public_path().'/upload/'.$dir.'/'.$filename);
            //回傳 資料庫儲存用的路徑格式
            return '/upload/'.$dir.'/'.$filename;
        }

}
