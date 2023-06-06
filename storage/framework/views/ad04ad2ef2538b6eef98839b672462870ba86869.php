<div class="card-content">
  <div class="card-body">
	<form class="form">
	  <div class="form-body">
		<div class="row">
			
			
		  <div class="col-md-4 col-12">
			<div class="form-group">
			   <?php echo Form::label('name', 'Page Name'); ?>

               <?php echo Form::text('name',null,['class'=>'form-control','autocomplete'=>'nope','placeholder'=>'']); ?>

			</div>
		  </div>
		  <div class="col-md-4 col-12">
			<div class="form-group">
				<?php echo Form::label('quick_link', 'Quick Link'); ?>

				<?php echo Form::select('quick_link', array('Yes'=>'Yes','No'=>'No'),null,['class'=>'form-control','id'=>'status-column']); ?>

			</div>
		  </div>
		  <div class="col-md-4 col-12">
		  </div>
		  <div class="col-md-8 col-12">
			<div class="form-group">
			   <?php echo Form::label('content', 'Content'); ?>

               <?php echo Form::textarea('content',null,['class'=>'form-control','id'=>'content','autocomplete'=>'nope','placeholder'=>'']); ?>

			</div>
		  </div>
		  <div class="col-md-4 col-12">
		  </div>
		  
		  
		  <div class="col-md-4 col-12">
			<div class="form-group">
				<?php echo Form::label('status-column', 'Status'); ?>

				<?php echo Form::select('status', array('Active'=>'Active','Inactive'=>'Inactive'),null,['class'=>'form-control','id'=>'status-column']); ?>

			</div>
		  </div>
		
		  <div class="col-12 d-flex justify-content-end">
			<button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
			<button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
		  </div>
		</div>
	  </div>
	</form>
  </div>
</div><?php /**PATH E:\Trivizion\Outsourcing\invesment\resources\views/admin/site/page/form.blade.php ENDPATH**/ ?>