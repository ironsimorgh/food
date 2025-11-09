
<?php $__env->startSection('admin'); ?>




<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Order Details</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

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
                                                <tr>
                                                    <th width="50%"></th>
                                                    <td>
                                                        <?php if($order->status == 'Pending'): ?>
                                                        <a href="<?php echo e(route('pending_to_confirm' ,$order->id)); ?>" class="btn btn-block btn-success" id="confirmOrder">Confirm Order</a>
                                                        <?php elseif($order->status == 'confirm'): ?>
                                                        <a href="<?php echo e(route('confirm_to_processing' ,$order->id)); ?>" class="btn btn-block btn-success" id="processingOrder">Processing Order</a>
                                                        <?php elseif($order->status == 'processing'): ?>
                                                        <a href="<?php echo e(route('processing_to_deliverd' ,$order->id)); ?>" class="btn btn-block btn-success" id="deliverdOrder">Deliverd Order</a>
                                                        <?php endif; ?>
                                                    </td>
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
         
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Pro3\food\resources\views/admin/backend/order/admin_order_details.blade.php ENDPATH**/ ?>