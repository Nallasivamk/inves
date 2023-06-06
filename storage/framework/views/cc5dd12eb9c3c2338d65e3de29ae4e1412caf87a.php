<div class="card-content">
  <div class="card-body">
	<form class="form">
	  <div class="form-body">
		<div class="row">
			
			<div class="col-md-2 col-12">
			</div>
			<div class="col-md-8 col-12">
				<div class="form-group">
				   <?php echo Form::label('site_name', 'Site Name'); ?>

				   <?php echo Form::text('site_name',null,['class'=>'form-control','autocomplete'=>'nope','placeholder'=>'']); ?>

				</div>
			</div>
			<div class="col-md-2 col-12">
			</div>
			<div class="col-md-2 col-12">
			</div>
			<div class="col-md-8 col-12">
				<div class="form-group">
				   <?php echo Form::label('google_code', 'Google Code'); ?>

				   <?php echo Form::textarea('google_code',null,['class'=>'form-control','autocomplete'=>'nope','placeholder'=>'']); ?>

				</div>
			</div>
			<div class="col-md-2 col-12">
			</div>
			
			
			
			<div class="col-md-2 col-12">
			</div>
			<div class="col-md-4 col-12">
				<div class="form-group">
				   <?php echo Form::label('email', 'Email'); ?>

				   <?php echo Form::text('email',null,['class'=>'form-control','autocomplete'=>'nope','placeholder'=>'']); ?>

				</div>
			</div>
			<div class="col-md-4 col-12">
				<div class="form-group">
				   <?php echo Form::label('contact_no', 'Contact No'); ?>

				   <?php echo Form::text('contact_no',null,['class'=>'form-control','autocomplete'=>'nope','placeholder'=>'']); ?>

				</div>
			</div>
			<div class="col-md-2 col-12">
			</div>
			
			<div class="col-md-2 col-12">
			</div>
			<div class="col-md-8 col-12">
				<div class="form-group">
				   <?php echo Form::label('address', 'Address'); ?>

				    <?php echo Form::text('address',null,['class'=>'form-control','autocomplete'=>'nope','placeholder'=>'']); ?>

				</div>
			</div>
			<div class="col-md-2 col-12">
			</div>
			
			<div class="col-md-2 col-12">
			</div>
			<div class="col-md-4 col-12">
				<div class="form-group">
				   <?php echo Form::label('state', 'State'); ?>

				    <?php echo Form::text('state',null,['class'=>'form-control','autocomplete'=>'nope','placeholder'=>'']); ?>

				</div>
			</div>
			
			<div class="col-md-2 col-12">
				<div class="form-group">
				   <?php echo Form::label('city', 'City'); ?>

				    <?php echo Form::text('city',null,['class'=>'form-control','autocomplete'=>'nope','placeholder'=>'']); ?>

				</div>
			</div>
			
			<div class="col-md-2 col-12">
				<div class="form-group">
				   <?php echo Form::label('zipcode', 'Zipcode'); ?>

				    <?php echo Form::text('zipcode',null,['class'=>'form-control','autocomplete'=>'nope','placeholder'=>'']); ?>

				</div>
			</div>
			<div class="col-md-2 col-12">
			</div>
			
			
			<div class="col-md-2 col-12">
			</div>
			<div class="col-md-4 col-12">
				<div class="form-group">
					<?php echo Form::label('maintenance_mode', 'Maintenance Mode'); ?>

					<?php echo Form::select('maintenance_mode', array(''=>'Select','Yes'=>'Yes','No'=>'No'),null,['class'=>'form-control select2']); ?>

				 </div>
			</div>
			<div class="col-md-4 col-12">
				
			</div>
			<div class="col-md-2 col-12">
			</div>
			
			
			<div class="col-md-2 col-12">
			</div>
			<div class="col-md-4 col-12">
				<div class="form-group">
				   <?php echo Form::label('logo', 'Logo'); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				   <?php echo Form::file('logo',null,['class'=>'form-control','autocomplete'=>'nope','placeholder'=>'']); ?>

				</div>
			</div>
			<div class="col-md-4 col-12">
				<img src="<?php echo e(asset('images')); ?>\uploads\logo\<?php echo e($settingInfo->logo); ?>" class="img-fluid user-profile-card-image" style="margin-top:10px"/>
			</div>
			<div class="col-md-2 col-12">
			</div>
			
			<div class="col-md-2 col-12">
			</div>
			<div class="col-md-4 col-12">
				<div class="form-group">
				   <?php echo Form::label('favicon', 'Favicon'); ?>&nbsp;&nbsp;&nbsp;
				   <?php echo Form::file('favicon',null,['class'=>'form-control','autocomplete'=>'nope','placeholder'=>'']); ?>

				</div>
			</div>
			<div class="col-md-4 col-12">
				<img src="<?php echo e(asset('images')); ?>/uploads/favicon/<?php echo e($settingInfo->favicon); ?>" class="img-fluid user-profile-card-image" style="margin-top:10px"/>
			</div>
			<div class="col-md-2 col-12">
			</div>
			
			
			
			
			
		
		  <div class="col-12 d-flex justify-content-end">
			<button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
			<button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
		  </div>
		</div>
	  </div>
	</form>
  </div>
</div><?php /**PATH E:\Trivizion\Product\coreAdmin\resources\views/admin/site/setting/form.blade.php ENDPATH**/ ?>