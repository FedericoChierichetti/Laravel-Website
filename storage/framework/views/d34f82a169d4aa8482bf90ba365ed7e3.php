

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h4>Adauga Produse</h4>
        </div>
        <div class="card-body">
            <form action="<?php echo e(url('insert-product')); ?>" method="POST" enctype=multipart/form-data>
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select" name="cate_id" >
                            <option value="">Selecteaza o Categorie</option>
                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->id); ?>"> <?php echo e($item->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Nume</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug">
                    </div>
                    <div class="col-mid-12 mb-3">
                        <label for="">Mica Descriere</label>
                        <textarea name="small_description" row="3" class="form-control"></textarea>
                    </div>
                    <div class="col-mid-12 mb-3">
                        <label for="">Descriere</label>
                        <textarea name="description" row="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Pret Original</label>
                        <input type="number" class="form-control" name="original_price">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Pret de Vanzare</label>
                        <input type="number" class="form-control" name="selling_price">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Tax</label>
                        <input type="number" class="form-control" name="tax">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Cantitate</label>
                        <input type="number" class="form-control" name="qty">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Ascuns</label>
                        <input type="checkbox" name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Trending</label>
                        <input type="checkbox" name="trending">
                    </div>

                    <div class="col-mid-12 mb-3">
                        <label for="">Titlu Meta</label>
                        <textarea name="meta_title" class="form-control" ></textarea>
                    </div>
                    <div class="col-mid-12 mb-3">
                        <label for="">Cuvinte Cheie</label>
                        <textarea name="meta_keywords" row="3" class="form-control"></textarea>
                    </div>

                    <div class="col-mid-12 mb-3">
                        <label for="">Descriere Meta</label>
                        <textarea name="meta_description" row="3" class="form-control"></textarea>
                    </div>
                    <div class="col-mid-12">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-mid-12">
                        <button type="submit" class="btn bnt-primary">Submite</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\XAMPP\htdocs\website\resources\views/admin/product/add.blade.php ENDPATH**/ ?>