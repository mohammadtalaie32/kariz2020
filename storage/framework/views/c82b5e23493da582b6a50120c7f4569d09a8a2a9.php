<?php $__env->startSection('content'); ?>
    <fieldset style="border: 1px solid white">
        <form method="POST" action="/admin/books/update/<?php echo e($book->id); ?>" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <input type="hidden" name="_method" value="POST">
            <pre>
        <label for="name" style="font-size:200%">نام کتاب :</label>
        <input type="text" style="font-size:150%" size="50" name="name" value="<?php echo e($book->name); ?>">

        <label for="price" style="font-size:200%">قیمت کتاب : </label>
        <input type="text" style="font-size:150%" size="50" name="price" value="<?php echo e($book->price); ?>">



        <label for="picture" style="font-size:200%">عکس کتاب : </label>
        <input type  = "file" name="picture" style="color:white" value="<?php echo e($book->picture); ?>">

        <input type = "submit" value="به روز رسانی کتاب  " class="btn btn-primary" style="font-size:200%;float:right">
        </pre>
        </form>
        <form method="DELETE" action="/admin/books/delete/<?php echo e($book->id); ?>">
            <input type="submit" value="حذف کردن کتاب " class="btn btn-info" style="font-size:200%">
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
    <hr>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kariz2020\resources\views/admin/books/edit.blade.php ENDPATH**/ ?>