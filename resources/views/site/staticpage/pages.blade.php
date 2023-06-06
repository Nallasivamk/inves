@extends('site.layouts.main')
 
@section('content')
<main class="main" id="main-section">
  <div class="page-content pt-30 pb-150">
      <div class="container">
		    {!! $pageInfo->content !!}
    </div> <!--END container-->
  </div> 
</main>
@endsection