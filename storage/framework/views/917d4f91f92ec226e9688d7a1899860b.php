
<?php $__env->startSection('dashboard'); ?>


<?php
$id = Auth::user()->id;
$profileData = App\Models\User::find($id);
?>
<section class="section pt-4 pb-4 osahan-account-page">
         <div class="container">
            <div class="row">
               
               <?php echo $__env->make('frontend.dashboard.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


               <div class="col-md-9">
                  <div class="osahan-account-page-right rounded shadow-sm bg-white p-4 h-100">
                     <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                           <h4 class="font-weight-bold mt-0 mb-4">Order Details</h4>
                           
                           
                           <div class="bg-white card mb-4 order-list shadow-sm">
                              <div class="gold-members p-4">
<div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2">
                            <div class="col">
                                <div class="card">
                            <div class="card-header">
                                <h4>Shipping Details</h4>
                                </div>
                                        
                                    <div class="card-body">
<div class="table-responsive">
<table class="table table-bordered border-primary mb-0">

                                            
                                            <tbody>
                                                <tr>
                                                    <th width="50%">Shipping Name:</th>
                                                    <td><?php echo e($order->name); ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="50%">Shipping Phone:</th>
                                                    <td><?php echo e($order->phone); ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="50%">Shipping Email:</th>
                                                    <td><?php echo e($order->email); ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="50%">Shipping Address:</th>
                                                    <td><?php echo e($order->address); ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="50%">Order Date:</th>
                                                    <td><?php echo e($order->order_data); ?></td>
                                                </tr>
                                            </tbody>
</table>
</div>
        
                                        
        
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col">
                                <div class="card">
                            <div class="card-header">
                                <h4>Order Details
                                <span class="text-danger">Invoice:<?php echo e($order->invoice_no); ?></span></h4>
                                </div>
                                        
                                    <div class="card-body">
<div class="table-responsive">
<table class="table table-bordered border-primary mb-0">

                                            
                                            <tbody>
                                                <tr>
                                                    <th width="50%">Name:</th>
                                                    <td><?php echo e($order->user->name); ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="50%">Phone:</th>
                                                    <td><?php echo e($order->user->phone); ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="50%">Email:</th>
                                                    <td><?php echo e($order->user->email); ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="50%">Payment Type:</th>
                                                    <td><?php echo e($order->payment_method); ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="50%">Transaction Id:</th>
                                                    <td><?php echo e($order->transaction_id); ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="50%">Invoice:</th>
                                                    <td class="text-danger"><?php echo e($order->invoice_no); ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="50%">Order Amount:</th>
                                                    <td>$<?php echo e($order->amount); ?></td>
                                                </tr>
                                                <tr>
                                                    <th width="50%">Order Status:</th>
                                                    <td><span class="badge bg-success"><?php echo e($order->status); ?></span></td>
                                                </tr>
                                                
                                            </tbody>
</table>
</div>
        
                                        
        
                                    </div>
                                </div>
                            </div> <!-- end col -->

                        </div> <!-- end row --> 

 <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-1">
    <div class="col-12">
        <div class="card">
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <td class="col-md-1">
                            <label>Image</label>
                        </td>
                        <td class="col-md-1">
                            <label>Product Name</label>
                        </td>
                        <td class="col-md-1">
                            <label>Restruatnt Name</label>
                        </td>
                        <td class="col-md-1">
                            <label>Product Code</label>
                        </td>
                        <td class="col-md-1">
                            <label>Quantity</label>
                        </td>
                        <td class="col-md-1">
                            <label>Price</label>
                        </td>
                    </tr>
<?php $__currentLoopData = $orderItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td class="col-md-1">
        <label>
            <img src="<?php echo e(asset($item->product->image)); ?>" style="width:50px; height:50px;">
        </label>
    </td>
    <td class="col-md-2">
        <label>
            <?php echo e($item->product->name); ?>

        </label>
    </td>
    <?php if($item->client_id == NULL): ?>
        <td class="col-md-2">
        <label>
            Owner
        </label>
    </td>
    <?php else: ?>
    <td class="col-md-1">
        <label>
            <?php echo e($item->product->client->name); ?>

        </label>
    </td>
    <?php endif; ?>
    <td class="col-md-1">
        <label>
            <?php echo e($item->product->code); ?>

        </label>
    </td>
    <td class="col-md-1">
        <label>
            <?php echo e($item->qty); ?>

        </label>
    </td>
    <td class="col-md-3">
        <label>
            <?php echo e($item->price); ?> <br> Total = $ <?php echo e($item->price * $item->qty); ?>

        </label>
    </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
<div>
    <h4>Total Price: $ <?php echo e($totalPrice); ?></h4>
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
               </div>
            </div>
         </div>
      </section>
      





<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.dashboard.dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Pro3\food\resources\views\frontend\dashboard\order\order_details.blade.php ENDPATH**/ ?>