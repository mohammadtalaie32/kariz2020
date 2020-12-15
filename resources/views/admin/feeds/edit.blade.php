@extends('layouts.admin')
@section('content')
    <fieldset style="border: 1px solid white">
        <form method="POST" action="/admin/feeds/update/{{$feed->id}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="POST">
            <pre>
        <label for="title" style="font-size:200%">عنوان اطلاعیه : </label>
        <input type="text" style="font-size:150%" size="50" name="title" value="{{$feed->title}}">

        <label for = "content" style="font-size:200%">توضیحات اطلاعیه :</label>
        <textarea rows="10" cols="80" style="font-size:150%" name="content">{{$feed->content}}</textarea>

        <label for="picture" style="font-size:200%">عکس اطلاعیه : </label>
        <input type  = "file" name="picture" style="color:white" value="{{$feed->picture}}">

        <input type = "submit" value="به روز رسانی اطلاعیه" class="btn btn-primary" style="font-size:200%;float:right">
        </pre>
        </form>
        <form method="DELETE" action="/admin/feeds/delete/{{$feed->id}}">
            <input type="submit" value="حذف کردن اطلاعیه" class="btn btn-info" style="font-size:200%">
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
