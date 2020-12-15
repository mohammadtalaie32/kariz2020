@extends('layouts.admin')
@section('content')
    <fieldset style="border: 1px solid white">
        <form method="POST" action="/admin/books/update/{{$book->id}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="POST">
            <pre>
        <label for="name" style="font-size:200%">نام کتاب :</label>
        <input type="text" style="font-size:150%" size="50" name="name" value="{{$book->name}}">

        <label for="price" style="font-size:200%">قیمت کتاب : </label>
        <input type="text" style="font-size:150%" size="50" name="price" value="{{$book->price}}">



        <label for="picture" style="font-size:200%">عکس کتاب : </label>
        <input type  = "file" name="picture" style="color:white" value="{{$book->picture}}">

        <input type = "submit" value="به روز رسانی کتاب  " class="btn btn-primary" style="font-size:200%;float:right">
        </pre>
        </form>
        <form method="DELETE" action="/admin/books/delete/{{$book->id}}">
            <input type="submit" value="حذف کردن کتاب " class="btn btn-info" style="font-size:200%">
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

