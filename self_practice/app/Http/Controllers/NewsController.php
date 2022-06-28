<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $items = DB::table('news')->get();

        return view('admin.news.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
            /*
            *抓出所有表單發送的資料
            *$request->all();
            */

            // 方法一:一般方法
            // $title =  $request->title;
            // $sort =  $request->sort;

            // DB::table('news')->insert(
            //     ['title' => $title, 'sort' => $sort]
            // );

            // 方法二: ORM方法一
            // $news = new News;
            // $news->title = $request->title;
            // $news->sort = $request->sort;
            // $news->save();

            // 方法三: ORM方法二
            News::create($request->all());

            return redirect('/admin/news');
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
        $item=DB::table('news')->find($id);
        return view('admin.news.edit', compact('item'));
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

        //  方法一:一般方法
        //  $title =  $request->title;
        //  $sort =  $request->sort;
        //  DB::table('news')
        //     ->where('id', $id)
        //     ->update(['title' => $title, 'sort' => $sort]
        //  );

        // 方法二: ORM方法一
        // $news = News::find($id);
        // $news->title = $request->title;
        // $news->sort = $request->sort;
        // $news->save();

        // 方法三: ORM方法二

        $news = News::find($id);
        $news->update($request->all());

        return redirect('/admin/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        News::destroy($id);
        return redirect('/admin/news');

    }
}
