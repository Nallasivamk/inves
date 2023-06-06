 
<?php $__env->startSection('content'); ?>
<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                <span></span> Checkout
            </div>
        </div>
    </div>
    <div class="container mb-80 mt-50">
        <div class="row">
            <div class="col-lg-8 mb-40">
                <h1 class="heading-2 mb-10">Checkout</h1>
                <div class="d-flex justify-content-between">
                    <h6 class="text-body">There are <span class="text-brand">3</span> products in your cart</h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="row">
                    <h4 class="mb-30">Billing Details</h4>
                    <form method="post">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <input type="text" required="" name="fname" placeholder="First name *">
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="text" required="" name="lname" placeholder="Last name *">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <input type="text" name="billing_address" required="" placeholder="Address *">
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="text" name="billing_address2" required="" placeholder="Address line2">
                            </div>
                        </div>
                        <div class="row shipping_calculator">
                            
                            <div class="form-group col-lg-6">
                                <input required="" type="text" name="city" placeholder="City / Town *">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <input required="" type="text" name="zipcode" placeholder="Postcode / ZIP *">
                            </div>
                            <div class="form-group col-lg-6">
                                <input required="" type="text" name="phone" placeholder="Phone *">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <input required="" type="text" name="cname" placeholder="Company Name">
                            </div>
                            <div class="form-group col-lg-6">
                                <input required="" type="text" name="email" placeholder="Email address *">
                            </div>
                        </div>
                        <div class="form-group mb-30">
                            <textarea rows="5" placeholder="Additional information"></textarea>
                        </div>
                        
                        <div id="collapsePassword" class="form-group create-account collapse in">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input required="" type="password" placeholder="Password" name="password">
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="border p-40 cart-totals ml-30 mb-50">
                    <div class="d-flex align-items-end justify-content-between mb-30">
                        <h4>Your Order</h4>
                        <h6 class="text-muted">Subtotal</h6>
                    </div>
                    <div class="divider-2 mb-30"></div>
                    <div class="table-responsive order_table checkout">
                        <table class="table no-border">
                            <tbody>
                                <tr>
                                    <td class="image product-thumbnail"><img src="<?php echo e(asset('images/products/1-1.jpg')); ?>" alt="#"></td>
                                    <td>
                                        <h6 class="w-160 mb-5"><a href="shop-product-full.html" class="text-heading">Yidarton Women Summer Blue</a></h6>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width:90%">
                                                </div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                    </td>
                                    <td>
                                        <h6 class="text-muted pl-20 pr-20">x 1</h6>
                                    </td>
                                    <td>
                                        <h4 class="text-brand">$13.3</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="image product-thumbnail"><img src="<?php echo e(asset('images/products/1-1.jpg')); ?>" alt="#"></td>
                                    <td>
                                        <h6 class="w-160 mb-5"><a href="shop-product-full.html" class="text-heading">Seeds of Change Organic Quinoa</a></h6>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width:90%">
                                                </div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                    </td>
                                    <td>
                                        <h6 class="text-muted pl-20 pr-20">x 1</h6>
                                    </td>
                                    <td>
                                        <h4 class="text-brand">$15.0</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="image product-thumbnail"><img src="<?php echo e(asset('images/products/1-1.jpg')); ?>" alt="#"></td>
                                    <td>
                                        <h6 class="w-160 mb-5"><a href="shop-product-full.html" class="text-heading">Angies Boomchickapop Sweet </a></h6>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width:90%">
                                                </div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                    </td>
                                    <td>
                                        <h6 class="text-muted pl-20 pr-20">x 1</h6>
                                    </td>
                                    <td>
                                        <h4 class="text-brand">$17.2</h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-lg-7"></div>
            <div class="col-lg-5">
               
             <div class="border p-md-4 cart-totals ml-30">
                <div class="table-responsive">
                   <table class="table no-border">
                      <tbody>
                         
                         <tr>
                            <td class="cart_total_label">
                               <h6 class="text-muted">Total</h6>
                            </td>
                            <td class="cart_total_amount">
                               <h4 class="text-brand text-end">$12.31</h4>
                            </td>
                         </tr>
                      </tbody>
                   </table>
                </div>
                <a href="#" class="btn mb-20 w-100">Payment<i class="fi-rs-sign-out ml-15"></i></a>
             </div>
         
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Trivizion\Outsourcing\invesment\resources\views/site/cart/checkout.blade.php ENDPATH**/ ?>