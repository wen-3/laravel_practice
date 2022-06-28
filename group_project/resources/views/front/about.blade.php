@extends('layouts.front_layout')

@section('css')
<style>
/* section1 */
            /* 61.94 */
            .section_1 {
                width: 100%;
            }

            .section_1 .container {
                max-width: 1140px;
            }

            .section_1 .row {
                margin-top: -25px;
            }

            .section_1 h2 {
                font-size: 60px;
                font-weight: 500;
                line-height: 0.7;
                padding: 80px 0 0 0px;
            }

            .section_1 h6 {
                font-size: 20px;
                line-height: 0.7;
                padding: 40px 0 0px 0px;
                letter-spacing: 9px;
            }

            .section_1 p {
                font-size: 23px;
                letter-spacing: 2.5px;
                line-height: 2.2;
                padding: 95px 0 0 0;
            }

            .story_image img {
                width: 100%;
                position: relative;
                top: 77px;
            }

            /* section2 */
            .section_2 {
                background-image: url('./img/02-關於我們/01-品牌故事/03-background.jpg');
                background-position: top;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .text {
                margin: 100px 0 0px 0;
            }

            .mask {
                background-color: rgba(0, 0, 0, 0.616);
                padding: 25px;
            }

            .section_2 p {
                font-size: 23px;
                letter-spacing: 2.5px;
                line-height: 2.2;
                padding: 0;
                margin: 0;
            }

            .story_image2 img {
                width: 120%;
            }

            .scroll_down {
                text-align: center;
                padding: 20px 0 80px 0;
            }

            .scroll_down img {
                width: 8%;
            }

            /* section-3 */
            .section_3 {
                overflow: hidden;
                position: relative;

            }

            .content_all {
                margin: 30px 0;

            }

            .section_3_image img {
                width: 100%;
                margin: 50px 0 0 0;
            }

            .section_3 h2 {
                font-size: 60px;
                font-weight: 500;
                line-height: 0.7;
                padding: 80px 0 0 0px;
                margin: 0 0 30px 0;
            }

            .content_left {
                position: relative;

            }

            .content_right {
                position: relative;

            }

            .content_right_text {
                margin: 50px 0 40px 0;
                background-color: white;


            }


            .content_right_text p {
                font-size: 23px;
                letter-spacing: 2.5px;
                line-height: 2.2;
                margin: 0;
                padding: 0 10px;

            }

            .content_left {
                margin: 125px 0 0 0;
                text-align: center;
            }

            .background_image_L {
                position: absolute;
                left: -143px;
                top: 5px;
                z-index: 0;
            }

            .background_image_R {
                position: absolute;
                right: -60px;
                top: 80px;
                z-index: 0;
            }
        }


        @media screen and (max-width: 1280px) {

            /* nav */
            .navbar .container {
                max-width: 820px;
            }

            /* section1 */
            /* 61.94 */

            .section_1 .container {
                max-width: 820px;
            }

            .section_1 h2 {
                font-size: 45px;
                line-height: 0.7;
                padding: 57px 0 0 0px;
            }

            .section_1 h6 {
                font-size: 15px;
                line-height: 0.7;
                padding: 20px 0 10px 0px;
                letter-spacing: 5px;
            }

            .section_1 p {
                font-size: 16px;
                letter-spacing: 2.5px;
                line-height: 2.2;
                padding: 95px 0 0 0;
            }

            .story_image img {
                width: 100%;
                position: relative;
                top: 50px;
            }

            /* section2 */
            .section_2 {
                background-image: url('./img/02-關於我們/01-品牌故事/03-background.jpg');
                background-position: top;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .section_2 .container {
                max-width: 820px;
            }

            .text {
                margin: 60px 0 0px 0;

            }

            .mask {
                background-color: rgba(0, 0, 0, 0.616);
                padding: 25px;

            }

            .section_2 p {
                font-size: 16px;
                letter-spacing: 2.5px;
                line-height: 2.2;
                padding: 0;
                margin: 0;

            }

            .story_image2 img {
                width: 110%;
            }

            .scroll_down {
                text-align: center;
                padding: 20px 0 80px 0;
            }

            .scroll_down img {
                width: 8%;
            }

            /* section-3 */
            .section_3 {
                overflow: hidden;
                position: relative;

            }

            .section_3 .container {
                max-width: 820px;
            }

            .content_all {
                margin: 30px 0;
            }

            .section_3_image img {
                width: 100%;
                margin: 50px 0 0 0;
            }

            .content_right_text {
                margin: 50px 0 40px 0;
                background-color: white;
            }

            .content_right_text p {
                font-size: 16px;
                letter-spacing: 2.5px;
                line-height: 2.2;
                margin: 0;
                padding: 0 10px;
            }

            .content_left {
                margin: 85px 0 0 0;
                text-align: center;
            }

            .background_image_L {
                position: absolute;
                left: -143px;
                top: 5px;
            }

            .background_image_R {
                position: absolute;
                right: -60px;
                top: 80px;
                z-index: 0;
            }
        }

        @media screen and (max-width: 992px) {
            nav {
                height: 85px;
            }

            .nav-link {

                font-weight: bold;
            }
        }

        @media screen and (max-width: 768px) {
            .background_image_L {
                position: absolute;
                left: -142px;
                top: 564px;
            }

            .background_image_R {
                display: none;
            }

        }

        @media screen and (max-width: 575px) {
            .background_image_L {
                position: absolute;
                left: -171px;
                top: 626px;
            }

            .background_image_R {
                display: block;
                position: absolute;
                right: -136px;
                top: 638px;
                z-index: 0;
            }

        }
</style>
@endsection

@section('content')
 <!-- 2.main -->
 <main>
    <!-- 3-1.品牌故事section_1 -->
    <section class="section_1 bgcolor_b">
        <div class="container">
            <h2 class="title color_Beige">品牌 故事</h2>
            <h6 class="color_Beige subtitle">司康鬆餅最早起源地是葡萄牙</h6>
            <div class="row">
                <div class="story_image col-12 col-md-6 col-sm-6">
                    <img class="section1_top_img" src="{{ URL::asset('./img/02-關於我們/01-品牌故事/01-box.png') }}" alt="">
                </div>
                <div class="col-12 col-md-6 col-sm-6 color_w">
                    <p>旅居英國近三十年，將英式傳統下午茶風味引進台灣。堅持以純手工打造的英式下午茶點心。灰色調倫敦天氣，典雅的飲茶文化，講話有讓人羨慕的英式口音的台灣店長熱情待人友善也注重禮儀，特別喜歡與朋友們分享親手烹調的美食、生活大小故事，重視與家人好友聚在一起的時光。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3-2.品牌故事section_2 -->
    <section class="section_2">
        <div class="container">
            <div class="section_2_content row">
                <div class="text col-xl-8 col-md-8 col-sm-8">
                    <div class="mask color_w">
                        <p>懂得生活，就從體驗花園裡喝下午茶的閒情雅趣開始~~
                            聞名世界的小說、歌劇，街頭藝人表演到處蘊含著藝術，就想坐靜靜下來閱讀一本自己愛的書；在野餐巾上，一壺熱茶加上道地司康（scone），暖暖的香味和扎實的口感，更不可缺少她的好partner英國德文郡製造的濃郁毫不油膩奶油醬（clotted
                            cream)，平凡滿足的幸福~~貴族的生活往往就是這麼樸實無華且優雅。
                        </p>
                        <p> 英司康(Inscone) since 2013.</p >
                        <p>目前以司康（scone）﹑德文郡奶油（clotted cream）為主要明星產品。兼營英國骨董瓷器。</p>
                    </div>
                </div>
                <div class="story_image2 col-xl-4 col-md-4 col-sm-4 col-8">
                    <img src="{{ URL::asset('./img/02-關於我們/01-品牌故事/02-cake.png') }}" alt="">
                </div>
            </div>
            <div class="scroll_down">
                <a href="#section_3"> <img class="arrow_down" src="{{ URL::asset('./img/01-index/02-品牌故事/down.png') }}" alt=""></a>
            </div>
        </div>
    </section>
    <!-- 4.關於司康section_3 -->
    <section id="section_3" class="section_3">
        <div class="background_image_L"><img src="{{ URL::asset('./img/02-關於我們/02-關於司康/03-flower-L.png') }}" alt=""></div>
        <div class="background_image_R"><img src="{{ URL::asset('./img/02-關於我們/02-關於司康/04-flower-R.png') }}" alt=""></div>
        <div class="container">
            <div class="content_all row">
                <div class="content_left col-xl-5 col-md-6 col-sm-5">
                    <div class="title">
                        <h2>關於 司康</h2>
                    </div>
                    <div class="section_3_image">
                        <img src="./img/02-關於我們/02-關於司康/02-插圖.jpg" alt="">
                    </div>
                </div>
                <div class="content_right col-xl-7 col-md-6 col-sm-7">
                    <div class="content_right_text">
                        <p>司康又稱英國茶餅、英國鬆餅，是蘇格蘭人的快速麵包，「Skone」這個字的起源，有人說它來自荷蘭文「schoonbrot」，美麗的麵包，另外有些人認為它來蘇格蘭國王被加冕的皇冠上的命運之石。
                        </p>
                        <p>司康由小麥、大麥或麥片製成，是英式下午茶常見的點心，歐洲人形容司康是下午茶的主角，司康的好壞即可決定該茶館的等級。司康的口味多元，可以做成甜的口味，也可以做成鹹的口味，除了可以當作早餐之外，也可以當成點心，食用時常搭配果醬或奶油。口感外層酥脆，內層濕潤鬆軟，搭配濃郁的伯爵茶香，迷人的口感讓你愛不釋手。
                        </p>
                        <p>司康又稱英國茶餅、英國鬆餅，是蘇格蘭人的快速麵包，「Skone」這個字的起源，有人說它來自荷蘭文「schoonbrot」，美麗的麵包，另外有些人認為它來蘇格蘭國王被加冕的皇冠上的命運之石。
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>
</main>
@endsection

@section('js')
@endsection
