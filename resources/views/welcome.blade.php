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

    .MultiCarousel { float: left; overflow: hidden; padding: 15px; width: 100%; position:relative; }
    .MultiCarousel .MultiCarousel-inner { transition: 1s ease all; float: left; }
    .MultiCarousel .MultiCarousel-inner .item { float: left;}
    .MultiCarousel .MultiCarousel-inner .item > div { text-align: center; padding:10px; margin:10px; background:#f1f1f1; color:#666;}
    .MultiCarousel .leftLst, .MultiCarousel .rightLst { position:absolute; border-radius:50%;top:calc(50% - 20px); }
    .MultiCarousel .leftLst { left:0; }
    .MultiCarousel .rightLst { right:0; }

    .MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over { pointer-events: none; background:#ccc; }
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
      <img src="{{ asset("images/back.jpg") }}">
    </div>

    <div class="container text-white" style="margin-top: 5%">

      <h1 class="display-4">شبکه اموزشی کاریز</h1>
      <p class="lead">مرجع تخصصی آموزش جهت فارسی زبانان کانادا</p>
      {{-- <hr class="my-4">
      <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> --}}
    </div>
</div>



<main id="main">

    <!--==========================
  About Us Section
============================-->
    <section id="about">
        <div class="container">

            <header class="section-header">
                <h3>اطلاعیه ها</h3>
                <p>ما یک شرکتی هستیم در حوزه ی بیزینس که سالهاست در کشور های مختلف فعالیت داریم و تجربه ی عالی هم در این حوزه کسب کرده ایم و مشتاقیم تا آنها را برای تو بیاموزیم</p>
            </header>
            <div class="container">
                <div class="row">
                    <div class="MultiCarousel" data-items="1,1,3,3" data-slide="1" id="MultiCarousel"  data-interval="1000">
                        <div class="MultiCarousel-inner">
                            @foreach($feeds as $feed)
                                <div class="item">
                                    <div class="card bg-light">
                                        <img class="card-img-top" src="images/{{ $feed->picture }}" width="276px" height="200px" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title" style="font-size: 18px;font-weight: bolder">{{$feed->title}}</h5>
                                            <a href="#" class="btn btn-primary">اطلاعات بیشتر</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="btn btn-primary leftLst"><</button>
                        <button class="btn btn-primary rightLst">></button>
                    </div>
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
                <h3> کارگاه های  آموزشی</h3>
                <p>ما در این سایت بهترین سرویس ها برای بیزینس را معرفی خواهیم کرد تا شما را تبدیل به یک بیزینس من حرفه ای کنیم</p>
            </header>

            <div class="row">

                @foreach($courses as $course)
                    <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i></div>
                            <h4 class="title"><a href="">{{$course->name}}</a></h4>
                            <img class="card-img-top mt-1" src="images/{{ $course->picture }}" width="276px" height="200px" alt="Card image cap">
                            <p class="mt-3 description" style="direction: rtl">{!! \Illuminate\Support\Str::limit($course->text, 150, $end='...') !!}</p>
                            <a href="#" class="btn btn-primary mt-3 w-100">اطلاعات بیشتر</a>

                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>
    <!-- #services -->



    <!--==========================
  Team Section
============================-->
    <section id="team">
        <div class="container">
            <div class="section-header">
                <h3>مجموعه ای از بهترین کتابهای کودک و نوجوان</h3>
            </div>
            <br>
            <div class="row">

                @foreach($books as $book)

                <div class="col-lg-3 col-md-6 wow fadeInUp">
                    <div class="member">
                        <img src="images/{{ $book->picture }}" class="img-fluid" alt="عکس تبلیغات">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>{{$book->name}}</h4>
                                <span>{{$book->price}}</span>
                                <div class="social">
                                    <a href="#" class="btn btn-primary">خرید</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach



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

<script>
    $(document).ready(function () {
        var itemsMainDiv = ('.MultiCarousel');
        var itemsDiv = ('.MultiCarousel-inner');
        var itemWidth = "";

        $('.leftLst, .rightLst').click(function () {
            var condition = $(this).hasClass("leftLst");
            if (condition)
                click(0, this);
            else
                click(1, this)
        });

        ResCarouselSize();




        $(window).resize(function () {
            ResCarouselSize();
        });

        //this function define the size of the items
        function ResCarouselSize() {
            var incno = 0;
            var dataItems = ("data-items");
            var itemClass = ('.item');
            var id = 0;
            var btnParentSb = '';
            var itemsSplit = '';
            var sampwidth = $(itemsMainDiv).width();
            var bodyWidth = $('body').width();
            $(itemsDiv).each(function () {
                id = id + 1;
                var itemNumbers = $(this).find(itemClass).length;
                btnParentSb = $(this).parent().attr(dataItems);
                itemsSplit = btnParentSb.split(',');
                $(this).parent().attr("id", "MultiCarousel" + id);


                if (bodyWidth >= 1200) {
                    incno = itemsSplit[3];
                    itemWidth = sampwidth / incno;
                }
                else if (bodyWidth >= 992) {
                    incno = itemsSplit[2];
                    itemWidth = sampwidth / incno;
                }
                else if (bodyWidth >= 768) {
                    incno = itemsSplit[1];
                    itemWidth = sampwidth / incno;
                }
                else {
                    incno = itemsSplit[0];
                    itemWidth = sampwidth / incno;
                }
                $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
                $(this).find(itemClass).each(function () {
                    $(this).outerWidth(itemWidth);
                });

                $(".leftLst").addClass("over");
                $(".rightLst").removeClass("over");

            });
        }


        //this function used to move the items
        function ResCarousel(e, el, s) {
            var leftBtn = ('.leftLst');
            var rightBtn = ('.rightLst');
            var translateXval = '';
            var divStyle = $(el + ' ' + itemsDiv).css('transform');
            var values = divStyle.match(/-?[\d\.]+/g);
            var xds = Math.abs(values[4]);
            if (e == 0) {
                translateXval = parseInt(xds) - parseInt(itemWidth * s);
                $(el + ' ' + rightBtn).removeClass("over");

                if (translateXval <= itemWidth / 2) {
                    translateXval = 0;
                    $(el + ' ' + leftBtn).addClass("over");
                }
            }
            else if (e == 1) {
                var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
                translateXval = parseInt(xds) + parseInt(itemWidth * s);
                $(el + ' ' + leftBtn).removeClass("over");

                if (translateXval >= itemsCondition - itemWidth / 2) {
                    translateXval = itemsCondition;
                    $(el + ' ' + rightBtn).addClass("over");
                }
            }
            $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
        }

        //It is used to get some elements from btn
        function click(ell, ee) {
            var Parent = "#" + $(ee).parent().attr("id");
            var slide = $(Parent).attr("data-slide");
            ResCarousel(ell, Parent, slide);
        }

    });
</script>

</body>

</html>
