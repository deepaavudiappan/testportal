
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{!! csrf_token() !!}" />	
<title>@yield('title')</title>
<link href="{!! asset('css/tbt/app.css') !!}" rel="stylesheet">

<!-- Fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

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
	.justifytext {
    text-align: justify;
    text-justify: inter-word;
}
</style>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

