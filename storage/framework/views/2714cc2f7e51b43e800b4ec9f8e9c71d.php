<html>
    <title>AdminDashboard Page</title>
    <body>
        <h1>AdminDashboard</h1>

        <?php if(Session::has('error')): ?>
        <li><?php echo e(Session::get('error')); ?></li>
    <?php endif; ?>  
    
    <?php if(Session::has('success')): ?>
        <li><?php echo e(Session::get('success')); ?></li>
    <?php endif; ?> 

        <a href="<?php echo e(route('admin.logout')); ?>">logout</a>
    </body>
</html><?php /**PATH C:\xampp\htdocs\Pro3\food\resources\views\admin\admin_dashboard.blade.php ENDPATH**/ ?>