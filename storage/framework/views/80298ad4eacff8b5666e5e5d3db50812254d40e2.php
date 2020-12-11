

<?php $__env->startSection("content"); ?>
    <div class="row container mb-3">
        <div class="offset-md-1"></div>
        <div class="col-md-2 pt-3 pb-1" style="text-align:center;background-color:rebeccapurple;color:white;border-radius: 10px">
            <h5>دکمه 1</h5>
        </div> 
        
        <div class="col-md-2 mr-3 pt-3 pb-1" style="text-align:center;background-color:rebeccapurple;color:white;border-radius: 10px">
            <h5>دکمه 2</h5>
        </div> 
    </div>
    <br>
    <?php 
        $i = 0;
    ?>
    <?php if($course_count % 2 == 0): ?>
        <?php while($i != $course_count): ?>
            <div class="row container">
                <div class="offset-md-1"></div>
                <div class="col-md-5 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <?php $course = $courses[$i] ?>
                    <h1> <?php echo e($course->name); ?> </h1>
                    <h4> <?php echo e($course->teacher); ?> </h2>
                    <h4> <?php echo e($course->date); ?> </h2>
                    <h4> <?php echo e($course->text); ?> </h2>
                    <?php $i += 1 ?>
                </div> 
            
                <div class="col-md-5 mr-4 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <?php $course = $courses[$i] ?>
                    <h1> <?php echo e($course->name); ?> </h1>
                    <h4> <?php echo e($course->teacher); ?> </h2>
                    <h4> <?php echo e($course->date); ?> </h2>
                    <h4> <?php echo e($course->text); ?> </h2>
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
                    <h1> <?php echo e($course->name); ?> </h1>
                    <h4> <?php echo e($course->teacher); ?> </h2>
                    <h4> <?php echo e($course->date); ?> </h2>
                    <h4> <?php echo e($course->text); ?> </h2>
                    <?php $i += 1 ?>
                </div> 
                <div class="col-md-5 mr-4 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <?php $course = $courses[$i] ?>
                    <h1> <?php echo e($course->name); ?> </h1>
                    <h4> <?php echo e($course->teacher); ?> </h2>
                    <h4> <?php echo e($course->date); ?> </h2>
                    <h4> <?php echo e($course->text); ?> </h2>
                    <?php $i += 1 ?>
                </div> 
            </div>
            <br>
        <?php endwhile; ?>
        <div class="row ">
            <div class="offset-md-1"></div>
            <div class="col-md-10 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                <?php $course = $courses[$i] ?>
                <h1> <?php echo e($course->name); ?> </h1>
                <h4> <?php echo e($course->teacher); ?> </h2>
                <h4> <?php echo e($course->date); ?> </h2>
                <h4> <?php echo e($course->text); ?> </h2>
                <?php $i += 1 ?>
            </div> 
        </div>
    <?php endif; ?>
    
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.admin", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kariz2020\resources\views/admin/courses.blade.php ENDPATH**/ ?>