@extends("layouts.admin")

@section("content")


    <form method = "POST" action="/admin/books/searched">
        {{csrf_field()}}
        <input  type="text" name="searched_book" placeholder="نام کتاب را جستجو کنید"   name="browser" list="browsers" class="animate">
        <datalist id="browsers">
        @foreach($books as $book)
            <option>{{$book->name}}</option>
            @endforeach
        </datalist>
        <input hidden type="submit" value="جستجو" class="btn btn-primary">
    </form>

<br><br><br>
    <div class="row container mb-3">
        <div class="offset-md-1"></div>
        <div class="col-md-2 pt-3 pb-1" style="text-align:center;background-color:rebeccapurple;color:white;border-radius: 10px">
            <a href="/admin/courses/create"> <h5>ایجاد کتاب جدید</h5></a>
        </div>

        {{--        <div class="col-md-2 mr-3 pt-3 pb-1" style="text-align:center;background-color:rebeccapurple;color:white;border-radius: 10px">--}}
        {{--            <h5>دکمه 2</h5>--}}
        {{--        </div>--}}
    </div>





    <div class="row mb-3">
        <div class="offset-md-1"></div>
        <div class="col-md-10">
            <h5 class="alert alert-dismissible alert-info">برای ویرایش کتاب ها روی نام کتاب کلیک کنید!</h5>
        </div>
    </div>




    </div>

    <?php
        $i = 0;
    ?>
    @if($book_count % 2 == 0)
        @while ($i != $book_count)
            <div class="row container">
                <div class="offset-md-1"></div>
                <div class="col-md-5 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <?php $book = $books[$i] ?>
                    <a href="/admin/books/{{$book->id}}/edit"><h2 style="color:red"> {{ $book->name }} </h2></a>
                    <h4> {{ $book->price}} </h2>
                    <h4> {{ $book->date }} </h2>
                    <h4> {{ $book->text }} </h2>
                        <div style="float:left">
                            <img src="/images/{{$book->picture}}" height="100%" width="100%" alt="NO PHOTO">
                        </div>
                    <?php $i += 1 ?>
                </div>

                <div class="col-md-5 mr-4 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <?php $book = $books[$i] ?>
                    <a href="/admin/books/{{$book->id}}/edit"> <h2 style="color:red"> {{ $book->name }} </h2></a>
                    <h4> {{ $book->price}} </h2>
                    <h4> {{ $book->date }} </h2>
                    <h4> {{ $book->text }} </h2>
                        <div style="float:left">
                            <img src="/images/{{$book->picture}}" height="100%" width="100%" alt="NO PHOTO">
                        </div>
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
                   <a href="/admin/books/{{$book->id}}/edit"> <h2 style="color:red"> {{ $book->name }} </h2></a>
                    <h4> {{ $book->price}} </h2>
                    <h4> {{ $book->date }} </h2>
                    <h4> {{ $book->text }} </h2>
                        <div style="float:left">
                            <img src="/images/{{$book->picture}}" height="100%" width="100%" alt="NO PHOTO">
                        </div>
                    <?php $i += 1 ?>
                </div>
                <div class="col-md-5 mr-4 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <?php $book = $books[$i] ?>
                        <a href="/admin/books/{{$book->id}}/edit"> <h2 style="color:red"> {{ $book->name }} </h2></a>
                    <h4> {{ $book->price}} </h2>
                    <h4> {{ $book->date }} </h2>
                    <h4> {{ $book->text }} </h2>
                        <div style="float:left">
                            <img src="/images/{{$book->picture}}" height="100%" width="100%" alt="NO PHOTO">
                        </div>
                    <?php $i += 1 ?>
                </div>
            </div>
            <br>
        @endwhile
        <div class="row ">
            <div class="offset-md-1"></div>
            <div class="col-md-10 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                <?php $book = $books[$i] ?>
                    <a href="/admin/books/{{$book->id}}/edit"> <h2 style="color:red"> {{ $book->name }} </h2></a>
                <h4> {{ $book->price}} </h2>
                <h4> {{ $book->date }} </h2>
                <h4> {{ $book->text }} </h2>
                    <div style="float:left">
                        <img src="/images/{{$book->picture}}" height="100%" width="100%" alt="NO PHOTO">
                    </div>
                <?php $i += 1 ?>
            </div>
        </div>
    @endif



@endsection
