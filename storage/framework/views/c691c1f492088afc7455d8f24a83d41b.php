

<?php $__env->startSection('title', "Write a Review"); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <div class="row">
        <div class="col-md 12">
            <div class="card">
                <div class="card-body">
                    <?php if($verified_purchase->count() > 0): ?>
                        <h5>Scrie un Review pentru <?php echo e($product->name); ?></h5>
                        <form action="<?php echo e(url('/add-review')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                            <textarea class="form-control" name="user_review" rows="5" placeholder="Write a review"></textarea>
                            <button type="submit" class="btn btn-primary mt-3">Posteaza Review</button>
                        </form>
                    <?php else: ?>
                        <div class="alert alert-danger">
                            <h5>Nu sunteti eligibil pentru a scrie un review pentru acest produs.</h5>
                            <p>
                                Pentru a trimite un comentariu despre acest produs, trebuie sa aveti o achizitie a produsului in contul dvs. de client in ultimele 60 luni si produsul sa nu fie returnat.
                            </p>
                            <a href="<?php echo e(url('/')); ?>" class="btn btn-primary mt-3">Acasa</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\XAMPP\htdocs\website\resources\views/frontend/reviews/index.blade.php ENDPATH**/ ?>