@extends("layouts.admin")

@section("content")
    <form method = "POST" action="/admin/feeds/searched">
        {{csrf_field()}}
        <input  type="text" name="searched_feed" placeholder="عنوان اطلاعیه را جستجو کنید" size="50" style="height:30%;border:1px solid gray;Border-radius:5px" name="browser" list="browsers">
         <datalist id="browsers">
             @foreach($feeds as $feed)
             <option>{{$feed->title}}</option>
             @endforeach
         </datalist>
        <input type="submit" value="جستجو" class="btn btn-primary">
    </form>
    <div class="row container mb-3">
        <div class="offset-md-1"></div>
        <div class="col-md-2 pt-3 pb-1" style="text-align:center;background-color:rebeccapurple;color:white;border-radius: 10px">
            <a href="/admin/feeds/create"> <h5>ایجاد اطلاعیه جدید</h5></a>
        </div>


    </div>
    <br>
    <div>
        <h1 style="text-align:center;color:white">برای ویرایش اطلاعیه ها روی عنوان اطلاعیه کلیک کنید</h1>
    </div>
    <?php
        $i = 0;
    ?>
    @if($feed_count % 2 == 0)
        @while ($i != $feed_count)
            <div class="row container">
                <div class="offset-md-1"></div>
                <div class="col-md-5 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <?php $feed = $feeds[$i] ?>
                        <a href = "/admin/feeds/{{$feed->id}}/edit"><h1 style="color:red"> {{ $feed->title }} </h1></a>
                        <?php
                        $string =  $feed->content;
                        $len = strlen($string);
                        $string = substr($string,0,(intdiv($len,3)));

                        ?>
                    <h4 style="word-wrap:break-word"> {{ $string }}... </h2>
                    <h4> {{ $feed->date }} </h2>
                    <h4> {{ $feed->text }} </h2>
                        <div style="float:left">
                            <img src="/images/{{$feed->picture}}" height="100%" width="100%" alt="NO PHOTO">
                        </div>
                    <?php $i += 1 ?>
                </div>

                <div class="col-md-5 mr-4 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <?php $feed = $feeds[$i] ?>
                        <a href = "/admin/feeds/{{$feed->id}}/edit"><h1 style="color:red"> {{ $feed->title }} </h1></a>
                        <?php
                        $string =  $feed->content;
                        $len = strlen($string);
                        $string = substr($string,0,(intdiv($len,3)));

                        ?>
                        <h4 style="word-wrap:break-word"> {{ $string }}... </h2>
                    <h4> {{ $feed->date }} </h2>
                    <h4> {{ $feed->text }} </h2>
                        <div style="float:left">
                            <img src="/images/{{$feed->picture}}" height="100%" width="100%" alt="NO PHOTO">
                        </div>
                    <?php $i += 1 ?>
                </div>
            </div>
            <BR>


        @endwhile
    @else
        @while($i != $feed_count - 1)
            <div class="row container">
                <div class="offset-md-1"></div>
                <div class="col-md-5 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <?php $feed = $feeds[$i] ?>
                        <a href = "/admin/feeds/{{$feed->id}}/edit"><h1 style="color:red"> {{ $feed->title }} </h1></a>
                        <?php
                        $string =  $feed->content;
                        $len = strlen($string);
                        $string = substr($string,0,(intdiv($len,3)));

                        ?>
                        <h4 style="word-wrap:break-word"> {{ $string }}... </h2>
                    <h4> {{ $feed->date }} </h2>
                    <h4> {{ $feed->text }} </h2>
                        <div style="float:left">
                            <img src="/images/{{$feed->picture}}" height="100%" width="100%" alt="NO PHOTO">
                        </div>
                    <?php $i += 1 ?>
                </div>
                <div class="col-md-5 mr-4 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <?php $feed = $feeds[$i] ?>
                        <a href = "/admin/feeds/{{$feed->id}}/edit"><h1 style="color:red"> {{ $feed->title }} </h1></a>
                        <?php
                        $string =  $feed->content;
                        $len = strlen($string);
                        $string = substr($string,0,(intdiv($len,3)));

                        ?>
                        <h4 style="word-wrap:break-word"> {{ $string }}... </h2>
                    <h4> {{ $feed->date }} </h2>
                    <h4> {{ $feed->text }} </h2>
                        <div style="float:left">
                            <img src="/images/{{$feed->picture}}" height="100%" width="100%" alt="NO PHOTO">
                        </div>
                    <?php $i += 1 ?>
                </div>
            </div>
            <br>
        @endwhile
        <div class="row ">
            <div class="offset-md-1"></div>
            <div class="col-md-10 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                <?php $feed = $feeds[$i] ?>
                    <a href = "/admin/feeds/{{$feed->id}}/edit"><h1 style="color:red"> {{ $feed->title }} </h1></a>
                    <?php
                    $string =  $feed->content;
                    $len = strlen($string);
                    $string = substr($string,0,(intdiv($len,3)));

                    ?>
                    <h4 style="word-wrap:break-word"> {{ $string }}... </h2>
                <h4> {{ $feed->date }} </h2>
                <h4> {{ $feed->text }} </h2>
                    <div style="float:left">
                        <img src="/images/{{$feed->picture}}" height="100%" width="100%" alt="NO PHOTO">
                    </div>
                <?php $i += 1 ?>
            </div>
        </div>
    @endif



@endsection
