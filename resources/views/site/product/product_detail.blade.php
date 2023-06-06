@extends('site.layouts.main')
 
@section('content')
<main id="main-section" class="main">
    <div class="page-header breadcrumb-wrap">
       <div class="container">
         <div class="tab-style3">
            <ul class="nav nav-tabs text-uppercase">
               <?php $labelCount = 1; ?>
               @foreach($data as $list)
                  <li class="nav-item"><a id="Description-tab" data-bs-toggle="tab" href="#product{{$labelCount}}" class="nav-link @if($labelCount == 1) active @endif">Product {{$labelCount}}</a></li>
               <?php $labelCount++; ?>
               @endforeach
            </ul>
         </div>
      </div>
    </div>
    <div class="container mb-30">
      <div class="tab-content shop_info_tab entry-main-content">
         <div id="Description1" class="tab-pane fade show active">
               <div class="row mb-50 mt-30">
                   <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                      <div class="detail-gallery">
                         <span class="zoom-icon"><i class="fi-rs-search"></i></span> 
                         <div class="product-image-slider slick-initialized slick-slider">
                            <div class="slick-list draggable">
                               <div class="slick-track" style="opacity: 1; width: 3895px; transform: translate3d(-779px, 0px, 0px);">
                                  <figure class="border-radius-10 slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 779px;"><a href="../../cdn.botble.com/nest/storage/products/3-1.jpg" tabindex="-1"><img src="../../cdn.botble.com/nest/storage/products/3-1-800x800.jpg" alt="Angie’s Boomchickapop Sweet &amp; Salty Kettle Corn"></a></figure>
                                  <figure class="border-radius-10 slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 779px;"><a href="../../cdn.botble.com/nest/storage/products/3.jpg" tabindex="0"><img src="../../cdn.botble.com/nest/storage/products/3-800x800.jpg" alt="Angie’s Boomchickapop Sweet &amp; Salty Kettle Corn"></a></figure>
                                  <figure class="border-radius-10 slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" style="width: 779px;"><a href="../../cdn.botble.com/nest/storage/products/3-1.jpg" tabindex="-1"><img src="../../cdn.botble.com/nest/storage/products/3-1-800x800.jpg" alt="Angie’s Boomchickapop Sweet &amp; Salty Kettle Corn"></a></figure>
                                  <figure class="border-radius-10 slick-slide slick-cloned" data-slick-index="2" id="" aria-hidden="true" tabindex="-1" style="width: 779px;"><a href="../../cdn.botble.com/nest/storage/products/3.jpg" tabindex="-1"><img src="../../cdn.botble.com/nest/storage/products/3-800x800.jpg" alt="Angie’s Boomchickapop Sweet &amp; Salty Kettle Corn"></a></figure>
                                  <figure class="border-radius-10 slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" tabindex="-1" style="width: 779px;"><a href="../../cdn.botble.com/nest/storage/products/3-1.jpg" tabindex="-1"><img src="../../cdn.botble.com/nest/storage/products/3-1-800x800.jpg" alt="Angie’s Boomchickapop Sweet &amp; Salty Kettle Corn"></a></figure>
                               </div>
                            </div>
                         </div>
                         <div class="slider-nav-thumbnails slick-initialized slick-slider">
                            <div class="slick-list draggable">
                               <div class="slick-track" style="opacity: 1; width: 402px; transform: translate3d(0px, 0px, 0px);">
                                  <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 181px;"><img src="../../cdn.botble.com/nest/storage/products/3-150x150.jpg" alt="Angie’s Boomchickapop Sweet &amp; Salty Kettle Corn"></div>
                                  <div class="slick-slide" data-slick-index="1" aria-hidden="false" tabindex="0" style="width: 181px;"><img src="../../cdn.botble.com/nest/storage/products/3-1-150x150.jpg" alt="Angie’s Boomchickapop Sweet &amp; Salty Kettle Corn"></div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="single-social-share clearfix mt-50 mb-15">
                         <p class="mb-15 mt-30 font-sm"><i class="fi-rs-share me-2"></i> <span class="d-inline-block">Share this</span></p>
                         <div class="mobile-social-icon wow fadeIn mb-sm-5 mb-md-0 animated animated" style="visibility: visible;">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fnest.botble.com%2Fproducts%2Fangies-boomchickapop-sweet-salty-kettle-corn" target="_blank" class="facebook">
                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                  <path fill="none" d="M0 0h24v24H0z"></path>
                                  <path fill="#ffffff" d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5z"></path>
                               </svg>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fnest.botble.com%2Fproducts%2Fangies-boomchickapop-sweet-salty-kettle-corn&amp;text=Short%20Hooded%20Coat%20features%20a%20straight%20body,%20large%20pockets%20with%20button%20flaps,%20ventilation%20air%20holes,%20and%20a%20string%20detail%20along%20the%20hemline.%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%201%20Year%20AL%20Jazeera%20Brand%20Warranty%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2030%20Day%20Return%20Policy%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20Cash%20on%20Delivery%20available" target="_blank" class="twitter">
                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                  <path fill="none" d="M0 0h24v24H0z"></path>
                                  <path fill="#ffffff" d="M22.162 5.656a8.384 8.384 0 0 1-2.402.658A4.196 4.196 0 0 0 21.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 0 0-7.126 3.814 11.874 11.874 0 0 1-8.62-4.37 4.168 4.168 0 0 0-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 0 1-1.894-.523v.052a4.185 4.185 0 0 0 3.355 4.101 4.21 4.21 0 0 1-1.89.072A4.185 4.185 0 0 0 7.97 16.65a8.394 8.394 0 0 1-6.191 1.732 11.83 11.83 0 0 0 6.41 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.496 8.496 0 0 0 2.087-2.165z"></path>
                               </svg>
                            </a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fnest.botble.com%2Fproducts%2Fangies-boomchickapop-sweet-salty-kettle-corn&amp;summary=Short%20Hooded%20Coat%20features%20a%20straight%20body,%20large%20pockets%20with%20button%20flaps,%20ventilation%20air%20holes,%20and%20a%20string%20detail%20along%20the%20hemline.%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%201%20Year%20AL%20Jazeera%20Brand%20Warranty%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2030%20Day%20Return%20Policy%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20Cash%20on%20Delivery%20available" target="_blank" class="linkedin">
                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                  <path fill="none" d="M0 0h24v24H0z"></path>
                                  <path fill="#ffffff" d="M18.335 18.339H15.67v-4.177c0-.996-.02-2.278-1.39-2.278-1.389 0-1.601 1.084-1.601 2.205v4.25h-2.666V9.75h2.56v1.17h.035c.358-.674 1.228-1.387 2.528-1.387 2.7 0 3.2 1.778 3.2 4.091v4.715zM7.003 8.575a1.546 1.546 0 0 1-1.548-1.549 1.548 1.548 0 1 1 1.547 1.549zm1.336 9.764H5.666V9.75H8.34v8.589zM19.67 3H4.329C3.593 3 3 3.58 3 4.297v15.406C3 20.42 3.594 21 4.328 21h15.338C20.4 21 21 20.42 21 19.703V4.297C21 3.58 20.4 3 19.666 3h.003z"></path>
                               </svg>
                            </a>
                         </div>
                      </div>
                      <a href="../cdn-cgi/l/email-protection.html#15667a78707a7b7055706d74786579703b767a782a6660777f7076612857606c35547b727c70f7958c6635577a7a78767d7c767e74657a6535466270706135337478652e35467479616c355e706161797035567a677b33777a716c2857606c35617d7c66357a7b702f357d616165662f3a3a7b7066613b777a617779703b767a783a65677a71607661663a747b727c706638777a7a78767d7c767e74657a6538666270706138667479616c387e706161797038767a677b" class="mail-to-friend font-sm color-grey"><i class="fi-rs-envelope"></i> Email to a Friend</a>
                   </div>
                   <div class="col-md-6 col-sm-12 col-xs-12">
                      <div class="detail-info pr-30 pl-30">
                         <h2 class="title-detail">Angie’s Boomchickapop Sweet &amp; Salty Kettle Corn</h2>
                         <div class="product-detail-rating">
                            <a href="#Reviews">
                               <div class="product-rate-cover text-end">
                                  <div class="product-rate d-inline-block">
                                     <div class="product-rating" style="width: 80%;"></div>
                                  </div>
                                  <span class="font-small ml-5 text-muted">(1 reviews)</span>
                               </div>
                            </a>
                         </div>
                         <div class="clearfix product-price-cover">
                            <div class="product-price primary-color float-left"><span class="current-price text-brand">2,346,983₫</span> <span><span class="save-price font-md color3 ml-15"><span class="percentage-off">-65% Off</span></span> <span class="old-price font-md ml-15">6,705,667₫</span></span></div>
                         </div>
                         <div class="short-desc mb-30">
                            <p>Sold By: <a href="../stores/global-store.html"><strong>Global Store</strong></a></p>
                            <p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p>
                            <ul style="padding-left: 0px;">
                               <li style="list-style: none;"><i class="fi-rs-hourglass mr-5 text-brand"></i> 1 Year AL Jazeera Brand Warranty</li>
                               <li style="list-style: none;"><i class="fi-rs-paper-plane mr-5 text-brand"></i> 30 Day Return Policy</li>
                               <li style="list-style: none;"><i class="fi-rs-credit-card mr-5 text-brand"></i> Cash on Delivery available</li>
                            </ul>
                         </div>
                         <div class="pr_switch_wrap">
                            <div data-target="angies-boomchickapop-sweet-salty-kettle-corn.html" class="product-attributes">
                               <div data-type="text" class="text-swatches-wrapper attribute-swatches-wrapper attribute-swatches-wrapper form-group product__attribute product__color">
                                  <label class="attribute-name">Weight</label> 
                                  <div class="attribute-values">
                                     <ul class="text-swatch attribute-swatch color-swatch">
                                        <li data-slug="2kg" data-id="2" class="attribute-swatch-item ">
                                           <div><label><input type="radio" name="attribute_weight_1726337373" value="2" class="product-filter-item"> <span>2KG</span></label></div>
                                        </li>
                                        <li data-slug="5kg" data-id="5" class="attribute-swatch-item ">
                                           <div><label><input type="radio" name="attribute_weight_1726337373" value="5" checked="checked" class="product-filter-item"> <span>5KG</span></label></div>
                                        </li>
                                     </ul>
                                  </div>
                               </div>
                               <div data-type="text" class="text-swatches-wrapper attribute-swatches-wrapper attribute-swatches-wrapper form-group product__attribute product__color">
                                  <label class="attribute-name">Boxes</label> 
                                  <div class="attribute-values">
                                     <ul class="text-swatch attribute-swatch color-swatch">
                                        <li data-slug="2boxes" data-id="7" class="attribute-swatch-item ">
                                           <div><label><input type="radio" name="attribute_boxes_1726337373" value="7" checked="checked" class="product-filter-item"> <span>2 Boxes</span></label></div>
                                        </li>
                                        <li data-slug="5boxes" data-id="10" class="attribute-swatch-item ">
                                           <div><label><input type="radio" name="attribute_boxes_1726337373" value="10" class="product-filter-item"> <span>5 Boxes</span></label></div>
                                        </li>
                                     </ul>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div style="margin-bottom: 20px;"><label>Availability: </label> <span class="number-items-available"><span class="text-success">
                            17 products available
                            </span></span>
                         </div>
                         <form method="POST" action="https://nest.botble.com/cart/add-to-cart" class="add-to-cart-form">
                            <input type="hidden" name="_token" value="VwJwxYp71k4NZScTdwwSoGIQytDnqgBgftH3WQbw"> <input type="hidden" name="id" value="29" class="hidden-product-id"> 
                            <div class="detail-extralink mb-50">
                               <div class="detail-qty border radius"><a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a> <input type="number" min="1" value="1" name="qty" class="qty-val qty-input"> <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a></div>
                               <div class="product-extra-link2  has-buy-now-button "><button type="submit" class="button button-add-to-cart "><i class="fi-rs-shopping-cart"></i>Add to cart</button> <button type="submit" name="checkout" class="button button-buy-now ">Buy Now</button> <a aria-label="Add To Wishlist" data-url="https://nest.botble.com/wishlist/3" href="#" class="action-btn hover-up js-add-to-wishlist-button"><i class="fi-rs-heart"></i></a> <a aria-label="Add To Compare" href="#" data-url="../compare/3.html" class="action-btn hover-up js-add-to-compare-button"><i class="fi-rs-shuffle"></i></a></div>
                            </div>
                         </form>
                         <div class="font-xs">
                            <ul class="mr-50 float-start">
                               <li id="product-sku" class="mb-5" style="display: none;"><span class="d-inline-block">SKU</span>: <span class="sku-text">HS-102-A0</span></li>
                               <li class="mb-5"><span class="d-inline-block">Categories:</span> <a href="../product-categories/wines-drinks.html" title="Wines &amp; Drinks">Wines &amp; Drinks</a></li>
                               <li class="mb-5"><span class="d-inline-block">Tags:</span> <a href="../product-tags/shoes.html" rel="tag" title="Shoes">Shoes</a>, <a href="../product-tags/clothes.html" rel="tag" title="Clothes">Clothes</a>, <a href="../product-tags/hand-bag.html" rel="tag" title="Hand bag">Hand bag</a></li>
                               <li class="mb-5"><span class="d-inline-block">Brands:</span> <a href="../brands/groneba.html" title="Groneba">Groneba</a></li>
                            </ul>
                         </div>
                      </div>
                   </div>
                </div>
         </div>
         <?php $descCount = 1; ?>
         @foreach($data as $list)
         <div id="product{{$descCount}}" class="tab-pane fade show active">

         </div>
         <?php $descCount++; ?>
         @endforeach
      </div>
       
    </div>
 </main>
@endsection