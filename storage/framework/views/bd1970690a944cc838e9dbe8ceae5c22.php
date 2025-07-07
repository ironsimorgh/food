<?php echo $__env->make('frontend.dashboard.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

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
                           <h4 class="font-weight-bold mt-0 mb-4">Change Password</h4>
                           
                           
                           <div class="bg-white card mb-4 order-list shadow-sm">
                              <div class="gold-members p-4">
<form action="<?php echo e(route('user.password.update')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div>
                                                    <div class="mb-6">
                                                        <label for="example-text-input" class="form-label">Old Password</label>
                                                        <input class="form-control <?php $__errorArgs = ['old_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"                                      
                                                        type="password" name="old_password" id="old_password">
                                                        <?php $__errorArgs = ['old_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="text-danger"><?php echo e($message); ?></span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>

                                                    <div class="mb-6">
                                                        <label for="example-text-input" class="form-label">New Password</label>
                                                        <input class="form-control <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"                                      
                                                        type="password" name="new_password" id="new_password">
                                                        <?php $__errorArgs = ['old_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="text-danger"><?php echo e($message); ?></span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>

                                                    <div class="mb-6">
                                                        <label for="example-text-input" class="form-label">Conform New Password</label>
                                                        <input class="form-control "                                      
                                                        type="password" name="new_password_confirmation" id="old_password">
                                                    </div>
                                                    <div class="mt-4">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                                                </div>
                                                </div>
                                            </div>

                                        </form>
                              </div>
                           </div>


                           
                        </div>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
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

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 <?php if(Session::has('message')): ?>
 var type = "<?php echo e(Session::get('alert-type','info')); ?>"
 switch(type){
    case 'info':
    toastr.info(" <?php echo e(Session::get('message')); ?> ");
    break;

    case 'success':
    toastr.success(" <?php echo e(Session::get('message')); ?> ");
    break;

    case 'warning':
    toastr.warning(" <?php echo e(Session::get('message')); ?> ");
    break;

    case 'error':
    toastr.error(" <?php echo e(Session::get('message')); ?> ");
    break; 
 }
 <?php endif; ?> 
</script>



      <?php echo $__env->make('frontend.dashboard.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Pro3\food\resources\views\frontend\dashboard\change_password.blade.php ENDPATH**/ ?>