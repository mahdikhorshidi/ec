<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Netsa') }}</title>
	<meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />

	<!-- for ios 7 style, multi-resolution icon of 152x152 -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
	<link rel="apple-touch-icon" href="{{ asset('assets/images/logo.png') }}">
	<meta name="apple-mobile-web-app-title" content="Flatkit">
	<!-- for Chrome on Android, multi-resolution icon of 196x196 -->
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="shortcut icon" sizes="196x196" href="{{ asset('assets/images/logo.png') }}">
	
	<!-- style -->
	<link rel="stylesheet" href="{{ asset('assets/animate.css/animate.min.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/glyphicons/glyphicons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/material-design-icons/material-design-icons.css') }}" type="text/css" />
	
	<link rel="stylesheet" href="{{ asset('assets/bootstrap/dist/css/bootstrap.min.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/styles/app.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/styles/font.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/bootstrap-rtl/dist/bootstrap-rtl.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/styles/app.rtl.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/styles/custom.css') }}" type="text/css" />
</head>
<body>
  <!-- content -->
  <div id="content" class="app-content box-shadow-z0" role="main">
    <div ui-view class="app-body" id="view">
	@yield('content')
    </div>
  </div>
  <!-- / -->
  </div>
<!-- jQuery -->
  <script src="{{ asset('libs/jquery/jquery/dist/jquery.js') }}"></script>
<!-- Bootstrap -->
  <script src="{{ asset('libs/jquery/tether/dist/js/tether.min.js') }}"></script>
  <script src="{{ asset('libs/jquery/bootstrap/dist/js/bootstrap.js') }}"></script>
<!-- core -->
  <script src="{{ asset('libs/jquery/underscore/underscore-min.js') }}"></script>
  <script src="{{ asset('libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js') }}"></script>
  <script src="{{ asset('libs/jquery/PACE/pace.min.js') }}"></script>

  <script src="{{ asset('scripts/config.lazyload.js') }}"></script>

  <script src="{{ asset('scripts/palette.js') }}"></script>
  <script src="{{ asset('scripts/ui-load.js') }}"></script>
  <script src="{{ asset('scripts/ui-jp.js') }}"></script>
  <script src="{{ asset('scripts/ui-include.js') }}"></script>
  <script src="{{ asset('scripts/ui-device.js') }}"></script>
  <script src="{{ asset('scripts/ui-form.js') }}"></script>
  <script src="{{ asset('scripts/ui-nav.js') }}"></script>
  <script src="{{ asset('scripts/ui-screenfull.js') }}"></script>
  <script src="{{ asset('scripts/ui-scroll-to.js') }}"></script>
  <script src="{{ asset('scripts/ui-toggle-class.js') }}"></script>

  <script src="{{ asset('scripts/app.js') }}"></script>

  <!-- ajax -->
  <script src="{{ asset('libs/jquery/jquery-pjax/jquery.pjax.js') }}"></script>
  <script src="{{ asset('scripts/ajax.js') }}"></script>
</body>
</html>
