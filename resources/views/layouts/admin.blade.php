<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href={{asset("admin_panel/img/apple-icon.png")}}>
    <link rel="icon" type="image/png" href={{asset('admin_panel/img/favicon.png')}}>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        پنل مدیریت
    </title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href={{asset('admin_panel/css/material-dashboard.css?v=2.1.0')}} rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href={{asset('admin_panel/demo/demo.css')}} rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{asset('font.css')}}"/>

</head>

<style>
h1,h2,h3,h4,h5,h6,p,span {
    font-family: '20S-Yekan' !important;
}
.animate{
    width: 300px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color:whitesmoke;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    float:right;
    padding-right:1px;
    margin-right:9%;
    max-width:100%;
}

.animate:focus {
    width: 100%;
}


.text {
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 4; /* number of lines to show */
    -webkit-box-orient: vertical;
}

#table_content{
    text-align:center;
    padding-left:2%;


}

#row_content:hover{
    background-color:orange;
}

#head_content:hover{
    background-color:orange;

}

</style>


<body style="font-family: '20S-Yekan' !important;" class="dark-edition">

<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

          Tip 2: you can also add an image using data-image tag
      -->

        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                پنل مدیریت
            </a>
        </div>

        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="@if(Request::is('admin')) nav-item active @endif   ">
                <a class="nav-link" href="{{ url('/admin') }}">
                        <i class="material-icons">dashboard</i>
                        <p>گزارش کلی</p>
                    </a>
                </li>
                <li class="@if(Request::is('admin/courses')) nav-item active @endif nav-item ">
                    <a class="nav-link" href="{{ url('admin/courses') }}">
                        <i class="material-icons">person</i>
                        <p>مدیریت کورس ها</p>
                    </a>
                </li>
                <li class="@if(Request::is('admin/books')) nav-item active @endif nav-item ">
                    <a class="nav-link" href="{{ url('admin/books') }}">
                        <i class="material-icons">content_paste</i>
                        <p>مدیریت کتاب های فروشگاه</p>
                    </a>
                </li>
                <li class="@if(Request::is('admin/feeds')) nav-item active @endif nav-item ">
                    <a class="nav-link" href="{{ url('admin/feeds') }}">
                        <i class="material-icons">library_books</i>
                        <p>مدیریت اطلاعیه ها</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/admin/add_users">
                        <i class="material-icons">bubble_chart</i>
                        <p>مدیریت کاربرها</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="./map.html">
                        <i class="material-icons">location_ons</i>
                        <p>Maps</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="./notifications.html">
                        <i class="material-icons">notifications</i>
                        <p>Notifications</p>
                    </a>
                </li>
                {{-- <li class="nav-item active-pro ">
                      <a class="nav-link" href="./upgrade.html">
                          <i class="material-icons">unarchive</i>
                          <p>Upgrade to PRO</p>
                      </a>
                </li> --}}
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <div class="content" style="margin-top: 10px !important;">
            <div class="container" style="direction: rtl;text-align:right;font-family: '20S-Yekan' !important;">
                @yield('content')
            </div>
        </div>
    </div>
</div>

</body>
</html>

