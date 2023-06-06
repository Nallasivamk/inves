<div class="card-content">
  <div class="card-body">
	<form class="form">
	  <div class="form-body">
		<div class="row">
			
			<div class="col-md-2 col-12">
			</div>
			<div class="col-md-8 col-12">
				<div class="form-group">
				   <?php echo Form::label('keyword', 'Keyword'); ?>

				   <?php echo Form::textarea('keyword',null,['class'=>'form-control','autocomplete'=>'nope','placeholder'=>'']); ?>

				</div>
			</div>
			<div class="col-md-2 col-12">
			</div>
			<div class="col-md-2 col-12">
			</div>
			<div class="col-md-8 col-12">
				<div class="form-group">
				   <?php echo Form::label('description', 'Description'); ?>

				   <?php echo Form::textarea('description',null,['class'=>'form-control','autocomplete'=>'nope','placeholder'=>'']); ?>

				</div>
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
</div><?php /**PATH E:\Trivizion\Product\coreAdmin\resources\views/admin/site/meta/form.blade.php ENDPATH**/ ?>