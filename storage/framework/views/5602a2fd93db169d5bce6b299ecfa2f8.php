<?php echo $__env->make('frontend.dashboard.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
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


                              <div class="col-md-4 col-sm-6 mb-4 pb-2">
                                 <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                    <div class="list-card-image">
                                       <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
                                       <div class="favourite-heart text-danger position-absolute"><a href="detail.html"><i class="icofont-heart"></i></a></div>
                                       <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                       <a href="detail.html">
                                       <img src="img/list/4.png" class="img-fluid item-img">
                                       </a>
                                    </div>
                                    <div class="p-3 position-relative">
                                       <div class="list-card-body">
                                          <h6 class="mb-1"><a href="detail.html" class="text-black">Famous Dave's Bar-B-Que
                                             </a>
                                          </h6>
                                          <p class="text-gray mb-3">Vegetarian • Indian • Pure veg</p>
                                          <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="icofont-wall-clock"></i> 15–30 min</span> <span class="float-right text-black-50"> $350 FOR TWO</span></p>
                                       </div>
                                       <div class="list-card-badge">
                                          <span class="badge badge-danger">OFFER</span> <small> Use Coupon OSAHAN50</small>
                                       </div>
                                    </div>
                                 </div>
                              </div>



                           </div>
                        </div>                    


                  </div>
               </div>
            </div>
         </div>
      </section>
      

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



      <?php echo $__env->make('frontend.dashboard.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Pro3\food\resources\views/frontend/dashboard/all_wishlist.blade.php ENDPATH**/ ?>