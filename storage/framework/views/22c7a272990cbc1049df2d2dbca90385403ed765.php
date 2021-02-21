<?php $__env->startSection("content"); ?>

    <div class="row mb-3">
        <div class="col-md-2 mr-3 pt-3 pb-1" style="text-align:center;background-color:dodgerblue;color:white;border-radius: 10px">
            <a href="/admin/add_users/create"> <h5>ایجاد کاربر جدید</h5></a>
        </div>


    </div>













<?php
    $count = 1;
?>
    <div class="container">

        <table class="table table-hover table-striped table-info" id="table_content">
            <thead>
            <tr id="head_content">
                <th>Role</th>
                <th>Email</th>
                <th>User Name</th>
                <th>Id</th>
            </tr>
            </thead>
            <tbody>
           <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr id="row_content" onclick="window.location.replace('/admin/add_users/<?php echo e($user->id); ?>/edit');">
                   <td><?php echo e(($user->Role)[0]["role_name"]); ?></td>
                   <td><?php echo e($user->email); ?></td>
                   <td><a href="/admin/add_users/<?php echo e($user->id); ?>/edit" style="color:#8b92a9"> <?php echo e($user->name); ?></a></td>
                   <td><?php echo e($count++); ?></td>
               </tr>

           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.admin", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kariz2020\resources\views/admin/users.blade.php ENDPATH**/ ?>