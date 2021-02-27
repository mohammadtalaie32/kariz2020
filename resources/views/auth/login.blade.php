<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('mylogin/font.css')}}">

    <link rel="stylesheet" href="{{asset('mylogin/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('mylogin/bootstrap.min.css')}}">

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('mylogin/style.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('font.css')}}"/>

    <title>Login #7</title>
</head>

<style>
    h1,h2,h3,h4,h5,h6,p,span,button,ul ,li {
        direction: rtl;
        font-family: '20S-Yekan' !important;
        font-weight: bolder;
    }
    .myinp {
        font-size:15px !important;
    }
</style>

<body>



<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="mylogin/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 contents">
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8">
                        <div class="mb-4" style="text-align: center">
                            <h3>ورود به سایت</h3>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group first">
                                <input placeholder="Email Address" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="form-control myinp">
                            </div>
                            <div class="form-group last mb-4">
                                <input placeholder="Password" id="password" type="password" name="password" required autocomplete="current-password" class="form-control myinp">
                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">مرا بخاطر بسپار</span>
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                                    <div class="control__indicator"></div>
                                </label>

                                @if (Route::has('password.request'))
                                    <span class="ml-auto">
                                        <a class="forgot-pass" style="direction: rtl !important;text-align: right" href="{{ route('password.request') }}">
                                           رمز عبور خود را فراموش کرده ام
                                        </a>
                                    </span>
                                @endif

                            </div>

                            <button type="submit" value="Log In" class="btn btn-block btn-primary">ورود</button>

                            <br>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li style="text-align: right">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif


                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>






