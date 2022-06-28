@extends('layouts.front_layout')



@section('css')

<style>
    .arrow_down {
        width: 80px;
    }

    /* banner */
    .banner {
        margin-top: 65px;
    }

    .banner .swiper-wrapper {
        height: 100%;
        width: 100%;
    }

    .banner .swiper-slide {
        width: 100%;

    }

    .arrow_down {
        margin: 0 auto;
    }


    /* section_1 品牌故事*/



    .section_1_house {
        position: relative;
        top: -60px;
        z-index: 9;
        left: -15px;
    }

    .section_1_content {
        padding-left: 40px;
        margin-top: -142px;
        position: relative;
        padding-bottom: 40px;
        z-index: 10;
    }

    @media screen and (max-width: 1280px) {
        .section_1_content {
            margin-top: -113px;
        }
    }

    @media screen and (max-width: 996px) {
        .section_1_content {
            margin-top: -101px;
        }
    }

    @media screen and (max-width: 576px) {
        .section_1_content {
            margin-top: -50px;
        }

        .section_1_house {
            top: -35px;
        }
    }

    .section_1 {
        width: 100%;
    }




    .section_1 .title {
        font-size: 60px;
        line-height: 0.7;
        padding: 57px 0 0 5%;
    }

    @media screen and (max-width: 996px) {
        .section_1 .title {
            font-size: 52px;
        }
    }

    @media screen and (max-width: 768px) {
        .section_1 .title {
            padding: 57px 0 0 0;
        }
    }

    @media screen and (max-width: 576px) {
        .section_1 .title {
            font-size: 43px;
        }
    }

    .section_1 .subtitle {
        font-size: 20px;
        padding-left: 5%;
    }

    @media screen and (max-width: 768px) {
        .section_1 .subtitle {
            padding-left: 0;
        }
    }



    .section_1 h6 {
        line-height: 0.7;
        padding: 20px 0 10px 0px;
        letter-spacing: 5px;
    }

    @media screen and (max-width: 576px) {
        .section_1 h6 {
            letter-spacing: 2px;
        }
    }

    .section_1 p {
        font-size: 35px;
        letter-spacing: 2.5px;
        padding-right: 20%;
    }

    @media screen and (max-width: 1600px) {
        .section_1 p {
            font-size: 30px;
        }
    }

    @media screen and (max-width: 1280px) {
        .section_1 p {
            font-size: 26px;
            padding-right: 10%;
        }
    }

    @media screen and (max-width: 996px) {
        .section_1 p {
            padding-right: 8%;
            font-size: 20px;
        }
    }

    @media screen and (max-width: 768px) {
        .section_1 p {
            padding-right: 0px;
        }
    }



    .story_image img {
        width: 100%;
    }

    @media screen and (max-width: 768px) {
        .story_image img {
            width: 80%;
            padding-top: 10%;
        }
    }

    .scroll_down {
        text-align: center;
    }

    .fa-angle-down {
        font-size: 80px;
        color: white;
    }

    img.section_1_flower {
        width: 30%;
        position: absolute;
        right: 0;
        bottom: 0;
    }

    /* section_2 食用巧思*/
    @media screen and (max-width: 996px) {
        .section_2 .title {
            font-size: 52px;
        }

        @media screen and (max-width: 576px) {
            .section_2 .title {
                font-size: 43px;
            }
        }
    }

    .section_2_contain {
        padding-top: 20px;
        font-size: 60px;
    }

    .section_2_LM {
        padding-top: 10px;
        padding-bottom: 30px;
    }

    .section_2 p {
        /* text-decoration: underline; */
        margin: 0;
    }

    .process_img {
        width: 90%;
    }


    .text_line {
        width: 270px;
        height: 1px;
        background-color: white;
        margin: 0 auto;
        margin-bottom: 30px;

    }

    @media screen and (max-width: 996px) {
        .text_line {
            width: 230px;
        }

        .section_2 .col-sm-5 {
            padding-right: 0px;
        }

        .section_2 .col-7 {
            padding: 0px;
        }

        .section_2 .col-md-9 {
            padding-right: 0px;
        }
    }

    @media screen and (max-width: 767px) {
        .section_2_R_img {
            display: none;
        }
    }

    @media screen and (max-width: 576px) {
        .section_2 .text_line {
            width: 195px;
        }

        .process_img {
            display: none;
        }

        picture {
            display: flex;
            justify-content: center;
        }
    }

    /* section_3 銷售商品(咻咻咻)*/


    .section3 {
        width: 100%;
        height: 40vh;
        display: flex;
        overflow: hidden;
        margin: 42px 0;
    }

    @media (max-width: 881px) {
        .section3 {
            margin-bottom: 0;
        }
    }

    @media (max-width: 768px) {
        .section3 {
            margin-bottom: -80px;
        }
    }

    @media (max-width: 576px) {
        .section3 {
            height: 100vh;
            justify-content: center;
            flex-wrap: wrap;
            align-items: center;
        }
    }

    .section3 .title {
        flex: 5;
        padding-top: 10vh;
        padding-left: 5%;
    }

    @media (max-width: 992px) {
        .section3 .title {
            padding-top: 12vh;
        }
    }

    @media (max-width: 805px) {
        .section3 .title {
            padding-left: 2%;
        }
    }

    @media (max-width: 768px) {
        .section3 .title {
            padding-top: 5vh;
        }
    }

    @media (max-width: 576px) {
        .section3 .title {
            flex: unset;
            width: 100%;
            height: 13%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            padding: 0;

        }
    }

    .section3 .title .title_name,
    .section3 .title {
        margin: 0;
        font-size: 60px;
        letter-spacing: 2px;
    }

    .title_main {
        font-size: 51px;
    }

    @media (max-width: 1345px) {

        .section3 .title .title_name,
        .section3 .title {
            font-size: 55px;
        }

        .title_main {
            font-size: 46px;
        }
    }

    @media (max-width: 1024px) {

        .section3 .title .title_name,
        .section3 .title {
            font-size: 55px;
        }

        .title_main {
            font-size: 46px;
        }
    }

    @media (max-width: 996px) {

        .section3 .title .title_name,
        .section3 .title {
            font-size: 52px;
        }

        .title_main {
            font-size: 40px;
        }
    }

    @media (max-width: 768px) {

        .section3 .title .title_name,
        .section3 .title {
            font-size: 48px;
        }

        .title_main {
            font-size: 36px;
        }
    }

    @media (max-width: 576px) {

        .section3 .title .title_name,
        .section3 .title .title_main {
            width: 100%;
            text-align: center;
            font-size: 43px;

        }
    }

    .section3 .section3_a {
        flex: 4;
        height: 100%;
        position: relative;
    }

    @media (max-width: 1345px) {
        .section3 .section3_a {
            flex: 3;
            height: 80%;
        }
    }

    @media (max-width: 992px) {
        .section3 .section3_a {
            flex: 2;
        }
    }

    @media (max-width: 768px) {
        .section3 .section3_a {
            height: 66%;
        }
    }

    @media (max-width: 576px) {
        .section3 .section3_a {
            flex: unset;
            width: 100%;
            height: 27%;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            align-items: center;
        }

        .section3_1 {
            margin-top: 45px;
        }
    }

    .section3 .section3_a.addcls {
        animation-name: aaa;
        animation-iteration-count: 1;
        animation-fill-mode: forwards;
        animation-duration: 0.5S;
    }

    .section3 .section3_a.addcls_2 {
        animation-name: bbb;
        animation-iteration-count: 1;
        animation-fill-mode: forwards;
        animation-duration: 0.5S;
    }

    @keyframes aaa {
        from {
            transform: translateX(350%);
        }

        to {
            transform: translateX(0%);
        }
    }

    @keyframes bbb {
        from {
            transform: translateX(0%);
        }

        to {
            transform: translateX(350%);
        }
    }

    .section3 .section3_a .section3_1_box,
    .section3 .section3_a .section3_2_box,
    .section3 .section3_a .section3_3_box {
        width: 100%;
        height: 100%;
        transform: skewX(-20deg);
    }

    @media (max-width: 576px) {

        .section3 .section3_a .section3_1_box,
        .section3 .section3_a .section3_2_box,
        .section3 .section3_a .section3_3_box {
            transform: skewX(0deg);
        }
    }

    .section3 .section3_a .section3_1_img,
    .section3 .section3_a .section3_2_img,
    .section3 .section3_a .section3_3_img {
        position: absolute;
        left: -5%;
        top: 15%;
        z-index: 6;
        height: 70%;
        position: absolute;

    }

    .section3_1_img:hover,
    .section3_2_img:hover,
    .section3_3_img:hover {
        transform: scale(1.2, 1.2);
    }

    @media (max-width: 1345px) {

        .section3 .section3_a .section3_1_img,
        .section3 .section3_a .section3_2_img,
        .section3 .section3_a .section3_3_img {
            left: -10%;
            height: 63%;
        }
    }

    @media (max-width: 1024px) {

        .section3 .section3_a .section3_1_img,
        .section3 .section3_a .section3_2_img,
        .section3 .section3_a .section3_3_img {
            left: -10%;
            height: 57%;
            top: 20%;
        }
    }

    @media (max-width: 992px) {

        .section3 .section3_a .section3_1_img,
        .section3 .section3_a .section3_2_img,
        .section3 .section3_a .section3_3_img {
            top: 28%;
            height: 50%;
        }
    }

    @media (max-width: 768px) {

        .section3 .section3_a .section3_1_img,
        .section3 .section3_a .section3_2_img,
        .section3 .section3_a .section3_3_img {
            top: 22%;
            height: 50%;
        }
    }

    @media (max-width: 576px) {

        .section3 .section3_a .section3_1_img,
        .section3 .section3_a .section3_2_img,
        .section3 .section3_a .section3_3_img {
            height: 70%;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
        }
    }

    .section3 .section3_1 {
        animation-delay: 1s;
    }

    .section3 .section3_1 .section3_1_box {
        background-color: #1e2b58;
    }

    .section3 .section3_2 {
        animation-delay: 0.5s;
    }

    .section3 .section3_2 .section3_2_box {
        background-color: #e5202d;
    }

    .section3 .section3_3 {
        background: linear-gradient(90deg, #e5202d01 50%, #333 0%);
    }

    @media (max-width: 576px) {
        .section3 .section3_3 {
            background: unset;
        }
    }

    .section3 .section3_3 .section3_3_box {
        background-color: #333;
    }
</style>

@endsection



@section('content')

<!-- 2.banner -->
<div class="banner">
    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="{{ URL::asset('./img/01-index/01-banner/banner.jpg') }}" alt=""
                    width="100%"></div>
            <div class="swiper-slide"><img src="{{ URL::asset('./img/01-index/01-banner/banner.jpg') }}" alt=""
                    width="100%"></div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>

        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

<!-- 3.main -->
<main>
    <!-- 3-1 品牌故事section_1 -->
    <section class="section_1">
        <img class="section_1_house col-6" src="{{ URL::asset('./img/01-index/02-品牌故事/house.png') }}" alt="">
        <div class="section_1_content bgcolor_b">

            <h2 class="title color_Beige">品牌 故事</h2>
            <h6 class="subtitle color_Beige">司康鬆餅最早起源地是葡萄牙</h6>
            <div class="row">
                <div class="story_image col-11 col-md-4">
                    <img class="section1_top_img" src="{{ URL::asset('./img/02-關於我們/01-品牌故事/01-box.png') }}" alt="">
                </div>
                <div class="col-11 col-md-7 color_w">
                    <p>旅居英國近三十年，將英式傳統下午茶風味引進台灣。堅持以純手工打造的英式下午茶點心。灰色調倫敦天氣，典雅的飲茶文化，講話有讓人羨慕的英式口音的台灣店長熱情待人友善也注重禮儀，特別喜歡與朋友們分享親手烹調的美食、生活大小故事，重視與家人好友聚在一起的時光...
                        <a href="/about">
                            < more>
                        </a>
                    </p>

                </div>
            </div>



            <div class="scroll_down">
                <a href="#section_2">
                    <img class="arrow_down" src="{{ URL::asset('./img/01-index/02-品牌故事/down.png') }}" alt="">
                </a>
            </div>
            <img class="section_1_flower" src="{{ URL::asset('./img/01-index/02-品牌故事/品牌flower-01.png') }}" alt="">



        </div>
    </section>

    <!-- 3-2 食用巧思section_2 -->
    <section id="section_2" class="section_2 bgcolor_dg color_w">
        <div class=" section_2_contain">
            <div class="row">
                <div class="col-9 d-flex section_2_LM">
                    <div class="col-5">
                        <div>
                            <p class="d-flex justify-content-center">食用&nbsp;巧思</p>
                            <div class="text_line"></div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <img width="80%" src="{{ URL::asset('./img/01-index/03-食用巧思/cake.png') }}" alt="">
                        </div>

                    </div>
                    <div class="col-7 d-flex align-items-center">
                        <div class="section_2_M d-flex justify-content-first align-items-end">
                            <img width="90%" src="{{ URL::asset('./img/01-index/03-食用巧思/食用流程.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-end align-items-end">
                    <div class="section_2_R d-flex justify-content-end align-items-end">
                        <img width="110%" src="{{ URL::asset('./img/01-index/03-食用巧思/食用插圖.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3-2 銷售商品section_3 -->
    <div class="section3">
        <div class="title">
            <div class="title_name">銷售 商品</div>
            <div class="title_main">Our&nbsp;Products</div>
        </div>
        <div class="section3_a section3_1">
            <div class="section3_1_box"></div>
            <a href="/products"><img class="section3_1_img" src="./img/01-index/04-銷售商品/01-產品.png" alt=""></a>
        </div>
        <div class="section3_a section3_2">
            <div class="section3_2_box"></div>
            <a href="/products"><img class="section3_2_img" src="./img/01-index/04-銷售商品/02-產品.png" alt=""></a>
        </div>
        <div class="section3_a section3_3">
            <div class="section3_3_box"></div>
            <a href="/products"><img class="section3_3_img" src="./img/01-index/04-銷售商品/03-產品.png" alt=""></a>
        </div>
    </div>

</main>

@endsection

@section('js')
<!-- Initialize Swiper -->
<script>
    //  banner swiper
        var swiper = new Swiper('.swiper-container', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        //section3 xiuxiuxiu

        var alltop = document.querySelector('.section3');
        var mywindow = window;
        var prevScroll = mywindow.pageYOffset;
        var section3_as = document.querySelectorAll('.section3_a');

        function removeAddcls() {
            section3_as.forEach(section3_a => {
                section3_a.classList.remove('addcls');
            });
        }

        function removeAddcls_2() {
            section3_as.forEach(section3_a => {
                section3_a.classList.remove('addcls_2');
            });
        }

        mywindow.addEventListener('scroll', scrollBlock);

        function scrollBlock() {
            var oScroll_1 = document.documentElement.scrollTop;
            var section3_1 = document.querySelector('.section3_1');
            var section3_2 = document.querySelector('.section3_2');
            var section3_3 = document.querySelector('.section3_3');
            var oall = Number(alltop.offsetTop);
            var oallblock = oall - 500;
            if (oScroll_1 > oallblock) {
                var oScroll = mywindow.pageYOffset;
                if (prevScroll > oScroll) {
                    removeAddcls()
                    section3_as.forEach(section3_a => {
                        section3_a.style.transform = 'translateX(0%)';
                    });
                    section3_1.classList.add('addcls_2');
                    section3_2.classList.add('addcls_2');
                    section3_3.classList.add('addcls_2');

                } else {
                    removeAddcls_2()
                    section3_as.forEach(section3_a => {
                        section3_a.style.transform = 'translateX(350%)';
                    });
                    section3_1.classList.add('addcls');
                    section3_2.classList.add('addcls');
                    section3_3.classList.add('addcls');
                }
                prevScroll = oScroll;
            }
        }


</script>
@endsection
