
<?php $__env->startSection('client'); ?>


<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">All Product</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <a href="<?php echo e(route('add.product')); ?>" class="btn btn-primary waves-effect waves-light">Add Product</a>
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
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Menu</th>
                                                <th>QTY</th>
                                                <th>Price</th>
                                                <th>Discount</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                                <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                
                                                
                                            <tr>
                                                <td><?php echo e($key+1); ?></td>
                                                <td><img src="<?php echo e(asset($item->image)); ?>" alt="" style="width: 70px; height: 40px;" ></td>
                                                <td><?php echo e($item->name); ?></td>
                                                <td><?php echo e($item['menu']['menu_name']); ?></td>
                                                <td><?php echo e($item->qty); ?></td>
                                                <td><?php echo e($item->price); ?></td>
                                                <td>
                                                <?php if($item->discount_price == NULL): ?>
                                                    <span class="badeg bg-danger">No Discount</span>
                                                    <?php else: ?>
                                                    <?php
                                                        $amount = $item->price - $item->discount_price;
                                                        $discount = ($amount / $item->price) * 100; 
                                                    ?>
                                                    <span class="badeg bg-danger"><?php echo e(round($discount)); ?>%</span>
                                                <?php endif; ?>

                                                </td>
                                                <td>
                                                    <?php if($item->status == 1): ?>
                                                    <span class="text-success"><b>Active</b></span>
                                                    <?php else: ?>
                                                    <span class="text-danger"><b>InActive</b></span>
                                                    <?php endif; ?>


                                                </td>
                                                
                                                
                                                <td><a href="<?php echo e(route('edit.product',$item->id)); ?>" class="btn btn-info waves-effect waves-light"><i class="fas fa-edit"></i></a><a href="<?php echo e(route('delete.product',$item->id)); ?>" class="btn btn-danger waves-effect waves-light" id="delete"><i class="fas fa-trash"></i></a></td>
                                                
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
<?php echo $__env->make('client.client_dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Pro3\food\resources\views\client\backend\product\all_product.blade.php ENDPATH**/ ?>