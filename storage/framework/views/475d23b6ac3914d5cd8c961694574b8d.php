
<?php $__env->startSection('client'); ?>




<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">All Search By Date Order</h4>
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
        <h3 class="text-danger">Search By Date: <?php echo e($formatDate); ?></h3>
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
                                                <?php
                                                $key = 1;
                                                ?>
                                                <?php $__currentLoopData = $orderItemGroupData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php $__currentLoopData = $orderGroup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                
                                            <tr>
                                                <td><?php echo e($key+1); ?></td>
                                                <td><?php echo e($item->order->order_data); ?></td>
                                                <td><?php echo e($item->order->invoice_no); ?></td>
                                                <td><?php echo e($item->order->amount); ?></td>
                                                <td><?php echo e($item->order->payment_method); ?></td>
                                                <td><span class="badge bg-primary"><?php echo e($item->order->status); ?></span></td>
                                                
                                                
                                                <td><a href="<?php echo e(route('client.order.details',$item->order_id)); ?>" class="btn btn-info waves-effect waves-light"><i class="fas fa-eye"></i></a>
                                                    </td>
                                            </tr>
                                            <?php break; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('client.client_dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Pro3\food\resources\views\client\backend\report\search_by_date.blade.php ENDPATH**/ ?>