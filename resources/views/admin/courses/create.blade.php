@extends('layouts.admin')
@section('content')
    <fieldset style="border: 2px solid lightgray ">
    <form method="POST" action="/admin/courses/store" enctype="multipart/form-data">
        {{csrf_field()}}
        <pre>
        <label for="name">نام دوره :</label>
        <input type="text" size="50" name="name">

        <label for="teacher">نام مدرس دوره :</label>
        <input type="text" size="50" name="teacher">

        <label for = "date">تاریخ دوره :</label>
        <input type="text" size="50" name="date">

        <label for = "text">توضیحات دوره :</label>
        <textarea rows="10" cols="100" name="text"></textarea>

        <label for="picture">عکس دوره : </label>
        <input type  = "file" name="picture" style="color:white" >

        <input type = "submit" value="ایجاد دوره" class="btn btn-primary">
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
