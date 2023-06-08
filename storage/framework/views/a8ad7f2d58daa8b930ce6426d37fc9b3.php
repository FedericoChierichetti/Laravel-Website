<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'ND MEDHEALTH')); ?></title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <link href="<?php echo e(asset('admin/css/material-dashboard.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('admin/css/custom.css')); ?>" rel="stylesheet">

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
</head>
<body>

    <div class="wrapper">
        <?php echo $__env->make('layouts.inc.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="main-panel">
            <?php echo $__env->make('layouts.inc.adminnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="content">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
            <?php echo $__env->make('layouts.inc.adminfooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </div>

    <script src="<?php echo e(asset('admin/js/jquery.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('admin/js/popper.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('admin/js/bootstrap-material-design.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('admin/js/perfect-scrollbar.jquery.min.js')); ?>" defer></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php if(session('status')): ?>  
        <script>
            swal("<?php echo e(session('status')); ?>");
        </script>
    <?php endif; ?>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
<?php /**PATH F:\XAMPP\htdocs\website\resources\views/layouts/admin.blade.php ENDPATH**/ ?>