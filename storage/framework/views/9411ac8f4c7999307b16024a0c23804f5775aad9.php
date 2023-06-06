<div class="mobile-promotion">
   <span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span>
</div>
<div class="header-top header-top-ptb-1 d-none d-lg-block">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-xl-3 col-lg-6">
            <div class="header-info">
               <ul>
                  <li>
                     <a href="<?php echo e(url('/pages/about_us')); ?>">
                     <span>About Us</span>
                     </a>
                  </li>
                  <li>
                     <a href="<?php echo e(url('contact-us')); ?>">
                     <span>Contact Us</span>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="col-xl-6 d-none d-xl-block">
            <div class="text-center">
               <div id="news-flash" class="d-inline-block">
                  <ul>
                     <li>
                        <i class="fi-rs-bell d-inline-block mr-5"></i>
                        <span class="d-inline-block">
                        <b class="text-success"> Trendy 25</b> silver jewelry, save up 35% off today
                        </span>
                        <a class="active d-inline-block" href="products.html">Shop now</a>
                     </li>
                     <li style="display: none">
                        <i class="fi-rs-asterisk d-inline-block mr-5"></i>
                        <span class="d-inline-block">
                        <b class="text-danger">Super Value Deals</b> - Save more with coupons
                        </span>
                     </li>
                     <li style="display: none">
                        <i class="fi-rs-angle-double-right d-inline-block mr-5"></i>
                        <span class="d-inline-block">
                        Get great devices up to 50% off
                        </span>
                        <a class="active d-inline-block" href="products.html">View details</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-6">
            <div class="header-info header-info-right">
               <ul>
                  <li>Need help? Call Us: &nbsp;<strong class="text-brand"> 1900 - 888</strong></li>
                 
                  <li>
                     <a class="language-dropdown-active" href="javascript:void(0)">USD</a>
                     <ul class="language-dropdown">
                        <?php $__currentLoopData = $siteInfo['currency']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <li><a href="javascript:void(0)"><?php echo e($list->code); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div><?php /**PATH E:\Trivizion\Outsourcing\invesment\resources\views/site/layouts/miniheader.blade.php ENDPATH**/ ?>