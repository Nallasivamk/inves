<div class="card-content">
  <div class="card-body">
	<form class="form">
	  <div class="form-body">
		<div class="row">
			
			
		  <div class="col-md-6 col-12">
			<div class="form-group">
			   <?php echo Form::label('name', 'Currency'); ?>

               <?php echo Form::text('name',null,['class'=>'form-control','autocomplete'=>'nope','placeholder'=>'Curency']); ?>

			</div>
		  </div>
		  <div class="col-md-6 col-12">
			<div class="form-group">
				<?php echo Form::label('code', 'Code'); ?>

				<?php echo Form::text('code',null,['class'=>'form-control','autocomplete'=>'nope','placeholder'=>'Code']); ?>

			</div>
		  </div>
		  <div class="col-md-6 col-12">
			<div class="form-group">
				<?php echo Form::label('symbol', 'Symbol'); ?>

				<?php echo Form::text('symbol',null,['class'=>'form-control','autocomplete'=>'nope','placeholder'=>'Symbol']); ?>

			</div>
		  </div>

		  <div class="col-md-6 col-12">
			<div class="form-group">
				<?php echo Form::label('exchange_rate', 'Exchange Rate'); ?>

				<?php echo Form::text('exchange_rate',null,['class'=>'form-control','autocomplete'=>'nope','placeholder'=>'Exchange Rate']); ?>

			</div>
		  </div>
		 <div class="col-md-6 col-12">
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
</div><?php /**PATH E:\Trivizion\Outsourcing\invesment\resources\views/admin/site/currency/form.blade.php ENDPATH**/ ?>