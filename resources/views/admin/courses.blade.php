@extends("layouts.admin")

@section("content")





        <div class="row ">
            <form method = "POST" action="/admin/courses/searched">
                {{csrf_field()}}
                <input style="border:none;" type="text" name="searched_course" name="browser" placeholder="نام دوره یا مدرس را جست و جو کنید" list="browsers" class="animate w-100 mr-3">
                <datalist id="browsers">
                    @foreach($courses as $course)
                        <option>{{$course->name}}</option>
                        <option>{{$course->teacher}}</option>
                    @endforeach
                </datalist>
                <input hidden type="submit" value="جستجو" class="btn btn-primary" >
            </form>
        </div>

        <div class="row mb-3">
            <div class="col-md-2 mr-3 pt-3 pb-1" style="text-align:center;background-color:rebeccapurple;color:white;border-radius: 10px">
                <a href="/admin/courses/create"> <h5>ایجاد دوره جدید</h5></a>
            </div>

            <div class="col-md-2 mr-3 pt-3 pb-1" style="text-align:center;background-color:rebeccapurple;color:white;border-radius: 10px">
                <h5>دکمه 2</h5>
            </div>
        </div>


        <div class="row">
            <div class="offset-md-1"></div>
            <div class="col-md-12">
                <h5 class="alert alert-dismissible alert-info">برای ویرایش دوره ها روی نام دوره کلیک کنید!</h5>
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

                        @foreach($courses as $course)
                            <div class="row mb-4">
                                <div class="col-md-5 col-lg-3 col-xl-3">
                                    <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                        <img style="width 300px;height :150px" class="img-fluid w-100"
                                             src="images/{{$course->picture}}" onerror="this.src='{{asset('images/no-image.png')}}';">
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-9 col-xl-9">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h3 style="color:white" class=mt-2"><a href="/admin/courses/{{$course->id}}/edit">{{$course->name}}</a></h3>
                                            <p class="mb-1 text-muted text-uppercase small">{{$course->teacher}}</p>
                                            <p class="mb-1 text-muted text-uppercase small">{{$course->date}}</p>
                                            <p class="mb-1 text-muted text-uppercase small">{{ \Illuminate\Support\Str::limit($course->text, 100, ' ...')}}</div>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                        @endforeach

            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->




{{--    <!-- -->--}}
{{--    <br>--}}

{{--            <form method = "POST" action="/admin/courses/searched">--}}
{{--                {{csrf_field()}}--}}
{{--                <input style="border:none;" type="text" name="searched_course" name="browser" placeholder="نام دوره یا مدرس را جست و جو کنید" list="browsers" class="animate offset-md-2">--}}
{{--                <datalist id="browsers">--}}
{{--                    @foreach($courses as $course)--}}
{{--                        <option>{{$course->name}}</option>--}}
{{--                        <option>{{$course->teacher}}</option>--}}
{{--                    @endforeach--}}
{{--                </datalist>--}}
{{--                <input hidden type="submit" value="جستجو" class="btn btn-primary" >--}}
{{--            </form><br><br>--}}
{{--            <div class="row container mb-3">--}}
{{--                <div class="offset-md-1"></div>--}}
{{--                <div class="col-md-2 pt-3 pb-1" style="text-align:center;background-color:rebeccapurple;color:white;border-radius: 10px">--}}
{{--                    <a href="/admin/courses/create"> <h5>ایجاد دوره جدید</h5></a>--}}
{{--                </div>--}}

{{--                --}}{{--        <div class="col-md-2 mr-3 pt-3 pb-1" style="text-align:center;background-color:rebeccapurple;color:white;border-radius: 10px">--}}
{{--                --}}{{--            <h5>دکمه 2</h5>--}}
{{--                --}}{{--        </div>--}}
{{--            </div>--}}



{{--    <div class="row mb-3">--}}
{{--        <div class="offset-md-1"></div>--}}
{{--        <div class="col-md-10">--}}
{{--            <h5 class="alert alert-dismissible alert-info">برای ویرایش دوره ها روی نام دوره کلیک کنید!</h5>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <?php--}}
{{--        $i = 0;--}}
{{--    ?>--}}
{{--    @if($course_count % 2 == 0)--}}
{{--        @while ($i != $course_count)--}}
{{--            <div class="row container">--}}
{{--                <div class="offset-md-1"></div>--}}
{{--                <div class="col-md-5 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">--}}
{{--                    <?php $course = $courses[$i] ?>--}}
{{--                    <a href = "/admin/courses/{{$course->id}}/edit"><h1 style="color:red"> {{ $course->name }} </h1></a>--}}
{{--                    <h4> {{ $course->teacher }} </h2>--}}
{{--                    <h4> {{ $course->date }} </h2>--}}

{{--                    <p style="word-wrap:break-word" class="text"> {{ $course->text }}... <p>--}}
{{--                        <div style="float:left">--}}
{{--                            <img src="/images/{{$course->picture}}" height="100%" width="100%" alt="NO PHOTO">--}}
{{--                        </div>--}}
{{--                    <?php $i += 1 ?>--}}
{{--                </div>--}}

{{--                <div class="col-md-5 mr-4 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">--}}
{{--                    <?php $course = $courses[$i] ?>--}}
{{--                    <a href="/admin/courses/{{$course->id}}/edit"> <h1 style="color:red"> {{ $course->name }} </h1></a>--}}
{{--                    <h4> {{ $course->teacher }} </h2>--}}
{{--                    <h4> {{ $course->date }} </h2>--}}

{{--                        <p style="word-wrap:break-word" class="text"> {{ $course->text }}... </p>--}}
{{--                        <div style="float:left">--}}
{{--                            <img src="/images/{{$course->picture}}" height="100%" width="100%" alt="NO PHOTO">--}}
{{--                        </div>--}}
{{--                    <?php $i += 1 ?>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <BR>--}}


{{--        @endwhile--}}
{{--    @else--}}
{{--        @while($i != $course_count - 1)--}}
{{--            <div class="row container">--}}
{{--                <div class="offset-md-1"></div>--}}
{{--                <div class="col-md-5 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">--}}
{{--                    <?php $course = $courses[$i] ?>--}}
{{--                    <a href="/admin/courses/{{$course->id}}/edit"><h1 style="color:red"> {{ $course->name }} </h1></a>--}}
{{--                    <h4> {{ $course->teacher }} </h2>--}}
{{--                    <h4> {{ $course->date }} </h2>--}}

{{--                        <p style="word-wrap:break-word" class="text"> {{ $course->text }}... </p>--}}
{{--                        <div style="float:left">--}}
{{--                            <img src="/images/{{$course->picture}}" height="100%" width="100%" alt="NO PHOTO">--}}
{{--                        </div>--}}
{{--                    <?php $i += 1 ?>--}}
{{--                </div>--}}
{{--                <div class="col-md-5 mr-4 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">--}}
{{--                    <?php $course = $courses[$i] ?>--}}
{{--                    <a href="/admin/courses/{{$course->id}}/edit"><h1 style="color:red"> {{ $course->name }} </h1></a>--}}
{{--                    <h4> {{ $course->teacher }} </h2>--}}
{{--                    <h4> {{ $course->date }} </h2>--}}

{{--                        <p style="word-wrap:break-word"> {{ $course->text }}... </p>--}}
{{--                        <div style="float:left">--}}
{{--                            <img src="/images/{{$course->picture}}" height="100%" width="100%" alt="NO PHOTO">--}}
{{--                        </div>--}}
{{--                    <?php $i += 1 ?>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <br>--}}
{{--        @endwhile--}}
{{--        <div class="row ">--}}
{{--            <div class="offset-md-1"></div>--}}
{{--            <div class="col-md-10 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">--}}
{{--                <?php $course = $courses[$i] ?>--}}
{{--                <a href="/admin/courses/{{$course->id}}/edit"><h1 style="color:red"> {{ $course->name }} </h1></a>--}}
{{--                <h4> {{ $course->teacher }} </h2>--}}
{{--                <h4> {{ $course->date }} </h2>--}}
{{--\--}}
{{--                    <p style="word-wrap:break-word"> {{ $course->text }}... </p>--}}
{{--                    <div style="float:left">--}}
{{--                        <img src="/images/{{$course->picture}}" height="100%" width="100%" alt="NO PHOTO">--}}
{{--                    </div>--}}
{{--                <?php $i += 1 ?>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endif--}}



@endsection
