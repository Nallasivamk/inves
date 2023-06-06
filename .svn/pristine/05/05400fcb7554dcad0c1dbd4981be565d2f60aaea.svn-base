<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
	@include('admin.layouts.commoncss')
	@stack('css')
	@stack('css-inline')
</head>
<body  class="vertical-layout vertical-menu-modern 1-column  navbar-sticky footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    @yield('content')    
</body>
    @include('admin.layouts.commonjs')
	@include('admin.layouts.flashMessage')
@stack('script')
@stack('script-function')
</html>
