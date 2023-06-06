<?php 
	$currentPage = Request::segment(3);
?>

<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html">
            <div class="brand-logo"></div>
            <h2 class="brand-text mb-0">Frest</h2></a></li>
        <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i></a></li>
      </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
	<?php if(App\Http\Helper\Admin\Helpers::checkModulePermission('Dashboard')): ?>
		<li class="navigation-header"><span>Dashboard</span></li>
		<?php if(App\Http\Helper\Admin\Helpers::checkModulePermission('Dashboard','Dashboard')): ?>
			<li class="nav-item <?php echo e(App\Http\Helper\Admin\Helpers::handleSiderActive('dashboard')); ?>">
				<a href="<?php echo e(url('admin/dashboard/dashboard')); ?>"><i class="menu-livicon" data-icon="desktop"></i><span class="menu-title" data-i18n="Email">Dashboard</span></a>
			</li>
		<?php endif; ?>
	<?php endif; ?>
	<?php if(App\Http\Helper\Admin\Helpers::checkModulePermission('Manage_Admin')): ?>
		<li class="navigation-header"><span>Manage Admin</span></li>
		<li class="nav-item <?php echo e(App\Http\Helper\Admin\Helpers::handleSiderActive('admin-user')); ?>">
			<a href="<?php echo e(url('admin/manage-admin/admin-user')); ?>"><i class="menu-livicon" data-icon="users"></i><span class="menu-title" data-i18n="Email">Admin User</span></a>
		</li>
		<li class="nav-item <?php echo e(App\Http\Helper\Admin\Helpers::handleSiderActive('admin-roles')); ?>">
			<a href="<?php echo e(url('admin/manage-admin/admin-roles')); ?>"><i class="menu-livicon" data-icon="lock"></i><span class="menu-title" data-i18n="Email">Role & Permission</span></a>
		</li>

		<li class="nav-item <?php echo e(App\Http\Helper\Admin\Helpers::handleSiderActive('customer')); ?>">
			<a href="<?php echo e(url('admin/manage-admin/customer')); ?>"><i class="menu-livicon" data-icon="users"></i><span class="menu-title" data-i18n="Email">Customer</span></a>
		</li>
	<?php endif; ?>
	
	<?php if(App\Http\Helper\Admin\Helpers::checkModulePermission('Manage_Site')): ?>
		<li class="navigation-header"><span>Manage Site</span></li>
			
		<li class="nav-item <?php echo e(App\Http\Helper\Admin\Helpers::handleSiderActive('currency')); ?>">
			<a href="<?php echo e(url('admin/manage-site/currency')); ?>"><i class="menu-livicon" data-icon="morph-stack"></i><span class="menu-title" data-i18n="Email">Manage Currency</span></a>
		</li>
		
		<li class="nav-item <?php echo e(App\Http\Helper\Admin\Helpers::handleSiderActive('page')); ?>">
			<a href="<?php echo e(url('admin/manage-staticPage/page')); ?>"><i class="menu-livicon" data-icon="morph-stack"></i><span class="menu-title" data-i18n="Email">Static Page</span></a>
		</li>
		
		<li class="nav-item <?php echo e(App\Http\Helper\Admin\Helpers::handleSiderActive('social')); ?>">
			<a href="<?php echo e(url('admin/manage-social/social')); ?>"><i class="menu-livicon" data-icon="morph-link"></i><span class="menu-title" data-i18n="Email">Social Link</span></a>
		</li>
		
		<li class="nav-item <?php echo e(App\Http\Helper\Admin\Helpers::handleSiderActive('meta')); ?>">
			<a href="<?php echo e(url('admin/manage-meta/meta')); ?>"><i class="menu-livicon" data-icon="settings"></i><span class="menu-title" data-i18n="Email">Meta Data</span></a>
		</li>
		
		<li class="nav-item <?php echo e(App\Http\Helper\Admin\Helpers::handleSiderActive('setting')); ?>">
			<a href="<?php echo e(url('admin/manage-setting/setting')); ?>"><i class="menu-livicon" data-icon="gear"></i><span class="menu-title" data-i18n="Email">Site Setting</span></a>
		</li>
	<?php endif; ?>

      </ul>
    </div>
  </div>
  <!-- END: Main Menu--><?php /**PATH E:\Trivizion\Outsourcing\invesment\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>