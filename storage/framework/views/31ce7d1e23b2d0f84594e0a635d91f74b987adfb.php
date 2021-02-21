<!-- hello -->
    <!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>موسسه کاریز</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">


    <!-- =======================================================
    Theme Name: NewBiz
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<style>
    .jumbotron {
    position:relative;
    overflow:hidden;
    }

    .jumbotron .container {
    position:relative;
    z-index:2;

    background:rgba(0,0,0,0.2);
    padding:2rem;
    border:1px solid rgba(0,0,0,0.1);
    border-radius:3px;
    }

    .jumbotron-background {
    object-fit:cover;
    font-family: 'object-fit: cover;';
    position:absolute;
    top:0;
    z-index:1;
    width:100%;
    height:100%;
    opacity:0.5;
    }

    img.blur {
    -webkit-filter: blur(4px);
    filter: blur(4px);
    filter:progid:DXImageTransform.Microsoft.Blur(PixelRadius='4');

    }
</style>

<body>

<!--==========================
Header
============================-->
<header id="header" class="fixed-top">
    <div class="container">

        <div class=" float-left">
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <h1 class="text-light"><a href="#header"><span>Kariz</span></a></h1> -->
            <a href="#intro" class="scrollto"><img src="img/kariz.png" height="100" width = "110" alt="" class="img-fluid"></a>
        </div>

        <nav class="main-nav float-right d-none d-lg-block ">
            <ul>
                <li><a href="#contact"> تماس با ما</a></li>
                <li><a href="#about">وبلاگ </a></li>
                <li><a href="#services">سرویس ها</a></li>
                <li><a href="#portfolio">پروژه ها</a></li>
                <li><a href="#team">تیم ما</a></li>
                <li><a href="">امکانات</a></li>
                <li class="active"><a href="#intro">خانه</a></li>
                <li><a href="/login">ورود یا عضویت</a></li>
            </ul>
        </nav>
        <!-- .main-nav -->

    </div>
</header>
<!-- #header -->

<!--==========================
Intro Section
============================-->

<div class="jumbotron jumbotron-fluid bg-dark mb-0 ">

    <div class="jumbotron-background">
      <img src="<?php echo e(asset("images/back.jpg")); ?>">
    </div>

    <div class="container text-white" style="margin-top: 5%">

      <h1 class="display-4">شبکه اموزشی کاریز</h1>
      <p class="lead">مرجع تخصصی آموزش جهت فارسی زبانان کانادا</p>
      
    </div>
</div>

<div class="container-fluid bg-secondary">.</div>

<!-- Carousel wrapper -->
<div id="carouselBasicExample" data-ride="carousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active"></li>
        <li data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1"></li>
        <li data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2"></li>
    </ol>

    <!-- Inner -->
    <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active">
            <img
                src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg"
                class="d-block w-100"
                alt="..."
            />
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <img
                src="https://mdbootstrap.com/img/Photos/Slides/img%20(22).jpg"
                class="d-block w-100"
                alt="..."
            />
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <img
                src="https://mdbootstrap.com/img/Photos/Slides/img%20(23).jpg"
                class="d-block w-100"
                alt="..."
            />
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
        </div>
    </div>
    <!-- Inner -->

    <!-- Controls -->
    <a
        class="carousel-control-prev"
        href="#carouselBasicExample"
        role="button"
        data-slide="prev"
    >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a
        class="carousel-control-next"
        href="#carouselBasicExample"
        role="button"
        data-slide="next"
    >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Carousel wrapper -->


<main id="main">

    <!--==========================
  About Us Section
============================-->
    <section id="about">
        <div class="container">

            <header class="section-header">
                <h3>درباره ما</h3>
                <p>ما یک شرکتی هستیم در حوزه ی بیزینس که سالهاست در کشور های مختلف فعالیت داریم و تجربه ی عالی هم در این حوزه کسب کرده ایم و مشتاقیم تا آنها را برای تو بیاموزیم</p>
            </header>
            <br>
            <div class="row about-container">

                <div class="align-content-center col-lg-6 content order-lg-1 order-2">


                    <div class="icon-box wow fadeInUp">
                        <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                        <h4 class="title"><a href="">لورم ایپسوم1</a></h4>
                        <p class="description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
                    </div>

                    <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon"><i class="fa fa-photo"></i></div>
                        <h4 class="title"><a href="">لورم ایپسوم 2</a></h4>
                        <p class="description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
                    </div>

                    <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon"><i class="fa fa-bar-chart"></i></div>
                        <h4 class="title"><a href="">لورم ایپسوم 3</a></h4>
                        <p class="description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
                    </div>

                </div>

                <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                    <img src="img/about-img.svg" class="img-fluid" alt="عکس تبلیغات">
                </div>
            </div>

            <div class="row about-extra">
                <div class="col-lg-6 wow fadeInUp">
                    <img src="img/about-extra-1.svg" class="img-fluid" alt="عکس تبلیغات">
                </div>
                <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0 text-justify text-right">
                    <h4>ارتباط مستقیم با مشتریان</h4>
                    <p class=" text-justify ">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                        کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد و در کنار آنها
                        مشغول شد
                    </p>

                </div>
            </div>
            <br>
            <div class="row about-extra">
                <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
                    <img src="img/about-extra-2.svg" class="img-fluid" alt="عکس تبلیغات">
                </div>
                <br>

                <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1 text-justify text-right">
                    <h4>ارتباط غیرمستقیم در فضای مجازی با مشتریان</h4>
                    <p class=" text-justify text-centert">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                        کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد و در کنار آنها
                        مشغول شد

                    </p>

                </div>

            </div>

        </div>
    </section>
    <!-- #about -->

    <!--==========================
  Services Section
============================-->
    <section id="services" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3>سرویس ها</h3>
                <p>ما در این سایت بهترین سرویس ها برای بیزینس را معرفی خواهیم کرد تا شما را تبدیل به یک بیزینس من حرفه ای کنیم</p>
            </header>

            <div class="row">

                <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
                        <h4 class="title"><a href="">لورم ایپسوم یک متن ساختگی نا مفهوم است</a></h4>
                        <p class="description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود
                            ابزارهای کاربردی می باشد. </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i></div>
                        <h4 class="title"><a href="">لورم ایپسوم یک متن ساختگی نا مفهوم است</a></h4>
                        <p class="description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود
                            ابزارهای کاربردی می باشد. </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                        <h4 class="title"><a href="">لورم ایپسوم یک متن ساختگی نا مفهوم است</a></h4>
                        <p class="description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود
                            ابزارهای کاربردی می باشد. </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
                        <h4 class="title"><a href="">لورم ایپسوم یک متن ساختگی نا مفهوم است</a></h4>
                        <p class="description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود
                            ابزارهای کاربردی می باشد. </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><i class="ion-ios-world-outline" style="color: #d6ff22;"></i></div>
                        <h4 class="title"><a href="">لورم ایپسوم یک متن ساختگی نا مفهوم است</a></h4>
                        <p class="description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود
                            ابزارهای کاربردی می باشد. </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><i class="ion-ios-clock-outline" style="color: #4680ff;"></i></div>
                        <h4 class="title"><a href="">لورم ایپسوم یک متن ساختگی نا مفهوم است</a></h4>
                        <p class="description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود
                            ابزارهای کاربردی می باشد. </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- #services -->

    <!--==========================
  Why Us Section
============================-->
    <section id="why-us" class="wow fadeIn" style="background-color:lightgray;">
        <div class="container" >
            <header class="section-header" >
                <h3>بیزینس من ها چه کسانی هستند ؟</h3>
                <p>بیزینس من ها یکی از نو ظهور ترین پدیده ها در صنعت دیجیتالینگ میباشند که اقتصاد دنیا را میچرخانند . حالا تو هم آماده هستی که به دنیای بیزینس وارد شوی؟</p>
            </header>

            <div class="row row-eq-height justify-content-center">

                <div class="col-lg-4 mb-4">
                    <div class="card wow bounceInUp">
                        <i class="fa fa-diamond"></i>
                        <div class="card-body" >
                            <h5 class="card-title">لورم ایپسوم یک متن ساختگی </h5>
                            <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
                            <a href="#" class="readmore">بیشتر</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card wow bounceInUp" >
                        <i class="fa fa-language" s></i>
                        <div class="card-body" >
                            <h5 class="card-title">لورم ایپسوم یک متن ساختگی </h5>
                            <p class="card-text" >لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
                            <a href="#" class="readmore"> بیشتر </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card wow bounceInUp">
                        <i class="fa fa-object-group"></i>
                        <div class="card-body">
                            <h5 class="card-title">لورم ایپسوم یک متن ساختگی </h5>
                            <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
                            <a href="#" class="readmore"> بیشتر</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">274</span>
                    <p>آموزش ها</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">421</span>
                    <p> پروژه ها</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">1,364</span>
                    <p> دانشجویان</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">18</span>
                    <p>مدرسین</p>
                </div>

            </div>

        </div>
    </section>

    <!--==========================
  Portfolio Section
============================-->
    <section id="portfolio" class="clearfix">
        <div class="container">

            <header class="section-header">
                <h3 class="section-title">پروژه ها</h3>
            </header>

            <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">همه</li>
                        <li data-filter=".filter-app">اپ</li>
                        <li data-filter=".filter-card">کارت ها</li>
                        <li data-filter=".filter-web">وبسایت ها</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/app1.jpg" class="img-fluid" alt="عکس تبلیغات">
                        <div class="portfolio-info">
                            <h4><a href="#">اپ 1</a></h4>
                            <p>اپ</p>
                            <div>
                                <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/web3.jpg" class="img-fluid" alt="عکس تبلیغات">
                        <div class="portfolio-info">
                            <h4><a href="#">وبسایت 3</a></h4>
                            <p>وبسایت</p>
                            <div>
                                <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/app2.jpg" class="img-fluid" alt="عکس تبلیغات">
                        <div class="portfolio-info">
                            <h4><a href="#">اپ 2</a></h4>
                            <p>اپ</p>
                            <div>
                                <a href="img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/card2.jpg" class="img-fluid" alt="عکس تبلیغات">
                        <div class="portfolio-info">
                            <h4><a href="#">کارت 2</a></h4>
                            <p>کارت</p>
                            <div>
                                <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/web2.jpg" class="img-fluid" alt="عکس تبلیغات">
                        <div class="portfolio-info">
                            <h4><a href="#">وبسایت 2</a></h4>
                            <p>وبسایت</p>
                            <div>
                                <a href="img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/app3.jpg" class="img-fluid" alt="عکس تبلیغات">
                        <div class="portfolio-info">
                            <h4><a href="#">اپ 3</a></h4>
                            <p>اپ</p>
                            <div>
                                <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/card1.jpg" class="img-fluid" alt="عکس تبلیغات">
                        <div class="portfolio-info">
                            <h4><a href="#">کارت 1</a></h4>
                            <p>کارت</p>
                            <div>
                                <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/card3.jpg" class="img-fluid" alt="عکس تبلیغات">
                        <div class="portfolio-info">
                            <h4><a href="#">کارت 3</a></h4>
                            <p>کارت</p>
                            <div>
                                <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/web1.jpg" class="img-fluid" alt="عکس تبلیغات">
                        <div class="portfolio-info">
                            <h4><a href="#">وبسایت 1</a></h4>
                            <p>وبسایت</p>
                            <div>
                                <a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- #portfolio -->

    <!--==========================
  Clients Section
============================-->
    <section id="testimonials" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3>نظرات کاربران</h3>
            </header>

            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <div class="owl-carousel testimonials-carousel wow fadeInUp">

                        <div class="testimonial-item">
                            <img src="img/testimonial-1.jpg" class="testimonial-img" alt="عکس تبلیغات">
                            <h3>علی </h3>
                            <h4>طراح و برنامه ویسی</h4>
                            <p>
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                            </p>
                        </div>

                        <div class="testimonial-item">
                            <img src="img/testimonial-2.jpg" class="testimonial-img" alt="عکس تبلیغات">
                            <h3> سارا</h3>
                            <h4>طراح</h4>
                            <p>
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                            </p>
                        </div>

                        <div class="testimonial-item">
                            <img src="img/testimonial-3.jpg" class="testimonial-img" alt="عکس تبلیغات">
                            <h3> دلوین</h3>
                            <h4> بیزینس من</h4>
                            <p>
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                            </p>
                        </div>

                        <div class="testimonial-item">
                            <img src="img/testimonial-4.jpg" class="testimonial-img" alt="عکس تبلیغات">
                            <h3> رضا</h3>
                            <h4>بیزینس من</h4>
                            <p>
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                            </p>
                        </div>

                        <div class="testimonial-item">
                            <img src="img/testimonial-5.jpg" class="testimonial-img" alt="عکس تبلیغات">
                            <h3> محمد</h3>
                            <h4>بیزینس من</h4>
                            <p>
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                            </p>
                        </div>

                    </div>

                </div>
            </div>


        </div>
    </section>
    <!-- #testimonials -->

    <!--==========================
  Team Section
============================-->
    <section id="team">
        <div class="container">
            <div class="section-header">
                <h3>تیم ما</h3>
                <p> ما یک تیم بسیار حرفه ای هستیم که در کنار شما آماده شده ایم تا تجربیاتمان را در اختیار شما قرار دهیم
                </p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 wow fadeInUp">
                    <div class="member">
                        <img src="img/team-1.jpg" class="img-fluid" alt="عکس تبلیغات">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4> احسان عظیم نیا</h4>
                                <span> طراح / برنامه نویس / تولید محتوا</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="member">
                        <img src="img/team-2.jpg" class="img-fluid" alt="عکس تبلیغات">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4> سارا</h4>
                                <span> بیزینس من</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="member">
                        <img src="img/team-3.jpg" class="img-fluid" alt="عکس تبلیغات">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4> علی</h4>
                                <span>بیزینس من</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="member">
                        <img src="img/team-4.jpg" class="img-fluid" alt="عکس تبلیغات">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4> مریم</h4>
                                <span>بیزینس من</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- #team -->

    <!--==========================
  Clients Section
============================-->
    <section id="clients" class="section-bg">

        <div class="container">

            <div class="section-header">
                <h3> همکاری های ما</h3>
                <p>ما یک تیم خیلی حرفه ای هستیم که تا کنون با شرکت های بزرگی در زمینه ی بیزینس همکاری داشته ایم</p>
            </div>

            <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="img/clients/client-1.png" class="img-fluid" alt="عکس تبلیغات">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="img/clients/client-2.png" class="img-fluid" alt="عکس تبلیغات">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="img/clients/client-3.png" class="img-fluid" alt="عکس تبلیغات">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="img/clients/client-4.png" class="img-fluid" alt="عکس تبلیغات">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="img/clients/client-5.png" class="img-fluid" alt="عکس تبلیغات">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="img/clients/client-6.png" class="img-fluid" alt="عکس تبلیغات">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="img/clients/client-7.png" class="img-fluid" alt="عکس تبلیغات">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="img/clients/client-8.png" class="img-fluid" alt="عکس تبلیغات">
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!--==========================
  Contact Section
============================-->
    <section id="contact">
        <div class="container-fluid">

            <div class="section-header">
                <h3> ارتباط با ما</h3>
            </div>

            <div class="row wow fadeInUp">

                <div class="col-lg-6">
                    <div class="map mb-4 mb-lg-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0"
                                style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-5 info">
                            <i class="ion-ios-location-outline"></i>
                            <p>تهران - سعادت آباد</p>
                        </div>
                        <div class="col-md-4 info">
                            <i class="ion-ios-email-outline"></i>
                            <p>ehsan2003azimnia@gmail.com</p>
                        </div>
                        <div class="col-md-3 info">
                            <i class="ion-ios-telephone-outline"></i>
                            <p>+99 9001112233</p>
                        </div>
                    </div>

                    <div class="form">
                        <div id="sendmessage">ممنون از شما . پیام شما ارسال شد</div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="نام شما" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="ایمیل شما" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder=" موضوع" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="متن پیام"></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="text-center"><button type="submit" title="Send Message" style="background-color:tomato;">ارسال پیام</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- #contact -->

</main>

<!--==========================
Footer
============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 footer-info">
                    <h3 class="text-warning">بیزینس من</h3>
                    <p class=" text-justify">بیزینس من یکی از بزرگترین شرکت ها در ایران میباشد که یکسال قبل فعالیت خود را شروع کرده و در سایر کشور ها نیز فعالیت خود را گسترانده . حدف از ایجاد وبسیات بیزینس من آموزش کامل بیزینس و ارائه ی تمام نمونه کار های این شرکت میباشد
                        . ما بسیار مشتا ق هستیم تا در صورت تمایل شما با شما همکاری کنیم</p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links ">
                    <h4 class="text-warning font-italic">لینک های مفید </h4>
                    <ul>
                        <li><a href="#">خانه</a></li>
                        <li><a href="#"> درباره ما</a></li>
                        <li><a href="#">سرویس های ما</a></li>
                        <li><a href="#"> تیم و کار ما</a></li>
                        <li><a href="#"> مقالات درباره ی بیزینس</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact ">
                    <h4 class="text-warning font-italic"> تماس با ما</h4>
                    <p>
                        تهران <br> تهران<br> سعادت آباد <br>
                        <strong>تلفن:</strong> +98 9001234567<br>
                        <strong>ایمیل:</strong> ehsan2003azimnia@gmail.com<br>
                    </p>

                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-newsletter text-justify text-center">
                    <h4 class=" text-warning font-italic">خبرنامه ی ما </h4>
                    <p>تیم ما یک تیم بسیار حرفه ای است که با تکیه به آخرین وضعیت و قوانین دنیا پیش میرود و خیلی مشتاق هست که در مسائل بیزینس با شما همکاری کند.</p>
                    <form action="" method="post">
                        <input type="email" name="email" style="width:100%">
                        <input type="submit" value="ارسال">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div  style="background-color:#3c3c3c">
        <div class="copyright" style="background-color:#3c3c3c;opacity:0.3">
            ; تمامی حقوق متعلق به <strong> کاریز</strong> میباشد
        </div>
        <div class="credits ">
            <!--
      All the links in the footer should remain intact.
      You can delete the links only if you purchased the pro version.
      Licensing information: https://bootstrapmade.com/license/
      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
    -->
            تم شاپ <a href="https://bootstrapmade.com/ ">علی دباغ,محمد علی طلایی</a>
        </div>
    </div>
</footer>
<!-- #footer -->

<a href="# " class="back-to-top " ><i class="fa fa-chevron-up "></i></a>
<!-- Uncomment below i you want to use a preloader -->
<!-- <div id="preloader "></div> -->
<script src="lib/jquery/jquery.min.js "></script>

<script language="JavaScript" type="text/javascript">
    $(document).ready(function(){
        $('.carousel').carousel({
            interval: 5000
        })
        $('.carousel-control.right').trigger('click');
    });
</script>
<!-- JavaScript Libraries -->


<script src="lib/jquery/jquery-migrate.min.js "></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js "></script>
<script src="lib/easing/easing.min.js "></script>
<script src="lib/mobile-nav/mobile-nav.js "></script>
<script src="lib/wow/wow.min.js "></script>
<script src="lib/waypoints/waypoints.min.js "></script>
<script src="lib/counterup/counterup.min.js "></script>
<script src="lib/owlcarousel/owl.carousel.min.js "></script>
<script src="lib/isotope/isotope.pkgd.min.js "></script>
<script src="lib/lightbox/js/lightbox.min.js "></script>
<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js "></script>

<!-- Template Main Javascript File -->
<script src="js/main.js "></script>

</body>

</html>
<?php /**PATH C:\wamp64\www\kariz2020\resources\views/welcome.blade.php ENDPATH**/ ?>