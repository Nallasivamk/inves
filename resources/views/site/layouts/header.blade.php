<div class="header-middle header-middle-ptb-1 d-none d-lg-block">
    <div class="container">
       <div class="header-wrap">
          <div class="logo logo-width-1">
             <a href="{{ url('/') }}"><img src="{{ asset('images') }}\uploads\logo\{{ $siteInfo['setting']->logo }}" alt="Investment Application"></a>
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
                      <img alt="Cart" src="{{asset('themes/nest/imgs/theme/icons/icon-cart.svg')}}" />
                      <span class="pro-count blue">0</span>
                      </a>
                      <a href="cart.html"><span class="lable">Cart</span></a>
                      <div class="cart-dropdown-wrap cart-dropdown-hm2 cart-dropdown-panel">
                           <ul>
                               <li>
                                   <div class="shopping-cart-img">
                                       <a href="shop-product-right.html"><img alt="" src="{{asset('images/products/1-1.jpg')}}"></a>
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
                                       <a href="shop-product-right.html"><img alt="" src="{{asset('images/products/1-1.jpg')}}"></a>
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
                                   <a href="{{ url('cart') }}" class="outline">View cart</a>
                                   <a href="{{ url('checkout') }}">Checkout</a>
                               </div>
                           </div>
                       
                      </div>
                   </div>
                   @if(Auth::check())
                   <div class="header-action-icon-2">
                      <a href="javascript:void(0)">
                      <img class="svgInject rounded-circle" alt="Account" src="{{asset('themes/nest/imgs/theme/icons/icon-user.svg')}}" />
                      </a>
                      <a href="javascript:void(0)"><span class="lable ml-0">{{ Auth::user()->name }}</span></a>
                      <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                        <ul>
                            
                            <li><a href="{{ url('logout') }}"><i class="fi fi-rs-user-add mr-10"></i>Logout</a></li>
                        </ul>
                      </div>
                   </div>
                   @else
                    <div class="header-action-icon-2">
                        <a href="javascript:void(0)">
                        <img class="svgInject rounded-circle" alt="Account" src="{{asset('themes/nest/imgs/theme/icons/icon-user.svg')}}" />
                        </a>
                        <a href="javascript:void(0)"><span class="lable ml-0">Account</span></a>
                        <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                            <ul>
                                <li><a href="{{ url('login') }}"><i class="fi fi-rs-user mr-10"></i>Login</a></li>
                                <li><a href="{{ url('register') }}"><i class="fi fi-rs-user-add mr-10"></i>Register</a></li>
                            </ul>
                        </div>
                    </div>
                   @endif
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>