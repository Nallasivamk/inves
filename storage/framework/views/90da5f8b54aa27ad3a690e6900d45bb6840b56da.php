 
<?php $__env->startSection('content'); ?>
<main class="main" id="main-section">
  <div class="page-content pt-30 pb-150">
      <div class="container">
		    <?php echo $pageInfo->content; ?>

    </div> <!--END container-->
  </div> 
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Trivizion\Outsourcing\invesment\resources\views/site/staticpage/pages.blade.php ENDPATH**/ ?>