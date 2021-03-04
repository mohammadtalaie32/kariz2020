@extends('layouts.admin')
@section('content')
    <fieldset style="border: 1px solid white;padding:30px;max-width:100%">
        <form method="POST" action="/admin/books/update/{{$book->id}}" enctype="multipart/form-data">
            {{csrf_field()}}


        <label for="name" style="font-size:200%">نام کتاب :</label>
         <br>
        <input type="text" style="font-size:150%;border:2px solid gray;Border-radius:10px;max-width:100%" size="50" name="name" value="{{$book->name}}" required>
        <br>
        <br>
        <label for="price" style="font-size:200%">قیمت کتاب : </label>
        <br>
        <input type="text" style="font-size:150%;border:2px solid gray;Border-radius:10px;max-width:100%" size="50" name="price" value="{{$book->price}}" required>
        <br>
        <br>

        <label for="picture" style="font-size:200%">عکس کتاب : </label>
        <br>
        <input type  = "file" name="picture" style="color:white" value="{{$book->picture}}">
        <br>
        <br>
        <input type = "submit" value="به روز رسانی کتاب  " class="btn btn-primary" style="font-size:200%;float:right">
        <br>
        </form>
        <br>
        <br>
        <form method="DELETE" action="/admin/books/delete/{{$book->id}}">
            {{csrf_field()}}
            <input type="submit" value="حذف کردن کتاب " class="btn btn-info" style="font-size:200%;float:right">
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

