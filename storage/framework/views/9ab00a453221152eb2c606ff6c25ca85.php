
<?php $__env->startSection('client'); ?>


<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">All Coupon</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <a href="<?php echo e(route('add.coupon')); ?>" class="btn btn-primary waves-effect waves-light">Add Coupon</a>
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
                                                <th>Coupon Name</th>
                                                <th>Coupon Desc</th>
                                                <th>Discount</th>
                                                <th>Validity</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                                <?php $__currentLoopData = $coupon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                
                                                
                                            <tr>
                                                <td><?php echo e($key+1); ?></td>
                                                <td><?php echo e($item->coupon_name); ?></td>
                                                <td><?php echo e(Str::limit($item->coupon_desc,25)); ?></td>
                                                <td><?php echo e($item->discount); ?></td>
                                                <td><?php echo e(Carbon\Carbon::parse($item->validity)->format('D,d F Y')); ?></td>
                                                <td>
                                                    <?php if($item->validity>=Carbon\Carbon::now()->format('Y-m-d')): ?>
                                                        <span class="badge rounded-pill bg-success">Valid</span>
                                                        <?php else: ?>
                                                        <span class="badge rounded-pill bg-danger">InValid</span>
                                                    <?php endif; ?>
                                                    </td>

                                                
                                                <td><a href="<?php echo e(route('edit.coupon',$item->id)); ?>" class="btn btn-info waves-effect waves-light">Edit</a><a href="<?php echo e(route('delete.coupon',$item->id)); ?>" class="btn btn-danger waves-effect waves-light" id="delete">Delete</a></td>
                                                
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
<?php echo $__env->make('client.client_dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Pro3\food\resources\views/client/backend/coupon/all_coupon.blade.php ENDPATH**/ ?>