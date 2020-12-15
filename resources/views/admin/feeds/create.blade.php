@extends('layouts.admin')
@section('content')
    <fieldset style="border: 2px solid lightgray ">
        <form method="POST" action="/admin/feeds/store" enctype="multipart/form-data">
            {{csrf_field()}}
            <pre>
        <label for="title" style="font-size:200%">عنوان اطلاعیه : </label>
        <input type="text" size="50" name="title" style="font-size:150%">

        <label for="content" style="font-size:200% ">توضیحات اطلاعیه : </label>
        <textarea type="text" rows="10" cols="60" name="content" style="font-size:150%"></textarea>




        <label for="picture" style="font-size:200%">عکس اطلاعیه : </label>
        <input type  = "file" name="picture" style="color:white" >

        <input type = "submit" value="ایجاد اطلاعیه" class="btn btn-primary" style="font-size:200%">
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
