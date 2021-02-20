<?php $__env->startSection("content"); ?>
    <form method = "POST" action="/admin/feeds/searched">
        <?php echo e(csrf_field()); ?>

        <input type="text" name="searched_feed" name="browseer" list="browsers" class="animate" placeholder="نام اطلاعیه را جست و جو کنید">
         <datalist id="browsers">
             <?php $__currentLoopData = $feeds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <option><?php echo e($feed->title); ?></option>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </datalist>
        <input hidden type="submit" value="جستجو" class="btn btn-primary">
    </form><br><br><br>
    <div class="row container mb-3">
        <div class="offset-md-1"></div>
        <div class="col-md-2 pt-3 pb-1" style="text-align:center;background-color:rebeccapurple;color:white;border-radius: 10px">
            <a href="/admin/feeds/create"> <h5>ایجاد اطلاعیه جدید</h5></a>
        </div>


    </div>

    <div class="row mb-3">
        <div class="offset-md-1"></div>
        <div class="col-md-10">
            <h5 class="alert alert-dismissible alert-info">برای ویرایش اطلاعیه ها روی نام اطلاعیه کلیک کنید!</h5>
        </div>
    </div>

    <?php
        $i = 0;
    ?>
    <?php if($feed_count % 2 == 0): ?>
        <?php while($i != $feed_count): ?>
            <div class="row container">
                <div class="offset-md-1"></div>
                <div class="col-md-5 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <?php $feed = $feeds[$i] ?>
                        <a href = "/admin/feeds/<?php echo e($feed->id); ?>/edit"><h1 style="color:red"> <?php echo e($feed->title); ?> </h1></a>

                    <h4 style="word-wrap:break-word" class="text"> <?php echo e($feed->content); ?>... </h2>
                    <h4> <?php echo e($feed->date); ?> </h2>
                    <h4> <?php echo e($feed->text); ?> </h2>
                        <div style="float:left">
                            <img src="/images/<?php echo e($feed->picture); ?>" height="100%" width="100%" alt="NO PHOTO">
                        </div>
                    <?php $i += 1 ?>
                </div>

                <div class="col-md-5 mr-4 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <?php $feed = $feeds[$i] ?>
                        <a href = "/admin/feeds/<?php echo e($feed->id); ?>/edit"><h1 style="color:red"> <?php echo e($feed->title); ?> </h1></a>
                        <?php
                        $string =  $feed->content;
                        $len = strlen($string);
                        $string = substr($string,0,(intdiv($len,3)));

                        ?>
                        <h4 style="word-wrap:break-word" class="text"> <?php echo e($feed->content); ?>... </h2>
                    <h4> <?php echo e($feed->date); ?> </h2>
                    <h4> <?php echo e($feed->text); ?> </h2>
                        <div style="float:left">
                            <img src="/images/<?php echo e($feed->picture); ?>" height="100%" width="100%" alt="NO PHOTO">
                        </div>
                    <?php $i += 1 ?>
                </div>
            </div>
            <BR>


        <?php endwhile; ?>
    <?php else: ?>
        <?php while($i != $feed_count - 1): ?>
            <div class="row container">
                <div class="offset-md-1"></div>
                <div class="col-md-5 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <?php $feed = $feeds[$i] ?>
                        <a href = "/admin/feeds/<?php echo e($feed->id); ?>/edit"><h1 style="color:red"> <?php echo e($feed->title); ?> </h1></a>

                        <h4 style="word-wrap:break-word" class="text"> <?php echo e($feed->content); ?>... </h2>
                    <h4> <?php echo e($feed->date); ?> </h2>
                    <h4> <?php echo e($feed->text); ?> </h2>
                        <div style="float:left">
                            <img src="/images/<?php echo e($feed->picture); ?>" height="100%" width="100%" alt="NO PHOTO">
                        </div>
                    <?php $i += 1 ?>
                </div>
                <div class="col-md-5 mr-4 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <?php $feed = $feeds[$i] ?>
                        <a href = "/admin/feeds/<?php echo e($feed->id); ?>/edit"><h1 style="color:red"> <?php echo e($feed->title); ?> </h1></a>

                        <h4 style="word-wrap:break-word" class="text"> <?php echo e($feed->content); ?>... </h2>
                    <h4> <?php echo e($feed->date); ?> </h2>
                    <h4> <?php echo e($feed->text); ?> </h2>
                        <div style="float:left">
                            <img src="/images/<?php echo e($feed->picture); ?>" height="100%" width="100%" alt="NO PHOTO">
                        </div>
                    <?php $i += 1 ?>
                </div>
            </div>
            <br>
        <?php endwhile; ?>
        <div class="row ">
            <div class="offset-md-1"></div>
            <div class="col-md-10 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                <?php $feed = $feeds[$i] ?>
                    <a href = "/admin/feeds/<?php echo e($feed->id); ?>/edit"><h1 style="color:red"> <?php echo e($feed->title); ?> </h1></a>

                    <h4 style="word-wrap:break-word" class="text"> <?php echo e($feed->content); ?>... </h2>
                <h4> <?php echo e($feed->date); ?> </h2>
                <h4> <?php echo e($feed->text); ?> </h2>
                    <div style="float:left">
                        <img src="/images/<?php echo e($feed->picture); ?>" height="100%" width="100%" alt="NO PHOTO">
                    </div>
                <?php $i += 1 ?>
            </div>
        </div>
    <?php endif; ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.admin", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kariz2020\resources\views/admin/feeds.blade.php ENDPATH**/ ?>