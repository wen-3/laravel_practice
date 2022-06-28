@extends('layouts.front_layout')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
<style>
    .main-cotent {
        margin-top: 60px;
    }
</style>
@endsection

@section('content')
<div class="container main-cotent">
    <div class="row">
        <div class="col-12 col-md-6">
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($product->productImgs as $productImg)
                    <div class="swiper-slide">
                        <img src="{{$productImg->productDetail_img}}" alt="">
                    </div>
                    @endforeach
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <h1>{{ $product->title }}</h1>
            <p>{!! $product->description !!}</p>
        <button class="btn btn-primary addcart" data-productid="{{$product->id}}">加入購物車</button>

        </div>
    </div>
</div>
@endsection


@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>


 <!-- Initialize Swiper -->
<script>
   var swiper = new Swiper('.swiper-container', {
     navigation: {
       nextEl: '.swiper-button-next',
       prevEl: '.swiper-button-prev',
     },
   });

   $('.addcart').click(function(){

        var product_id = $(this).data("productid");
        // console.log(product_id);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: 'POST',
            url: '/addcart',
            data: {product_id:product_id},
            success: function (res) {
                // console.log("cartTotalQuantity:",res)
                //updata cartTotalQuantity
                $('#cartTotalQuantity').text(res);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error(textStatus + " " + errorThrown);
            }
        });
    });
</script>

@endsection
