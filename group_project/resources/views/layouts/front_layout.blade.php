<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- swiper's CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
    <!-- icon's CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* backgroundcolor class */
        .bgcolor_r {
            background-color: rgb(229, 35, 45);
            /* 紅色 */
        }

        .bgcolor_Beige {
            background-color: rgb(252, 213, 170);
            /* 米色 */
        }

        .bgcolor_dg {
            background-color: rgb(72, 152, 135);
            /* 深綠色 */
        }

        .bgcolor_lg {
            background-color: rgb(188, 208, 147);
            /* 淺綠色 */
        }

        .bgcolor_b {
            background-color: rgb(30, 43, 88);
            /* 藍色 */
        }

        /* textcolor */
        .color_w {
            color: white;
            /* 白色 */
        }

        .color_r {
            color: rgb(229, 35, 45);
            /* 紅色 */
        }

        .color_Beige {
            color: rgb(252, 213, 170);
            /* 米色 */
        }

        .color_dg {
            color: rgb(72, 152, 135);
            /* 深綠色 */
        }

        .color_lg {
            color: rgb(188, 208, 147);
            /* 淺綠色 */
        }

        .color_b {
            color: rgb(30, 43, 88);
            /* 藍色 */
        }



        * {
            box-sizing: border-box;
            font-family: 微軟正黑體;
        }

        body {
            margin: 0 auto;
            /* line-height: 0; */

        }

        h2 {
            font-size: 45px;
            line-height: 0.7;
            padding-top: 57px;
        }

        @media screen and (min-width: 1281px) {

            nav {
                width: 100%;
                height: 65px;
            }

            .nav-item {
                color: white;
                font-size: 20px;
            }


        }

        /* footer */
        .foot_top {
            height: 14px;
            width: 100%;
        }

        .footer_content {
            padding-top: 50px;
            padding-bottom: 45px;
        }

        .footer_content p {
            font-size: 24px;
            padding-top: 20px;
            letter-spacing: 5px;
            font-weight: bold;
        }
    </style>

    @yield('css')

</head>

<body>

    <!-- 1.nav bar -->
    <nav class="navbar navbar-expand-lg navbar-light  navbar-fixed-top bgcolor_r">
        <div class="container">
            <!-- logo -->
            <a class="navbar-brand " href="/">
                <img class="logo" src="{{ URL::asset('img/01-index/nav-logo with name.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav color_w bgcolor_r">
                    <a class="nav-item nav-link active" href="/about" style="color: white; padding-left: 70px;">關於我們 <span
                            class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link " href="/products" style="color: white;  padding-left: 70px;">產品介紹</a>
                    <a class="nav-item nav-link" href="/news" style="color: white;  padding-left: 70px;">最新消息</a>
                    <a class="nav-item nav-link" href="/contact" style="color: white;  padding-left: 70px;">聯絡我們</a>

                    <a class="nav-item nav-link" href="/cart">
                        <i class="fas fa-shopping-cart">
                            <span id="cartTotalQuantity">{{ \Cart::getTotalQuantity()}}</span>
                        </i>
                    </a>
                </div>
            </div>
        </div>
    </nav>


    @yield('content')
    <!-- 7.footer -->
    <footer>
        <footer class="footer  color_w text-center">
            <div class="foot_top bgcolor_r">
            </div>
            <div class=" footer_container bgcolor_b">
                <div class="footer_content">
                    <p class="">
                        英。司康 IN。SCON
                    </p>
                    <p class=" color_Beige">
                        <small style="
                    font-size: 21px;padding-top: 20px;">地址:台中市西屯區大祥路142號8樓之2 <br>
                            客服專線:0000000000<br></small>
                    </p>
                </div>
            </div>
        </footer>
    </footer>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <!-- swiper's JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>

    <!-- AOS.js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script>
    // // scroll down smooth
    var anchor = document.querySelector('a[href="#section_3"]')
    var target = document.getElementById('section_3')
    anchor.addEventListener('click', function (e) {
        if (window.scrollTo) {
            e.preventDefault()
            window.scrollTo({ 'behavior': 'smooth', 'top': target.offsetTop })
        }
    })

    </script>

    @yield('js')

</body>

</html>
