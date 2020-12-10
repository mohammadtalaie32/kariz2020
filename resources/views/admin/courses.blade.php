@extends("layouts.admin")

@section("content")

    @foreach ($courses as $course)
        <div class="container p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
            <h1>{{ $course->name }}</h1>
            <h4> {{ $course->teacher }}</h2>
            <h4> {{ $course->date }}</h2>
            <h4> {{ $course->text }}</h2>
        </div> 

        <br> 
    @endforeach
    

@endsection