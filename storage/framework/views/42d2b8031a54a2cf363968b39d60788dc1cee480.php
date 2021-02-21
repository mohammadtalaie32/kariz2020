<?php $__env->startSection('content'); ?>
    <?php if(count($searched_feeds) > 0): ?>

        <div class="row">
            <div class="offset-md-1"></div>
            <div class="col-md-12">
                <h5 class="alert alert-dismissible alert-info">برای ویرایش اطلاعیه ها ها روی نام اطلاعیه کلیک کنید!</h5>
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

                        <?php $__currentLoopData = $searched_feeds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $searched_feed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row mb-4">
                                <div class="col-md-5 col-lg-3 col-xl-3">
                                    <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                        <img style="width 300px;height :150px" class="img-fluid w-100"
                                             src="/images/<?php echo e($searched_feed->picture); ?>" onerror="this.src='<?php echo e(asset('images/no-image.png')); ?>';">
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-9 col-xl-9">
                                    <div class="d-flex justify-content-between">
                                        <div style="word-wrap:break-word;overflow:hidden">
                                            <h3 style="color:white" class=mt-2"><a href="/admin/feeds/<?php echo e($searched_feed->id); ?>/edit"> <?php echo e($searched_feed->title); ?></a></h3>


                                            <p class="mb-1 text-muted text-uppercase small text"><?php echo e($searched_feed->content); ?></p>
                                        </div>
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
        <h2 style="color:white">هیچ اطلاعیه ای  با این نام پیدا نشد</h2>
    <?php endif; ?>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kariz2020\resources\views/admin/feeds/search.blade.php ENDPATH**/ ?>