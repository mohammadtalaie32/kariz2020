<?php $__env->startSection('content'); ?>
    <fieldset style="border: 1px solid white;padding:30px;max-width:100%">
        <form method="POST" action="/admin/books/update/<?php echo e($book->id); ?>" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <input type="hidden" name="_method" value="POST">

        <label for="name" style="font-size:200%">نام کتاب :</label>
         <br>
        <input type="text" style="font-size:150%;border:2px solid gray;Border-radius:10px;max-width:100%" size="50" name="name" value="<?php echo e($book->name); ?>" required>
        <br>
        <br>
        <label for="price" style="font-size:200%">قیمت کتاب : </label>
        <br>
        <input type="text" style="font-size:150%;border:2px solid gray;Border-radius:10px;max-width:100%" size="50" name="price" value="<?php echo e($book->price); ?>" required>
        <br>
        <br>

        <label for="picture" style="font-size:200%">عکس کتاب : </label>
        <br>
        <input type  = "file" name="picture" style="color:white" value="<?php echo e($book->picture); ?>">
        <br>
        <br>
        <input type = "submit" value="به روز رسانی کتاب  " class="btn btn-primary" style="font-size:200%;float:right">
        <br>
        </form>
        <br>
        <br>
        <form method="DELETE" action="/admin/books/delete/<?php echo e($book->id); ?>">
            <?php echo e(csrf_field()); ?>

            <input type="submit" value="حذف کردن کتاب " class="btn btn-info" style="font-size:200%;float:right">
        </form>
        <br><br><br><br>
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