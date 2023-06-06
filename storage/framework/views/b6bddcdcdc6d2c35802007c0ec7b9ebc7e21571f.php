<div class="header-bottom header-bottom-bg-color  sticky-bar ">
    <div class="container">
    <div class="header-wrap header-space-between position-relative">
        <div class="logo logo-width-1 d-block d-lg-none">
            <a href="index.html"><img src="../cdn.botble.com/nest/storage/general/logo.png" alt="Nest - Laravel Multipurpose eCommerce Script"></a>
        </div>
        <div class="header-nav d-none d-lg-flex">
            
            <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                <nav>
                <ul>
                    <li>
                        <a href="<?php echo e(url('/')); ?>" target="_self">
                        <i class=""></i> Home </a>
                    </li>
                    <?php if(Auth::check()): ?>
                    <li>
                        <a href="<?php echo e(url('/dashboard')); ?>" target="_self">
                        <i class=""></i> Dashboard </a>
                    </li>
                    <?php endif; ?>
                    <li>
                        <a href="<?php echo e(url('/products')); ?>" target="_self">
                        <i class=""></i> Products </a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('/faq')); ?>" target="_self">FAQ</a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('/contact-us')); ?>" target="_self">Contact Us</a>
                    </li>
                </ul>
                </nav>
            </div>
        </div>
        <div class="hotline d-none d-lg-flex">
            <img src="<?php echo e(asset('themes/nest/imgs/theme/icons/icon-headphone.svg')); ?>" alt="hotline" />
            <p>1900 - 888<span>24/7 Support Center</span></p>
        </div>
        <div class="header-action-icon-2 d-block d-lg-none">
            <div class="burger-icon burger-icon-white">
                <span class="burger-icon-top"></span>
                <span class="burger-icon-mid"></span>
                <span class="burger-icon-bottom"></span>
            </div>
        </div>
        <div class="header-action-right d-block d-lg-none">
            <div class="header-action-2">
                
                <div class="header-action-icon-2">
                <a class="mini-cart-icon" href="#">
                <img alt="Cart" src="<?php echo e(asset('themes/nest/imgs/theme/icons/icon-cart.svg')); ?>" />
                <span class="pro-count white">0</span>
                </a>
                <div class="cart-dropdown-wrap cart-dropdown-hm2 cart-dropdown-panel">
                    <span>No products in the cart.</span>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div><?php /**PATH D:\xampp8\htdocs\inves\resources\views/site/layouts/menubar.blade.php ENDPATH**/ ?>