<html>
<head>
	@include('includes.admin.adminHead')
	@section('style')
	@show
	<style>
		.subMenu {
			background: linear-gradient(to right, #ffffff 0%, #f4f4f4 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);
			border-right: 1px solid #e7e7e7;
			list-style: none outside none;
			padding-top: 55px;
		}
		.subMenu li {
			border-top : 1px solid #e7e7e7;
			border-bottom : 1px solid #e7e7e7;
		}
		.subMenu a {
			border-right: 1px solid #e7e7e7;
			color: #333333;
			display: block;
			margin-right: -1px;
			padding: 14px 0;
		}
		.subMenu a:hover, .subMenu .active a {
			background: no-repeat scroll left top #ffffff;
			border-right: medium none;
			color: #66bb00;
			text-decoration: none;
		}
		@media print {
			@page { margin: 10px; }
			body {
				margin: 100px 150px 100px 80px;
			}
		}

	</style>
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
</head>
<body>
	@include('includes.admin.adminNavbar')
	<!-- Container -->
	<div class="container" style="padding-top: 80px;">
		<!-- Content -->
		@if(Session::has('success'))
		<div class="alert alert-success"><strong>{{ Session::get('success') }}</strong></div>
		@elseif (!empty($success))
		<div class="alert alert-success">{{ $success }}</div>
		@endif

		@if ($errors->has())
		<div class="alert alert-danger text-center">
			@foreach ($errors->all() as $error)
			{{ $error }}<br/>
			@endforeach
		</div>
		@endif

		@yield('content')
	</div>

	@include('includes.admin.adminFooter')
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-65584389-1', 'auto');
		ga('send', 'pageview');

	</script>
</body>
</html>