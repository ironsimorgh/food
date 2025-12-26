
<?php $__env->startSection('admin'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">


<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Approve Review</h4>
                                    

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
                                                <th>User</th>
                                                <th>Restaurant</th>
                                                <th>Comment</th>
                                                <th>Rating</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                                <?php $__currentLoopData = $approveReview; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                
                                                
                                            <tr>
                                                <td><?php echo e($key+1); ?></td>
                                                <td><?php echo e($item['user']['name']); ?></td>
                                                <td><?php echo e($item['client']['name']); ?></td>
                                                <td><?php echo e(Str::limit($item->comment, 50, '...' )); ?></td>
                                                <td>
                                                    <?php for($i = 1; $i <= 5; $i++): ?>
                                                        <i class="bx bxs-star <?php echo e($i <= $item->rating ? 'text-warning' : 'text-secondary'); ?>"></i>
                                                    <?php endfor; ?>
                                                </td>
                                                <td>
                                                    <?php if($item->status == 1): ?>
                                                    <span class="text-success"><b>Active</b></span>
                                                    <?php else: ?>
                                                    <span class="text-danger"><b>InActive</b></span>
                                                    <?php endif; ?>

                                                </td>
                                                
                                                <td>
                                                <input data-id="<?php echo e($item->id); ?>" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="Inactive" <?php echo e($item->status ? 'checked' : ''); ?>>
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

<script type="text/javascript">
  $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var client_id = $(this).data('id'); 
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/clientchangeStatus',
            data: {'status': status, 'client_id': client_id},
            success: function(data){
              // console.log(data.success)

                // Start Message 

            const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  icon: 'success', 
                  showConfirmButton: false,
                  timer: 3000 
            })
            if ($.isEmptyObject(data.error)) {
                    
                    Toast.fire({
                    type: 'success',
                    title: data.success, 
                    })

            }else{
               
           Toast.fire({
                    type: 'error',
                    title: data.error, 
                    })
                }

              // End Message   


            }
        });
    })
  })
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Pro3\food\resources\views\admin\backend\review\approve_review.blade.php ENDPATH**/ ?>