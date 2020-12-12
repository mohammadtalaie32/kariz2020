<?php $__env->startSection('content'); ?>
    <fieldset style="border: 2px solid white"></fieldset>
    <form method="POST" action="/admin/courses/update/<?php echo e($course->id); ?>" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

      <input type="hidden" name="_method" value="POST">
        <pre>
        <label for="name">نام دوره :</label>
        <input type="text" size="50" name="name" value="<?php echo e($course->name); ?>">

        <label for="teacher">نام مدرس دوره :</label>
        <input type="text" size="50" name="teacher" value="<?php echo e($course->teacher); ?>">

        <label for = "date">تاریخ دوره :</label>
        <input type="text" size="50" name="date" value="<?php echo e($course->date); ?>">

        <label for = "text">توضیحات دوره :</label>
        <textarea rows="10" cols="100" name="text"><?php echo e($course->text); ?></textarea>

        <label for="picture">عکس دوره : </label>
        <input type  = "file" name="picture" style="color:white" value="<?php echo e($course->picture); ?>">

        <input type = "submit" value="به روز رسانی دوره" class="btn btn-primary">
        </pre>
    </form>
    <pre>
        <form method="DELETE" action="/admin/courses/delete/<?php echo e($course->id); ?>">
            <input type="submit" value="حذف کردن دوره" class="btn btn-info">
        </form>
    </pre>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kariz2020\resources\views/admin/courses/edit.blade.php ENDPATH**/ ?>