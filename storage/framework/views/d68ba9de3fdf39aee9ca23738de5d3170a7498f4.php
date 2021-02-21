<?php $__env->startSection("content"); ?>



    <fieldset style="border: 2px solid lightgray;padding:30px;max-width:100%;">
    <form method="POST" action="/admin/add_users/store" id="users">
        <?php echo e(csrf_field()); ?>

        <label for="name" style="font-size:200%"> نام کاربر : </label>
        <br>
        <input type="text" size="50" name="name" style="font-size:150%;border:2px solid gray;border-radius:10px;max-width:100%" required>
        <br><br>
        <label for="email" style="font-size:200%"> ایمیل کاربر : </label>
        <br>
        <input type="email" size="50" name="email" style="font-size:150%;border:2px solid gray;border-radius:10px;max-width:100%" required>
        <br><br>
        <label for="password" style="font-size:200%"> رمز کاربر : </label><br>
        <input type="password" size="50" name="password" style="font-size:150%;border:2px solid gray;border-radius:10px;max-width:100%" minlength="8" required>

        <br><br>


        <label for="roles">نقش کاربر : </label><br>
        <select id="roles" name="roles" form="users" class="browser-default custom-select">
            <option value="admin">Admin</option>
            <option value="teacher">Teacher</option>
            <option value="student" selected>Student</option>

        </select>
        <br><br>
        <input type = "submit" value="ایجاد کاربر  " class="btn btn-primary" style="font-size:200%;max-width:100%">


    </form>

    </fieldset>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.admin", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kariz2020\resources\views/admin/add_users/create.blade.php ENDPATH**/ ?>