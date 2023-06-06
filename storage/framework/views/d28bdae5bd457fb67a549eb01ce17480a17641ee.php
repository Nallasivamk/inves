 
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
                            <form method="POST" action="">
                               <input type="hidden" name="_token" value="VwJwxYp71k4NZScTdwwSoGIQytDnqgBgftH3WQbw"> 
                               <div class="form__content">
                                  <div class="form-group">
                                     <input class="form-control" name="name" id="txt-name" type="text" value="" placeholder="Your name">
                                  </div>
                                  <div class="form-group">
                                     <input class="form-control" name="email" id="txt-email" type="email" value="" placeholder="Your email address">
                                  </div>
                                  <div class="form-group">
                                     <input class="form-control" type="password" name="password" id="txt-password" placeholder="Your password">
                                  </div>
                                  <div class="form-group">
                                     <input class="form-control" type="password" name="password_confirmation" id="txt-password-confirmation" placeholder="Password confirmation">
                                  </div>
                                  
                                  
                                  
                                  <div class="login_footer form-group">
                                     <div class="chek-form">
                                        <div class="custome-checkbox">
                                           <input type="hidden" name="agree_terms_and_policy" value="0">
                                           <input class="form-check-input" type="checkbox" name="agree_terms_and_policy" id="agree-terms-and-policy" value="1">
                                           <label class="form-check-label" for="agree-terms-and-policy"><span>I agree to terms &amp; Policy.</span></label>
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
<?php echo $__env->make('site.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Trivizion\Outsourcing\invesment\resources\views/site/auth/register.blade.php ENDPATH**/ ?>