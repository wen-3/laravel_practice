@extends('layouts.front_layout')

@section('css')
<link href="{{ asset('scss/news.scss/news.css') }}" rel="stylesheet">
<style>
    /* main */
    .news_back {
        min-height: calc(100vh - 187px);
    }

    .bg_img {
        width: 100%;
        height: 100%;
        background-image: url(img/03-最新消息/bg.png);
        background-position: center;
        background-size: cover;
    }

</style>
@endsection

@section('content')
<section class="news_back">
    <div class="bg_img">
        <div>
            <div class="container">

                <div class="row">
                    @foreach ($news as $new)
                    <div class="col-lg-4 col-md-6 col-12 p-0">
                        <div class="img">
                            <a href="" data-toggle="modal" data-target="#light_1">
                            <img src="{{$new->img}}" alt="">
                            </a>
                            <div class="text">
                                <h5>
                                    {{$new->title}}
                                </h5>
                                <p class="text">
                                    {{$new->description}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="light_1" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body feather">
                                    <img src="{{$new->img}}" alt="">
                                    <div class="text">
                                        <h5>
                                            {{$new->title}}
                                        </h5>
                                        <p class="text">
                                            {{$new->description}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')

@endsection
