<?php
$banner = App\Models\Banner::latest()->limit(4)->get();
?>

<section class="section pt-5 pb-5 bg-white homepage-add-section">
         <div class="container">
            <div class="row">
               <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               
              
               <div class="col-md-3 col-6">
                  <div class="products-box">
                     <a href="<?php echo e($item->url); ?>"><img alt="" src="<?php echo e(asset($item->image)); ?>" class="img-fluid rounded"></a>
                  </div>
               </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
         </div>
      </section><?php /**PATH C:\xampp\htdocs\Pro3\food\resources\views\frontend\layouts\ads.blade.php ENDPATH**/ ?>