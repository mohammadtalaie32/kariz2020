@extends('layouts.admin')
@section('content')
    <fieldset style="border: 2px solid lightgray;padding:30px;max-width:100%;">
        <form method="POST" action="/admin/books/store" enctype="multipart/form-data">
            {{csrf_field()}}
        <label for="name" style="font-size:200%"> نام کتاب : </label>
        <br>
        <input type="text" size="50" name="name" style="font-size:150%;border:2px solid gray;border-radius:10px;max-width:100%" required>
        <br>
        <br>
        <label for="price" style="font-size:200% ">قیمت کتاب : </label>
        <br>
        <input type="text" size="50" name="price" style="font-size:150%;border:2px solid gray;border-radius: 10px;max-width:100%" required>
        <br>
        <br>
        <label for="picture" style="font-size:200%">عکس کتاب : </label>
        <br>
        <input type  = "file" name="picture" style="color:white" >
        <br>
        <br>
        <input type = "submit" value="ایجاد کتاب  " class="btn btn-primary" style="font-size:200%;max-width:100%">
        <br>
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



@endsection

