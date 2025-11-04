
<?php $__env->startSection('dashboard'); ?>


<section class="section pt-5 pb-5 osahan-not-found-page">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center pt-5 pb-5">
                  <img class="img-fluid" src="<?php echo e(asset('frontend/img/404.png')); ?>" alt="404">
                  <h1 class="mt-2 mb-2">Order Copmplete Thanks</h1>
                  <p></p>
                  <a class="btn btn-primary btn-lg" href="index.html">GO HOME</a>
               </div>
            </div>
         </div>
      </section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.dashboard.dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Pro3\food\resources\views\frontend\checkout\thanks.blade.php ENDPATH**/ ?>