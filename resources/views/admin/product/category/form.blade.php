<div class="card-content">
  <div class="card-body">
	<form class="form">
	  <div class="form-body">
		<div class="row">
			
			
		  <div class="col-md-6 col-12">
			<div class="form-group">
			   {!! Form::label('name', 'Category Name') !!}
               {!! Form::text('category_name',null,['class'=>'form-control','autocomplete'=>'nope','placeholder'=>'Category Name']) !!}
			</div>
		  </div>
		  <div class="col-md-6 col-12">
			<div class="form-group">
				{!! Form::label('code', 'Code') !!}
				{!! Form::select('code', array(''=>'Select','Single'=>'Single','Bulk'=>'Bulk'),null,['class'=>'form-control','id'=>'code-column']) !!}
			</div>
		  </div>
		 <div class="col-md-6 col-12">
			<div class="form-group">
				{!! Form::label('status-column', 'Status') !!}
				{!! Form::select('status', array('Active'=>'Active','Inactive'=>'Inactive'),null,['class'=>'form-control','id'=>'status-column']) !!}
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