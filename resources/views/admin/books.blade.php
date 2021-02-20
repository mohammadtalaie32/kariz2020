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
            <a href="/admin/books/create"> <h5>ایجاد کتاب جدید</h5></a>
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




    <!--Section: Block Content-->
    <!--Grid row-->
    <div class="row">
        <!--Grid column-->
        <div class="col-lg-12">
            <!-- Card -->
            <div class="card wish-list mb-3">
                <div class="card-body pt-3">

                    @foreach($books as $book)
                        <div class="row mb-4">
                            <div class="col-md-5 col-lg-3 col-xl-3">
                                <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                    <img style="width 300px;height :150px" class="img-fluid w-100"
                                         src="images/{{$book->picture}}" onerror="this.src='{{asset('images/no-image.png')}}';">
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-9 col-xl-9">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h3 style="color:white" class=mt-2"><a href="/admin/books/{{$book->id}}/edit"> {{$book->name}}</a></h3>


                                        <p class="mb-1 text-muted text-uppercase small">{{$book->price}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                    @endforeach

                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->


@endsection
