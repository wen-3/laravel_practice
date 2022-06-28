@extends('layouts.front_layout')

@section('css')
    <style>
        .done .title {
            text-align: center;
        }

        .done .title h2 {
            padding: 50px 0 30px 0;
        }

        .done .title h3 {
            padding: 0 0 50px 0;
            margin: 0;
        }

        .done_image img {
            width: 70%;
        }
    </style>
@endsection

@section('content')
    <main>
        <div class="done bgcolor_b">
            <div class="title color_w">
                <h2>訂單成立</h2>
                <h3 class="color_Beige">訂單完成，感謝您的訂購。</h3>
            </div>
            <div class="done_image d-flex justify-content-center">
                <img src="{{ URL::asset('./img/06-訂單完成/done.PNG') }}" alt="">
            </div>
        </div>
    </main>
@endsection


@section('js')
@endsection
