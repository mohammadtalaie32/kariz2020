@extends('layouts.admin')
@section('content')
    @if(count($searched_feeds) > 0)
        <div>
            <h1 style="text-align:center;color:white">برای ویرایش اطلاعیه ها روی عنوان اطلاعیه کلیک کنید</h1>
        </div>
        <br>
        @foreach($searched_feeds as $searched_feed)
            <div style = "background-color:purple;border: 1px solid black ">
                <img src="/images/{{$searched_feed->picture}}" height="10%" width="10%" alt="NO PHOTO" style="float:left">
                <a href = "/admin/feeds/{{$searched_feed->id}}/edit"><h1 style="color:red"> {{ $searched_feed->title }} </h1></a>
                <h4 style="color:white"> {{ $searched_feed->content }} </h2>



            </div>

        @endforeach
    @else
        <h2 style="color:white">هیچ اطلاعیه ای  با این نام پیدا نشد</h2>
    @endif




@endsection
