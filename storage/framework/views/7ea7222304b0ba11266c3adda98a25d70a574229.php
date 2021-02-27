<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset('mylogin/font.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('mylogin/owl.carousel.min.css')); ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('mylogin/bootstrap.min.css')); ?>">

    <!-- Style -->
    <link rel="stylesheet" href="<?php echo e(asset('mylogin/style.css')); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('font.css')); ?>"/>

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
                        <form method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group first">
                                <input placeholder="Email Address" id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus class="form-control myinp">
                            </div>
                            <div class="form-group last mb-4">
                                <input placeholder="Password" id="password" type="password" name="password" required autocomplete="current-password" class="form-control myinp">
                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">مرا بخاطر بسپار</span>
                                    <input type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>/>
                                    <div class="control__indicator"></div>
                                </label>

                                <?php if(Route::has('password.request')): ?>
                                    <span class="ml-auto">
                                        <a class="forgot-pass" style="direction: rtl !important;text-align: right" href="<?php echo e(route('password.request')); ?>">
                                           رمز عبور خود را فراموش کرده ام
                                        </a>
                                    </span>
                                <?php endif; ?>

                            </div>

                            <button type="submit" value="Log In" class="btn btn-block btn-primary">ورود</button>

                            <br>

                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li style="text-align: right"><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>


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







                                <?php if(Route::has('password.request')): ?>
                                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('Forgot Your Password?')); ?>

                                    </a>
                                <?php endif; ?>









<?php /**PATH C:\wamp64\www\kariz2020\resources\views/auth/login.blade.php ENDPATH**/ ?>