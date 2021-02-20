@extends('layouts.admin')
@section('content')
@if(count($searched_courses) > 0)
    <div>
        <h1 style="text-align:center;color:white">برای ویرایش دوره ها روی نام دوره کلیک کنید</h1>
    </div>
    <br>
    @foreach($searched_courses as $searched_course)
        <div style = "background-color:rebeccapurple;border: 1px solid black;Border-radius:10px;padding:50px;max-width:100%">
            <img src="/images/{{$searched_course->picture}}" height="10%" width="10%" alt="NO PHOTO" style="float:left">
            <a href = "/admin/courses/{{$searched_course->id}}/edit"><h1 style="color:red;word-wrap:break-word"> {{ $searched_course->name }} </h1></a>
            <h2 style="color:white;word-wrap:break-word"> {{ $searched_course->teacher }} </h2>
            <h2 style="color: white;word-wrap:break-word"> {{ $searched_course->date }} </h2>

                <p style="color:white;word-wrap:break-word;" class="text"> {{ $searched_course->text}}... </p>


    </div>

    @endforeach
@else
    <h2 style="color:white">هیچ دوره ای یا مدرسی با این نام پیدا نشد</h2>
@endif




@endsection
