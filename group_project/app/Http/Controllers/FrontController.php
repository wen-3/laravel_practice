<?php

namespace App\Http\Controllers;

use App\Form;
use App\News;
use App\Product;
use Illuminate\Support\Facades\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function about()
    {
        return view('front.about');
    }

    public function news()
    {
        $news = News::get();
        return view('front.news', compact('news'));
    }

    public function products()
    {
        $products_1 = Product::where('type_id', '1')->orderBy('sort', 'asc')->get();
        $products_2 = Product::where('type_id', '2')->orderBy('sort', 'asc')->get();
        $products_3 = Product::where('type_id', '3')->orderBy('sort', 'asc')->get();

        return view('front.products', compact('products_1', 'products_2', 'products_3'));
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function contact_form(Request $request)
    {
        // $message_data = $request->all();
        // $new_data = Form::create($message_data);
        // $new_data->save();
        // return redirect('/contact');

        $new_data = new Form;

        $new_data->contact_name = request('contact_name');
        $new_data->contact_phone = request('contact_phone');
        $new_data->contact_email = request('contact_email');
        $new_data->message_content = request('message_content');
        // $new_data = Form::create([

        //     'contact_name' => $request->contact_name,
        //     'contact_phone' => $request->contact_phone,
        //     'contact_email' => $request->contact_email,
        //     'message_content' => $request->message_content,
        // ]);
        $new_data->save();
        return redirect('/contact');
    }

}
