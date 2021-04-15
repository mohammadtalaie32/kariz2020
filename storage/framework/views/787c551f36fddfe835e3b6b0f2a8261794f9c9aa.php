<?php $__env->startSection("content"); ?>

    <fieldset style="border: 2px solid lightgray;padding:30px;max-width:100%;">
        <form method="POST" action="/admin/add_users/update/<?php echo e($user->id); ?>" id="users">
            <?php echo e(csrf_field()); ?>

            <label for="name" style="font-size:200%"> نام کاربر : </label>
            <br>
            <input type="text" size="50" name="name" style="font-size:150%;border:2px solid gray;border-radius:10px;max-width:100%" value="<?php echo e($user->name); ?>" required maxlength="100">
            <br><br>
            <label for="email" style="font-size:200%"> ایمیل کاربر : </label>
            <br>
            <input type="email" size="50" name="email" style="font-size:150%;border:2px solid gray;border-radius:10px;max-width:100%" value="<?php echo e($user->email); ?>" required maxlength="100">


            <br><br>

            <label for="roles">نقش کاربر : </label><br>
            <?php if($user->roles == "admin"): ?>
            <select id="roles" name="roles" form="users" class="browser-default custom-select">
                <option value="admin" id="id1" selected>Admin</option>
                <option value="teacher" id="id2">Teacher</option>
                <option value="student" id="id3">Student</option>

            </select>


            <?php elseif($user->roles == "teacher"): ?>
                <select id="roles" name="roles" form="users" class="browser-default custom-select">
                    <option value="admin" id="id1">Admin</option>
                    <option value="teacher" id="id2" selected>Teacher</option>
                    <option value="student" id="id3">Student</option>

                </select>


            <?php elseif($user->roles == "student"): ?>
                <select id="roles" name="roles" form="users" class="browser-default custom-select">
                    <option value="admin" id="id1">Admin</option>
                    <option value="teacher" id="id2" >Teacher</option>
                    <option value="student" id="id3" selected>Student</option>

                </select>
            <?php endif; ?>
            <br><br>
            <input type = "submit" value="به روزرسانی کاربر  " class="btn btn-primary" style="font-size:200%;max-width:100%">


        </form>
        
        <form method="DELETE" action="/admin/add_users/delete/<?php echo e($user->id); ?>">
            <?php echo e(csrf_field()); ?>

            <input type="submit" value="حذف کردن کاربر " class="btn btn-info" style="font-size:200%;float:right">
        </form>

    </fieldset>


<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.admin", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kariz2020\resources\views/admin/add_users/edit.blade.php ENDPATH**/ ?>