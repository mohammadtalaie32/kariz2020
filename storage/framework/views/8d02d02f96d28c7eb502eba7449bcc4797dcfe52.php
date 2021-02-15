<?php $__env->startSection('content'); ?>
    <fieldset style="border: 1px solid white;padding:30px;max-width:100%">
    <form method="POST" action="/admin/courses/update/<?php echo e($course->id); ?>" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

      <input type="hidden" name="_method" value="POST">

        <label for="name" style="font-size:200%">نام دوره :</label>
        <br>
        <input type="text" style="font-size:150%;border:2px solid gray;Border-radius:10px;max-width:100%" size="50" name="name" value="<?php echo e($course->name); ?>">
        <br>
        <br>
        <label for="teacher" style="font-size:200%">نام مدرس دوره :</label>
        <br>
        <input type="text" style="font-size:150%;border:2px solid gray;Border-radius:10px;max-width:100%" size="50" name="teacher" value="<?php echo e($course->teacher); ?>">
        <br>
        <br>
        <label for = "date" style="font-size:200%">تاریخ دوره :</label>
        <br>
        <input type="text" style="font-size:150%;border:2px solid gray;Border-radius:10px;max-width:100%" size="50" name="date" value="<?php echo e($course->date); ?>">
        <br>
        <br>
        <label for = "text" style="font-size:200%">توضیحات دوره :</label>
        <br>
        <textarea rows="10"  style="font-size:150%;border:2px solid gray;Border-radius:10px;width:100%" name="text"><?php echo e($course->text); ?></textarea>
        <br>
        <br>
        <label for="picture" style="font-size:200%">عکس دوره : </label>
        <br>
        <input type  = "file" name="picture" style="color:white" value="<?php echo e($course->picture); ?>">
        <br>
        <br>
        <input type = "submit" value="به روز رسانی دوره" class="btn btn-primary" style="font-size:200%;float:right">
        <br>
    </form>
        <br>
        <br>
        <form method="DELETE" action="/admin/courses/delete/<?php echo e($course->id); ?>">
            <?php echo e(csrf_field()); ?>

            <input type="submit" value="حذف کردن دوره" class="btn btn-info" style="font-size:200%;float:right">
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kariz2020\resources\views/admin/courses/edit.blade.php ENDPATH**/ ?>