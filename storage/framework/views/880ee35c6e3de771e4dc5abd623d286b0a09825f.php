<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
	<?php echo $__env->make('Admin.layouts.CommonCSS', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php echo $__env->yieldPushContent('css'); ?>
	<?php echo $__env->yieldPushContent('css-inline'); ?>
</head>
<body  class="vertical-layout vertical-menu-modern 1-column  navbar-sticky footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <?php echo $__env->yieldContent('content'); ?>    
</body>
    <?php echo $__env->make('Admin.layouts.CommonJS', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php echo $__env->make('Admin.layouts.flashMessage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldPushContent('script'); ?>
<?php echo $__env->yieldPushContent('script-function'); ?>
</html>
<?php /**PATH E:\Trivizion\Product\coreAdmin\resources\views/admin/main/plane.blade.php ENDPATH**/ ?>