

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h4>Editeaza Produs</h4>
        </div>
        <div class="card-body">
            <form action="<?php echo e(url('upload-product/'.$products->id)); ?>" method="POST" enctype=multipart/form-data>
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="">Categorie</label>
                        <select class="form-select">
                            <option value=""><?php echo e($products->category->name); ?></option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Nume</label>
                        <input type="text" class="form-control" value="<?php echo e($products->name); ?>" name="name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" value="<?php echo e($products->slug); ?>" name="slug">
                    </div>
                    <div class="col-mid-12 mb-3">
                        <label for="">Descriere mica</label>
                        <textarea name="small_description" class="form-control"><?php echo e($products->small_description); ?></textarea>
                    </div>
                    <div class="col-mid-12 mb-3">
                        <label for="">Descriere</label>
                        <textarea name="description" class="form-control"><?php echo e($products->description); ?></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Pret Original</label>
                        <input type="number" value="<?php echo e($products->original_price); ?>" class="form-control" name="original_price">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Pret de vanzare</label>
                        <input type="number" value="<?php echo e($products->selling_price); ?>" class="form-control" name="selling_price">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Tax</label>
                        <input type="number" value="<?php echo e($products->tax); ?>" class="form-control" name="tax">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Cantitate</label>
                        <input type="number" value="<?php echo e($products->qty); ?>" class="form-control" name="qty">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Ascuns</label>
                        <input type="checkbox" <?php echo e($products->status == "1" ? 'checked' : ''); ?> name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Trending</label>
                        <input type="checkbox" <?php echo e($products->trending == "1" ? 'checked' : ''); ?> name="trending">
                    </div>

                    <div class="col-mid-12 mb-3">
                        <label for="">Titlu Meta</label>
                        <textarea name="meta_title" class="form-control" ><?php echo e($products->meta_title); ?></textarea>
                    </div>
                    <div class="col-mid-12 mb-3">
                        <label for="">Cuvinte Cheie</label>
                        <textarea name="meta_keywords" row="3" class="form-control"><?php echo e($products->meta_keywords); ?></textarea>
                    </div>

                    <div class="col-mid-12 mb-3">
                        <label for="">Descriere Meta</label>
                        <textarea name="meta_description" row="3" class="form-control"><?php echo e($products->meta_description); ?></textarea>
                    </div>
                    <?php if($products->image): ?>
                        <img src="<?php echo e(asset('assets/uploads/products/'.$products->image)); ?>" alt="">
                    <?php endif; ?>
                    <div class="col-mid-12">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-mid-12">
                        <button type="submit" class="btn bnt-primary">Salveaza modificarile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\XAMPP\htdocs\website\resources\views/admin/product/edit.blade.php ENDPATH**/ ?>