	<!--start-banner-->
	<div id="home">
		<div class="header">
			<div class="logo">
				<a href="{{ route('conIndex') }}"><img src="{!! asset('img/content/eyantra/eyantra_logo_280x55.png') !!}" alt=""></a>
			</div>
			<div class="navigation">
				<span class="menu"></span> 
				@include('includes.content.con_navbar')
			</div>
			<div class="clearfix"></div>
		</div>
	</div>	
	<!-- script-for-menu -->
	<script>
		$("span.menu").click(function(){
			$(" ul.navig").slideToggle("slow" , function(){
			});
		});
	</script>
	<!-- script-for-menu -->	
	<!--end-banner-->