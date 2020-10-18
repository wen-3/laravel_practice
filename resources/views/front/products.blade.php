@extends('layouts.front_layout')

@section('css')

<style>
    .product_img{
        margin-bottom:30px;
    }


</style>

@endsection

@section('content')
<div class="product_img">
    <img width=100% height=500px src="https://i0.wp.com/www.petmily.com/wp-content/uploads/2014/11/3-by-aussiepm-dot-com-dot-au-1080x675.jpg" alt="">
</div>

<div class="container">
    @foreach ($productTypes as $productType)
        <h1>{{ $productType->type_name}}</h1>
        <div class="row">
            @foreach ($productType->products as $product)
                <div class="col-12 col-md-4">
                    <img src="{{$product->img}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="/products/{{$product->id}}">
                            <h5 class="card-title">{{$product->title}}</h5>
                        </a>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</div>
@endsection


