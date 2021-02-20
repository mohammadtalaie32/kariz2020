<?php $__env->startSection("content"); ?>


    <form method = "POST" action="/admin/books/searched">
        <?php echo e(csrf_field()); ?>

        <input  type="text" name="searched_book" placeholder="نام کتاب را جستجو کنید"   name="browser" list="browsers" class="animate">
        <datalist id="browsers">
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option><?php echo e($book->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </datalist>
        <input hidden type="submit" value="جستجو" class="btn btn-primary">
    </form>

<br><br><br>
    <div class="row container mb-3">
        <div class="offset-md-1"></div>
        <div class="col-md-2 pt-3 pb-1" style="text-align:center;background-color:rebeccapurple;color:white;border-radius: 10px">
            <a href="/admin/books/create"> <h5>ایجاد کتاب جدید</h5></a>
        </div>

        
        
        
    </div>





    <div class="row mb-3">
        <div class="offset-md-1"></div>
        <div class="col-md-10">
            <h5 class="alert alert-dismissible alert-info">برای ویرایش کتاب ها روی نام کتاب کلیک کنید!</h5>
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
                                         src="images/<?php echo e($book->picture); ?>" onerror="this.src='<?php echo e(asset('images/no-image.png')); ?>';">
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-9 col-xl-9">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h3 style="color:white" class=mt-2"><a href="/admin/books/<?php echo e($book->id); ?>/edit"> <?php echo e($book->name); ?></a></h3>


                                        <p class="mb-1 text-muted text-uppercase small"><?php echo e($book->price); ?></p>
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

<?php echo $__env->make("layouts.admin", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kariz2020\resources\views/admin/books.blade.php ENDPATH**/ ?>