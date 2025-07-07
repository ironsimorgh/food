<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo e(asset('backend/assets/images/favicon.ico')); ?>">

        <!-- plugin css -->
        <link href="<?php echo e(asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')); ?>" rel="stylesheet" type="text/css" />

        <!-- preloader css -->
        <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/preloader.min.css')); ?>" type="text/css" />

        <!-- DataTables -->
        <link href="<?php echo e(asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('backend/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />

        

        <!-- Bootstrap Css -->
        <link href="<?php echo e(asset('backend/assets/css/bootstrap.min.css')); ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo e(asset('backend/assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?php echo e(asset('backend/assets/css/app.min.css')); ?>" id="app-style" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
    </head>

    <body>

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <?php echo $__env->make('admin.body.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <!-- ========== Left Sidebar Start ========== -->
            <?php echo $__env->make('admin.body.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <?php echo $__env->yieldContent('admin'); ?>
                <!-- End Page-content -->


                <?php echo $__env->make('admin.body.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        
        <!-- Right Sidebar -->
        <?php echo $__env->make('admin.body.rightside', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="<?php echo e(asset('backend/assets/libs/jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('backend/assets/libs/metismenu/metisMenu.min.js')); ?>"></script>
        <script src="<?php echo e(asset('backend/assets/libs/simplebar/simplebar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('backend/assets/libs/node-waves/waves.min.js')); ?>"></script>
        <script src="<?php echo e(asset('backend/assets/libs/feather-icons/feather.min.js')); ?>"></script>
        <!-- pace js -->
        <script src="<?php echo e(asset('backend/assets/libs/pace-js/pace.min.js')); ?>"></script>

        <!-- apexcharts -->
        <script src="<?php echo e(asset('backend/assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

        <!-- Required datatable js -->
        <script src="<?php echo e(asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
        <script src="<?php echo e(asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>

        <!-- Datatable init js -->
        <script src="<?php echo e(asset('backend/assets/js/pages/datatables.init.js')); ?>"></script> 

        <!-- Plugins js-->
        <script src="<?php echo e(asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')); ?>"></script>
        <script src="<?php echo e(asset('backend/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js')); ?>"></script>
        <!-- dashboard init -->
        <script src="<?php echo e(asset('backend/assets/js/pages/dashboard.init.js')); ?>"></script>

        <script src="<?php echo e(asset('backend/assets/js/app.js')); ?>"></script>
        <script src="<?php echo e(asset('backend/assets/js/validate.min.js')); ?>"></script>

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

    </body>

</html><?php /**PATH C:\xampp\htdocs\Pro3\food\resources\views/admin/admin_dashboard.blade.php ENDPATH**/ ?>