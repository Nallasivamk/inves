@extends('admin.main.plane')
 
@section('content')
<div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- forgot password start -->
			<section class="row flexbox-container">
				<div class="col-xl-7 col-md-9 col-10  px-0">
					<div class="card bg-authentication mb-0">
						<div class="row m-0">
							<!-- left section-forgot password -->
							<div class="col-md-6 col-12 px-0">
								<div class="card disable-rounded-right mb-0 p-2">
									<div class="card-header pb-1">
										<div class="card-title">
											<h4 class="text-center mb-2">Forgot Password?</h4>
										</div>
									</div>
									
									<div class="card-content">
										<div class="card-body">
											<div class="text-muted text-center mb-2"><small>Enter the email or phone number you used when you joined and we will send you temporary password</small></div>
											<form class="mb-2" id="adminforgot" action="">
												<div class="form-group mb-2">
													<label class="text-bold-600" for="exampleInputEmail">Email</label>
													<input type="text" name="email" class="form-control" id="exampleInputEmail"
														placeholder="Email"></div>
												<button type="submit" class="btn btn-primary glow position-relative w-100">SEND
													PASSWORD<i id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
											</form>
											<div class="text-center mb-2"><a href="{{ url('admin/login') }}"><small class="text-muted">I
											remembered my password</small></a></div>
											
										</div>
									</div>
								</div>
							</div>
							<!-- right section image -->
							<div class="col-md-6 d-md-block d-none text-center align-self-center">
								<img class="img-fluid" src="{{asset('images/admin/images/pages/forgot-password.png')}}"
									alt="branding logo" width="300">
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- forgot password ends -->
        </div>
      </div>
    </div>
    <!-- END: Content-->
@endsection
