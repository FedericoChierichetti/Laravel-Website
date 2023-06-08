

<?php $__env->startSection('title', "Edit your Review"); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <div class="row">
        <div class="col-md 12">
            <div class="card">
                <div class="card-body">

                    <h5>Scrie un Review pentru <?php echo e($review->product->name); ?></h5>
                    <form action="<?php echo e(url('/update-review')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <input type="hidden" name="review_id" value="<?php echo e($review->id); ?>">
                        <textarea class="form-control" name="user_review" rows="5" placeholder="Write a review"><?php echo e($review->user_review); ?></textarea>
                        <button type="submit" class="btn btn-primary mt-3">Actualizeaza Review</button>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\XAMPP\htdocs\website\resources\views/frontend/reviews/edit.blade.php ENDPATH**/ ?>