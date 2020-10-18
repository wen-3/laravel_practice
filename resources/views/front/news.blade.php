@extends('layouts.front_layout')

@section('css')

<style>
    .product_img{
        margin-bottom:30px;
    }

    .section_3{
        width: 80%;
        margin: 20px auto;

    }
</style>

@endsection

@section('content')

<div class="product_img">
    <img width=100% height=600px src="https://fun8.us/gamepic/fun8/1224.jpg" alt="">
</div>

<section class="section_3">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">created_at</th>
                <th scope="col">title</th>
            </tr>
        </thead>

            @foreach ($news as $new)
        <tbody>
            <tr>
                <th scope="row">{{$new->id}}</th>
                <td>{{$new->created_at}}</td>
                <td><a href="/news/{{$new->id}}">{{$new->title}}</a></td>
            </tr>
        </tbody>
        @endforeach
    </table>
</section>

@endsection
