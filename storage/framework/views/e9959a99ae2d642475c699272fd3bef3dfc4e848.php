 
<?php $__env->startSection('content'); ?>
<main id="main-section" class="main">
   <div class="page-header breadcrumb-wrap">
      <div class="container">
         <div itemscope="itemscope" itemtype="http://schema.org/BreadcrumbList" class="breadcrumb">
            <div itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem" class="breadcrumb-item d-inline-block">
               <a href="../index.html" itemprop="item" title="Home">
                  Home
                  <meta itemprop="name" content="Home">
               </a>
               <meta itemprop="position" content="1">
            </div>
            <span></span> 
            <div itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem" class="breadcrumb-item d-inline-block active">
               Login
               <meta itemprop="name" content="Login">
               <meta itemprop="position" content="2">
            </div>
         </div>
      </div>
   </div>
   <section class="">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 m-auto">
               <div class="login_wrap widget-taber-content p-30 background-white border-radius-10">
                  <div class="padding_eight_all bg-white">
                     <div class="heading_s1 mb-20">
                        <h3 class="mb-30">Reset Password</h3>
                     </div>
                     <form method="POST" action="<?php echo e(URL('forgot')); ?>" class="form--auth form--login">
                        <?php echo csrf_field(); ?>
                        <div class="form__content">
                           <div class="form-group"><label for="txt-email" class="required">Email</label> <input name="email" id="txt-email" type="email" value="" placeholder="Please enter your email address" class="form-control"></div>
                        </div>
                        <div class="form-group"><button type="submit" class="btn btn-fill-out btn-block hover-up">Send</button></div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel/invesment/resources/views/site/auth/forgot.blade.php ENDPATH**/ ?>