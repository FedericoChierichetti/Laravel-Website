

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h4>Categorii</h4>
            <hr>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nume</th>
                        <th>Descriere</th>
                        <th>Imagine</th>
                        <th>Actiune</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <tr>
                            <td><?php echo e($item->id); ?></td>
                            <td><?php echo e($item->name); ?></td>
                            <td><?php echo e($item->description); ?></td>
                            <td>
                                <img src="<?php echo e(asset('assets/uploads/category/'.$item->image)); ?>" class="cate-image" alt="Image here">  
                            </td>
                            <td>
                                <a href="<?php echo e(url('edit-category/'.$item->id)); ?>" class="btn btn-primary">Editeaza</button>
                                <a href="<?php echo e(url('delete-category/'.$item->id)); ?>" class="btn btn-danger">Sterge</button>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\XAMPP\htdocs\website\resources\views/admin/category/index.blade.php ENDPATH**/ ?>