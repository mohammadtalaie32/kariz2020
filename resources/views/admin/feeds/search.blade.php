@extends('layouts.admin')
@section('content')
    @if(count($searched_feeds) > 0)
        <div>
            <h1 style="text-align:center;color:white">برای ویرایش اطلاعیه ها روی عنوان اطلاعیه کلیک کنید</h1>
        </div>
        <br>
        @foreach($searched_feeds as $searched_feed)
            <div style = "background-color:rebeccapurple;border: 1px solid black ;Border-radius:10px;padding:50px">
                <img src="/images/{{$searched_feed->picture}}" height="10%" width="10%" alt="NO PHOTO" style="float:left">
                <a href = "/admin/feeds/{{$searched_feed->id}}/edit"><h1 style="color:red"> {{ $searched_feed->title }} </h1></a>
                <?php
                $string =  $searched_feed->content;
                $len = strlen($string);
                $string = substr($string,0,(intdiv($len,3)));

                ?>
                <p style="color:white;word-wrap:break-word"> {{ $string}}... </p>



            </div>

        @endforeach
    @else
        <h2 style="color:white">هیچ اطلاعیه ای  با این نام پیدا نشد</h2>
    @endif




@endsection
