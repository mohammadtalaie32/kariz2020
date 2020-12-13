@extends('layouts.admin')
@section('content')
    <fieldset style="border: 2px solid lightgray ">
    <form method="POST" action="/admin/courses/store" enctype="multipart/form-data">
        {{csrf_field()}}
        <pre>
        <label for="name" style="font-size:200%">نام دوره :</label>
        <input type="text" size="50" name="name" style="font-size:150%">

        <label for="teacher" style="font-size:200% ">نام مدرس دوره :</label>
        <input type="text" size="50" name="teacher" style="font-size:150%">

        <label for = "date" style="font-size:200%">تاریخ دوره :</label>
        <input type="text" size="50" name="date" style="font-size:150%">

        <label for = "text" style="font-size:200%">توضیحات دوره :</label>
        <textarea rows="10" cols="80" name="text" style="font-size:150%"></textarea>

        <label for="picture" style="font-size:200%">عکس دوره : </label>
        <input type  = "file" name="picture" style="color:white" >

        <input type = "submit" value="ایجاد دوره" class="btn btn-primary" style="font-size:200%">
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
