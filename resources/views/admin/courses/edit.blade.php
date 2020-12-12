@extends('layouts.admin')
@section('content')
    <pre>
    <fieldset style="border: 2px solid white">
    <form method="POST" action="/admin/courses/update/{{$course->id}}" enctype="multipart/form-data">
        {{csrf_field()}}
      <input type="hidden" name="_method" value="POST">
        <pre>
        <label for="name">نام دوره :</label>
        <input type="text" size="50" name="name" value="{{$course->name}}">

        <label for="teacher">نام مدرس دوره :</label>
        <input type="text" size="50" name="teacher" value="{{$course->teacher}}">

        <label for = "date">تاریخ دوره :</label>
        <input type="text" size="50" name="date" value="{{$course->date}}">

        <label for = "text">توضیحات دوره :</label>
        <textarea rows="10" cols="100" name="text">{{$course->text}}</textarea>

        <label for="picture">عکس دوره : </label>
        <input type  = "file" name="picture" style="color:white" value="{{$course->picture}}">

        <input type = "submit" value="به روز رسانی دوره" class="btn btn-primary">
        </form>
        <form method="DELETE" action="/admin/courses/delete/{{$course->id}}">
            <input type="submit" value="حذف کردن دوره" class="btn btn-info">
        </form>

        </pre>


    </fieldset>
@endsection
