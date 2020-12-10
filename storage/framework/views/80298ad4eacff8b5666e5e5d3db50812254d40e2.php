

<?php $__env->startSection("content"); ?>

    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="container p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
            <h1><?php echo e($course->name); ?></h1>
            <h4> <?php echo e($course->teacher); ?></h2>
            <h4> <?php echo e($course->date); ?></h2>
            <h4> <?php echo e($course->text); ?></h2>
        </div> 

        <br> 
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.admin", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kariz2020\resources\views/admin/courses.blade.php ENDPATH**/ ?>