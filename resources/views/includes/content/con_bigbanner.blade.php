<!--start-banner-->
<div class="banner" id="home">
	<div class="header">
		<div class="logo">
			<a href="{{ route('conIndex') }}"><img src="{!! asset('img/content/eyantra/eyantra_logo_280x55.png') !!}" alt=""/></a>
		</div>
		<div class="navigation">
			<span class="menu"></span> 
			@include('includes.content.con_navbar')
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="banner-main">
		<div class="container">	
			<div class="banner-top">
				<h1 style="text-transform:none;">e-Yantra Resource Development Center</h1>
				<div class="banner-top-btm">
					<div class="col-md-6 bnr-left">
						{{-- <img src="{!! asset('img/content/icn-1.png') !!}" alt="" /> --}}
					</div>
					<div class="col-md-6 bnr-right">
						{{--<img src="{!! asset('img/content/icn-2.png') !!}" alt="" />--}}
					</div> 
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="banner-bottom">
				<div class="banner-slide">
					<div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider4">
							<li>
								<img src="{!! asset('img/content/slide1.png') !!}" alt="" />
							</li>
							{{-- <li>
								<img src="{!! asset('img/content/slide3.png') !!}" alt="" />
							</li>
							<li>
								<img src="{!! asset('img/content/slide4.png') !!}" alt="" />
							</li>
							<li>
								<img src="{!! asset('img/content/slide5.png') !!}" alt="" />
							</li>
							<li>
								<img src="{!! asset('img/content/slide6.png') !!}" alt="" />
							</li> --}}
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
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
<!--Slider-Starts-Here-->
<script src="{!! asset('js/content/responsiveslides.min.js') !!}"></script>
<script>
// You can also use "$(window).load(function() {"
	$(function () {
  // Slideshow 4
  $("#slider4").responsiveSlides({
	auto: true,
	pager: true,
	nav: false,
	speed: 500,
	namespace: "callbacks",
	before: function () {
		$('.events').append("<li>before event fired.</li>");
	},
	after: function () {
		$('.events').append("<li>after event fired.</li>");
	}
  });  
});
</script>
<!--End-slider-script-->		
<!--end-banner