

<?php $__env->startSection("content"); ?>

    <div>
        <form method = "POST" action="/admin/books/searched">
            <?php echo e(csrf_field()); ?>

            <input style="margin-right:0px;padding-right:20px;padding-left: 20px" type="text" name="searched_book" name="browser" placeholder="نام کتاب جست و جو کنید ..." list="browsers" class="animate">
            <datalist id="browsers">
                <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option><?php echo e($book->name); ?></option>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </datalist>
            <input hidden type="submit" value="جستجو" class="btn btn-primary" >
        </form>
    </div><br><br><br>

    <div class="row mb-3">
        <div class="col-md-2 mr-3 pt-3 pb-1" style="text-align:center;background-color:rebeccapurple;color:white;border-radius: 10px">
            <a href="/admin/books/create"> <h5>ایجاد کتاب جدید</h5></a>
        </div>


    </div>


    <div class="row">
        <div class="offset-md-1"></div>
        <div class="col-md-12">
            <h5 class="alert alert-dismissible alert-info">برای ویرایش کتاب  ها روی نام کتاب کلیک کنید!</h5>
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

                    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row mb-4">
                            <div class="col-md-5 col-lg-3 col-xl-3">
                                <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                    <img style="width 300px;height :150px" class="img-fluid w-100"
                                         src="/images/<?php echo e($book->picture); ?>" onerror="this.src='<?php echo e(asset('images/no-image.png')); ?>';">
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-9 col-xl-9">
                                <div class="pt-2 d-flex justify-content-between">
                                    <div style="overflow:hidden;word-wrap:break-word">
                                        <h3 style="color:white" class="mt-4 pb-2"><a href="/admin/books/<?php echo e($book->id); ?>/edit"> <?php echo e($book->name); ?></a></h3>

                                        <h4><?php echo e($book->price); ?></h4>
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


<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.admin", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\kariz2020\resources\views/admin/books.blade.php ENDPATH**/ ?>