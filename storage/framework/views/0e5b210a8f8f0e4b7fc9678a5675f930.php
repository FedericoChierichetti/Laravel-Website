<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>
        <?php echo $__env->yieldContent('title'); ?>
    </title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <link href="<?php echo e(asset('frontend/css/custom.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/css/bootstrap5.css')); ?>" rel="stylesheet">
    
    
    <link href="<?php echo e(asset('frontend/css/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/css/owl.theme.default.min.css')); ?>" rel="stylesheet">
    
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        a{
            text-decoration: none !important;
            color: black !important;
        }
    </style>
    
</head>

<body>
    <?php echo $__env->make('layouts.inc.frontnavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="content">
         <?php echo $__env->yieldContent('content'); ?>
    </div>

    <script src="<?php echo e(asset('frontend/js/jquery-3.6.0.min.js')); ?>"></script>  
    <script src="<?php echo e(asset('frontend/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/custom.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/checkout.js')); ?>"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script>
        var availableTags = [];
        $.ajax({
            method: "GET",
            url: "/product-list",
            success: function (response) {
                    startAutoComplete(response);
                }
        });

        function startAutoComplete(availableTags)
        {
            $( "#search_product" ).autocomplete({
                source: availableTags
            });
        }
          
        </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php if(session('status')): ?>  
        <script>
            swal("<?php echo e(session('status')); ?>");
        </script>
    <?php endif; ?>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
<?php /**PATH F:\XAMPP\htdocs\website\resources\views/layouts/front.blade.php ENDPATH**/ ?>