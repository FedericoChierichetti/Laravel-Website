

<?php $__env->startSection('title'); ?>
    Comenzile mele
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-white">Vizualizare Comanda
                            <a href="<?php echo e(url('orders')); ?>" class="btn btn-warning float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 order-details">
                                <h4>Detalii de livare</h4>
                                <hr>
                                <label for="">Prenume</label>
                                <div class="border"><?php echo e($orders->fname); ?></div>
                                <label for="">Nume de familie</label>
                                <div class="border"><?php echo e($orders->lname); ?></div>
                                <label for="">Email</label>
                                <div class="border"><?php echo e($orders->email); ?></div>
                                <label for="">Numar de telefon</label>
                                <div class="border"><?php echo e($orders->phone); ?></div>
                                <label for="">Adresa</label>
                                <div class="border">
                                    <?php echo e($orders->address1); ?>, <br>
                                    <?php echo e($orders->address2); ?>, <br>
                                    <?php echo e($orders->city); ?>, <br>
                                    <?php echo e($orders->state); ?>,
                                    <?php echo e($orders->country); ?>,
                                </div>
                                <label for="">Cod Postal</label>
                                <div class="border p-2"><?php echo e($orders->pincode); ?></div>
                        </div>
                        <div class="col-md-6">
                            <h4>Sumar Comanda</h4>
                            <hr>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nume</th>
                                        <th>Cantitate</th>
                                        <th>Pret</th>
                                        <th>Imagine</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $orders->orderitems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($item->products->name); ?></td>
                                            <td><?php echo e($item->qty); ?></td>
                                            <td><?php echo e($item->price); ?> Lei</td>
                                            <td>
                                                <img src="<?php echo e(asset('assets/uploads/products/'.$item->products->image)); ?>" width="50px" alt="Product Image">
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <h4 class="px-2">Subtotal: <span class="float-end"><?php echo e($orders->total_price); ?></span></h4>
                            
                            <div class="mt-5 px-2">
                                <label for="">Status Comanda</label>
                                <form action="<?php echo e(url('update-order/'.$orders->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <select class="form-select" name="order_status">
                                        <option <?php echo e($orders->status == '0'? 'selected':''); ?> value="0">In curs de desfasurare</option>
                                        <option <?php echo e($orders->status == '1'? 'selected':''); ?> value="1">Completata</option>
                                    </select>
                                    <button type="submit" class="btn btn-primary float-end mt-3">Actualizeaza</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\XAMPP\htdocs\website\resources\views/admin/orders/view.blade.php ENDPATH**/ ?>