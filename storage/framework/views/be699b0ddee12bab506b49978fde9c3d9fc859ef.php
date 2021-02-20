<?php $__env->startSection('content'); ?>
<?php if(count($searched_courses) > 0): ?>
    <div class="row">
        <div class="offset-md-1"></div>
        <div class="col-md-12">
            <h5 class="alert alert-dismissible alert-info">برای ویرایش دوره ها روی نام دوره کلیک کنید!</h5>
        </div>
    </div>


    <!--Section: Block Content-->
    <!--Grid row-->
    <div class="row">
        <!--Grid column-->
        <div class="col-lg-12">
            <!-- Card -->
            <div class="card wish-list mb-3">
                <div class="card-body pt-3">

                    <?php $__currentLoopData = $searched_courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $searched_course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row mb-4">
                            <div class="col-md-5 col-lg-3 col-xl-3">
                                <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                    <img style="width 300px;height :150px" class="img-fluid w-100"
                                         src="/images/<?php echo e($searched_course->picture); ?>" onerror="this.src='<?php echo e(asset('images/no-image.png')); ?>';">
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-9 col-xl-9">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h3 style="color:white"><a href="/admin/courses/<?php echo e($searched_course->id); ?>/edit"><?php echo e($searched_course->name); ?></a></h3>
                                        <p class="mb-1 text-muted text-uppercase small"><?php echo e($searched_course->teacher); ?></p>
                                        <p class="mb-1 text-muted text-uppercase small"><?php echo e($searched_course->date); ?></p>
                                        <p class="mb-1 text-muted text-uppercase small"><?php echo e(\Illuminate\Support\Str::limit($searched_course->text, 100, ' ...')); ?></div>
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
<?php else: ?>
    <h2 style="color:white">هیچ دوره ای یا مدرسی با این نام پیدا نشد</h2>
<?php endif; ?>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kariz2020\resources\views/admin/courses/search.blade.php ENDPATH**/ ?>