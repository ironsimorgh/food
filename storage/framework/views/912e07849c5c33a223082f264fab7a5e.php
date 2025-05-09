<html>
    <title>Admin Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <body class = "container">
        <h1>Admin Login</h1>

        <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        <?php if(Session::has('error')): ?>
            <li><?php echo e(Session::get('error')); ?></li>
        <?php endif; ?>  
        
        <?php if(Session::has('success')): ?>
            <li><?php echo e(Session::get('success')); ?></li>
        <?php endif; ?> 


        <form action="<?php echo e(route('admin.login_submit')); ?>" method="post">
            <?php echo csrf_field(); ?>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <a href="<?php echo e(route('admin.forget_password')); ?>">forget password</a>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

    </body>
</html><?php /**PATH C:\xampp\htdocs\Pro3\food\resources\views\admin\login.blade.php ENDPATH**/ ?>