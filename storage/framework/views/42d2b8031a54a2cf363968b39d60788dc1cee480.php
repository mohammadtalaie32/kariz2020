<?php $__env->startSection('content'); ?>
    <?php if(count($searched_feeds) > 0): ?>
        <div>
            <h1 style="text-align:center;color:white">برای ویرایش اطلاعیه ها روی عنوان اطلاعیه کلیک کنید</h1>
        </div>
        <br>
        <?php $__currentLoopData = $searched_feeds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $searched_feed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style = "background-color:rebeccapurple;border: 1px solid black ;Border-radius:10px;padding:50px">
                <img src="/images/<?php echo e($searched_feed->picture); ?>" height="10%" width="10%" alt="NO PHOTO" style="float:left">
                <a href = "/admin/feeds/<?php echo e($searched_feed->id); ?>/edit"><h1 style="color:red;word-wrap:break-word"> <?php echo e($searched_feed->title); ?> </h1></a>

                <p style="color:white;word-wrap:break-word" class="text"> <?php echo e($searched_feed->content); ?>... </p>



            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <h2 style="color:white">هیچ اطلاعیه ای  با این نام پیدا نشد</h2>
    <?php endif; ?>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kariz2020\resources\views/admin/feeds/search.blade.php ENDPATH**/ ?>