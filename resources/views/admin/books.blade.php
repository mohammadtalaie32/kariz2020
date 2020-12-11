@extends("layouts.admin")

@section("content")
    <div class="row container mb-3">
        <div class="offset-md-1"></div>
        <div class="col-md-2 pt-3 pb-1" style="text-align:center;background-color:rebeccapurple;color:white;border-radius: 10px">
            <h5>دکمه 1</h5>
        </div> 
        
        <div class="col-md-2 mr-3 pt-3 pb-1" style="text-align:center;background-color:rebeccapurple;color:white;border-radius: 10px">
            <h5>دکمه 2</h5>
        </div> 
    </div>
    <br>
    <?php 
        $i = 0;
    ?>
    @if($book_count % 2 == 0)
        @while ($i != $book_count)
            <div class="row container">
                <div class="offset-md-1"></div>
                <div class="col-md-5 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <?php $book = $books[$i] ?>
                    <h2> {{ $book->name }} </h2>
                    <h4> {{ $book->price}} </h2>
                    <h4> {{ $book->date }} </h2>
                    <h4> {{ $book->text }} </h2>
                    <?php $i += 1 ?>
                </div> 
            
                <div class="col-md-5 mr-4 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <?php $book = $books[$i] ?>
                    <h2> {{ $book->name }} </h2>
                    <h4> {{ $book->price}} </h2>
                    <h4> {{ $book->date }} </h2>
                    <h4> {{ $book->text }} </h2>
                    <?php $i += 1 ?>
                </div> 
            </div>
            <BR>
            
                
        @endwhile
    @else
        @while($i != $book_count - 1)
            <div class="row container">
                <div class="offset-md-1"></div>
                <div class="col-md-5 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <?php $book = $books[$i] ?>
                    <h2> {{ $book->name }} </h2>
                    <h4> {{ $book->price}} </h2>
                    <h4> {{ $book->date }} </h2>
                    <h4> {{ $book->text }} </h2>
                    <?php $i += 1 ?>
                </div> 
                <div class="col-md-5 mr-4 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <?php $book = $books[$i] ?>
                    <h2> {{ $book->name }} </h2>
                    <h4> {{ $book->price}} </h2>
                    <h4> {{ $book->date }} </h2>
                    <h4> {{ $book->text }} </h2>
                    <?php $i += 1 ?>
                </div> 
            </div>
            <br>
        @endwhile
        <div class="row ">
            <div class="offset-md-1"></div>
            <div class="col-md-10 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                <?php $book = $books[$i] ?>
                <h2> {{ $book->name }} </h2>
                <h4> {{ $book->price}} </h2>
                <h4> {{ $book->date }} </h2>
                <h4> {{ $book->text }} </h2>
                <?php $i += 1 ?>
            </div> 
        </div>
    @endif
    
    

@endsection