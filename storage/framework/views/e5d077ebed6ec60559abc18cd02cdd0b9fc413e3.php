<!doctype html>
<html>
<head>
      <?php $siteInfo = App\Http\Helper\Admin\Helpers::siteSetting(); ?>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="icon" href="<?php echo e(asset('images')); ?>\uploads\favicon\<?php echo e($siteInfo['setting']->favicon); ?>" type="image/gif" sizes="16x16">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Investment Application</title>
	<?php echo $__env->make('site.layouts.commoncss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php echo $__env->yieldPushContent('css'); ?>
	<?php echo $__env->yieldPushContent('css-inline'); ?>
	
</head>
<body>
<div id="alert-container"></div>
<style>
    .preloader {
        position         : fixed;
        top              : 0;
        left             : 0;
        width            : 100%;
        height           : 100%;
        z-index          : 99999;
        background-color : rgba(255, 255, 255, 0.82);
    }

    .preloader .preloader-loading {
        position  : absolute;
        top       : 50%;
        left      : 50%;
        transform : translate(-50%, -50%);
        display   : block;
    }

    .preloader .preloader-loading::after {
        content           : " ";
        display           : block;
        border-radius     : 50%;
        border-width      : 1px;
        border-style      : solid;
        -webkit-animation : lds-dual-ring 0.5s linear infinite;
        animation         : lds-dual-ring 0.5s linear infinite;
        width             : 40px;
        height            : 40px;
        border-color      : var(--color-brand) transparent var(--color-brand) transparent;
    }

    @keyframes    lds-dual-ring {
        0% {
            transform : rotate(0deg);
        }
        100% {
            transform : rotate(360deg);
        }
    }

    @-webkit-keyframes lds-dual-ring {
        0% {
            transform : rotate(0deg);
        }
        100% {
            transform : rotate(360deg);
        }
    }
</style>
<div class="preloader" id="preloader-active">
    <div class="preloader-loading"></div>
</div>

<header class="header-area header-style-1 header-height-2 header-style-5">
    <?php echo $__env->make('site.layouts.miniheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('site.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('site.layouts.menubar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</header>
<div class="mobile-header-active mobile-header-wrapper-style">
   <div class="mobile-header-wrapper-inner">
      <div class="mobile-header-top">
         <div class="mobile-header-logo">
            <a href="index.html"><img src="../cdn.botble.com/nest/storage/general/logo.png" alt="Nest - Laravel Multipurpose eCommerce Script"></a>
         </div>
         <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
            <button class="close-style search-close">
            <i class="icon-top"></i>
            <i class="icon-bottom"></i>
            </button>
         </div>
      </div>
      <div class="mobile-header-content-area">
         <div class="mobile-search search-style-3 mobile-header-border">
            <form action="https://nest.botble.com/products" class="form--quick-search" data-ajax-url="https://nest.botble.com/ajax/search-products" method="get">
               <input type="text" name="q" class="input-search-product" placeholder="Search for items..." value="" autocomplete="off">
               <button type="submit"><i class="fi-rs-search"></i></button>
               <div class="panel--search-result"></div>
            </form>
         </div>
         <div class="mobile-menu-wrap mobile-header-border">
            <nav>
               <ul class="mobile-menu">
                  <li class=" menu-item-has-children  ">
                     <span class="menu-expand"></span>
                     <a href="index.html" target="_self">
                     <i class='fi-rs-home'></i> Home
                     </a>
                     <ul class="dropdown">
                        <li class=" ">
                           <a href="index.html" target="_self">
                           Home 1
                           </a>
                        </li>
                        <li class=" ">
                           <a href="homepage-2.html" target="_self">
                           Home 2
                           </a>
                        </li>
                        <li class=" ">
                           <a href="homepage-3.html" target="_self">
                           Home 3
                           </a>
                        </li>
                        <li class=" ">
                           <a href="homepage-4.html" target="_self">
                           Home 4
                           </a>
                        </li>
                        <li class=" ">
                           <a href="homepage-5.html" target="_self">
                           Home 5
                           </a>
                        </li>
                        <li class=" ">
                           <a href="homepage-6.html" target="_self">
                           Home 6
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=" menu-item-has-children  ">
                     <span class="menu-expand"></span>
                     <a href="products.html" target="_self">
                     Shop
                     </a>
                     <ul class="dropdown">
                        <li class=" ">
                           <a href="products.html" target="_self">
                           Shop Grid - Full Width
                           </a>
                        </li>
                        <li class=" ">
                           <a href="productsb358.html?layout=product-right-sidebar" target="_self">
                           Shop Grid - Right Sidebar
                           </a>
                        </li>
                        <li class=" ">
                           <a href="products380e.html?layout=product-left-sidebar" target="_self">
                           Shop Grid - Left Sidebar
                           </a>
                        </li>
                        <li class=" ">
                           <a href="product-categories/milks-and-dairies.html" target="_self">
                           Products Of Category
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=" menu-item-has-children  ">
                     <span class="menu-expand"></span>
                     <a href="stores.html" target="_self">
                     Stores
                     </a>
                     <ul class="dropdown">
                        <li class=" ">
                           <a href="stores.html" target="_self">
                           Stores - Grid
                           </a>
                        </li>
                        <li class=" ">
                           <a href="stores9f16.html?layout=stores-list" target="_self">
                           Stores - List
                           </a>
                        </li>
                        <li class=" ">
                           <a href="stores/gopro.html" target="_self">
                           Store - Detail
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=" menu-item-has-children  ">
                     <span class="menu-expand"></span>
                     <a href="products/seeds-of-change-organic-quinoe.html" target="_self">
                     Product
                     </a>
                     <ul class="dropdown">
                        <li class=" ">
                           <a href="products/seeds-of-change-organic-quinoe.html" target="_self">
                           Product Right Sidebar
                           </a>
                        </li>
                        <li class=" ">
                           <a href="products/all-natural-italian-style-chicken-meatballs.html" target="_self">
                           Product Left Sidebar
                           </a>
                        </li>
                        <li class=" ">
                           <a href="products/angies-boomchickapop-sweet-salty-kettle-corn.html" target="_self">
                           Product Full Width
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=" menu-item-has-children  ">
                     <span class="menu-expand"></span>
                     <a href="blog.html" target="_self">
                     Blog
                     </a>
                     <ul class="dropdown">
                        <li class=" ">
                           <a href="blog.html" target="_self">
                           Blog Grid
                           </a>
                        </li>
                        <li class=" ">
                           <a href="blog-list.html" target="_self">
                           Blog List
                           </a>
                        </li>
                        <li class=" ">
                           <a href="blog-big.html" target="_self">
                           Blog Big
                           </a>
                        </li>
                        <li class=" ">
                           <a href="blog-wide.html" target="_self">
                           Blog Wide
                           </a>
                        </li>
                        <li class=" menu-item-has-children  ">
                           <span class="menu-expand"></span>
                           <a href="blog/4-expert-tips-on-how-to-choose-the-right-mens-wallet.html" target="_self">
                           Single Post
                           </a>
                           <ul class="dropdown">
                              <li class=" ">
                                 <a href="blog/4-expert-tips-on-how-to-choose-the-right-mens-wallet.html" target="_self">
                                 Single Post Right Sidebar
                                 </a>
                              </li>
                              <li class=" ">
                                 <a href="blog/sexy-clutches-how-to-buy-wear-a-designer-clutch-bag.html" target="_self">
                                 Single Post Left Sidebar
                                 </a>
                              </li>
                              <li class=" ">
                                 <a href="blog/the-top-2020-handbag-trends-to-know.html" target="_self">
                                 Single Post Full Width
                                 </a>
                              </li>
                              <li class=" ">
                                 <a href="blog/how-to-match-the-color-of-your-handbag-with-an-outfit.html" target="_self">
                                 Single Post with Product Listing
                                 </a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  <li class=" ">
                     <a href="faq.html" target="_self">
                     FAQ
                     </a>
                  </li>
                  <li class=" ">
                     <a href="contact.html" target="_self">
                     Contact
                     </a>
                  </li>
               </ul>
            </nav>
         </div>
         <div class="mobile-header-info-wrap">
            <div class="single-mobile-header-info">
               <a class="mobile-language-active" href="#"><i class="fi-rs-globe"></i> Language <span><i class="fi-rs-angle-down"></i></span></a>
               <div class="lang-curr-dropdown lang-dropdown-active">
                  <ul>
                     <li><a rel="alternate" hreflang="en" href="homepage-6.html"><img src="https://cdn.botble.com/vendor/core/core/base/images/flags/us.svg" title="English" width="16" alt="English"> English</a></li>
                     <li><a rel="alternate" hreflang="vi" href="vi/homepage-6.html"><img src="https://cdn.botble.com/vendor/core/core/base/images/flags/vn.svg" title="Tiếng Việt" width="16" alt="Tiếng Việt"> Tiếng Việt</a></li>
                  </ul>
               </div>
            </div>
            <div class="single-mobile-header-info">
               <a class="mobile-language-active" href="#"><i class="fi-rs-money"></i> Currency <span><i class="fi-rs-angle-down"></i></span></a>
               <div class="lang-curr-dropdown lang-dropdown-active">
                  <ul>
                     <li><a href="register.html">USD</a></li>
                     <li><a href="homepage-6.html">EUR</a></li>
                     <li><a href="homepage-6.html">VND</a></li>
                  </ul>
               </div>
            </div>
            <div class="single-mobile-header-info">
               <a href="login.html"><i class="fi-rs-user"></i> Log In / Sign Up</a>
            </div>
            <div class="single-mobile-header-info">
               <a href="tel:1900 - 888"><i class="fi-rs-headphones"></i> 1900 - 888</a>
            </div>
         </div>
         <div class="mobile-social-icon mb-50">
            <h6 class="mb-15">Follow Us</h6>
            <a href="https://www.facebook.com/" title="Facebook">
            <img src="../cdn.botble.com/nest/storage/general/facebook.png" alt="Facebook" />
            </a>
            <a href="https://www.twitter.com/" title="Twitter">
            <img src="../cdn.botble.com/nest/storage/general/twitter.png" alt="Twitter" />
            </a>
            <a href="https://www.instagram.com/" title="Instagram">
            <img src="../cdn.botble.com/nest/storage/general/instagram.png" alt="Instagram" />
            </a>
            <a href="https://www.pinterest.com/" title="Pinterest">
            <img src="../cdn.botble.com/nest/storage/general/pinterest.png" alt="Pinterest" />
            </a>
            <a href="https://www.youtube.com/" title="Youtube">
            <img src="../cdn.botble.com/nest/storage/general/youtube.png" alt="Youtube" />
            </a>
         </div>
         <div class="site-copyright">Copyright © 2021 Nest all rights reserved. Powered by Botble.</div>
      </div>
   </div>
</div>
    <?php echo $__env->yieldContent('content'); ?>    
    <?php echo $__env->make('site.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    <div class="modal fade custom-modal" id="quick-view-modal" tabindex="-1" aria-labelledby="quick-view-modal-label" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
               <div class="half-circle-spinner loading-spinner">
                  <div class="circle circle-1"></div>
                  <div class="circle circle-2"></div>
               </div>
               <div class="quick-view-content"></div>
            </div>
         </div>
      </div>
   </div>
   <div class="js-cookie-consent cookie-consent cookie-consent-full-width" style="background-color: #000 !important; color: #fff !important;">
      <div class="cookie-consent-body" style="max-width: 1170px;">
         <span class="cookie-consent__message">
         Your experience on this site will be improved by allowing cookies
         <a href="cookie-policy.html">Cookie Policy</a>
         </span>
         <button class="js-cookie-consent-agree cookie-consent__agree" style="background-color: #000 !important; color: #fff !important; border: 1px solid #fff !important;">
         Allow cookies
         </button>
      </div>
   </div>
   <div data-site-cookie-name="cookie_for_consent"></div>
   <div data-site-cookie-lifetime="7300"></div>
   <div data-site-cookie-domain="nest.botble.com"></div>
   <div data-site-session-secure=""></div>
</body>
   <?php echo $__env->make('site.layouts.commonjs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
   <?php echo $__env->make('site.layouts.flashMessage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->yieldPushContent('script'); ?>
   <?php echo $__env->yieldPushContent('script-function'); ?>
   <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="bbf1b8954f048a4d3201da85-text/javascript">
      window.trans = {
          "Views": "Views",
          "Read more": "Read more",
          "days": "days",
          "hours": "hours",
          "mins": "mins",
          "sec": "sec",
          "No reviews!": "No reviews!",
          "Sold By": "Sold By",
          "Quick View": "Quick View",
          "Add To Wishlist": "Add To Wishlist",
          "Add To Compare": "Add To Compare",
          "Out Of Stock": "Out Of Stock",
          "Add To Cart": "Add To Cart",
          "Add": "Add",
      };

      window.siteUrl = "index.html";
      window.currencies = {"display_big_money":false,"billion":"billion","million":"million","is_prefix_symbol":0,"symbol":"\u20ab","title":"VND","decimal_separator":".","thousands_separator":",","number_after_dot":0,"show_symbol_or_title":true};
   </script>
</html><?php /**PATH E:\Trivizion\Outsourcing\invesment\resources\views/site/layouts/main.blade.php ENDPATH**/ ?>