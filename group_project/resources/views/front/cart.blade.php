@extends('layouts.front_layout')

@section('css')
<style>

    .section_margin{
        margin: 20px 0px;
    }

    h1,h3{
        font-weight: bold;
    }

    table{
        text-align: center;
    }

</style>

@endsection

@section('content')
<div class="container">
    <div class="section_margin">
        <h1>訂購確認</h1>
        <div>
            <table class="table bgcolor_b color_Beige">
                <thead>
                    <tr>
                        <th scope="col">商品名稱</th>
                        <th scope="col">商品價格</th>
                        <th scope="col">訂購數量</th>
                        <th scope="col">總計</th>
                        <th scope="col">刪除商品</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($content as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->price}}</td>
                        <td><input type="text" value="{{$item->quantity}}" class="product_qty"
                                data-productid="{{$item->id}}"></td>
                        <td>{{$item->price * $item->quantity}}</td>
                        <td><button class="btn btn-danger btn-sm delete_product" data-productid="{{$item->id}}">X</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <div>
            <h3>總金額:$ {{$total}}</h3>
        </div>

        <div class="check_out d-flex justify-content-end">
            <a class="text-center btn btn-success" href="cart_check_out">確定結帳</a>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(".delete_product").on('click', function() {
        var product_id = this.getAttribute("data-productid");

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: 'POST',
            url: '/deleteProductInCart',
            data: {
                product_id:product_id,
            },
            success: function (res) {
                document.location.reload(true);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error(textStatus + " " + errorThrown);
            }
        });
    });

    $('.product_qty').on('change', function() {
        // console.log("onchangeValue:",this.value);
        // console.log("onchangeProductID:",this.getAttribute("data-productid"));
        var new_qty = this.value;
        var product_id = this.getAttribute("data-productid");

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: 'POST',
            url: '/changeProductQty',
            data: {
                product_id:product_id,
                new_qty:new_qty
            },
            success: function (res) {
                document.location.reload(true);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error(textStatus + " " + errorThrown);
            }
        });
    });
</script>
@endsection
