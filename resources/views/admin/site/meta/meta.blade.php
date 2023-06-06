@extends('admin.main.app')
 
@section('content')

<!-- BEGIN: Content-->
<div class="app-content content">
	<div class="content-overlay"></div>
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-12 mb-2 mt-1">
				<div class="row breadcrumbs-top">
					<div class="col-12">
						<div class="breadcrumb-wrapper col-12">
							<ol class="breadcrumb p-0 mb-0">
								<li class="breadcrumb-item"><a href="{{ url('admin/dashboard/dashboard') }}"><i class="bx bx-home-alt"></i></a></li>
								<li class="breadcrumb-item active">Meta Details</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section id="multiple-column-form">
		  <div class="row match-height">
			<div class="col-12">
			  <div class="card">
				<div class="card-header bg-color">
				  <h4 class="card-title">Meta Details</h4>
				</div>
				{!! Form::model($metaInfo,['url' => url('admin/manage-meta/meta/updateMeta'),'id'=>'addSocial','enctype' => 'multipart/form-data']) !!}
					<input type="hidden" name="id" value="{{ App\Http\Helper\Admin\Helpers::encodeAndDecodeID($metaInfo->id,'encode') }}" />
					@include('admin.site.meta.form')
				{!! Form::close() !!}
			  </div>
			</div>
		  </div>
		</section>
	</div>
</div>
<!-- END: Content-->
@endsection
