
<?php $__env->startSection('content'); ?>
<?php if(count($searched_courses) > 0): ?>
    <div>
        <h1 style="text-align:center;color:white">برای ویرایش دوره ها روی نام دوره کلیک کنید</h1>
    </div>
    <br>
    <?php $__currentLoopData = $searched_courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $searched_course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div style = "background-color:rebeccapurple;border: 1px solid black;Border-radius:10px;padding:50px;max-width:100%">
            <img src="/images/<?php echo e($searched_course->picture); ?>" height="10%" width="10%" alt="NO PHOTO" style="float:left">
            <a href = "/admin/courses/<?php echo e($searched_course->id); ?>/edit"><h1 style="color:red"> <?php echo e($searched_course->name); ?> </h1></a>
            <h4 style="color:white"> <?php echo e($searched_course->teacher); ?> </h2>
            <h4 style="color: white"> <?php echo e($searched_course->date); ?> </h2>
                <?php
                        $string =  $searched_course->text;
                        $len = strlen($string);
                        $string = substr($string,0,(intdiv($len,3)));

                ?>
                <p style="color:white;word-wrap:break-word;"> <?php echo e($string); ?>... </p>


    </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
    <h2 style="color:white">هیچ دوره ای یا مدرسی با این نام پیدا نشد</h2>
<?php endif; ?>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\kariz2020\resources\views/admin/courses/search.blade.php ENDPATH**/ ?>