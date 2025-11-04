

      <nav class="navbar navbar-expand-lg navbar-light bg-light osahan-nav shadow-sm">
         <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('index')); ?>"><img alt="logo" src="<?php echo e(asset('frontend/img/logo.png')); ?>"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="offers.html"><i class="icofont-sale-discount"></i> Offers <span class="badge badge-danger">New</span></a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Restaurants
                     </a>
                     
                  </li>
<?php if(auth()->guard()->check()): ?>
                  <?php
                     $id = Auth::user()->id;
                     $profileData = App\Models\User::find($id);
                  ?>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <img alt="Generic placeholder image" src="<?php echo e((!empty($profileData->photo)) ? url('upload/user_images/'.$profileData->photo) : url('upload/no_image.jpg')); ?>" class="nav-osahan-pic rounded-pill"> My Account
                     </a>
                     <div class="dropdown-menu dropdown-menu-right shadow-sm border-0">
                        <a class="dropdown-item" href="<?php echo e(route('dashboard')); ?>"><i class="icofont-food-cart"></i> Dashboard</a>
                        <a class="dropdown-item" href="<?php echo e(route('user.logout')); ?>"><i class="icofont-sale-discount"></i> Logout</a>
                        
                     </div>
                  </li>
                  <?php else: ?>
                   <li class="nav-item dropdown">
                     <a class="nav-link" href="<?php echo e(route('login')); ?>" role="button" aria-haspopup="true" aria-expanded="false">
                     Login
                     </a>
                   </li>
                   <li class="nav-item dropdown">
                     <a class="nav-link" href="<?php echo e(route('register')); ?>" role="button" aria-haspopup="true" aria-expanded="false">
                     Register
                     </a>
                   </li>
                  <?php endif; ?> 

   <?php
     $total = 0;
     $cart = session()->get('cart',[]);
     $groupedCart = [];
     
     foreach ($cart as $item) {
      $groupedCart[$item['client_id']][] = $item;
     }
     $clients = App\Models\Client::whereIn('id',array_keys($groupedCart))->get()->keyBy('id');

   ?>

                  <li class="nav-item dropdown dropdown-cart">
                     <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="fas fa-shopping-basket"></i> Cart
                     <span class="badge badge-success"><?php echo e(count((array) session('cart'))); ?></span>
                     </a>
                     <div class="dropdown-menu dropdown-cart-top p-0 dropdown-menu-right shadow-sm border-0">

<?php $__currentLoopData = $groupedCart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clientId => $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if(isset($clients[$clientId])): ?>
<?php
   $client = $clients[$clientId];
?>               
                        <div class="dropdown-cart-top-header p-4">
                           <img class="img-fluid mr-3" alt="osahan" src="<?php echo e((!empty($profileData->phone)) ? url('upload/client_images/'.$client->photo) : url('upload/no_image.jpg')); ?>">
                           <h6 class="mb-0"><?php echo e($client->name); ?></h6>
                           <p class="text-secondary mb-0"><?php echo e($client->address); ?></p>
                        </div>
<?php endif; ?> 
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="dropdown-cart-top-body border-top p-4">

                        <?php
                        $total = 0
                        ?>
                        <?php if(session('cart')): ?>
                           <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php
                           $total += $details['price'] * $details['quantity']
                           ?>

<p class="mb-2"><i class="icofont-ui-press text-danger food-item"></i> <?php echo e($details['name']); ?> x <?php echo e($details['quantity']); ?>   <span class="float-right text-secondary">$<?php echo e($details['price'] * $details['quantity']); ?></span></p>
                           
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                        </div>
                        <div class="dropdown-cart-top-footer border-top p-4">
                           <p class="mb-0 font-weight-bold text-secondary">Sub Total <span class="float-right text-dark">
                              <?php if(Session::has('coupon')): ?>
                                 $<?php echo e(Session()->get('coupon')['discount_amount']); ?>

                              <?php else: ?>
                              $<?php echo e($total); ?>   
                              <?php endif; ?>
                           </span></p>
                        </div>
                        <div class="dropdown-cart-top-footer border-top p-2">
                           <a class="btn btn-success btn-block btn-lg" href=<?php echo e(route('checkout')); ?>> Checkout</a>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </nav><?php /**PATH C:\xampp\htdocs\Pro3\food\resources\views\frontend\dashboard\header.blade.php ENDPATH**/ ?>