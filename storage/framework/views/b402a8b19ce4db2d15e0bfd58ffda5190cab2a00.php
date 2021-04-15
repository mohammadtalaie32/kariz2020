
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href=<?php echo e(asset("admin_panel/img/apple-icon.png")); ?>>
    <link rel="icon" type="image/png" href=<?php echo e(asset('admin_panel/img/favicon.png')); ?>>
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
    <link href=<?php echo e(asset('admin_panel/css/material-dashboard.css?v=2.1.0')); ?> rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href=<?php echo e(asset('admin_panel/demo/demo.css')); ?> rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('font.css')); ?>"/>

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
    width: 80%;
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
    cursor:pointer;

}

#head_content:hover{
    background-color:orange;

}

.searchBox {
    position: absolute;
    top: 50%;
    left: 50%;
    transform:  translate(-50%,50%);
    background:white;
    height: 40px;
    border-radius: 40px;
    padding: 10px;

}

.searchBox:hover > .searchInput {
    width: 240px;
    padding: 0 6px;
}

.searchBox:hover > .searchButton {
    background: white;
    color : #2f3640;
}

.searchButton {
    color: white;
    float: right;
    width: 20px;
    height: 40px;
    border-radius: 50%;
    background: #2f3640;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 0.4s;
}

.searchInput {
    border:none;
    background: none;
    outline:none;
    float:left;
    padding: 0;
    color: white;
    font-size: 16px;
    transition: 0.4s;
    line-height: 40px;
    width: 0px;

}

@media  screen and (max-width: 620px) {
    .searchBox:hover > .searchInput {
        width: 150px;
        padding: 0 6px;
    }
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
                <li class="<?php if(Request::is('admin')): ?> nav-item active <?php endif; ?>   ">
                <a class="nav-link" href="<?php echo e(url('/admin')); ?>">
                        <i class="material-icons">dashboard</i>
                        <p>گزارش کلی</p>
                    </a>
                </li>
                <li class="<?php if(Request::is('admin/courses')): ?> nav-item active <?php endif; ?> nav-item ">
                    <a class="nav-link" href="<?php echo e(url('admin/courses')); ?>">
                        <i class="material-icons">person</i>
                        <p>مدیریت کورس ها</p>
                    </a>
                </li>
                <li class="<?php if(Request::is('admin/books')): ?> nav-item active <?php endif; ?> nav-item ">
                    <a class="nav-link" href="<?php echo e(url('admin/books')); ?>">
                        <i class="material-icons">content_paste</i>
                        <p>مدیریت کتاب های فروشگاه</p>
                    </a>
                </li>
                <li class="<?php if(Request::is('admin/feeds')): ?> nav-item active <?php endif; ?> nav-item ">
                    <a class="nav-link" href="<?php echo e(url('admin/feeds')); ?>">
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
                
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <div class="content" style="margin-top: 10px !important;">
            <div class="container" style="direction: rtl;text-align:right;font-family: '20S-Yekan' !important;">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<?php /**PATH C:\xampp\htdocs\kariz2020\resources\views/layouts/admin.blade.php ENDPATH**/ ?>