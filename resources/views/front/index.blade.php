@extends('layouts.front_layout')

@section('css')
<link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="../package/css/swiper.min.css">

<style>

    .swiper-container {
      width: 60%;
      height: 60%;
    }

    .swiper_card_container{
       width: 70%;
       height: 60%;
    }


    .swiper-slide {
      font-size: 18px;
      background: #fff;
      /* Center slide text vertically */
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .section_3{
        width: 70%;
        margin: 0 auto;
    }


</style>
@endsection

@section('content')

<section class="section_1">

  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="https://desk-fd.zol-img.com.cn/t_s960x600c5/g4/M05/0B/02/Cg-4WlP7IhiIBmnTAAe4FMN-XZAAAQztgKjPOQAB7gs020.jpg" alt=""></div>
      <div class="swiper-slide"><img src="http://mmmfile.emmm.tw/club_photo/img/32032_pic_20060222162926_0.jpg" alt=""></div>
      <div class="swiper-slide"><img src="http://yuan.yocjh.kh.edu.tw/photoimpact/10_01.jpg" alt=""></div>
    </div>

    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

</section>

<section class="section_2">

    <div class="swiper-container swiper_card_container">
        <h2>Products</h2>
        <div class="swiper-wrapper">
            @foreach ($products as $product)
            <div class="swiper-slide">
                 <div class="card" style="width: 18rem;">
                    <img src="{{$product->img}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="/products/{{$product->id}}">
                            <h5 class="card-title">{{$product->title}}</h5>
                        </a>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            @endforeach

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
    </div>

</section>

<section class="section_3">
    <h2 class="News_title">News</h2>
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


@section('js')
  <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
  <!-- Swiper JS -->
  <script src="../package/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });


    var swiper = new Swiper('.swiper_card_container', {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,

      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });


  </script>

@endsection


