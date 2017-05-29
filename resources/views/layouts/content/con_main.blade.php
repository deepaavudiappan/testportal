<!DOCTYPE html>
<html>
<head>
	@include('includes.content.con_head')
</head>
<body>
	@include('includes.content.con_bigbanner')

	@yield('content')
	
	@include('includes.content.con_footer')
		
	@yield('endscripts')
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-65908911-1', 'auto');
		ga('send', 'pageview');

		$.ajaxSetup({
		headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
	});
	</script>
</body>
</html>