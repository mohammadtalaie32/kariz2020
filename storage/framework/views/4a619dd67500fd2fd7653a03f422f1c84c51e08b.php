<?php $__env->startSection("content"); ?>
    <?php if(count($searched_users) > 0): ?>
        <?php
        $count = 1;
        ?>
        <div class="container">

            <table class="table table-hover table-striped table-dark" id="table_content">
                <thead>
                <tr id="head_content">
                    <th>Role</th>
                    <th>Email</th>
                    <th>User Name</th>
                    <th>Id</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $searched_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $searched_user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr id="row_content" onclick="window.location.href = ('/admin/add_users/<?php echo e($searched_user->id); ?>/edit');">
                        <td style="color:white"><?php echo e($searched_user->roles); ?></td>
                        <td style="color:white"><?php echo e($searched_user->email); ?></td>
                        <td style="color:white"> <?php echo e($searched_user->name); ?></td>
                        <td style="color:white"><?php echo e($count++); ?></td>
                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <h2 style="color:white">هیچ کاربری با این نام پیدا نشد</h2>
    <?php endif; ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.admin", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kariz2020\resources\views/admin/add_users/search.blade.php ENDPATH**/ ?>