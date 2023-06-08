

<?php $__env->startSection('title'); ?>
    Orders
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-white">Istoric comenzi
                            <a href="<?php echo e('orders'); ?>" class="btn btn-warning float-end">New Orders</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Order Date</th>
                                    <th>Tracking Number</th>
                                    <th>Total Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(date('d-m-Y', strtotime($item->created_at))); ?></td>
                                        <td><?php echo e($item->tracking_no); ?></td>
                                        <td><?php echo e($item->total_price); ?></td>
                                        <td><?php echo e($item->status == '0' ? 'Pending' : 'Completed'); ?></td>
                                        <td>
                                            <a href="<?php echo e(url('admin/view-order/'.$item->id)); ?>" class="btn btn-primary text-white">View</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\XAMPP\htdocs\website\resources\views/admin/orders/history.blade.php ENDPATH**/ ?>