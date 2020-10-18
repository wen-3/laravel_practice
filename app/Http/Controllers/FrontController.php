<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImg;
use App\ProductType;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index()
    {
        $news = DB::table('news')->where('id','<=','3')->get();
        $products = DB::table('products')->where('id','<=','6')->get();
        return view('front.index', compact('news', 'products'));
    }

    public function news()
    {
        $news = DB::table('news')->get();

        return view('front.news', compact('news'));
    }

    public function news_detail($id)
    {
        // $new = DB::table('news')->where('id',$id)->first();
        $new = DB::table('news')->find($id);

        return view('front.news_detail', compact('new'));
    }


    public function products()
    {
        $productTypes = ProductType::orderBy('sort','asc')->with('products')->get();
        foreach( $productTypes as $type){
            $type->products = $type->products->take(3);
        }
        return view('front.products', compact('productTypes'));
    }

    public function products_type($id)
    {
        $productTypes = ProductType::where('id',$id)->with('products')->get();

        return view('front.products', compact('productTypes'));
    }

    public function products_detail($id)
    {
        // $product = DB::table('products')->where('id',$id)->first();
        $product = Product::where('id',$id)->with('productImgs')->first();
        return view('front.products_detail', compact('product'));
    }

}
