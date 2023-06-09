@php 
	$currentPage = Request::segment(3);
@endphp

<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html">
            <div class="brand-logo"></div>
            <h2 class="brand-text mb-0">Investment</h2></a></li>
        <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i></a></li>
      </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
	@if(App\Http\Helper\Admin\Helpers::checkModulePermission('Dashboard'))
		<li class="navigation-header"><span>Dashboard</span></li>
		@if(App\Http\Helper\Admin\Helpers::checkModulePermission('Dashboard','Dashboard'))
			<li class="nav-item {{ App\Http\Helper\Admin\Helpers::handleSiderActive('dashboard') }}">
				<a href="{{ url('admin/dashboard/dashboard') }}"><i class="menu-livicon" data-icon="desktop"></i><span class="menu-title" data-i18n="Email">Dashboard</span></a>
			</li>
		@endif
	@endif
	@if(App\Http\Helper\Admin\Helpers::checkModulePermission('Manage_Admin'))
		<li class="navigation-header"><span>Manage Admin</span></li>
		<li class="nav-item {{ App\Http\Helper\Admin\Helpers::handleSiderActive('admin-user') }}">
			<a href="{{ url('admin/manage-admin/admin-user') }}"><i class="menu-livicon" data-icon="users"></i><span class="menu-title" data-i18n="Email">Admin User</span></a>
		</li>
		<li class="nav-item {{ App\Http\Helper\Admin\Helpers::handleSiderActive('admin-roles') }}">
			<a href="{{ url('admin/manage-admin/admin-roles') }}"><i class="menu-livicon" data-icon="lock"></i><span class="menu-title" data-i18n="Email">Role & Permission</span></a>
		</li>

		<li class="nav-item {{ App\Http\Helper\Admin\Helpers::handleSiderActive('customer') }}">
			<a href="{{ url('admin/manage-admin/customer') }}"><i class="menu-livicon" data-icon="users"></i><span class="menu-title" data-i18n="Email">Customer</span></a>
		</li>
	@endif

	
	<li class="navigation-header"><span>Manage Products</span></li>
	
	<li class="nav-item {{ App\Http\Helper\Admin\Helpers::handleSiderActive('category') }}">
		<a href="{{ url('admin/manage_category_product/category') }}"><i class="menu-livicon" data-icon="list"></i><span class="menu-title" data-i18n="Email">Product Category</span></a>
	</li>

	<li class="nav-item {{ App\Http\Helper\Admin\Helpers::handleSiderActive('product') }}">
		<a href="{{ url('admin/manage-product/product') }}"><i class="menu-livicon" data-icon="list"></i><span class="menu-title" data-i18n="Email">Product</span></a>
	</li>
		
	<li class="nav-item {{ App\Http\Helper\Admin\Helpers::handleSiderActive('bulk_product') }}">
		<a href="{{ url('admin/manage_bulk_product/bulk_product') }}"><i class="menu-livicon" data-icon="morph-stack"></i><span class="menu-title" data-i18n="Email">Bulk 	Product</span></a>
	</li>

	<li class="navigation-header"><span>Manage Orders</span></li>
	<li class="nav-item {{ App\Http\Helper\Admin\Helpers::handleSiderActive('order') }}">
		<a href="{{ url('admin/manage-order/order') }}"><i class="menu-livicon" data-icon="servers"></i><span class="menu-title" data-i18n="Email">Order</span></a>
	</li>

	
	
	
	
	@if(App\Http\Helper\Admin\Helpers::checkModulePermission('Manage_Site'))
		<li class="navigation-header"><span>Manage Site</span></li>
			
		<li class="nav-item {{ App\Http\Helper\Admin\Helpers::handleSiderActive('currency') }}">
			<a href="{{ url('admin/manage-site/currency') }}"><i class="menu-livicon" data-icon="morph-stack"></i><span class="menu-title" data-i18n="Email">Manage Currency</span></a>
		</li>
		
		<li class="nav-item {{ App\Http\Helper\Admin\Helpers::handleSiderActive('page') }}">
			<a href="{{ url('admin/manage-staticPage/page') }}"><i class="menu-livicon" data-icon="morph-stack"></i><span class="menu-title" data-i18n="Email">Static Page</span></a>
		</li>
		
		<li class="nav-item {{ App\Http\Helper\Admin\Helpers::handleSiderActive('social') }}">
			<a href="{{ url('admin/manage-social/social') }}"><i class="menu-livicon" data-icon="morph-link"></i><span class="menu-title" data-i18n="Email">Social Link</span></a>
		</li>
		
		<li class="nav-item {{ App\Http\Helper\Admin\Helpers::handleSiderActive('meta') }}">
			<a href="{{ url('admin/manage-meta/meta') }}"><i class="menu-livicon" data-icon="settings"></i><span class="menu-title" data-i18n="Email">Meta Data</span></a>
		</li>
		
		<li class="nav-item {{ App\Http\Helper\Admin\Helpers::handleSiderActive('setting') }}">
			<a href="{{ url('admin/manage-setting/setting') }}"><i class="menu-livicon" data-icon="gear"></i><span class="menu-title" data-i18n="Email">Site Setting</span></a>
		</li>
	@endif

      </ul>
    </div>
  </div>
  <!-- END: Main Menu-->