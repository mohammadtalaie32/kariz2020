
<?php $__env->startSection('content'); ?>
    <fieldset style="border: 2px solid lightgray ">
        <form method="POST" action="/admin/books/store" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <pre>
        <label for="name" style="font-size:200%"> نام کتاب : </label>
        <input type="text" size="50" name="name" style="font-size:150%">

        <label for="price" style="font-size:200% ">قیمت کتاب : </label>
        <input type="text" size="50" name="price" style="font-size:150%">

        <label for="picture" style="font-size:200%">عکس کتاب : </label>
        <input type  = "file" name="picture" style="color:white" >

        <input type = "submit" value="ایجاد کتاب  " class="btn btn-primary" style="font-size:200%">
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


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kariz2020\resources\views/admin/books/create.blade.php ENDPATH**/ ?>