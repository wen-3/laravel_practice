@extends('layouts.front_layout')

@section('css')
<style>
    .cus-label{
        width:75px;
    }

    .form-btns{
        display: flex;
        align-items: flex-end;
    }

    .time_btn{
        padding: 3px 20px;
        border: 1px solid black;

    }

    .time_btn.active{
        background-color: black;
        color: white;
    }

    .time_btn:nth-child(2), .time_btn:nth-child(3){
        border-left: none;
    }

    .form-btns {
        display: flex;
        align-items: flex-end;
        margin-bottom: 1rem;
    }

    .section_margin{
        margin: 20px 0px;
    }

    table{
        text-align: center;
    }

    .form_contain{
        margin: 0;
    }

    h1,h3{
        font-weight: bold;
    }

</style>
@endsection

@section('content')
<div class="container">
    <div class="section_margin">

    <h1>填寫訂購資訊</h1>
    <div>
        <table class="table table-bordered bgcolor_b color_Beige">
            <thead>
                <tr>
                    <th scope="col">商品名稱</th>
                    <th scope="col">商品價格</th>
                    <th scope="col">訂購數量</th>
                    <th scope="col">總計</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($content as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->quantity}}</td>
                    <td>{{$item->price * $item->quantity}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div>
        <h3>總計:$ {{$total}}</h3>
    </div>
    <hr>

    <form method="POST" action="/send_check_out">
        @csrf
        <div class="row form_contain">
            <div class="col-12 col-md-8">
                <div class="form-group row">
                    <label for="receive_name" class="col-form-label cus-label">訂購姓名</label>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="receive_name" name="receive_name" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="receive_phone" class="col-form-label cus-label">連絡電話</label>
                    <div class="col-sm">
                        <input type="number" class="form-control" id="receive_phone" name="receive_phone" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="receive_address" class="col-form-label cus-label">收件地址</label>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="receive_address" name="receive_address" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="receive_email" class="col-form-label cus-label">電子郵件</label>
                    <div class="col-sm">
                        <input type="email" class="form-control" id="receive_email" name="receive_email" required>
                    </div>
                </div>

                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label cus-label pt-0">發票方式</legend>
                        <div class="col-sm d-flex">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="receipt" id="receipt1" value="二聯式發票" checked>
                                <label class="form-check-label" for="receipt1">
                                二聯式發票
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="receipt" id="receipt2" value="三聯式發票">
                                <label class="form-check-label" for="receipt2">
                                三聯式發票
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <div class="form-group row">
                    <div class="cus-label">送貨時間</div>
                    <div class="col-sm d-flex">
                        <div class="time_btn active">皆可</div>
                        <div class="time_btn">中午前</div>
                        <div class="time_btn">下午</div>
                    </div>
                    <input class="display-none" type="text" id="time_btn_input" name="time_to_send" value="皆可" hidden>
                </div>

                <div class="form-group row">
                    <label for="remark" class="form-form-label cus-label">備註</label>
                    <div class="col-sm">
                        <textarea class="form-control" name="remark" id="remark" rows="5"></textarea>
                    </div>
                </div>

            </div>

            <div class="col-12 col-md-4 form-btns">
                <div>
                    <a href="/cart" class="btn btn-primary btn-send">
                        <i class="fas fa-chevron-left"></i>
                        確認購買清單
                    </a>
                    <button type="submit" class="btn btn-primary btn-send">送出訂單資料
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>

        </div>
    </form>
</div>
</div>
@endsection

@section('js')
<script>
    $(".time_btn").click(function(){
        $(".time_btn").removeClass('active');
        $(this).addClass('active');
        var time_value = this.textContent;
        $("#time_btn_input").val(time_value);
    });

</script>
@endsection
