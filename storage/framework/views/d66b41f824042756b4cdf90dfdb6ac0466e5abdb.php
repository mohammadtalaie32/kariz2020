<?php $__env->startSection("content"); ?>
    <div class="row container mb-3">
        <div class="offset-md-1"></div>
        <div class="col-md-2 pt-3 pb-1" style="text-align:center;background-color:rebeccapurple;color:white;border-radius: 10px">
            <a href="/admin/courses/create"> <h5>ایجاد دوره جدید</h5></a>
        </div>

        
        
        
    </div>

    <!-- -->
    <br>


    <div class="row mb-3 row">
        <div class="offset-md-1"></div>
        <div class="col-md-10 pt-3 pb-1 input-group">
            <form method = "POST" class="form w-100" action="/admin/courses/searched">
                <?php echo e(csrf_field()); ?>

                <input type="text" name="searched_course" placeholder="جهت جستجو نام دوره یا مدرس را وارد نمایید سپس دکمه enter را فشار دهید" lang="fa" dir="rtl" class="form-control input-group-lg w-100"/>
                <datalist id="browsers">
                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option><?php echo e($course->name); ?></option>
                        <option><?php echo e($course->teacher); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </datalist>
                <input hidden class="float-left" type="submit" value="جستجو" class="btn btn-primary">
            </form>
        </div>
    </div>

    <div class="row mb-3">
        <div class="offset-md-1"></div>
        <div class="col-md-10">
            <h5 class="alert alert-dismissible alert-info">برای ویرایش دوره ها روی نام دوره کلیک کنید!</h5>
        </div>
    </div>
    <?php
        $i = 0;
    ?>
    <?php if($course_count % 2 == 0): ?>
        <?php while($i != $course_count): ?>
            <div class="row container">
                <div class="offset-md-1"></div>
                <div class="col-md-5 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <?php $course = $courses[$i] ?>
                    <a href = "/admin/courses/<?php echo e($course->id); ?>/edit"><h1 style="color:red"> <?php echo e($course->name); ?> </h1></a>
                    <h4> <?php echo e($course->teacher); ?> </h2>
                    <h4> <?php echo e($course->date); ?> </h2>
                        <?php
                        $string =  $course->text;
                        $len = strlen($string);
                        $string = substr($string,0,(intdiv($len,3)));

                        ?>
                    <h4 style="word-wrap:break-word"> <?php echo e($string); ?>... </h2>
                        <div style="float:left">
                            <img src="/images/<?php echo e($course->picture); ?>" height="100%" width="100%" alt="NO PHOTO">
                        </div>
                    <?php $i += 1 ?>
                </div>

                <div class="col-md-5 mr-4 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <?php $course = $courses[$i] ?>
                    <a href="/admin/courses/<?php echo e($course->id); ?>/edit"> <h1 style="color:red"> <?php echo e($course->name); ?> </h1></a>
                    <h4> <?php echo e($course->teacher); ?> </h2>
                    <h4> <?php echo e($course->date); ?> </h2>
                        <?php
                        $string =  $course->text;
                        $len = strlen($string);
                        $string = substr($string,0,(intdiv($len,3)));

                        ?>
                        <h4 style="word-wrap:break-word"> <?php echo e($string); ?>... </h2>
                        <div style="float:left">
                            <img src="/images/<?php echo e($course->picture); ?>" height="100%" width="100%" alt="NO PHOTO">
                        </div>
                    <?php $i += 1 ?>
                </div>
            </div>
            <BR>


        <?php endwhile; ?>
    <?php else: ?>
        <?php while($i != $course_count - 1): ?>
            <div class="row container">
                <div class="offset-md-1"></div>
                <div class="col-md-5 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <?php $course = $courses[$i] ?>
                    <a href="/admin/courses/<?php echo e($course->id); ?>/edit"><h1 style="color:red"> <?php echo e($course->name); ?> </h1></a>
                    <h4> <?php echo e($course->teacher); ?> </h2>
                    <h4> <?php echo e($course->date); ?> </h2>
                        <?php
                        $string =  $course->text;
                        $len = strlen($string);
                        $string = substr($string,0,(intdiv($len,3)));

                        ?>
                        <h4 style="word-wrap:break-word"> <?php echo e($string); ?>... </h2>
                        <div style="float:left">
                            <img src="/images/<?php echo e($course->picture); ?>" height="100%" width="100%" alt="NO PHOTO">
                        </div>
                    <?php $i += 1 ?>
                </div>
                <div class="col-md-5 mr-4 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <?php $course = $courses[$i] ?>
                    <a href="/admin/courses/<?php echo e($course->id); ?>/edit"><h1 style="color:red"> <?php echo e($course->name); ?> </h1></a>
                    <h4> <?php echo e($course->teacher); ?> </h2>
                    <h4> <?php echo e($course->date); ?> </h2>
                        <?php
                        $string =  $course->text;
                        $len = strlen($string);
                        $string = substr($string,0,(intdiv($len,3)));

                        ?>
                        <h4 style="word-wrap:break-word"> <?php echo e($string); ?>... </h2>
                        <div style="float:left">
                            <img src="/images/<?php echo e($course->picture); ?>" height="100%" width="100%" alt="NO PHOTO">
                        </div>
                    <?php $i += 1 ?>
                </div>
            </div>
            <br>
        <?php endwhile; ?>
        <div class="row ">
            <div class="offset-md-1"></div>
            <div class="col-md-10 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                <?php $course = $courses[$i] ?>
                <a href="/admin/courses/<?php echo e($course->id); ?>/edit"><h1 style="color:red"> <?php echo e($course->name); ?> </h1></a>
                <h4> <?php echo e($course->teacher); ?> </h2>
                <h4> <?php echo e($course->date); ?> </h2>
                    <?php
                    $string =  $course->text;
                    $len = strlen($string);
                    $string = substr($string,0,(intdiv($len,3)));

                    ?>
                    <h4 style="word-wrap:break-word"> <?php echo e($string); ?>... </h2>
                    <div style="float:left">
                        <img src="/images/<?php echo e($course->picture); ?>" height="100%" width="100%" alt="NO PHOTO">
                    </div>
                <?php $i += 1 ?>
            </div>
        </div>
    <?php endif; ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.admin", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\kariz2020\resources\views/admin/courses.blade.php ENDPATH**/ ?>