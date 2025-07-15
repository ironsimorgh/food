
<?php $__env->startSection('admin'); ?>


<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">All City</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal">Add City</button>
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
                                                <th>City Name</th>
                                                <th>City Slug</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                                <?php $__currentLoopData = $city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                
                                                
                                            <tr>
                                                <td><?php echo e($key+1); ?></td>
                                                <td><?php echo e($item->city_name); ?></td>
                                                <td><?php echo e($item->city_slug); ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myEdit" id="<?php echo e($item->id); ?>" onclick="cityEdit(this.id)">Edit</button>

                                                    <a href="<?php echo e(route('delete.category',$item->id)); ?>" class="btn btn-danger waves-effect waves-light" id="delete">Delete</a></td>
                                                
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

<!-- sample modal content -->
                                            <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-scroll="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Add City</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form id="myForm" action="<?php echo e(route('city.store')); ?>" method="post" enctype="multipart/form-data">
                                 <?php echo csrf_field(); ?>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div>
                                                    <div class="form-group mb-3">
                                                        <label for="example-text-input" class="form-label">City Name</label>
                                                        <input class="form-control" name="city_name" type="text" >
                                                    </div>

                                                </div>
                                            </div> 

                                            
                                            </div>
                                        
                                                            
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                                        </div>
                                                        </form>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->





                            <!-- Edit modal content -->
                                            <div id="myEdit" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-scroll="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Edit City</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form id="myForm" action="<?php echo e(route('city.store')); ?>" method="post" enctype="multipart/form-data">
                                 <?php echo csrf_field(); ?>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div>
                                                    <div class="form-group mb-3">
                                                        <label for="example-text-input" class="form-label">City Name</label>
                                                        <input class="form-control" name="city_name" type="text" id="cat">
                                                    </div>

                                                </div>
                                            </div> 

                                            
                                            </div>
                                        
                                                            
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                                        </div>
                                                        </form>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->  
                                            
                                            
                                            <script>
                                                function cityEdit(id){
                                                    $.ajax({
                                                        type: 'GET',
                                                        url: '/edit/city/'+id,
                                                        dataType: 'json',
                                                        success:function(data){
                                                            //console.log(data)
                                                            $('#cat').val(data.city_name);
                                                        }
                                                    })
                                                }
                                            </script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Pro3\food\resources\views/admin/backend/city/all_city.blade.php ENDPATH**/ ?>