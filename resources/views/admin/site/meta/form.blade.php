<div class="card-content">
  <div class="card-body">
	<form class="form">
	  <div class="form-body">
		<div class="row">
			
			<div class="col-md-2 col-12">
			</div>
			<div class="col-md-8 col-12">
				<div class="form-group">
				   {!! Form::label('keyword', 'Keyword') !!}
				   {!! Form::textarea('keyword',null,['class'=>'form-control','autocomplete'=>'nope','placeholder'=>'']) !!}
				</div>
			</div>
			<div class="col-md-2 col-12">
			</div>
			<div class="col-md-2 col-12">
			</div>
			<div class="col-md-8 col-12">
				<div class="form-group">
				   {!! Form::label('description', 'Description') !!}
				   {!! Form::textarea('description',null,['class'=>'form-control','autocomplete'=>'nope','placeholder'=>'']) !!}
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
</div>