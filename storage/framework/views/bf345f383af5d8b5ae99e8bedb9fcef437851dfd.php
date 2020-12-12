<?php $__env->startSection('content'); ?>
    <fieldset style="border: 2px solid lightgray ">
    <form method="POST" action="/admin/courses/store" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <pre>
        <label for="name">نام دوره :</label>
        <input type="text" size="50" name="name">

        <label for="teacher">نام مدرس دوره :</label>
        <input type="text" size="50" name="teacher">

        <label for = "date">تاریخ دوره :</label>
        <input type="text" size="50" name="date">

        <label for = "text">توضیحات دوره :</label>
        <textarea rows="10" cols="100" name="text"></textarea>

        <label for="picture">عکس دوره : </label>
        <input type  = "file" name="picture" style="color:white" >

        <input type = "submit" value="ایجاد دوره" class="btn btn-primary">
        </pre>
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

    </fieldset>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kariz2020\resources\views/admin/courses/create.blade.php ENDPATH**/ ?>