@extends('layouts.admin')
@section('content')
@if(count($searched_courses) > 0)
    <div>
        <h1 style="text-align:center;color:white">برای ویرایش دوره ها روی نام دوره کلیک کنید</h1>
    </div>
    <br>
    @foreach($searched_courses as $searched_course)
        <div style = "background-color:purple;border: 1px solid black ">
            <img src="/images/{{$searched_course->picture}}" height="10%" width="10%" alt="NO PHOTO" style="float:left">
            <a href = "/admin/courses/{{$searched_course->id}}/edit"><h1 style="color:red"> {{ $searched_course->name }} </h1></a>
            <h4 style="color:white"> {{ $searched_course->teacher }} </h2>
            <h4 style="color: white"> {{ $searched_course->date }} </h2>
                <h4 style="color: white"> {{ $searched_course->text }} </h2>


    </div>

    @endforeach
@else
    <h2 style="color:white">هیچ دوره ای پیدا با این نام پیدا نشد</h2>
@endif




@endsection
