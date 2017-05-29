<!doctype html>
<html lang="en">
<head>
	@include('includes.elsiAdmin.elsiAdminHead')
	<link  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/dt/dt-1.10.11/datatables.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.1.2/css/buttons.dataTables.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"/>

	@section('style')
	@show
	<style>
		.ie-table-fix {
			overflow: auto;
		}
		.ie-table-fix > table {
			table-layout: fixed;
		}

		#tab1 {
			color: red;
			background: red;

		}

		tfoot input {
			width: 100%;
			padding: 3px;
			box-sizing: border-box;
		}

		.tabs{
			background: #2ba0db;
		}

		.ui-tabs{
			border:none;
		}

		.borderBoxes{
			border:2px solid black;
			padding-top:20px;
		}

		/*.ui-tabs .ui-tabs-nav li {
			color:red;
			background: #2ba0db;
		}

		.ui-tabs .ui-tabs-nav li.ui-tabs-active{
			background: #2ba0c0;
		}*/


		select {
			width: 100px;
		}

	</style>
</head>

<body style="padding-top: 1px;">
	<header class="row">
		@include('includes.elsiAdmin.elsiAdminHeader')
	</header>

	<div class="container-fluid">
		<!-- sidebar content -->
		<div class="col-xs-2">
			@include('includes.elsiAdmin.elsiAdminSidebar')
		</div>

		<!-- main content -->
		<div class="col-xs-10">
			@if (Session::has('success'))
			<div class="alert alert-success" role='alert'>
				<h4>
					<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					<span class="sr-only">Success:</span>
					{!!Session::get('success')!!}
				</h4>
			</div>
			<hr/>
			@endif

			@if($errors->any())
			<div class="alert alert-danger" role='alert'>
				@foreach($errors->all() as $error)
				<h4>
					<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					<span class="sr-only">Error:</span>
					{!!$error!!}
				</h4>
				@endforeach
			</div>
			<hr/>
			@endif

			@yield('content')
		</div>
	</div>

	<footer class="footer">
		@include('includes.elsiAdmin.elsiAdminFooter')
	</footer>
</body>

<script src="//code.jquery.com/jquery-1.12.3.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.3/toastr.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.colVis.min.js"></script>
<script type="text/javascript" src="https:/cdn.datatables.net/buttons/1.1.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

@yield('javascript')
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-65584389-1', 'auto');
	ga('send', 'pageview');

	$.ajaxSetup({
		headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
	});

	$('#table_names').tabs();

	$('#table_names a').click(function (e) {
		e.preventDefault()
		$(this).tab('show')
	});

</script>
</html>