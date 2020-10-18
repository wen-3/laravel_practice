@extends('layouts.front_layout')

@section('css')
    <style>
        .news_detail{
            width: 80%;
            margin: 0 auto;
        }

        .news_detail h1{
            margin: 20px 0px;
        }
    </style>
@endsection

@section('content')
    <div class="news_detail">
        <h1>{{$new->title}}</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni vitae unde itaque consequatur perspiciatis rem in assumenda repellendus, reiciendis, voluptas modi repellat laudantium nulla. Rem nobis magnam modi dolorum at.
        Voluptatibus fugit sit saepe. Quam sed eveniet, natus saepe autem veritatis architecto! Sint non magni laborum laudantium odio sed debitis eveniet ipsam? Modi sit omnis molestiae quis, error ipsum magni!
        Enim, recusandae id veritatis rerum necessitatibus mollitia ut vitae beatae laboriosam iure. Eius amet totam ab perspiciatis eum. Nam quas laboriosam, ea ullam sapiente quod tempora! Harum autem rem voluptatum!
        Eius laboriosam officia, sunt quos distinctio similique vero voluptas optio, facilis voluptates unde adipisci natus temporibus earum necessitatibus. Ut, maiores sequi quos quibusdam nisi doloribus officia atque dicta non nobis.
        Natus obcaecati corporis harum quis similique, consectetur, sunt distinctio perferendis odio et dignissimos autem ab. Reprehenderit saepe, accusantium itaque natus velit laborum quidem, repellat officia odit corrupti vel, dolores aliquid.
        Quia, ratione. Amet voluptatum, dolor inventore et ipsam quae accusantium, a deleniti fuga non asperiores consequuntur quia quas exercitationem illum ea optio ratione ab impedit corporis sint quo odit labore.
        Quos dolorem id vitae aspernatur deserunt facilis veritatis, sed repellat. Velit sunt neque, alias inventore quod harum, at quos aliquid quas aut, quibusdam fuga soluta praesentium impedit quisquam ab libero.
        Quidem laborum quisquam dignissimos qui magni delectus inventore possimus tempora, itaque nisi, quaerat id eius, magnam illo ducimus ea culpa eos iste non? Earum doloribus aliquam quia distinctio architecto iusto.</p>
    </div>
@endsection


@section('js')
@endsection
