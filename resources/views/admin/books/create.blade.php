@extends('layouts.admin')
@section('content')
    <fieldset style="border: 2px solid lightgray ">
        <form method="POST" action="/admin/books/store" enctype="multipart/form-data">
            {{csrf_field()}}
            <pre>
        <label for="name" style="font-size:200%"> نام کتاب : </label>
        <input type="text" size="50" name="name" style="font-size:150%">

        <label for="price" style="font-size:200% ">قیمت کتاب : </label>
        <input type="text" size="50" name="price" style="font-size:150%">

        <label for="picture" style="font-size:200%">عکس کتاب : </label>
        <input type  = "file" name="picture" style="color:white" >

        <input type = "submit" value="ایجاد کتاب  " class="btn btn-primary" style="font-size:200%">
        </pre>
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

