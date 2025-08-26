
<?php $__env->startSection('content'); ?>
<section class="section pt-5 pb-5 products-section">
         <div class="container">
            <div class="section-header text-center">
               <h2>Popular Restaurants</h2>
               <p>Top restaurants, cafes, pubs, and bars in Ludhiana, based on trends</p>
               <span class="line"></span>
            </div>
            <div class="row">

<?php
$clients = App\Models\Client::latest()->where('status','1')->get();
?>

<?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<?php
$products = App\Models\Product::where('client_id',$client->id )->limit(3)->get();
$menuNames = $products->map(function($product){
   return $product->menu->menu_name;
})->toArray();
$menuNamesString = implode(' . ',$menuNames);
$coupons = App\Models\Coupon::where('client_id',$client->id )->where('status','1')->first();
?>

               <div class="col-md-3">
                    <div class="item pd-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                           <div class="list-card-image">
                              <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
                              <div class="favourite-heart text-danger position-absolute"><a href="detail.html"><i class="icofont-heart"></i></a></div>
                              <?php if($coupons): ?>
                              <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                              <?php else: ?>
                              <?php endif; ?>
                              
                              <a href="<?php echo e(route('res.details',$client->id)); ?>">
                              <img src="<?php echo e(asset('upload/client_images/' . $client->photo)); ?>" class="img-fluid item-img" style="width: 300px; height: 200px;">
                              </a>
                           </div>
                           <div class="p-3 position-relative">
                              <div class="list-card-body">
                                 <h6 class="mb-1"><a href="detail.html" class="text-black"><?php echo e($client->name); ?></a></h6>
                                 <p class="text-gray mb-3"><?php echo e($menuNamesString); ?></p>
                                 <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="icofont-wall-clock"></i> 20–25 min</span> </p>
                              </div>
                              <div class="list-card-badge">
                                 <?php if($coupons): ?>
                                 <span class="badge badge-success">OFFER</span> <small><?php echo e($coupons->discount); ?>% off | Use Coupon <?php echo e($coupons->coupon_name); ?></small>
                                 <?php else: ?>
                                 <span class="badge badge-success">OFFER</span> <small>Right Now There Have No OFFER</small>
                                 <?php endif; ?>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
               </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
         </div>
      </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Pro3\food\resources\views/frontend/index.blade.php ENDPATH**/ ?>