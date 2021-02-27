

<?php $__env->startSection("content"); ?>
    <div>
        <form method = "POST" action="/admin/add_users/searched">
            <?php echo e(csrf_field()); ?>

            <input style="margin-right:0px;padding-right:20px;padding-left: 20px" type="text" name="searched_user" name="browser" placeholder="نام کاربر جست و جو کنید ..." list="browsers" class="animate">
            <datalist id="browsers">
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option><?php echo e($user->name); ?></option>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </datalist>
            <input hidden type="submit" value="جستجو" class="btn btn-primary" >
        </form>
    </div><br><br><br>

    <div class="row mb-3">
        <div class="col-md-2 mr-3 pt-3 pb-1" style="text-align:center;background-color:rebeccapurple;color:white;border-radius: 10px">
            <a href="/admin/add_users/create"> <h5>ایجاد کاربر جدید</h5></a>
        </div>


    </div>













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
           <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr id="row_content" onclick="window.location.href = ('/admin/add_users/<?php echo e($user->id); ?>/edit');">
                   <td style="color:white"><?php echo e(($user->Role)[0]["role_name"]); ?></td>
                   <td style="color:white"><?php echo e($user->email); ?></td>
                   <td style="color:white"> <?php echo e($user->name); ?></td>
                   <td style="color:white"><?php echo e($count++); ?></td>
               </tr>

           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.admin", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\kariz2020\resources\views/admin/users.blade.php ENDPATH**/ ?>