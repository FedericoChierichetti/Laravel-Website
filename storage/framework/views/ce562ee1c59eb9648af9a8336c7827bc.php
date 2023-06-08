

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>User Details
                        <a href="<?php echo e(url('users')); ?>" class="btn btn-primary btn-sm float-end">Back</a>
                    </h4>
                    <hr>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <label for="">Role</label>
                            <div class="p-2 border"><?php echo e($users->role_as == '0'? 'User':'Admin'); ?></div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">First Name</label>
                            <div class="p-2 border"><?php echo e($users->name); ?></div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Last Name</label>
                            <div class="p-2 border"><?php echo e($users->lname); ?></div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Email</label>
                            <div class="p-2 border"><?php echo e($users->email); ?></div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Phone</label>
                            <div class="p-2 border"><?php echo e($users->phone); ?></div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Address 1</label>
                            <div class="p-2 border"><?php echo e($users->address1); ?></div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Address 2</label>
                            <div class="p-2 border"><?php echo e($users->address2); ?></div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">City</label>
                            <div class="p-2 border"><?php echo e($users->city); ?></div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">State</label>
                            <div class="p-2 border"><?php echo e($users->state); ?></div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Country</label>
                            <div class="p-2 border"><?php echo e($users->country); ?></div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Zip Code</label>
                            <div class="p-2 border"><?php echo e($users->pincode); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\XAMPP\htdocs\website\resources\views/admin/users/view.blade.php ENDPATH**/ ?>