 
<?php $__env->startSection('content'); ?>

<!-- BEGIN: Content-->
<div class="app-content content">
	<div class="content-overlay"></div>
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-12 mb-2 mt-1">
				<div class="row breadcrumbs-top">
					<div class="col-12">
						<div class="breadcrumb-wrapper col-12">
							<ol class="breadcrumb p-0 mb-0">
								<li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard/dashboard')); ?>"><i class="bx bx-home-alt"></i></a></li>
								<li class="breadcrumb-item active">Currency </li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content-body horizontal-border"><!-- Basic Tables start -->
			<div class="row" id="basic-table">
				<div class="col-12">
					<div class="card">
						<div class="card-header bg-color">
							 <div class="row">
								<h5 class="card-title ">Currency</h5>
								<div class="heading-elements">
								   <div id="heading5" class="card bg-fliter-color" data-toggle="collapse" data-target="#accordion5" aria-expanded="false"
									  aria-controls="accordion5" role="tablist">
									  <span class="">
									  <i class="bx bx-filter bx-burst align-middle"></i>
									  <span>Filter</span>
									  </span>
								   </div>
								</div>
							 </div>
						  </div>
						<div class="card-content">
							<div class="card-body">
							<section id="accordion-icon-wrapper">
							   <div class="accordion collapse-icon accordion-icon-rotate" id="accordionWrapa2">
								  <div class="collapse-header">
									 <div id="accordion5" role="tabpanel" data-parent="#accordionWrapa2" aria-labelledby="heading5" class="collapse">
										<div class="users-list-filter px-1">
										   <div class="row border  py-2 mb-2">
											  <div class="col-12 col-sm-6 col-lg-3">
												 <label for="users-list-verified">Verified</label>
												 <fieldset class="form-group">
													<select class="form-control" id="users-list-verified">
													   <option value="">Any</option>
													   <option value="Yes">Yes</option>
													   <option value="No">No</option>
													</select>
												 </fieldset>
											  </div>
											  <div class="col-12 col-sm-6 col-lg-3">
												 <label for="users-list-verified">Verified</label>
												 <fieldset class="form-group">
													<select class="form-control" id="users-list-verified">
													   <option value="">Any</option>
													   <option value="Yes">Yes</option>
													   <option value="No">No</option>
													</select>
												 </fieldset>
											  </div>
											  <div class="col-12 col-sm-6 col-lg-3">
												 <label for="users-list-role">Role</label>
												 <fieldset class="form-group">
													<select class="form-control" id="users-list-role">
													   <option value="">Any</option>
													   <option value="User">User</option>
													   <option value="Staff">Staff</option>
													</select>
												 </fieldset>
											  </div>
											  <div class="col-12 col-sm-6 col-lg-3">
												 <label for="users-list-status">Status</label>
												 <fieldset class="form-group">
													<select class="form-control" id="users-list-status">
													   <option value="">Any</option>
													   <option value="Active">Active</option>
													   <option value="Close">Close</option>
													   <option value="Banned">Banned</option>
													</select>
												 </fieldset>
											  </div>
											  <div class="col-12 col-sm-4 col-lg-3 offset-sm-8 offset-lg-0 d-flex align-items-center">
												 <button class="btn btn-block btn-primary glow js-filter-listing">Show</button>
											  </div>
										   </div>
										</div>
									 </div>
								  </div>
							   </div>
							</section>
								<div class="col-lg-12">
								   <a href="<?php echo e(url('admin/manage-site/currency/create')); ?>" class="text-right"><i class='bx bx-plus-circle size bx-fade' ></i>New Currency</a>
								
								<div class="table-responsive" style="margin-right:10px">
									<table class="table table-bordered" id="currencyTable" style="width:100% !important">
										<thead>
											<tr>
												<th>Curreny</th>
												<th>Code</th>
												<th>Symbol</th>
												<th>Exchange Rate(1 USD = ?)</th>
												<th>Status</th>
												<th>ACTION</th>
											</tr>
										</thead>
										<tbody>
										
										</tbody>
									</table>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END: Content-->
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script-function'); ?>
<script>
$(function(){
   	
   	var table = $('#currencyTable').DataTable({
   		processing: true,
   		serverSide: true,
   		searching: false, 
   		lengthChange: false,
   		pageLength: 50,
   		ajax:{
   			url: "<?php echo e(url('admin/manage-site/indexData')); ?>",
   			data: function (d) {
                   d.test = 'testse'
               }
   		},
   		columns:[
   			{
   				data: 'name',
   				name: 'name'
   			},
   			{
   				data: 'code',
   				name: 'code'
   			},
   			{
   				data: 'symbol',
   				name: 'symbol'
   			},
   			{
   				data: 'exchange_rate',
   				name: 'exchange_rate'
   			},
   			{
   				data: 'status',
   				name: 'status'
   			},
   			{
   				data: 'action',
   				name: 'action'
   			}
   		]
   	})
   
   	$(document).on('click','.js-filter-listing',function(){
   		table.ajax.reload();
   	})
   });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Trivizion\Outsourcing\invesment\resources\views/admin/site/currency/currency.blade.php ENDPATH**/ ?>