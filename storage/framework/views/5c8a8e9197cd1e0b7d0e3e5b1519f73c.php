
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
                           <h4 class="font-weight-bold mt-0 mb-4">Order List</h4>
                           
                           
                           <div class="bg-white card mb-4 order-list shadow-sm">
                              <div class="gold-members p-4">
<table class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>Sl</th>
                                                <th>Date</th>
                                                <th>Invoice</th>
                                                <th>Amount</th>
                                                <th>Payment</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                                <?php $__currentLoopData = $allUserOrder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                
                                                
                                            <tr>
                                                <td><?php echo e($key+1); ?></td>
                                                <td><?php echo e($item->order_data); ?></td>
                                                <td><?php echo e($item->invoice_no); ?></td>
                                                <td>$<?php echo e($item->amount); ?></td>
                                                <td><?php echo e($item->payment_method); ?></td>
                                                <td>
                                                     <?php if($item->status == 'Pending'): ?>
                                                    <span class="badge bg-info">Pending</span>
                                                    <?php elseif($item->status == 'confirm'): ?>
                                                    <span class="badge bg-primary">Confirm</span>
                                                    <?php elseif($item->status == 'processing'): ?>
                                                    <span class="badge bg-warning">Processing</span>
                                                    <?php elseif($item->status == 'deliverd'): ?>
                                                    <span class="badge bg-success">Deliverd</span>
                                                    <?php endif; ?>
                                                </td>
                                                
                                                
                                                <td class="d-flex justify-content-between">
                                                    <a href="<?php echo e(route('user.order.details',$item->id)); ?>" class="btn-small d-block text-primary"><i class="fas fa-eye"></i> View</a>
                                                    <a href="<?php echo e(route('admin.order.details',$item->id)); ?>" class="btn-small d-block text-danger"><i class="fa fa-download"></i> Invoice</a>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
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
<?php echo $__env->make('frontend.dashboard.dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Pro3\food\resources\views\frontend\dashboard\order\order_list.blade.php ENDPATH**/ ?>