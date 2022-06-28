@extends('layouts.front_layout')

@section('css')
<style>
    /* 商品購物頁面 */
    /* 01-商品展示頁面 */

    /* products */
    input {
        width: 70px;
    }

    .container-fluid {
        padding-left: 0px;
        padding-right: 0px;
    }

    .products_background {
        background-image: url('./img/04-購物頁面/01-products/01-background.png');
    }

    .title h2 {
        text-align: center;
        color: white;
        padding: 100px 0;
    }

    /* 分類標籤 */
    .category {
        margin: 0 0 50px 0;
    }

    .category_image {
        position: relative;
    }

    .category_image .classify {
        position: absolute;
        top: 25px;
        left: 10px;
        font-size: 35px;
    }

    .category_image .tabs {
        font-size: 35px;
    }

    .category_image .tab1 {
        position: absolute;
        top: 25px;
        left: 145px;
    }

    .category_image .tab2 {
        position: absolute;
        top: 25px;
        left: 275px;
    }

    .category_image .tab3 {
        position: absolute;
        top: 25px;
        left: 405px;
    }

    /* 商品卡片 */
    .card {
        background-color: transparent;
        margin: 0 0 30px 0;
    }

    .card-title {
        font-size: 35px;
        color: rgb(247, 146, 30);
    }

    .card-title span {
        font-size: 25px;
    }

    .card-text {
        font-size: 25px;
    }

    /* 購物流程 */
    .shopping_process {
        padding-top: 40px;
    }

    .process_img img {
        width: 100%;
    }

    .process_text {
        font-size: 60px;
    }

    /* 02-獨立商品modal */
    .modal-bg {
        background-image: url(./img/04-購物頁面/02-modal/shopping_bg.png);
        background-size: cover;
        background-repeat: no-repeat;
    }

    .modal-header {
        border-bottom: none;
    }

    .modal-footer {
        border-top: none;
    }

    .modal-title {
        font-size: 50px;

    }

    .modal-title-border {
        width: 450px;
        border-bottom: 1px solid rgb(229, 35, 45);
        margin-top: -5px;
        margin-bottom: 40px;
    }

    .modal-body {
        padding: 0;
    }

    .modal-body p {
        font-size: 25px;
        letter-spacing: 4px;
    }

    .modal-footer button {
        font-size: 25px;
        letter-spacing: 3px;
    }

    .qty_btn {
        border: none;
        background-color: transparent;

    }

    .qty {
        font-size: 42px;
        text-align: center;
        width: 65px;
        border: 1px solid gray;
    }

    .qtyplus {
        font-size: 50px;
    }

    .qtyminus {
        font-size: 60px;
        margin-left: 70px;
    }

    .btn_buy {
        width: 150px;
        letter-spacing: 2px;
        font-size: 24px;
        align-self: flex-end;
        margin-bottom: 50px;
    }

    #myform input {
        margin-bottom: 35px;

    }

    label {
        display: block;
        margin-bottom: -35px;
    }

    .collapse.card {
        border: none;
    }

    /* tabs */

    .products_list {
        opacity: 0;
        pointer-events: none;
        height: 0;
        overflow: hidden;
        transition: 1s opacity;
    }

    .products_list.active {
        opacity: 1;
        pointer-events: all;
        height: auto;
    }
</style>
@endsection
<img src="{{ URL::asset('') }}" alt="">
@section('content')

<main>
    <section id="products_background" class="products_background">
        <div class="container">
            <div class="products">
                <div class="title">
                    <h2>線上&emsp;購物</h2>
                </div>
                <div id="tabs">
                    <div class="category">
                        <div class="category_image">
                            <img src="./img/04-購物頁面/01-products/02-分類.png" alt="">
                            <div class="classify">分類</div>
                            <div class="tabs tab1 tab_btn active">司康</div>
                            <div class="tabs tab2 tab_btn">果醬</div>
                            <div class="tabs tab3 tab_btn">茶類</div>
                        </div>
                    </div>

                    <div class="tabs_contents">
                        <div class="products_list active">
                            <div class="row">
                                @foreach ($products_1 as $product_1)
                                <div class="products_item col-4">
                                    <div class="card">
                                        <a href="" data-toggle="modal" href="#collapseExample"
                                            data-target="#exampleModal" role="button" aria-expanded="false"
                                            aria-controls="collapseExample"> <img src="{{$product_1->img}}"
                                                class="card-img-top" alt="..."></a>
                                        <div class="card-body">
                                            <h5 class="card-title">{{$product_1->title}}(盒)</h5>
                                            <p class="card-text color_r">價格(NT): &emsp;{{ $product_1->price }}元&emsp;
                                                <input class="input_value" type="number" value="1">
                                            </p>
                                        </div>
                                        <div class="card_btn" style="text-align:center">
                                            <button class="btn btn-danger addcart"
                                                data-productid="{{ $product_1->id }}">加入購物車</button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="products_list">
                            <div class="row">
                                @foreach ($products_2 as $product_2)
                                <div class="products_item col-4">
                                    <div class="card">
                                        <a href="" data-toggle="modal" href="#collapseExample"
                                            data-target="#exampleModal" role="button" aria-expanded="false"
                                            aria-controls="collapseExample"> <img src="{{$product_2->img}}"
                                                class="card-img-top" alt="..."></a>
                                        <div class="card-body">
                                            <h5 class="card-title">{{$product_2->title}}(罐)</h5>
                                            <p class="card-text color_r">價格(NT): &emsp;{{ $product_2->price }}元&emsp;
                                                <input class="input_value" type="number" value="1"></p>
                                        </div>
                                        <div class="card_btn" style="text-align:center">
                                            <button class="btn btn-danger addcart"
                                                data-productid="{{ $product_2->id }}">加入購物車</button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="products_list">
                            <div class="row">
                                @foreach ($products_3 as $product_3)
                                <div class="products_item col-4">
                                    <div class="card">
                                        <a href="" data-toggle="modal" href="#collapseExample"
                                            data-target="#exampleModal" role="button" aria-expanded="false"
                                            aria-controls="collapseExample"> <img src="{{$product_3->img}}"
                                                class="card-img-top" alt="..."></a>
                                        <div class="card-body">
                                            <h5 class="card-title">{{$product_3->title}}(盒)</h5>
                                            <p class="card-text color_r">價格(NT): &emsp;{{ $product_3->price }}元&emsp;
                                                <input class="input_value" type="number" value="1"></p>
                                        </div>
                                        <div class="card_btn" style="text-align:center">
                                            <button class="btn btn-danger addcart"
                                                data-productid="{{ $product_3->id }}">加入購物車</button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content d-flex flex-row">
                    <div class="col-6 modal-bg d-flex justify-content-center align-items-center"
                        style="padding-left: 0px;">
                        <img class="modal-img" src="./img/04-購物頁面/02-modal/原味.png" alt="">
                    </div>
                    <div class="col-6">
                        <!-- modal關閉的按鈕 -->
                        <div class="modal-body">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                            </div>
                            <div class="modal-body">

                                <h3 class="modal-title color_r ">經典原味</h3>
                                <div class="modal-title-border"></div>
                                <p>外層酥脆，內層濕潤鬆軟，扎實的口感，彷彿置身英國，品嚐正統的英式下午茶點心，享受午后悠閒時光。</p>
                                <p>成&emsp;&emsp;分
                                    <a class="btn btn_collapse" data-toggle="collapse" href="#collapseExample"
                                        role="button" aria-expanded="false" aria-controls="collapseExample">
                                        +
                                    </a></p>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        <p>中筋麵粉、牛奶、雞蛋</p>
                                    </div>
                                </div>
                                <p>成&emsp;&emsp;分：中筋麵粉、牛奶、雞蛋</p>

                                <p>營養標示：</p>
                                <p>&emsp;&emsp;&emsp;&emsp;熱量&emsp;&emsp;&emsp;&emsp;0000&emsp;&emsp;&emsp;大卡</p>
                                <p>&emsp;&emsp;&emsp;&emsp;蛋白質&emsp;&emsp;&emsp;0000&emsp;&emsp;&emsp;公克</p>
                                <p>&emsp;&emsp;&emsp;&emsp;脂肪&emsp;&emsp;&emsp;&emsp;0000&emsp;&emsp;&emsp;公克</p>
                                <p>&emsp;&emsp;&emsp;&emsp;糖&emsp;&emsp;&emsp;&emsp;&emsp;0000&emsp;&emsp;&emsp;公克
                                </p>
                                <p>&emsp;&emsp;&emsp;&emsp;鈉&emsp;&emsp;&emsp;&emsp;&emsp;0000&emsp;&emsp;&emsp;毫克
                                </p>


                                <div class="d-flex justify-content-around">
                                    <!-- 加減按鈕 -->
                                    <form id='myform' method='POST' action='#'>
                                        <label>
                                            <p>數量：</p>
                                        </label>
                                        <input type='button' value='-' class='qty_btn qtyminus' field='quantity' />
                                        <input type='text' name='quantity' value='0' class='qty' />
                                        <input type='button' value='+' class='qty_btn qtyplus' field='quantity' />
                                    </form>
                                    <button type="button" class="btn btn_buy bgcolor_r color_w">立即購買</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="shopping_process container-fluid">
            <div class="process_img">
                <img src="./img/04-購物頁面/01-products/03-購物流程1.png" alt="">

            </div>
        </div>
    </section>
</main>

@endsection


@section('js')

<script>
    $('.addcart').click(function(){
        var product_id = $(this).data('productid');
        var input_value = $(this).parent('.card_btn').parent('.card').find('.input_value').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: 'POST',
            url: '/addcart',
            data: {product_id:product_id,input_value:input_value},
            success: function (res) {
                $('#cartTotalQuantity').text(res);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error(textStatus + " " + errorThrown);
            }
        });
    });

    // 摺疊按鈕
    var btn_collapse = document.querySelector('.btn_collapse');
    // btn_collapse.onclick = function () {

    //     btn_collapse.innerHTML = '-'


    // }
    $('#collapseExample').on('show.bs.collapse', function () {
        btn_collapse.innerHTML = '-'
    });
    $('#collapseExample').on('hide.bs.collapse', function () {
        btn_collapse.innerHTML = '+'
    });

    // 數量加減按鈕
    $(function () {
        // This button will increment the value
        $('.qtyplus').click(function (e) {
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            fieldName = $(this).attr('field');
            // Get its current value
            var currentVal = parseInt($('input[name=' + fieldName + ']').val());
            // If is not undefined
            if (!isNaN(currentVal)) {
                // Increment
                $('input[name=' + fieldName + ']').val(currentVal + 1);
            } else {
                // Otherwise put a 0 there
                $('input[name=' + fieldName + ']').val(0);
            }
        });
        // This button will decrement the value till 0
        $(".qtyminus").click(function (e) {
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            fieldName = $(this).attr('field');
            // Get its current value
            var currentVal = parseInt($('input[name=' + fieldName + ']').val());
            // If it isn't undefined or its greater than 0
            if (!isNaN(currentVal) && currentVal > 0) {
                // Decrement one
                $('input[name=' + fieldName + ']').val(currentVal - 1);
            } else {
                // Otherwise put a 0 there
                $('input[name=' + fieldName + ']').val(0);
            }
        });
    });

    $(".tab_btn").click(function () {
        $(".tab_btn").removeClass("active");

        $(this).addClass("active ");

        var index = $(".tab_btn").index(this);

        $(".products_list").removeClass("active");

        $(`.products_list:nth-child(${index + 1})`).addClass("active");

    });

</script>

@endsection
