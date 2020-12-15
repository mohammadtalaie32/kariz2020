

<?php $__env->startSection("content"); ?>
    <form method = "POST" action="/admin/books/searched">
        <?php echo e(csrf_field()); ?>

        <input  type="text" name="searched_book" placeholder="نام کتاب را جستجو کنید" size="50">
        <input type="submit" value="جستجو" class="btn btn-primary">
    </form>
    <div class="row container mb-3">
        <div class="offset-md-1"></div>
        <div class="col-md-2 pt-3 pb-1" style="text-align:center;background-color:rebeccapurple;color:white;border-radius: 10px">
            <a href="/admin/books/create"><h5>ایجاد کتاب جدید</h5></a>
        </div>
        <br>
        <div>
            <h1 style="text-align:center;color:white">برای ویرایش کتاب ها روی نام کتاب کلیک کنید</h1>
        </div>

    </div>
    <br>
    <?php
        $i = 0;
    ?>
    <?php if($book_count % 2 == 0): ?>
        <?php while($i != $book_count): ?>
            <div class="row container">
                <div class="offset-md-1"></div>
                <div class="col-md-5 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <?php $book = $books[$i] ?>
                    <a href="/admin/books/<?php echo e($book->id); ?>/edit"><h2 style="color:red"> <?php echo e($book->name); ?> </h2></a>
                    <h4> <?php echo e($book->price); ?> </h2>
                    <h4> <?php echo e($book->date); ?> </h2>
                    <h4> <?php echo e($book->text); ?> </h2>
                        <div style="float:left">
                            <img src="/images/<?php echo e($book->picture); ?>" height="100%" width="100%" alt="NO PHOTO">
                        </div>
                    <?php $i += 1 ?>
                </div>

                <div class="col-md-5 mr-4 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <?php $book = $books[$i] ?>
                    <a href="/admin/books/<?php echo e($book->id); ?>/edit"> <h2 style="color:red"> <?php echo e($book->name); ?> </h2></a>
                    <h4> <?php echo e($book->price); ?> </h2>
                    <h4> <?php echo e($book->date); ?> </h2>
                    <h4> <?php echo e($book->text); ?> </h2>
                        <div style="float:left">
                            <img src="/images/<?php echo e($book->picture); ?>" height="100%" width="100%" alt="NO PHOTO">
                        </div>
                    <?php $i += 1 ?>
                </div>
            </div>
            <BR>


        <?php endwhile; ?>
    <?php else: ?>
        <?php while($i != $book_count - 1): ?>
            <div class="row container">
                <div class="offset-md-1"></div>
                <div class="col-md-5 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <?php $book = $books[$i] ?>
                   <a href="/admin/books/<?php echo e($book->id); ?>/edit"> <h2 style="color:red"> <?php echo e($book->name); ?> </h2></a>
                    <h4> <?php echo e($book->price); ?> </h2>
                    <h4> <?php echo e($book->date); ?> </h2>
                    <h4> <?php echo e($book->text); ?> </h2>
                        <div style="float:left">
                            <img src="/images/<?php echo e($book->picture); ?>" height="100%" width="100%" alt="NO PHOTO">
                        </div>
                    <?php $i += 1 ?>
                </div>
                <div class="col-md-5 mr-4 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                    <?php $book = $books[$i] ?>
                        <a href="/admin/books/<?php echo e($book->id); ?>/edit"> <h2 style="color:red"> <?php echo e($book->name); ?> </h2></a>
                    <h4> <?php echo e($book->price); ?> </h2>
                    <h4> <?php echo e($book->date); ?> </h2>
                    <h4> <?php echo e($book->text); ?> </h2>
                        <div style="float:left">
                            <img src="/images/<?php echo e($book->picture); ?>" height="100%" width="100%" alt="NO PHOTO">
                        </div>
                    <?php $i += 1 ?>
                </div>
            </div>
            <br>
        <?php endwhile; ?>
        <div class="row ">
            <div class="offset-md-1"></div>
            <div class="col-md-10 p-5 shadow-lg" style="background-color:rebeccapurple;color:white;border-radius: 10px">
                <?php $book = $books[$i] ?>
                    <a href="/admin/books/<?php echo e($book->id); ?>/edit"> <h2 style="color:red"> <?php echo e($book->name); ?> </h2></a>
                <h4> <?php echo e($book->price); ?> </h2>
                <h4> <?php echo e($book->date); ?> </h2>
                <h4> <?php echo e($book->text); ?> </h2>
                    <div style="float:left">
                        <img src="/images/<?php echo e($book->picture); ?>" height="100%" width="100%" alt="NO PHOTO">
                    </div>
                <?php $i += 1 ?>
            </div>
        </div>
    <?php endif; ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.admin", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kariz2020\resources\views/admin/books.blade.php ENDPATH**/ ?>