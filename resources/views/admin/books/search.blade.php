@extends('layouts.admin')
@section('content')
    @if(count($searched_books) > 0)
        <div>
            <h1 style="text-align:center;color:white">برای ویرایش کتاب ها روی نام کتاب کلیک کنید</h1>
        </div>
        <br>
        @foreach($searched_books as $searched_book)
            <div style = "background-color:purple;border: 1px solid black ">
                <img src="/images/{{$searched_book->picture}}" height="10%" width="10%" alt="NO PHOTO" style="float:left">
                <a href = "/admin/books/{{$searched_book->id}}/edit"><h1 style="color:red"> {{ $searched_book->name }} </h1></a>
                <h4 style="color:white"> {{ $searched_book->price }} </h2>



            </div>

        @endforeach
    @else
        <h2 style="color:white">هیچ کتابی  پیدا با این نام پیدا نشد</h2>
    @endif




@endsection
