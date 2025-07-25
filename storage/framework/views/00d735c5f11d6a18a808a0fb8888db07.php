
<?php $__env->startSection('client'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Add Product</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Add Product</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-12 col-lg-12">

                                <div class="card">                
                                <div class="card-body p-4">
                                <form id="myForm" action="<?php echo e(route('menu.store')); ?>" method="post" enctype="multipart/form-data">
                                 <?php echo csrf_field(); ?>

                                        <div class="row">
                                            <div class="col-xl-4 col-md-6">          
                                                    <div class="form-group mb-3">
                                                        <label for="example-text-input" class="form-label">Category Name</label>
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->category_name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                            </div>


                                            <div class="col-xl-4 col-md-6">          
                                                    <div class="form-group mb-3">
                                                        <label for="example-text-input" class="form-label">Menu Name</label>
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $men): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($men->id); ?>"><?php echo e($men->menu_name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                            </div>

                                            <div class="col-xl-4 col-md-6">          
                                                    <div class="form-group mb-3">
                                                        <label for="example-text-input" class="form-label">City Name</label>
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <?php $__currentLoopData = $city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($cit->id); ?>"><?php echo e($cit->city_name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                            </div>

                                            <div class="col-xl-4 col-md-6">   
                                                    <div class="form-group mb-3">
                                                        <label for="example-text-input" class="form-label">Product Name</label>
                                                        <input class="form-control" name="menu_name" type="text" id="example-text-input">
                                                    </div>
                                            </div>

                                            <div class="col-xl-4 col-md-6">   
                                                    <div class="form-group mb-3">
                                                        <label for="example-text-input" class="form-label">Price</label>
                                                        <input class="form-control" name="menu_name" type="text" id="example-text-input">
                                                    </div>
                                            </div>

                                            <div class="col-xl-4 col-md-6">   
                                                    <div class="form-group mb-3">
                                                        <label for="example-text-input" class="form-label">Discount Price</label>
                                                        <input class="form-control" name="menu_name" type="text" id="example-text-input">
                                                    </div>
                                            </div>

                                            <div class="col-xl-6 col-md-6">   
                                                    <div class="form-group mb-3">
                                                        <label for="example-text-input" class="form-label">Size</label>
                                                        <input class="form-control" name="menu_name" type="text" id="example-text-input">
                                                    </div>
                                            </div>

                                            <div class="col-xl-6 col-md-6">   
                                                    <div class="form-group mb-3">
                                                        <label for="example-text-input" class="form-label">Product QTY</label>
                                                        <input class="form-control" name="menu_name" type="text" id="example-text-input">
                                                    </div>
                                            </div>

                                            <div class="col-xl-6 col-md-6">   
                                                    <div class="form-group mb-3">
                                                        <label for="example-text-input" class="form-label">Product Image</label>
                                                        <input class="form-control" name="image" type="file" id="image">
                                                    </div>
                                            </div>

                                            <div class="col-xl-6 col-md-6">   
                                                    <div class="form-group mb-3">
                                                        <img id="showImage" src="<?php echo e(url('upload/no_image.jpg')); ?>" alt="" class="rounded-circle p-1 bg-primary" width="110">
                                                    </div>
                                            </div>

                                            <div class="form-check mt-2">
                                                        <input class="form-check-input" type="checkbox" id="formCheck2">
                                                        <label class="form-check-label" for="formCheck2">
                                                            Best Seller
                                                        </label>
                                                    </div>

                                                    <div class="form-check mt-2">
                                                        <input class="form-check-input" type="checkbox" id="formCheck2">
                                                        <label class="form-check-label" for="formCheck2">
                                                            Special Offer
                                                        </label>
                                                    </div>

                                            <div class="mt-4">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                                                </div>

                                            
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                               
                                <!-- end tab content -->
                            </div>
                            <!-- end col -->

                            
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
<script type="text/javascript">
$(document).ready(function(){
    $('#image').change(function(e){
        var reader = new FileReader();
        reader.onload = function(e){
            $('#showImage').attr('src',e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
    })
})

</script>

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                category_name: {
                    required : true,
                }, 
                image: {
                    required : true,
                }, 
                
            },
            messages :{
                category_name: {
                    required : 'Please Enter Category Name',
                },
                image: {
                    required : 'Please Select Image',
                }, 
                 

            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>
                
<?php $__env->stopSection(); ?>
<?php echo $__env->make('client.client_dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Pro3\food\resources\views/client/backend/product/add_product.blade.php ENDPATH**/ ?>