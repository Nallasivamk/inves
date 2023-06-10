<div class="card-content">
  <div class="card-body">
	<form class="form">
	  <div class="form-body">
		<div class="row">
		
		  <div class="col-md-6 col-12">
			<div class="form-group">
			   {!! Form::label('product-name-column', 'Product Name', ['class'=>'star']) !!}
               {!! Form::text('bulk_product_name',null,['class'=>'form-control','autocomplete'=>'nope','placeholder'=>'Product Name']) !!}
			</div>
		  </div>
		  <div class="col-md-6 col-12">
			<div class="form-group">
			   {!! Form::label('paid-price-column', 'Paid Price', ['class'=>'star']) !!}
			   {!! Form::text('paid_price',null,['class'=>'form-control','id'=>'paid-price-column','autocomplete'=>'nope','placeholder'=>'Paid Price']) !!}
			</div>
		  </div>
		  <div class="col-md-6 col-12">
			<div class="form-group">
			   {!! Form::label('unit-price-column', 'Unit Price', ['class'=>'star']) !!}
               {!! Form::text('unit_price',null,['class'=>'form-control','id'=>'unit-price-column','autocomplete'=>'nope','placeholder'=>'Unit Price']) !!}
			</div>
		  </div>
		  <div class="col-md-6 col-12">
			<div class="form-group">
				{!! Form::label('status-column', 'Status') !!}
				{!! Form::select('status', array('Active'=>'Active','Inactive'=>'Inactive'),null,['class'=>'form-control','id'=>'status-column']) !!}
			</div>
		  </div>
		  </div>
		  <div class="col-md-6 col-12">
			<div class="form-group">
				{!! Form::label('image-column', 'Upload Image') !!}
				<input type="file" name="image" class="form-control">
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
</div>