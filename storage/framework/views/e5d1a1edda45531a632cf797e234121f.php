
<?php $__env->startSection('client'); ?>



<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Client All Order</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    
                                    <div class="card-body">
        
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
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
                                                <?php $__currentLoopData = $orderItemGroupData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $orderitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $firstItem = $orderitem->first();
                                                $order = $firstItem->order;
                                            ?>    
                                                
                                            <tr>
                                                <td><?php echo e($key+1); ?></td>
                                                <td><?php echo e($order->order_data); ?></td>
                                                <td><?php echo e($order->invoice_no); ?></td>
                                                <td>$<?php echo e($order->amount); ?></td>
                                                <td><?php echo e($order->payment_method); ?></td>
                                                <td>
                                                    <?php if($order->status == 'Pending'): ?>
                                                    <span class="badge bg-info">Pending</span>
                                                    <?php elseif($order->status == 'confirm'): ?>
                                                    <span class="badge bg-primary">Confirm</span>
                                                    <?php elseif($order->status == 'processing'): ?>
                                                    <span class="badge bg-warning">Processing</span>
                                                    <?php elseif($order->status == 'deliverd'): ?>
                                                    <span class="badge bg-success">Deliverd</span>
                                                    <?php endif; ?>
                                                    </td>
                                                
                                                
                                                <td><a href="<?php echo e(route('client.order.details',$order->id)); ?>" class="btn btn-info waves-effect waves-light"><i class="fas fa-eye"></i></a>
                                                    </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row --> 
         
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                

<?php $__env->stopSection(); ?>
<?php echo $__env->make('client.client_dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Pro3\food\resources\views\client\backend\order\all_orders.blade.php ENDPATH**/ ?>