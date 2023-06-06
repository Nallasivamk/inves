
 
<?php $__env->startSection('content'); ?>
<main class="main" id="main-section">
    <div class="page-header breadcrumb-wrap">
       <div class="container">
          <div class="breadcrumb">
             <div itemprop="itemListElement" class="breadcrumb-item d-inline-block">
                <a href="index.html" itemprop="item" title="Home">
                   Home
                   <meta itemprop="name" content="Home" />
                </a>
                <meta itemprop="position" content="1" />
             </div>
             <span></span>
             <div class="breadcrumb-item d-inline-block active">
                Register
                <meta itemprop="name" content="Register" />
                <meta itemprop="position" content="2" />
             </div>
          </div>
       </div>
    </div>
    <div class="page-content pt-30 pb-150">
       <div class="container">
          <div class="row">
             <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                <div class="row">
                   <div class="col-lg-6 col-md-8">
                      <div class="login_wrap widget-taber-content background-white">
                         <div class="padding_eight_all bg-white">
                            <div class="padding_eight_all bg-white">
                               <h3 class="mb-20">Register</h3>
                               <p>Please fill in the information below</p>
                            </div>
                            <form method="POST" action="<?php echo e(url('register/store')); ?>" id="register">
                              <?php echo csrf_field(); ?>
                               <div class="form__content">
                                 <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                       <div class="form-group">
                                          <input class="form-control" name="first_name" id="first_name" type="text" value="" placeholder="First Name">
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                       <div class="form-group">
                                          <input class="form-control" name="last_name" id="last_name" type="text" value="" placeholder="Last Name">
                                       </div>
                                    </div>
                                 </div>
                                  <div class="form-group">
                                     <input class="form-control" name="email" id="txt-email" type="email" value="" placeholder="Your email address">
                                  </div>

                                  <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                       <div class="form-group">
                                          <input class="form-control" name="password" id="password" type="text" value="" placeholder="Password">
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                       <div class="form-group">
                                          <input class="form-control" name="confirm_password" id="confirm_password" type="text" value="" placeholder="Confirm Password">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                       <div class="form-group">
                                          <input class="form-control" name="phone" id="phone" type="text" value="" placeholder="Phone">
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                       <div class="form-group">
                                          <input class="form-control" name="country" id="country" type="text" value="" placeholder="Country">
                                       </div>
                                    </div>
                                 </div>

                                  <div class="login_footer ">
                                     <div class="chek-form">
                                        <div class="custome-checkbox">
                                          <div class="form-group">
                                           <input class=" form-control form-check-input" type="checkbox" checked name="agree_terms_and_policy" id="agree_terms_and_policy">
                                           <label class="form-check-label" for="agree_terms_and_policy"><span>I agree to terms &amp; Policy.</span></label>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <button type="submit" class="btn btn-fill-out btn-block hover-up">Register</button>
                                  </div>
                                  <br>
                                  <p>Have an account already? <a href="<?php echo e(url('login')); ?>" class="d-inline-block">Login</a></p>
                               </div>
                            </form>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-6 pr-30 d-none d-lg-block">
                     <img class="border-radius-15" src="<?php echo e(asset('images/general/login-1.png')); ?>" alt="" />
                  </div>
                   <div class="col-lg-6 pr-30"></div>
                </div>
             </div>
          </div>
       </div>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel/invesment/resources/views/site/auth/register.blade.php ENDPATH**/ ?>