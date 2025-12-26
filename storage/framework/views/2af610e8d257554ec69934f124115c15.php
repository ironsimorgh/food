<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
      
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
       <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

   </head>
   <body>
      <div class="homepage-header">
      <div class="overlay"></div>

      <?php echo $__env->make('frontend.layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

      <?php echo $__env->make('frontend.layouts.banner', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

      </div>
      
      <?php echo $__env->make('frontend.layouts.ads', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

      <?php echo $__env->yieldContent('content'); ?>
      
      <?php echo $__env->make('frontend.layouts.member', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

      <?php echo $__env->make('frontend.layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

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

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
      
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 <?php if(Session::has('message')): ?>
 var type = "<?php echo e(Session::get('alert-type','info')); ?>"
 switch(type){
    case 'info':
    toastr.info(" <?php echo e(Session::get('message')); ?> ");
    break;

    case 'success':
    toastr.success(" <?php echo e(Session::get('message')); ?> ");
    break;

    case 'warning':
    toastr.warning(" <?php echo e(Session::get('message')); ?> ");
    break;

    case 'error':
    toastr.error(" <?php echo e(Session::get('message')); ?> ");
    break; 
 }
 <?php endif; ?> 
</script>


      
      <script type="text/javascript">
         $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
         });

         function addWishList(id){
           // alert(id)
           $.ajax({
            type : "POST",
            dataType:"json",
            url:"/add-wish-list/"+id,
            
            success:function(data){
               // Start Message 
               const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000 
               });

               if ($.isEmptyObject(data.error)) {
                 Toast.fire({
                   icon: 'success', 
                   title: data.success
                 });
               } else {
                 Toast.fire({
                   icon: 'error', 
                   title: data.error
                 });
               }
               // End Message
            },
            error: function(xhr, status, error) {
               const Toast = Swal.mixin({
                 toast: true,
                 position: 'top-end',
                 showConfirmButton: false,
                 timer: 3000 
               });
               Toast.fire({
                 icon: 'error', 
                 title: 'An error occurred: ' + error
               });
            }
           });
         }
      </script>
   </body>
</html><?php /**PATH C:\xampp\htdocs\Pro3\food\resources\views/frontend/master.blade.php ENDPATH**/ ?>