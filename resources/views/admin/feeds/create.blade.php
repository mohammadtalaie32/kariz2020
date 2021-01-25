@extends('layouts.admin')
@section('content')
    <fieldset style="border: 2px solid lightgray;padding:30px;max-width:100%">
        <form method="POST" action="/admin/feeds/store" enctype="multipart/form-data">
            {{csrf_field()}}

        <label for="title" style="font-size:200%">عنوان اطلاعیه : </label>
        <br>
        <input type="text" size="50" name="title" style="font-size:150%;border:2px solid gray;Border-radius:10px;max-width:100%">
        <br>
        <br>
        <label for="content" style="font-size:200% ">توضیحات اطلاعیه : </label>
        <br>
        <textarea type="text" rows="10"  name="content" style="font-size:150%;border:2px solid gray;Border-radius:10px;width:100%"></textarea>
        <br>
        <br>


        <label for="picture" style="font-size:200%">عکس اطلاعیه : </label>
        <br>
        <input type  = "file" name="picture" style="color:white" >
        <br>
        <br>
        <input type = "submit" value="ایجاد اطلاعیه" class="btn btn-primary" style="font-size:200%">
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
