<?php $__env->startSection('content'); ?>
    <fieldset style="border: 1px solid white">
        <form method="POST" action="/admin/feeds/update/<?php echo e($feed->id); ?>" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <input type="hidden" name="_method" value="POST">
            <pre>
        <label for="title" style="font-size:200%">عنوان اطلاعیه : </label>
        <input type="text" style="font-size:150%" size="50" name="title" value="<?php echo e($feed->title); ?>">

        <label for = "content" style="font-size:200%">توضیحات اطلاعیه :</label>
        <textarea rows="10" cols="80" style="font-size:150%" name="content"><?php echo e($feed->content); ?></textarea>

        <label for="picture" style="font-size:200%">عکس اطلاعیه : </label>
        <input type  = "file" name="picture" style="color:white" value="<?php echo e($feed->picture); ?>">

        <input type = "submit" value="به روز رسانی اطلاعیه" class="btn btn-primary" style="font-size:200%;float:right">
        </pre>
        </form>
        <form method="DELETE" action="/admin/feeds/delete/<?php echo e($feed->id); ?>">
            <input type="submit" value="حذف کردن اطلاعیه" class="btn btn-info" style="font-size:200%">
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kariz2020\resources\views/admin/feeds/edit.blade.php ENDPATH**/ ?>