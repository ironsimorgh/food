<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Askbootstrap">
      <meta name="author" content="Askbootstrap">
      <title>Osahan Eat - Online Food Ordering Website HTML Template</title>
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="<?php echo e(asset('frontend/img/favicon.png')); ?>">
      <!-- Bootstrap core CSS-->
      <link href="<?php echo e(asset('frontend/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
      <!-- Font Awesome-->
      <link href="<?php echo e(asset('frontend/vendor/fontawesome/css/all.min.css')); ?>" rel="stylesheet">
      <!-- Font Awesome-->
      <link href="<?php echo e(asset('frontend/vendor/icofont/icofont.min.css')); ?>" rel="stylesheet">
      <!-- Select2 CSS-->
      <link href="<?php echo e(asset('frontend/vendor/select2/css/select2.min.css')); ?>" rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="<?php echo e(asset('frontend/css/osahan.css')); ?>" rel="stylesheet">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="<?php echo e(asset('frontend/vendor/owl-carousel/owl.carousel.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('frontend/vendor/owl-carousel/owl.theme.css')); ?>">
   </head>
   <body>
      <div class="homepage-header">
      <div class="overlay"></div>

      <?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <?php echo $__env->make('frontend.layouts.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      </div>
      
      <?php echo $__env->make('frontend.layouts.ads', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <?php echo $__env->yieldContent('content'); ?>
      
      <?php echo $__env->make('frontend.layouts.member', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <!-- jQuery -->
      <script src="<?php echo e(asset('frontend/vendor/jquery/jquery-3.3.1.slim.min.js')); ?>"></script>
      <!-- Bootstrap core JavaScript-->
      <script src="<?php echo e(asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
      <!-- Select2 JavaScript-->
      <script src="<?php echo e(asset('frontend/vendor/select2/js/select2.min.js')); ?>"></script>
      <!-- Owl Carousel -->
      <script src="<?php echo e(asset('frontend/vendor/owl-carousel/owl.carousel.js')); ?>"></script>
      <!-- Custom scripts for all pages-->
      <script src="<?php echo e(asset('frontend/js/custom.js')); ?>"></script>
   </body>
</html><?php /**PATH C:\xampp\htdocs\Pro3\food\resources\views\frontend\master.blade.php ENDPATH**/ ?>