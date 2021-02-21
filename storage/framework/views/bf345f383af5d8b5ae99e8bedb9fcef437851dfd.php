<?php $__env->startSection('content'); ?>
    <fieldset style="border: 2px solid lightgray;padding:30px;max-width:100%">
    <form method="POST" action="/admin/courses/store" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>


        <label for="name" style="font-size:200%">نام دوره :</label>
        <br>
        <input type="text" size="50" name="name" style="font-size:150%;border:2px solid gray;Border-radius:10px;max-width:100%" required>
        <br>
        <br>
        <label for="teacher" style="font-size:200% ">نام مدرس دوره :</label>
        <br>
        <input type="text" size="50" name="teacher" style="font-size:150%;border:2px solid gray;Border-radius:10px;max-width:100%" required>
        <br>
        <br>
        <label for = "date" style="font-size:200%">تاریخ دوره :</label>
        <br>
        <input type="text" size="50" name="date" style="font-size:150%;border:2px solid gray;Border-radius:10px;max-width:100%" required>
        <br>
        <br>
        <label for = "text" style="font-size:200%">توضیحات دوره :</label>
        <br>
        <textarea  rows="10" name="text" style="font-size:150%;border:2px solid gray;Border-radius:10px;width:100%" required></textarea>
        <br>
        <br>
        <label for="picture" style="font-size:200%">عکس دوره : </label>
        <br>
        <input type  = "file" name="picture" style="color:white">
        <br>
        <br>
        <input type = "submit" value="ایجاد دوره" class="btn btn-primary" style="font-size:200%">
        <br>
    </form>
        <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
z
    </fieldset>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kariz2020\resources\views/admin/courses/create.blade.php ENDPATH**/ ?>