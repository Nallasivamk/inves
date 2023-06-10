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
								<li class="breadcrumb-item active">Category</li>
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
				  <h4 class="card-title">Edit Category</h4>
				</div>
				{!! Form::model($staticPageInfo,['url' => url('admin/manage_category_product/category/update'),'id'=>'editCategory','enctype' => 'multipart/form-data']) !!}
					<input type="hidden" name="id" value="{{ App\Http\Helper\Admin\Helpers::encodeAndDecodeID($staticPageInfo->id,'encode') }}" />
					@include('admin.product.category.form')
				{!! Form::close() !!}
			  </div>
			</div>
		  </div>
		</section>
	</div>
</div>
<!-- END: Content-->
@endsection
@push('script-function')
<script src="{{asset('js/admin/js/ckeditor/ckeditor.js')}}"></script>
<script>
CKEDITOR.replace( 'content' );
$(document).ready(function() {
    $('#addCurrency').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: '',
            invalid: '',
            validating: ''
        },
		excluded: [':disabled'],
        fields: {
            category_name: {
                message: 'Enter category name',
                validators: {
                    notEmpty: {
                        message: 'Enter category name'
                    }
                }
            },
			code: {
                message: 'Enter Code',
                validators: {
                    notEmpty: {
                        message: 'Enter Code'
                    }
                }
            }
        }
    });
});

CKEDITOR.instances.content.on('change', function() { 
	$('#addPage').bootstrapValidator('revalidateField', 'content');
});

</script>
@endpush