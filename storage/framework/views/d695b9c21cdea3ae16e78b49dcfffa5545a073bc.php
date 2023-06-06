<?php $__env->startSection('content'); ?>
<main class="main" id="main-section">
   <div>
      <section class="hero-3 position-relative align-items" style="background-image: url(images/general/home-6.jpg)">
         <h2 class="mb-30 text-center">What are you looking for?</h2>
         <form class="newsletter-form mb-30 text-center" method="post" action="">
            <input type="hidden" name="_token" value="VwJwxYp71k4NZScTdwwSoGIQytDnqgBgftH3WQbw"> 
            <div class="form-subscribe d-flex">
               <input type="email" name="email" placeholder="" />
               <button class="btn" type="submit">Search</button>
            </div>
            <div class="col-auto">
               <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response-63510ea6e2b33">
            </div>
         </form>
         
      </section>
   </div>
   <div>
      <section class="bg-grey-1 section-padding pt-100 pb-80">
         <div class="container">
            <h1 class="mb-80 text-center">Top Product</h1>
            <div class="row product-grid">
               <?php $__currentLoopData = $data['top']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-12 col-sm-6">
                     <div class="product-cart-wrap mb-30">
                        <div class="accordion">
                        <?php $count = 0; ?>
                        <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $innerlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php if($count < 2): ?>

                              <h6 class="pl-10 pt-10"><a href="products/naturally-flavored-cinnamon-vanilla-light-roast-coffee.html"><?php echo e($innerlist['item_name']); ?></a></h6>
                                 <div>
                                    <div class="product-img-action-wrap">
                                       <div class="product-img product-img-zoom">
                                          <?php $url = url('/product_details')."/".App\Http\Helper\Admin\Helpers::encodeAndDecodeID($innerlist['order_number'],'encode');  ?>
                                          <a href="<?php echo e(url('/product_details/')); ?>/<?php echo e(App\Http\Helper\Admin\Helpers::encodeAndDecodeID($innerlist['order_number'],'encode')); ?>">
                                          <img class="default-img" src="<?php echo e(asset('images/products/12-400x400.jpg')); ?>" alt="Naturally Flavored Cinnamon Vanilla Light Roast Coffee">
                                          <img class="hover-img" src="<?php echo e(asset('images/products/12-1-400x400.jpg')); ?>" alt="Naturally Flavored Cinnamon Vanilla Light Roast Coffee">
                                          </a>
                                       </div>
                                    </div>
                              
                                    <div class="product-content-wrap">
                                       <div class="product-category">
                                          <a href="product-categories/bread-and-juice.html">Bread and Juice</a>
                                       </div>
                                       <div>
                                          <span class="font-small text-muted">Sold By <a href="stores/global-store.html">Global Store</a></span>
                                       </div>
                                    </div>
                                 </div>
                           <?php endif; ?>
                           <?php $count++; ?>
                              
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                           
                        </div>
                        
                        <h6 class="pl-10 pt-10"><a href="<?php echo e($url); ?>">More Details</a></h6>
                        
                        <div class="product-content-wrap">
                              <div class="product-card-bottom">
                                 <div class="product-price">
                                       <span>834,101₫</span>
                                       <span class="old-price">2,552,330₫</span>
                                 </div>
                                 <div class="add-cart">
                                       <a aria-label="Add To Cart" class="action-btn add-to-cart-button add" data-id="12" data-url="https://nest.botble.com/cart/add-to-cart" href="#">
                                       <i class="fi-rs-shopping-cart mr-5"></i> <span class="d-inline-block">Add</span>
                                 </a>
                                 </div>
                              </div>
                           </div>
                     </div>
                  </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
         </div>
      </section>
   </div>
   <div>
      <section class="section-padding pb-5">
         <div class="container">
            <div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
               <h3>Deals Of The Day</h3>
            </div>
            <div class="row justify-content-center">
            <?php $__currentLoopData = $data['deal']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="col-xxl-3 col-xl-4 col-lg col-md-6">
                    
                  <div class="product-cart-wrap style-2 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                     <div class="product-img-action-wrap">
                        <div class="product-img">
                           <a href="products/naturally-flavored-cinnamon-vanilla-light-roast-coffee.html">
                           <img src="<?php echo e(asset('images/flash-sales/2.png')); ?>" alt="Naturally Flavored Cinnamon Vanilla Light Roast Coffee" />
                           </a>
                        </div>                     </div>
                     <div class="product-content-wrap">
                        <div class="deals-countdown-wrap">
                           <div class="deals-countdown" data-countdown="2022/11/17"></div>
                        </div>
                        <div class="deals-content">
                           <h2><a href="products/naturally-flavored-cinnamon-vanilla-light-roast-coffee.html">Naturally Flavored Cinnamon Vanilla Light Roast Coffee</a></h2>
                           <div class="product-rate-cover">
                              <div class="product-rate d-inline-block">
                                 <div class="product-rating" style="width: 68%"></div>
                              </div>
                              <span class="font-small ml-5 text-muted">(5)</span>
                           </div>
                           <div>
                              <span class="font-small text-muted">Sold By <a href="stores/global-store.html">Global Store</a></span>
                           </div>
                           <div class="product-card-bottom">
                              <div class="product-price">
                                 <span>834,101₫</span>
                                 <span class="old-price">2,552,330₫</span>
                              </div>
                              <div class="add-cart">
                                 <a aria-label="Add To Cart" class="action-btn add-to-cart-button add" data-id="12" data-url="https://nest.botble.com/cart/add-to-cart" href="#">
                                 <i class="fi-rs-shopping-cart mr-5"></i> <span class="d-inline-block">Add</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </div>
         </div>
      </section>
      <div class="modal fade custom-modal" id="flash-sale-modal" data-id="flash-sale-id-1" tabindex="-1" aria-labelledby="onloadModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               <div class="modal-body">
                  <div class="deal" style="background-image: url(images/flash-sales/1.png);">
                     <div class="deal-top">
                        <h6 class="mb-10 text-brand-2">Deal of the Day</h6>
                     </div>
                     <div class="deal-content detail-info">
                        <h4 class="product-title"><a href="products/colorful-banana.html" class="text-heading">Colorful Banana</a></h4>
                        <div class="clearfix product-price-cover">
                           <div class="product-price primary-color float-left">
                              <span class="current-price text-brand">1,861,809₫</span>
                              <span>
                              <span class="save-price font-md color3 ml-15">68% Off</span>
                              <span class="old-price font-md ml-15">2,737,954₫</span>
                              </span>
                           </div>
                        </div>
                     </div>
                     <div class="deal-bottom">
                        <p class="mb-20">Hurry Up! Offer End In:</p>
                        <div class="deals-countdown pl-5" data-countdown="2022/11/30"></div>
                        <div class="product-detail-rating"></div>
                        <a href="products/colorful-banana.html" class="btn hover-up">Shop Now <i class="fi-rs-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div>
      <section class="section-padding mb-30">
         <top-products-group-component url="index.html?tabs=top-selling%2Ctrending-products%2Crecent-added%2Ctop-rated&amp;top_selling_in_days=365"></top-products-group-component>
      </section>
   </div>
</main>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script-function'); ?>
<script>
   $( function() {
     $( ".accordion" ).accordion();
   } );

</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('site.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp8\htdocs\inves\resources\views/site/landing/landing.blade.php ENDPATH**/ ?>