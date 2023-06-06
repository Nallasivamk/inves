<div class="header-middle header-middle-ptb-1 d-none d-lg-block">
    <div class="container">
       <div class="header-wrap">
          <div class="logo logo-width-1">
             <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('images')); ?>\uploads\logo\<?php echo e($siteInfo['setting']->logo); ?>" alt="Investment Application"></a>
          </div>
          <div class="header-right">
             <div class="search-style-2">
                <form action="" class="form--quick-search"  method="GET">
                   <input type="text" class="input-search-product" name="q" placeholder="Search for items..." value="" autocomplete="off">
                   
                </form>
             </div>
             <div class="header-action-right">
                <div class="header-action-2"> 
                   <div class="header-action-icon-2">
                      <a class="mini-cart-icon" href="cart.html">
                      <img alt="Cart" src="<?php echo e(asset('themes/nest/imgs/theme/icons/icon-cart.svg')); ?>" />
                      <span class="pro-count blue">0</span>
                      </a>
                      <a href="cart.html"><span class="lable">Cart</span></a>
                      <div class="cart-dropdown-wrap cart-dropdown-hm2 cart-dropdown-panel">
                           <ul>
                               <li>
                                   <div class="shopping-cart-img">
                                       <a href="shop-product-right.html"><img alt="" src="<?php echo e(asset('images/products/1-1.jpg')); ?>"></a>
                                   </div>
                                   <div class="shopping-cart-title">
                                       <h4><a href="shop-product-right.html">Daisy Casual Bag</a></h4>
                                       <h4><span>1 X </span>$800.00</h4>
                                   </div>
                                   <div class="shopping-cart-delete">
                                       <a href="#">x</a>
                                   </div>
                               </li>
                               <li>
                                   <div class="shopping-cart-img">
                                       <a href="shop-product-right.html"><img alt="" src="<?php echo e(asset('images/products/1-1.jpg')); ?>"></a>
                                   </div>
                                   <div class="shopping-cart-title">
                                       <h4><a href="shop-product-right.html">Corduroy Shirts</a></h4>
                                       <h4><span>1 X </span>$3200.00</h4>
                                   </div>
                                   <div class="shopping-cart-delete">
                                       <a href="#">x</a>
                                   </div>
                               </li>
                           </ul>
                           <div class="shopping-cart-footer">
                               <div class="shopping-cart-total">
                                   <h4>Total <span>$4000.00</span></h4>
                               </div>
                               <div class="shopping-cart-button">
                                   <a href="<?php echo e(url('cart')); ?>" class="outline">View cart</a>
                                   <a href="<?php echo e(url('checkout')); ?>">Checkout</a>
                               </div>
                           </div>
                       
                      </div>
                   </div>
                   <div class="header-action-icon-2">
                      <a href="login.html">
                      <img class="svgInject rounded-circle" alt="Account" src="<?php echo e(asset('themes/nest/imgs/theme/icons/icon-user.svg')); ?>" />
                      </a>
                      <a href="login.html"><span class="lable ml-0">Account</span></a>
                      <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                        <ul>
                            <li><a href="<?php echo e(url('login')); ?>"><i class="fi fi-rs-user mr-10"></i>Login</a></li>
                            <li><a href="<?php echo e(url('register')); ?>"><i class="fi fi-rs-user-add mr-10"></i>Register</a></li>
                        </ul>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div><?php /**PATH /var/www/html/invesment/resources/views/site/layouts/header.blade.php ENDPATH**/ ?>