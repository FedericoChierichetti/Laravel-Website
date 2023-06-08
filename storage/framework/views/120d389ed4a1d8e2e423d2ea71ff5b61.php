

<?php $__env->startSection('title'); ?>
    <?php echo e($category->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="py-3 mb-4 shadow-sm bg-purple border-top">
        <div class="container">
            <h6 class="mb-0">Produse / <?php echo e($category->name); ?></h6>
        </div>
    </div>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2><?php echo e($category->name); ?></h2>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3 mb-3">
                        <div class="card">
                            <a href="<?php echo e(url('category/'.$category->slug.'/'.$prod->slug)); ?>">
                                <img src="<?php echo e(asset('assets/uploads/products/'.$prod->image)); ?>" class="w-100" alt="Product image">
                                <div class="card-body">
                                    <h5><?php echo e($prod->name); ?></h5>
                                    <span class="float-start"><?php echo e($prod->selling_price); ?> Lei</span>
                                    <span class="float-end"> <s><?php echo e($prod->original_price); ?> Lei</s></span>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\XAMPP\htdocs\website\resources\views/frontend/products/index.blade.php ENDPATH**/ ?>