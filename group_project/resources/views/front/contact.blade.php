@extends('layouts.front_layout')

@section('css')
<style>
    /* 聯絡我們頁面 */
    .contact .title {
        text-align: center;

    }

    .contact h2 {
        font-size: 60px;
        padding: 80px;
    }

    .contact_input {
        text-align: center;
    }

    .col-form-label {
        color: white;
        font-size: 35px;
    }

    .contact_content {
        letter-spacing: 9px;
    }

    .contact_image {
        float: right;
        padding: 30px 0;
    }

    .contact_image img {
        width: 70%;
    }

    .send {
        padding: 30px 0 80px 170px;
        margin: 0;
    }
</style>
@endsection

@section('content')
<main>
    <section id="contact" class="contact bgcolor_b">
        <div class="contact_image">
            <img src="{{ URL::asset('./img/05-聯絡我們/flower.png') }}" alt="">
        </div>
        <div class="container">
            <div class="title color_w">
                <h2>聯絡 我們</h2>
            </div>
            <div class="contact_form">
                <form class="message_form" method="POST" action="/contact/form">
                        {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="contact_name" class="col-sm-3 col-form-label">聯絡人姓名:</label>
                        <div class="col-sm-8 d-flex align-items-center">
                            <input type="text" class="form-control" id="contact_name" placeholder="Name" name="contact_name"
                                Required="Required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contact_phone" class="col-sm-3 col-form-label">聯絡人電話:</label>
                        <div class="col-sm-8 d-flex align-items-center">
                            <input type="text" class="form-control" id="contact_phone" placeholder="Phone"  name="contact_phone"
                                Required="Required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contact_email" class="col-sm-3 col-form-label">聯絡人信箱:</label>
                        <div class="col-sm-8 d-flex align-items-center">
                            <input type="email" class="form-control" id="contact_email" placeholder="Email"  name="contact_email"
                                Required="Required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="message_content"
                            class="col-sm-3 col-form-label contact_content">留言內容:</label>
                        <div class="col-sm-8 d-flex align-items-center "> <textarea class="form-control"
                                id="message_content" rows="10" placeholder="請輸入文字"  name="message_content"
                                Required="Required"></textarea>
                        </div>

                    </div>
                    <div class="form-group row justify-content-end send">
                        <div class="col-sm-3">
                            <button type="submit" class="btn btn-danger btn-lg addmessage">送 出</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>
</main>

@endsection


@section('js')

<script>
    // $('.addmessage').click(function(){
        // var contact_name = $('#contact_name').val;
        // var contact_phone = $('#contact_phone').val;
        // var contact_email = $('#contact_email').val;
        // var message_content = $('#message_content').val;
    //     var contact_name = $(this).parent('.col-sm-3').parent('.send').parent('.message_form').find('#contact_name').val;
    //     console.log(contact_name);
    //     var contact_phone = $(this).parent('.col-sm-3').parent('.send').parent('.message_form').find('#contact_phone').val;
    //     var contact_email =$(this).parent('.col-sm-3').parent('.send').parent('.message_form').find('#contact_email').val;
    //     var message_content = $(this).parent('.col-sm-3').parent('.send').parent('.message_form').find('#message_content').val;

    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });

    //     $.ajax({
    //         method: 'POST',
    //         url: '/contact/form',
    //         data: {
    //             contact_name:contact_name,
    //             contact_phone:contact_phone,
    //             contact_email:contact_email,
    //             message_content:message_content
    //         },
    //         success: function () {
    //             alert("發送成功");
    //         },
    //         error: function () {
    //             alert("發送失敗");
    //         }
    //     });
    // });
</script>
@endsection
