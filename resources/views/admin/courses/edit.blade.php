@extends('layouts.admin')
@section('content')
    <fieldset style="border: 2px solid white"></fieldset>
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
        </pre>
    </form>
    <pre>
        <form method="DELETE" action="/admin/courses/delete/{{$course->id}}">
            <input type="submit" value="حذف کردن دوره" class="btn btn-info">
        </form>
    </pre>
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
@endsection
