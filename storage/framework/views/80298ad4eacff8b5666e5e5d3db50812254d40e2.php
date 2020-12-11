

<?php $__env->startSection("content"); ?>
    <div class="row container">
        <div class="col-md-2 pt-3 pb-1" style="text-align:center;background-color:rebeccapurple;color:white;border-radius: 10px">
            <h5>دکمه 1</h5>
        </div> 
        
        <div class="col-md-2 mr-3 pt-3 pb-1" style="text-align:center;background-color:rebeccapurple;color:white;border-radius: 10px">
            <h5>دکمه 2</h5>
        </div> 
    </div>

    <br>
    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $i = 0 ?>
        <?php if(($i % 2) == 0): ?>
            <div class="row container">
                <div class="col-md-12 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <h1> <?php echo e($course->name); ?> </h1>
                    <h4> <?php echo e($course->teacher); ?> </h2>
                    <h4> <?php echo e($course->date); ?> </h2>
                    <h4> <?php echo e($course->text); ?> </h2>
                </div> 
            </div>
        <?php endif; ?>
        


        <br> 
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.admin", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kariz2020\resources\views/admin/courses.blade.php ENDPATH**/ ?>