@extends("layouts.admin")

@section("content")
    <div class="row container">
        <div class="col-md-2 pt-3 pb-1" style="text-align:center;background-color:rebeccapurple;color:white;border-radius: 10px">
            <h5>دکمه 1</h5>
        </div> 
        
        <div class="col-md-2 mr-3 pt-3 pb-1" style="text-align:center;background-color:rebeccapurple;color:white;border-radius: 10px">
            <h5>دکمه 2</h5>
        </div> 
    </div>

    <br>
    @foreach ($courses as $course)
        <?php $i = 0 ?>
        @if(($i % 2) == 0)
            <div class="row container">
                <div class="col-md-12 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <h1> {{ $course->name }} </h1>
                    <h4> {{ $course->teacher }} </h2>
                    <h4> {{ $course->date }} </h2>
                    <h4> {{ $course->text }} </h2>
                </div> 
            </div>
        @endif
        


        <br> 
    
    @endforeach
    

@endsection