@extends('site.layouts.main')
 
@section('content')
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
         <div class="breadcrumb-item d-inline-block active" itemprop="itemListElement">
            Login
            <meta itemprop="name" content="Login" />
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
               <div class="col-lg-6 pr-30 d-none d-lg-block">
                  <img class="border-radius-15" src="{{asset('images/general/login-1.png')}}" alt="" />
               </div>
               <div class="col-lg-6 col-md-8">
                  <div class="login_wrap widget-taber-content background-white">
                     <div class="padding_eight_all bg-white">
                        <div class="heading_s1">
                           <h1 class="mb-5">Login</h1>
                           <p class="mb-30">Don&#039;t have an account? <a href="{{ url('register') }}">Create one</a></p>
                        </div>
                        <form method="POST" action="{{ url('/login')  }}" id="login">
                        @csrf
                           <div class="form-group">
                              <input name="email" id="txt-email" type="email" value="" placeholder="Email">
                           </div>
                           <div class="form-group">
                              <input type="password" name="password" id="txt-password" placeholder="password">
                           </div>
                           <div class="login_footer form-group mb-50">
                              <div class="chek-form">
                                 <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember-checkbox" value="" />
                                    
                                 </div>
                              </div>
                              <a class="text-muted" href="password/reset.html">Forgot password?</a>
                           </div>
                           <div class="form-group">
                              <button type="submit" class="btn btn-heading btn-block hover-up">Login</button>
                           </div>
                           <div class="text-left"></div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</main>
@endsection