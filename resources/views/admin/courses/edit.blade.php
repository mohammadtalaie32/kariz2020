@extends('layouts.admin')
@section('content')
    <fieldset style="border: 1px solid white">
    <form method="POST" action="/admin/courses/update/{{$course->id}}" enctype="multipart/form-data">
        {{csrf_field()}}
      <input type="hidden" name="_method" value="POST">
        <pre>
        <label for="name" style="font-size:200%">نام دوره :</label>
        <input type="text" style="font-size:150%" size="50" name="name" value="{{$course->name}}">

        <label for="teacher" style="font-size:200%">نام مدرس دوره :</label>
        <input type="text" style="font-size:150%" size="50" name="teacher" value="{{$course->teacher}}">

        <label for = "date" style="font-size:200%">تاریخ دوره :</label>
        <input type="text" style="font-size:150%" size="50" name="date" value="{{$course->date}}">

        <label for = "text" style="font-size:200%">توضیحات دوره :</label>
        <textarea rows="10" cols="80" style="font-size:150%" name="text">{{$course->text}}</textarea>

        <label for="picture" style="font-size:200%">عکس دوره : </label>
        <input type  = "file" name="picture" style="color:white" value="{{$course->picture}}">

        <input type = "submit" value="به روز رسانی دوره" class="btn btn-primary" style="font-size:200%;float:right">
        </pre>
    </form>
        <form method="DELETE" action="/admin/courses/delete/{{$course->id}}">
            <input type="submit" value="حذف کردن دوره" class="btn btn-info" style="font-size:200%">
        </form>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </fieldset>
    <hr>
@endsection
