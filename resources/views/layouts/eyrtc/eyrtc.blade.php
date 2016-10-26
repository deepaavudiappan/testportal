<!doctype html>
<html lang="en">
<head>
	@include('includes.eyrtc.eyrtcHead')
</head>

<body style="padding-top: 80px;">		
	<header class="row">
		@include('includes.eyrtc.eyrtcHeader')
	</header>
	
	<div class="container-fluid">
		<!-- sidebar content -->
		<div class="col-md-3">
			@include('includes.eyrtc.eyrtcSidebar')
		</div>
		
		<!-- main content -->
		<div class="col-md-9">
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
		@include('includes.eyrtc.eyrtcFooter')
	</footer>		    	
</body>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
@yield('javascript')
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-65584389-1', 'auto');
	ga('send', 'pageview');

</script>
</html>