<?php $__env->startSection('content'); ?>
    <?php if(count($searched_books) > 0): ?>
        <div>
            <h1 style="text-align:center;color:white">برای ویرایش کتاب ها روی نام کتاب کلیک کنید</h1>
        </div>
        <br>
        <?php $__currentLoopData = $searched_books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $searched_book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style = "background-color:rebeccapurple;border: 1px solid black;Border-radius:10px;padding:50px">
                <img src="/images/<?php echo e($searched_book->picture); ?>" height="10%" width="10%" alt="NO PHOTO" style="float:left">
                <a href = "/admin/books/<?php echo e($searched_book->id); ?>/edit"><h1 style="color:red;word-wrap:break-word"> <?php echo e($searched_book->name); ?> </h1></a>
                <h2 style="color:white;word-wrap:break-word"> <?php echo e($searched_book->price); ?> </h2>



            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <h2 style="color:white">هیچ کتابی   با این نام پیدا نشد</h2>
    <?php endif; ?>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kariz2020\resources\views/admin/books/search.blade.php ENDPATH**/ ?>