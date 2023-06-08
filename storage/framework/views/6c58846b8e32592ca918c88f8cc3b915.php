

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h4>Utilizatori inregistrati</h4>
            <hr>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nume</th>
                        <th>Email</th>
                        <th>Numar de telefon</th>
                        <th>Actiune</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <tr>
                            <td><?php echo e($item->id); ?></td>
                            <td><?php echo e($item->name.' '.$item->lname); ?></td>
                            <td><?php echo e($item->email); ?></td>
                            <td><?php echo e($item->phone); ?></td>

                            <td>
                                <a href="<?php echo e(url('view-user/'.$item->id)); ?>" class="btn btn-primary btn-sm">View</button>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\XAMPP\htdocs\website\resources\views/admin/users/index.blade.php ENDPATH**/ ?>