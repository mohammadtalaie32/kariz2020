@extends('layouts.admin')
@section('content')
    <fieldset style="border: 1px solid white;padding:30px;max-width:100%">
        <form method="POST" action="/admin/feeds/update/{{$feed->id}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="POST">

        <label for="title" style="font-size:200%">عنوان اطلاعیه : </label>
        <br>
        <input type="text" style="font-size:150%;border:2px solid gray;Border-radius:10px;max-width:100%" size="50" name="title" value="{{$feed->title}}" >
        <br>
        <br>
        <label for = "content" style="font-size:200%">توضیحات اطلاعیه :</label>
        <br>
        <textarea rows="10" style="font-size:150%;border:2px solid gray;Border-radius:10px;width:100%" name="content">{{$feed->content}}</textarea>
        <br>
        <br>
        <label for="picture" style="font-size:200%">عکس اطلاعیه : </label>
        <br>
        <input type  = "file" name="picture" style="color:white" value="{{$feed->picture}}">
        <br>
        <br>
        <input type = "submit" value="به روز رسانی اطلاعیه" class="btn btn-primary" style="font-size:200%;float:right">
        <br>
        <br>
        </form>
        <br>
        <form method="DELETE" action="/admin/feeds/delete/{{$feed->id}}">
            {{csrf_field()}}
            <input type="submit" value="حذف کردن اطلاعیه" class="btn btn-info" style="font-size:200%;float:right">
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
