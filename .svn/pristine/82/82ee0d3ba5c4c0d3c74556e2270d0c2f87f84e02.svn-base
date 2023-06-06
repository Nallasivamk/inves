<div class="card-content">
  <div class="card-body">
	<form class="form">
	  <div class="form-body">
		<div class="row">
		
		  <div class="col-md-6 col-12">
			<div class="form-group">
			   {!! Form::label('first-name-column', 'First Name', ['class'=>'star']) !!}
               {!! Form::text('first_name',null,['class'=>'form-control','autocomplete'=>'nope','placeholder'=>'First Name']) !!}
			</div>
		  </div>
		  <div class="col-md-6 col-12">
			<div class="form-group">
			   {!! Form::label('last-name-column', 'Last Name', ['class'=>'star']) !!}
			   {!! Form::text('last_name',null,['class'=>'form-control','id'=>'last-name-column','autocomplete'=>'nope','placeholder'=>'Last Name']) !!}
			</div>
		  </div>
		  <div class="col-md-6 col-12">
			<div class="form-group">
				{!! Form::label('phone-column', 'Phone') !!}
				{!! Form::text('phone',null,['class'=>'form-control js-number','id'=>'phone-column','autocomplete'=>'nope','placeholder'=>'Phone']) !!}
			</div>
		  </div>
		  <div class="col-md-6 col-12">
			<div class="form-group">
				{!! Form::label('role-column', 'Role', ['class'=>'star']) !!}
				{!! Form::select('role_id', array(''=>'-- Select --')+(array)$roles,null,['class'=>'form-control','id'=>'role-column']) !!}
			</div>
		  </div>
		  	  
		  <div class="col-md-6 col-12">
			<div class="form-group">
				{!! Form::label('email-column', 'Email', ['class'=>'star']) !!}
				{!! Form::text('email',null,['class'=>'form-control','id'=>'email-column','autocomplete'=>'nope','placeholder'=>'Email']) !!}
			</div>
		  </div>
		  
		  <div class="col-md-6 col-12">
			<div class="form-group">
			  {!! Form::label('password-column', 'Password', ['class'=>'star']) !!}
				<input type="password" name="password" class="form-control" autocomplete="off" />
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