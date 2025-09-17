
<?php $__env->startSection('dashboard'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >


<section class="section pt-4 pb-4 osahan-account-page">
         <div class="container">
            <div class="row">
               
               <?php echo $__env->make('frontend.dashboard.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


               <div class="col-md-9">
                  <div class="osahan-account-page-right rounded shadow-sm bg-white p-4 h-100">
                    
<div class="tab-pane" >
                           <h4 class="font-weight-bold mt-0 mb-4">Favourites</h4>
                           <div class="row">

<?php $__currentLoopData = $wishlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                              <div class="col-md-4 col-sm-6 mb-4 pb-2">
                                 <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                    <div class="list-card-image">
                                       
                                       <a href="<?php echo e(route('res.details',$wish->client_id)); ?>">
                                       <img src="<?php echo e(asset('upload/client_images/'. $wish['client']['photo'])); ?>" class="img-fluid item-img " style="width: 300px; height: 200px;">
                                       </a>
                                    </div>
                                    <div class="p-3 position-relative">
                                       <div class="list-card-body">
                                          <h6 class="mb-1"><a href="<?php echo e(route('res.details',$wish->client_id)); ?>" class="text-black"><?php echo e($wish['client']['name']); ?>

                                             </a>
                                          </h6>
                                          <div style="float:right; margin-bottom: 10px;">
                                            <a href="<?php echo e(route('remove.wishlist',$wish->id)); ?>" class="badge badge-danger">
                                                <i class="icofont-ui-delete"></i>
                                            </a>
                                          </div>
                                       </div>
                                       
                                    </div>
                                 </div>
                              </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                           </div>
                        </div>                    


                  </div>
               </div>
            </div>
         </div>
      </section>
      


<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.dashboard.dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Pro3\food\resources\views\frontend\dashboard\all_wishlist.blade.php ENDPATH**/ ?>