

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h4>Editeaza Categoria</h4>
        </div>
        <div class="card-body">
            <form action="<?php echo e(url('update-category/'.$category->id)); ?>" method="POST" enctype=multipart/form-data>
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Nume</label>
                        <input type="text" value="<?php echo e($category->name); ?>" class="form-control" name="name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" value="<?php echo e($category->slug); ?>" class="form-control" name="slug">
                    </div>
                    <div class="col-mid-12 mb-3">
                        <label for="">Descriere</label>
                        <textarea name="description" row="3" class="form-control"> <?php echo e($category->description); ?></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Ascuns</label>
                        <input type="checkbox" <?php echo e($category->status == "1" ? 'checked':''); ?> name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Popular</label>
                        <input type="checkbox" <?php echo e($category->popular == "1" ? 'checked':''); ?> name="popular">
                    </div>

                    <div class="col-mid-12 mb-3">
                        <label for="">Titlu Meta</label>
                        <textarea type="text" class="form-control" name="meta_title"> <?php echo e($category->meta_title); ?></textarea>
                    </div>
                    <div class="col-mid-12 mb-3">
                        <label for="">Cuvinte Cheie</label>
                        <textarea name="meta_keywords" row="3" class="form-control"> <?php echo e($category->meta_keywords); ?> </textarea>
                    </div>

                    <div class="col-mid-12 mb-3">
                        <label for="">Descriere Meta</label>
                        <textarea name="meta_description" row="3" class="form-control"> <?php echo e($category->meta_description); ?> </textarea>
                    </div>
                    <?php if($category->image): ?>
                        <img src="<?php echo e(asset('assets/uploads/category/'.$category->image)); ?>" alt="Category image">
                    <?php endif; ?>
                    <div class="col-mid-12">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-mid-12">
                        <button type="submit" class="btn bnt-primary">Savlveaza Schimbarile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\XAMPP\htdocs\website\resources\views/admin/category/edit.blade.php ENDPATH**/ ?>