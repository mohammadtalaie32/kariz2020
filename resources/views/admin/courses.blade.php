@extends("layouts.admin")

@section("content")
    <div class="row container mb-3">
        <div class="offset-md-1"></div>
        <div class="col-md-2 pt-3 pb-1" style="text-align:center;background-color:rebeccapurple;color:white;border-radius: 10px">
            <a href="/admin/courses/create"> <h5>ایجاد دوره جدید</h5></a>
        </div>

        {{--        <div class="col-md-2 mr-3 pt-3 pb-1" style="text-align:center;background-color:rebeccapurple;color:white;border-radius: 10px">--}}
        {{--            <h5>دکمه 2</h5>--}}
        {{--        </div>--}}
    </div>

    <!-- -->
    <br>

    <div class="row mb-3 row">
        <div class="offset-md-1"></div>
        <div class="col-md-10 pt-3 pb-1 input-group">
            <form method = "POST" class="form w-100" action="/admin/courses/searched">
                {{csrf_field()}}
                <input style="background-color: #e2e2e2; border-radius: 5px;line-height: 40px;border:none;padding:5px;padding-right: 20px" type="text" name="searched_course" placeholder="جهت جستجو نام دوره یا مدرس را وارد نمایید سپس دکمه enter را فشار دهید" lang="fa" dir="rtl" class="w-100"/>
                <datalist id="browsers">
                    @foreach($courses as $course)
                        <option>{{$course->name}}</option>
                        <option>{{$course->teacher}}</option>
                    @endforeach
                </datalist>
                <input hidden class="float-left" type="submit" value="جستجو" class="btn btn-primary">
            </form>
        </div>
    </div>

    <div class="row mb-3">
        <div class="offset-md-1"></div>
        <div class="col-md-10">
            <h5 class="alert alert-dismissible alert-info">برای ویرایش دوره ها روی نام دوره کلیک کنید!</h5>
        </div>
    </div>

    <?php
        $i = 0;
    ?>
    @if($course_count % 2 == 0)
        @while ($i != $course_count)
            <div class="row container">
                <div class="offset-md-1"></div>
                <div class="col-md-5 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <?php $course = $courses[$i] ?>
                    <a href = "/admin/courses/{{$course->id}}/edit"><h1 style="color:red"> {{ $course->name }} </h1></a>
                    <h4> {{ $course->teacher }} </h2>
                    <h4> {{ $course->date }} </h2>
                        <?php
                        $string =  $course->text;
                        $len = strlen($string);
                        $string = substr($string,0,(intdiv($len,3)));

                        ?>
                    <h4 style="word-wrap:break-word"> {{ $string }}... </h2>
                        <div style="float:left">
                            <img src="/images/{{$course->picture}}" height="100%" width="100%" alt="NO PHOTO">
                        </div>
                    <?php $i += 1 ?>
                </div>

                <div class="col-md-5 mr-4 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <?php $course = $courses[$i] ?>
                    <a href="/admin/courses/{{$course->id}}/edit"> <h1 style="color:red"> {{ $course->name }} </h1></a>
                    <h4> {{ $course->teacher }} </h2>
                    <h4> {{ $course->date }} </h2>
                        <?php
                        $string =  $course->text;
                        $len = strlen($string);
                        $string = substr($string,0,(intdiv($len,3)));

                        ?>
                        <h4 style="word-wrap:break-word"> {{ $string }}... </h2>
                        <div style="float:left">
                            <img src="/images/{{$course->picture}}" height="100%" width="100%" alt="NO PHOTO">
                        </div>
                    <?php $i += 1 ?>
                </div>
            </div>
            <BR>


        @endwhile
    @else
        @while($i != $course_count - 1)
            <div class="row container">
                <div class="offset-md-1"></div>
                <div class="col-md-5 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <?php $course = $courses[$i] ?>
                    <a href="/admin/courses/{{$course->id}}/edit"><h1 style="color:red"> {{ $course->name }} </h1></a>
                    <h4> {{ $course->teacher }} </h2>
                    <h4> {{ $course->date }} </h2>
                        <?php
                        $string =  $course->text;
                        $len = strlen($string);
                        $string = substr($string,0,(intdiv($len,3)));

                        ?>
                        <h4 style="word-wrap:break-word"> {{ $string }}... </h2>
                        <div style="float:left">
                            <img src="/images/{{$course->picture}}" height="100%" width="100%" alt="NO PHOTO">
                        </div>
                    <?php $i += 1 ?>
                </div>
                <div class="col-md-5 mr-4 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <?php $course = $courses[$i] ?>
                    <a href="/admin/courses/{{$course->id}}/edit"><h1 style="color:red"> {{ $course->name }} </h1></a>
                    <h4> {{ $course->teacher }} </h2>
                    <h4> {{ $course->date }} </h2>
                        <?php
                        $string =  $course->text;
                        $len = strlen($string);
                        $string = substr($string,0,(intdiv($len,3)));

                        ?>
                        <h4 style="word-wrap:break-word"> {{ $string }}... </h2>
                        <div style="float:left">
                            <img src="/images/{{$course->picture}}" height="100%" width="100%" alt="NO PHOTO">
                        </div>
                    <?php $i += 1 ?>
                </div>
            </div>
            <br>
        @endwhile
        <div class="row ">
            <div class="offset-md-1"></div>
            <div class="col-md-10 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                <?php $course = $courses[$i] ?>
                <a href="/admin/courses/{{$course->id}}/edit"><h1 style="color:red"> {{ $course->name }} </h1></a>
                <h4> {{ $course->teacher }} </h2>
                <h4> {{ $course->date }} </h2>
                    <?php
                    $string =  $course->text;
                    $len = strlen($string);
                    $string = substr($string,0,(intdiv($len,3)));

                    ?>
                    <h4 style="word-wrap:break-word"> {{ $string }}... </h2>
                    <div style="float:left">
                        <img src="/images/{{$course->picture}}" height="100%" width="100%" alt="NO PHOTO">
                    </div>
                <?php $i += 1 ?>
            </div>
        </div>
    @endif



@endsection
