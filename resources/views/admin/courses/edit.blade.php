@extends('layouts.admin')
@section('content')
    <fieldset style="border: 1px solid white;padding:30px;max-width:100%">
    <form method="POST" action="/admin/courses/update/{{$course->id}}" enctype="multipart/form-data">
        {{csrf_field()}}
      <input type="hidden" name="_method" value="POST">

        <label for="name" style="font-size:200%">نام دوره :</label>
        <br>
        <input type="text" style="font-size:150%;border:2px solid gray;Border-radius:10px;max-width:100%" size="50" name="name" value="{{$course->name}}">
        <br>
        <br>
        <label for="teacher" style="font-size:200%">نام مدرس دوره :</label>
        <br>
        <input type="text" style="font-size:150%;border:2px solid gray;Border-radius:10px;max-width:100%" size="50" name="teacher" value="{{$course->teacher}}">
        <br>
        <br>
        <label for = "date" style="font-size:200%">تاریخ دوره :</label>
        <br>
        <input type="text" style="font-size:150%;border:2px solid gray;Border-radius:10px;max-width:100%" size="50" name="date" value="{{$course->date}}">
        <br>
        <br>
        <label for = "text" style="font-size:200%">توضیحات دوره :</label>
        <br>
        <textarea rows="10"  style="font-size:150%;border:2px solid gray;Border-radius:10px;width:100%" name="text">{{$course->text}}</textarea>
        <br>
        <br>
        <label for="picture" style="font-size:200%">عکس دوره : </label>
        <br>
        <input type  = "file" name="picture" style="color:white" value="{{$course->picture}}">
        <br>
        <br>
        <input type = "submit" value="به روز رسانی دوره" class="btn btn-primary" style="font-size:200%;float:right">
        <br>
    </form>
        <br>
        <br>
        <form method="DELETE" action="/admin/courses/delete/{{$course->id}}">
            {{csrf_field()}}
            <input type="submit" value="حذف کردن دوره" class="btn btn-info" style="font-size:200%;float:right">
        </form>
     <br><br><br><br>
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
