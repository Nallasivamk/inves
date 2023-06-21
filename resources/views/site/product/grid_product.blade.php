@extends('site.layouts.main')
@section('content')
<main class="main" style="transform: none;">
   <div class="page-header mt-30 mb-50">
      <div class="container">
         
      </div>
   </div>
   <div class="container mb-30" style="transform: none;">
      <div class="row" style="transform: none;">
         <div class="col-lg-4-5">
            <div class="col-lg-12">
               <div class="table-responsive shopping-summery">
                  <table class="table table-wishlist table--cart">
                  <div class="" style="float:right;">
                        <button ><i class="fa fa-bars"></i><a href="/products">List View</a></button>
                        <button ><i class="fa fa-th-large"></i><a href="#">Grid View</a></button>
                              
                  </div>
                     <thead>
                        <tr class="main-heading">
                           <th scope="col" colspan="2" class="start pl-30">Product</th>
                           <th></th>
                           <th scope="col">Unit Price</th>
                           <th scope="col">Quantity</th>
                           <th scope="col">Subtotal</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr class="pt-10">
                           <td class="image product-thumbnail pt-10" style="width:12% !important"><img src="https://botble.b-cdn.net/nest/storage/products/4-150x150.jpg" alt="Foster Farms Takeout Crispy Classic"></td>
                           <td class="product-des product-name">
                              <h6 class="mb-1"><a href="https://nest.botble.com/products/foster-farms-takeout-crispy-classic" class="product-name mb-1 text-heading">Foster Farms Takeout Crispy Classic </a></h6>
                              <p class="d-block mb-0 sold-by"><small><span>Sold by:</span><a href="https://nest.botble.com/stores/young-shop">Young Shop</a></small></p>
                              <p class="mb-0"><small>(Weight: 3KG, Boxes: 3 Boxes)</small></p>
                           </td>
                           <td>X1</td>
                           <td data-title="Price" class="price">
                              <h4 class="text-body">$49.28 </h4>
                              <small><del>$88.00</del></small>
                           </td>
                           <td data-title="Stock" class="text-center detail-info">
                              <div class="detail-extralink mr-15">
                                 <div class="detail-qty border radius m-auto"><a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a><input type="number" min="1" value="1" name="items[e5734d275f79f5424cf361dc7b4a011d][values][qty]" class="qty-val qty-input"><a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a></div>
                              </div>
                           </td>
                           <td data-title="Price" class="price">
                              <h4 class="text-brand">$49.28 </h4>
                           </td>
                        </tr>
                        <tr class="pt-10">
                           <td class="image product-thumbnail pt-10" style="width:12% !important"><img src="https://botble.b-cdn.net/nest/storage/products/6-150x150.jpg" alt="Chobani Complete Vanilla Greek"></td>
                           <td class="product-des product-name">
                              <h6 class="mb-5"><a href="https://nest.botble.com/products/chobani-complete-vanilla-greek" class="product-name mb-10 text-heading">Chobani Complete Vanilla Greek </a></h6>
                              <p class="d-block mb-0 sold-by"><small><span>Sold by:</span><a href="https://nest.botble.com/stores/young-shop">Young Shop</a></small></p>
                              <p class="mb-0"><small>(Weight: 1KG, Boxes: 4 Boxes)</small></p>
                           </td>
                           <td>X1</td>
                           <td data-title="Price" class="price">
                              <h4 class="text-body">$24.00 </h4>
                              <small><del>$50.00</del></small>
                           </td>
                           <td data-title="Stock" class="text-center detail-info">
                              <div class="detail-extralink mr-15">
                                 <div class="detail-qty border radius m-auto"><a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a><input type="number" min="1" value="1" name="items[17a0c4875c58db66117ae97f2a7d47a9][values][qty]" class="qty-val qty-input"><a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a></div>
                              </div>
                           </td>
                           <td data-title="Price" class="price">
                              <h4 class="text-brand">$24.00 </h4>
                           </td>
                           
                        </tr>
                        
                        <tr class="pt-10 more hide-all">
                           <td class="image product-thumbnail pt-10" style="width:12% !important"><input type="hidden" name="items[8632fce1c38e69091f22caa0184ba0af][rowId]" value="8632fce1c38e69091f22caa0184ba0af"><img src="https://botble.b-cdn.net/nest/storage/products/8-150x150.jpg" alt="Encore Seafoods Stuffed Alaskan"></td>
                           <td class="product-des product-name">
                              <h6 class="mb-5"><a href="https://nest.botble.com/products/encore-seafoods-stuffed-alaskan" class="product-name mb-10 text-heading">Encore Seafoods Stuffed Alaskan </a></h6>
                              <p class="d-block mb-0 sold-by"><small><span>Sold by:</span><a href="https://nest.botble.com/stores/global-office">Global Office</a></small></p>
                              <a class="mb-0"><small>(Boxes: 2 Boxes, Weight: 4KG)</small></a>
                           </td>
                           <td>X1</td>
                           <td data-title="Price" class="price">
                              <h4 class="text-body">$52.06 </h4>
                              <small><del>$112.00</del></small>
                           </td>
                           <td data-title="Stock" class="text-center detail-info">
                              <div class="detail-extralink mr-15">
                                 <div class="detail-qty border radius m-auto"><a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a><input type="number" min="1" value="1" name="items[8632fce1c38e69091f22caa0184ba0af][values][qty]" class="qty-val qty-input"><a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a></div>
                              </div>
                           </td>
                           <td data-title="Price" class="price">
                              <h4 class="text-brand">$52.06 </h4>
                           </td>
                           
                        </tr>
                        <tr class="pt-10 more hide-all">
                           <td class="image product-thumbnail pt-10" style="width:12% !important"><input type="hidden" name="items[8632fce1c38e69091f22caa0184ba0af][rowId]" value="8632fce1c38e69091f22caa0184ba0af"><img src="https://botble.b-cdn.net/nest/storage/products/8-150x150.jpg" alt="Encore Seafoods Stuffed Alaskan"></td>
                           <td class="product-des product-name">
                              <h6 class="mb-5"><a href="https://nest.botble.com/products/encore-seafoods-stuffed-alaskan" class="product-name mb-10 text-heading">Encore Seafoods Stuffed Alaskan </a></h6>
                              <p class="d-block mb-0 sold-by"><small><span>Sold by:</span><a href="https://nest.botble.com/stores/global-office">Global Office</a></small></p>
                              <p class="mb-0"><small>(Boxes: 2 Boxes, Weight: 4KG)</small></p>
                           </td>
                           <td>X1</td>
                           <td data-title="Price" class="price">
                              <h4 class="text-body">$52.06 </h4>
                              <small><del>$112.00</del></small>
                           </td>
                           <td data-title="Stock" class="text-center detail-info">
                              <div class="detail-extralink mr-15">
                                 <div class="detail-qty border radius m-auto"><a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a><input type="number" min="1" value="1" name="items[8632fce1c38e69091f22caa0184ba0af][values][qty]" class="qty-val qty-input"><a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a></div>
                              </div>
                           </td>
                           <td data-title="Price" class="price">
                              <h4 class="text-brand">$52.06 </h4>
                           </td>
                           
                        </tr>
                     </tbody>
                  </table>
                  <p class="mb-0 show-all"><small>View More</small></p>
               </div>
               
               <div class="divider-2 mb-30"></div>

         <!--SIva -->

         <style>
            .card {
   margin-bottom: 1rem;
}

.list-view {
  .row {
    > [class*='col-'] {
      max-width: 100%;
      flex: 0 0 100%;
    }
  }
  .card {
    @media (max-width: 575.98px) {
     flex-direction: column;
    }
    flex-direction: row;
    > .card-img-top {
     width: auto;
    }
    
    .card-body {
      display: inline-block;
    }
  }
}


            </style>
         <div class="container mb-3 mt-3">
  <button class="btn btn-primary btn-grid">Grid View</button>
  <button class="btn btn-danger btn-list">List View</button>
  
</div>
<div class="container grid-container">
  <div class="row">
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card">
        <img class="card-img-top" src="https://picsum.photos/362/180" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card">
        <img class="card-img-top" src="https://picsum.photos/362/180" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card">
        <img class="card-img-top" src="https://picsum.photos/362/180" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card">
        <img class="card-img-top" src="https://picsum.photos/362/180" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card">
        <img class="card-img-top" src="https://picsum.photos/362/180" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card">
        <img class="card-img-top" src="https://picsum.photos/362/180" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
  </div>
  
</div>
         <!--SIva -->
               

               
               </div>
               
         </div>
         <div class="col-lg-1-5 primary-sidebar" >
            <!-- Fillter By Price -->
            <!-- Product sidebar Widget -->
            <div class="theiaStickySidebar">
               <div class="sidebar-widget widget-category-2 mb-30">
                  <h5 class="section-title style-1 mb-30">Category</h5>
                  <ul>
                     <li>
                        <a href="shop-grid-right.html"> <img src="{{asset('images/products/8-1.jpg')}}" alt="">Milks &amp; Dairies</a><span class="count">30</span>
                     </li>
                     <li>
                        <a href="shop-grid-right.html"> <img src="{{asset('images/products/7-1.jpg')}}" alt="">Clothing</a><span class="count">35</span>
                     </li>
                     <li>
                        <a href="shop-grid-right.html"> <img src="{{asset('images/products/6-1.jpg')}}" alt="">Pet Foods </a><span class="count">42</span>
                     </li>
                     <li>
                        <a href="shop-grid-right.html"> <img src="{{asset('images/products/5-1.jpg')}}" alt="">Baking material</a><span class="count">68</span>
                     </li>
                     <li>
                        <a href="shop-grid-right.html"> <img src="{{asset('images/products/8-1.jpg')}}" alt="">Fresh Fruit</a><span class="count">87</span>
                     </li>
                  </ul>
               </div>
               

               <div class="sidebar-widget product-sidebar mb-30 p-30 bg-grey border-radius-10">
                  <h5 class="section-title style-1 mb-30">New products</h5>
                  <div class="single-post clearfix">
                     <div class="image">
                        <img src="{{asset('images/products/2-1.jpg')}}" alt="#">
                     </div>
                     <div class="content pt-10">
                        <h5><a href="shop-product-detail.html">Chen Cardigan</a></h5>
                        <p class="price mb-0 mt-5">$99.50</p>
                        <div class="product-rate">
                           <div class="product-rating" style="width: 90%"></div>
                        </div>
                     </div>
                  </div>
                  <div class="single-post clearfix">
                     <div class="image">
                        <img src="{{asset('images/products/8-1.jpg')}}" alt="#">
                     </div>
                     <div class="content pt-10">
                        <h6><a href="shop-product-detail.html">Chen Sweater</a></h6>
                        <p class="price mb-0 mt-5">$89.50</p>
                        <div class="product-rate">
                           <div class="product-rating" style="width: 80%"></div>
                        </div>
                     </div>
                  </div>
                  <div class="single-post clearfix">
                     <div class="image">
                        <img src="{{asset('images/products/3-1.jpg')}}" alt="#">
                     </div>
                     <div class="content pt-10">
                        <h6><a href="shop-product-detail.html">Colorful Jacket</a></h6>
                        <p class="price mb-0 mt-5">$25</p>
                        <div class="product-rate">
                           <div class="product-rating" style="width: 60%"></div>
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

@push('script-function')
<script>
   $(document).on('click','.show-all',function(){
      $(this).prev('table').find('tr.more').toggle('slow');
      if($(this).text() == 'View More'){
         $(this).text('View Less');
      }else{
         $(this).text('View More');
      }
   });
   
   //view setup
   function showList(e) {
  var $gridCont = $('.grid-container');
  e.preventDefault();
  $gridCont.hasClass('list-view') ? $gridCont.removeClass('list-view') : $gridCont.addClass('list-view');
}
function gridList(e) {
  var $gridCont = $('.grid-container')
  e.preventDefault();
  $gridCont.removeClass('list-view');
}

$(document).on('click', '.btn-grid', gridList);
$(document).on('click', '.btn-list', showList);
   //view setup
</script>
@endpush