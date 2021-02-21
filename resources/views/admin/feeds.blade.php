@extends("layouts.admin")

@section("content")
    <div>
        <form method = "POST" action="/admin/feeds/searched">
            {{csrf_field()}}
            <input style="margin-right:0px;padding-right:20px;padding-left: 20px" type="text" name="searched_feed" name="browser" placeholder="نام اطلاعیه را جست و جو کنید ..." list="browsers" class="animate">
            <datalist id="browsers">
                @foreach($feeds as $feed)
                    <option>{{$feed->title}}</option>

                @endforeach
            </datalist>
            <input hidden type="submit" value="جستجو" class="btn btn-primary" >
        </form>
    </div><br><br><br>

    <div class="row mb-3">
        <div class="col-md-2 mr-3 pt-3 pb-1" style="text-align:center;background-color:rebeccapurple;color:white;border-radius: 10px">
            <a href="/admin/feeds/create"> <h5>ایجاد اطلاعیه جدید</h5></a>
        </div>


    </div>


    <div class="row">
        <div class="offset-md-1"></div>
        <div class="col-md-12">
            <h5 class="alert alert-dismissible alert-info">برای ویرایش اطلاعیه ها ها روی نام اطلاعیه کلیک کنید!</h5>
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

                    @foreach($feeds as $feed)
                        <div class="row mb-4">
                            <div class="col-md-5 col-lg-3 col-xl-3">
                                <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                    <img style="width 300px;height :150px" class="img-fluid w-100"
                                         src="/images/{{$feed->picture}}" onerror="this.src='{{asset('images/no-image.png')}}';">
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-9 col-xl-9">
                                <div class="d-flex justify-content-between">
                                    <div style="word-wrap:break-word;overflow:hidden">
                                        <h3 style="color:white" class=mt-2"><a href="/admin/feeds/{{$feed->id}}/edit"> {{$feed->title}}</a></h3>


                                        <p class="mb-1 text-muted text-uppercase small text">{{$feed->content}}</p>
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
