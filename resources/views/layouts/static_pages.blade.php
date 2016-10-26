<!doctype html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{!! csrf_token() !!}" />	
	<title>@yield('title')</title>

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css" rel="stylesheet">

	<style>
		.quote {
			font-weight: 100;
			font-family: 'Lato';
			font-size: 24px;
			color: #F00000;
			margin:0;
			padding:0;
			vertical-align: middle;
			display: inline-block;
		}
		blockquote {
			font-family: Georgia, serif;
			font-size: 18px;
			font-style: italic;
			width: 500px;
			margin: 0.25em 0;
			padding: 0.25em 40px;
			line-height: 1.45;
			position: relative;
			color: #383838;
		}
		blockquote:before {
			display: block;
			content: "\201C";
			font-size: 80px;
			position: absolute;
			left: -20px;
			top: -20px;
			color: #7a7a7a;
		}
		blockquote cite {
			color: #999999;
			font-size: 14px;
			display: block;
			margin-top: 5px;
		}

		blockquote cite:before {
			content: "\2014 \2009";
		}
	</style>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->


	</head>

	<body style="padding-top: 80px;">
		<header class="row">
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="#">
							<img alt="e-Yantra" src="{!!asset('img/eyrtc/logo.png')!!}">
						</a>
					</div>
					<ul class="nav navbar-nav navbar-right">
					</ul>
				</div>
			</nav>
		</header>
		@yield('content')
		<footer class="footer">
			<div class="container" style="padding-top: 15px;">
				<span class="pull-right">
					<a target="_blank" href="https://twitter.com/eyantra_iitb" class="btn btn-primary">t</a> 
					<a target="_blank" href="https://plus.google.com/u/0/115192232830737300162/posts" class="btn btn-danger">g+</a> 
					<a target="_blankk" href="https://www.facebook.com/eyantra" class="btn btn-primary">f</a> 
				</span>
				<span class="pull-left"><p class="text-muted">&copy; Copyright e-Yantra, 2015</p></span>
			</div>


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