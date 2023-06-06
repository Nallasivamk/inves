<div class="card-content">
  <div class="card-body">
	<form class="form">
	  <div class="form-body">
		<div class="row">
		<div class="col-md-3 col-12"></div>
		  <div class="col-md-6 col-12">
			<div class="form-group">
			   {!! Form::label('first-name-column', 'Upload CSV', ['class'=>'star']) !!}
               {!! Form::file('product_csv',null,['class'=>'form-control','autocomplete'=>'nope','placeholder'=>'First Name']) !!}
			</div>
		  </div>
		  <div class="col-md-3 col-12"></div>
		  
              
		  
		  
		  <div class="col-12 d-flex justify-content-end">
			<button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
			<button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
		  </div>
		</div>
	  </div>
	</form>
  </div>
</div>