@extends('layouts.content.con_main')
<link href="bower_components/toastr/toastr.css" rel="stylesheet">
<style>
/*
  .body{
    position: relative;
  }
*/
  #toast-container > div {
    opacity: .7;
    margin-top: 220px;
    width: 450px;
    height: 280%;
    border-radius: 25px;
    background-color: #142742;
  }

</style>
@section('content')
<!--start-idea-->
<div class="idea">
	<div class="container">
		<div class="idea-main">
			<div class="idea-top">
				<div class="col-md-5 idea-left id-left">
					<img src="{!! asset('img/content/idea-1.png') !!}" alt="" />
				</div>
				<div class="col-md-7 idea-right id-right">
					<h3>Motivation</h3>
					<p>Transforming <strong>e-Yantra</strong> labs at colleges to:
						<div style="margin-left:50px;">
							<ul>
								<li>Innovation hubs for incubating exciting B.E. Projects</li>
								<li>Labs for ALL to conduct hands-on experiments</li>
							</ul>
						</div>
						through <strong>Lesson Plans, Lab Experiments, Tutorials ......</strong>
					</p>
					{{-- <div class="i-btn">
						<a href="services.html">LEARN MORE</a>
					</div> --}}
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="idea-top">
				<div class="col-md-6 idea-right id-one-left">
					<h3>e-Yantra Resource Development Center (eYRDC)</h3>
					<p>
                        e-Yantra Resource Development Center (eYRDC) is exclusively for eLSI colleges, through which we plan to share resources for teachers in these colleges to help them use their e-Yantra labs in an effective manner.<br/>
                     
                    </p>
					{{-- <div class="i-btn">
						<a href="services.html">LEARN MORE</a>
					</div> --}}
				</div>
				<div class="col-md-6 text-center">
					<br/><br/>
					<iframe style="width:100%;" height="315" src="https://www.youtube.com/embed/8hNQIpS_VY4" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-4 col-md-offset-4">
              		<a href="http://e-yantra.org/elsifamily" class="btn btn-primary btn-lg" target="_blank"><span class="glyphicon glyphicon-home">&nbsp;eLSI Family of Colleges</span></a><!-- <strong><sup style="color: red; font-size: 20px; font-family: cursive;">New</sup></strong> -->
            	</div>
			</div>
		</div>
	</div>
</div>
<!--end-idea-->
<!--start-number-->
<div class="number">
	<div class="container">
		<div class="number-main">
			{{-- <h3>Conquering embedded systems content from 2009 and these are our stats ... so far</h3> --}}
		</div>
		<div class="number-bottom">
			 <ul>
				<li>
					<h4>2</h4>
					<p>LESSON PLANS</p>
				</li>
				<li>
					<span class="one"><img src="{!! asset('img/content/clk.png') !!}" alt="" /></span>
					<h4>2</h4>
					<p>TUTORIALS</p>
				</li>
				<li>
					<span class="two"><img src="{!! asset('img/content/clk.png') !!}" alt="" /></span>
					<h4>3</h4>
					<p>LECTURES</p>
				</li>
				<li>
					<span class="tre"><img src="{!! asset('img/content/clk.png') !!}" alt="" /></span>
					<h4>10</h4>
					<p>PROJECTS</p>
				</li>
			</ul> 
		</div>
	</div>
</div>

<!--end-number-->
<!--start-partner
<div class="partner">
	<div class="container">
		<div class="partner-top">
			<h3>OUR LATEST TUTORIALS</h3>
			<p>Move over logo to see description</p>
		</div>
		<div class="partner-bottom">
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider5">
					<li>
						<div class="part-one">
							<div class="col-md-4 partner-left">
								<img src="{!! asset('img/content/prt-1.png') !!}" alt="" />
								<div class="part">
									<p>“Lorem ipsum dolor sit amet, consec-tetur adipiscing elit. Nunc sollicitudin a risus vel molestie. Nullam vitae sollicitudin eros. Cras eu venenatis sapien.”</p>
									<label>Name - Title</label>
								</div>
							</div>
							<div class="col-md-4 partner-left prt-1">
								<img src="{!! asset('img/content/prt-2.png') !!}" alt="" />
								<div class="part">
									<p>“Lorem ipsum dolor sit amet, consec-tetur adipiscing elit. Nunc sollicitudin a risus vel molestie. Nullam vitae sollicitudin eros. Cras eu venenatis sapien.”</p>
									<label>Name - Title</label>
								</div>
							</div> 
							<div class="col-md-4 partner-left prt-1">
								<img src="{!! asset('img/content/prt-3.png') !!}" alt="" />
								<div class="part">
									<p>“Lorem ipsum dolor sit amet, consec-tetur adipiscing elit. Nunc sollicitudin a risus vel molestie. Nullam vitae sollicitudin eros. Cras eu venenatis sapien.”</p>
									<label>Name - Title</label>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="part-one">
							<div class="col-md-4 partner-left">
								<img src="{!! asset('img//content/prt-4.png') !!}" alt="" />
								<div class="part">
									<p>“Lorem ipsum dolor sit amet, consec-tetur adipiscing elit. Nunc sollicitudin a risus vel molestie. Nullam vitae sollicitudin eros. Cras eu venenatis sapien.”</p>
									<label>Name - Title</label>
								</div>
							</div>
							<div class="col-md-4 partner-left">
								<img src="{!! asset('img/content/prt-5.png') !!}" alt="" />
								<div class="part">
									<p>“Lorem ipsum dolor sit amet, consec-tetur adipiscing elit. Nunc sollicitudin a risus vel molestie. Nullam vitae sollicitudin eros. Cras eu venenatis sapien.”</p>
									<label>Name - Title</label>
								</div>
							</div>
							<div class="col-md-4 partner-left">
								<img src="{!! asset('img/content/prt-6.png') !!}" alt="" />
								<div class="part">
									<p>“Lorem ipsum dolor sit amet, consec-tetur adipiscing elit. Nunc sollicitudin a risus vel molestie. Nullam vitae sollicitudin eros. Cras eu venenatis sapien.”</p>
									<label>Name - Title</label>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</li>
					<li>
						<div class="part-one">
							<div class="col-md-4 partner-left prt-1">
								<img src="{!! asset('img/content/prt-2.png') !!}" alt="" />
								<div class="part">
									<p>“Lorem ipsum dolor sit amet, consec-tetur adipiscing elit. Nunc sollicitudin a risus vel molestie. Nullam vitae sollicitudin eros. Cras eu venenatis sapien.”</p>
									<label>Adrian - Hover Agency</label>
								</div>
							</div>
							<div class="col-md-4 partner-left prt-1">
								<img src="{!! asset('img/content/prt-3.png') !!}" alt="" />
								<div class="part">
									<p>“Lorem ipsum dolor sit amet, consec-tetur adipiscing elit. Nunc sollicitudin a risus vel molestie. Nullam vitae sollicitudin eros. Cras eu venenatis sapien.”</p>
									<label>Adrian - Hover Agency</label>
								</div>
							</div>
							<div class="col-md-4 partner-left">
								<img src="{!! asset('img/content/prt-1.png') !!}" alt="" />
								<div class="part">
									<p>“Lorem ipsum dolor sit amet, consec-tetur adipiscing elit. Nunc sollicitudin a risus vel molestie. Nullam vitae sollicitudin eros. Cras eu venenatis sapien.”</p>
									<label>Name - Title</label>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="part-one">
							<div class="col-md-4 partner-left">
								<img src="{!! asset('img/content/prt-5.png') !!}" alt="" />
								<div class="part">
									<p>“Lorem ipsum dolor sit amet, consec-tetur adipiscing elit. Nunc sollicitudin a risus vel molestie. Nullam vitae sollicitudin eros. Cras eu venenatis sapien.”</p>
									<label>Name - Title</label>
								</div>
							</div>
							<div class="col-md-4 partner-left">
								<img src="{!! asset('img/content/prt-6.png') !!}" alt="" />
								<div class="part">
									<p>“Lorem ipsum dolor sit amet, consec-tetur adipiscing elit. Nunc sollicitudin a risus vel molestie. Nullam vitae sollicitudin eros. Cras eu venenatis sapien.”</p>
									<label>Name - Title</label>
								</div>
							</div>
							<div class="col-md-4 partner-left">
								<img src="{!! asset('img/content/prt-4.png') !!}" alt="" />
								<div class="part">
									<p>“Lorem ipsum dolor sit amet, consec-tetur adipiscing elit. Nunc sollicitudin a risus vel molestie. Nullam vitae sollicitudin eros. Cras eu venenatis sapien.”</p>
									<label>Name - Title</label>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
end-partner-->
<!--Slider-Starts-Here-->
{{-- <script src="js/responsiveslides.min.js"></script> --}}
{{-- <script>
			    // You can also use "$(window).load(function() {"
			$(function () {
			      // Slideshow 4
			    $("#slider5").responsiveSlides({
			      	auto: true,
			      	pager: false,
			      	nav: true,
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
			<!--start-project-->
			<div class="project">
				<div class="container">
					<div class="project-top">
						<h3>OUR AWESOME PROJECTS</h3>
					</div>
					<div class="project-bottom">
						<div class="portfolios entertain_box  wow fadeInUp" data-wow-delay="0.4s" id="portfolio">
							<div class="portfolio-top">
								<ul id="filters" class="clearfix">
									<li><span class="filter active" data-filter="app card icon logo web photo">ALL</span></li>
									<li><span class="filter" data-filter="app">WEB</span></li>
									<li><span class="filter" data-filter="photo">APP</span></li>
									<li><span class="filter" data-filter="card photo">LOGO</span></li>
									<li><span class="filter" data-filter="icon card">CODE</span></li>
								</ul>
								<div id="portfoliolist">
									<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
										<div class="portfolio-wrapper">		
											<a href="{!! asset('img/content/p-6.jpg') !!}" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
												<img src="{!! asset('img/content/port-6.jpg') !!}" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Processing Steps Web</h2>
											</div></a>
										</div>
									</div>				
									<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
										<div class="portfolio-wrapper">		
											<a href="{!! asset('img/content/p-2.jpg') !!}" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
												<img src="{!! asset('img/content/port-2.jpg') !!}" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Processing Steps Web</h2>
											</div></a>
										</div>
									</div>		
									<div class="portfolio photo mix_all" data-cat="photo" style="display: inline-block; opacity: 1;">
										<div class="portfolio-wrapper">		
											<a href="{!! asset('img/content/p-3.jpg') !!}" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
												<img src="{!! asset('img/content/port-3.jpg') !!}" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Processing Steps Web</h2>
											</div></a>
										</div>
									</div>				
									<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
										<div class="portfolio-wrapper">		
											<a href="{!! asset('img/content/p-4.jpg') !!}" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
												<img src="{!! asset('img/content/port-4.jpg') !!}" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Processing Steps Web</h2>
											</div></a>
										</div>
									</div>	
									<div class="portfolio photo mix_all" data-cat="photo" style="display: inline-block; opacity: 1;">
										<div class="portfolio-wrapper">		
											<a href="{!! asset('img/content/p-5.jpg') !!}" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
												<img src="{!! asset('img/content/port-5.jpg') !!}" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Processing Steps Web </h2>
											</div></a>
										</div> 
									</div>			
									<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
										<div class="portfolio-wrapper">		
											<a href="{!! asset('img/content/p-1.jpg') !!}" class="b-link-stripe b-animate-go  swipebox"  title="Image Title">
												<img src="{!! asset('img/content/port-1.jpg') !!}" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Processing Steps Web</h2>
											</div></a>
										</div>
									</div>		
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end-project-->
			<link rel="stylesheet" href="{!! asset('css/content/swipebox.css') !!}">
			<script src="{!! asset('js/content/jquery.swipebox.min.js') !!}"></script> 
			<script type="text/javascript">
				jQuery(function($) {
					$(".swipebox").swipebox();
				});
			</script>
			<!-- Portfolio Ends Here -->
			<script type="text/javascript" src="{!! asset('js/content/jquery.mixitup.min.js') !!}"></script>
			<script type="text/javascript">
				$(function () {
					var filterList = {
						init: function () {
							// MixItUp plugin
							// http://mixitup.io
							$('#portfoliolist').mixitup({
								targetSelector: '.portfolio',
								filterSelector: '.filter',
								effects: ['fade'],
								easing: 'snap',
								// call the hover effect
								onMixEnd: filterList.hoverEffect()
							});				
						},
	
						hoverEffect: function () {

						// Simple parallax effect
						$('#portfoliolist .portfolio').hover(
							function () {
								$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
								$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
							},
							function () {
								$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
								$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
							}		
					);
				};
			};

// Run the show!
filterList.init();

});	
</script> --}}
@stop

@section('endscripts')
<script>
	$('#homelnk').addClass('active');
</script>
<script src="bower_components/toastr/toastr.js"></script>
<script src="bower_components/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    toastr.options = {
      "closeButton": true,
      "newestOnTop": true,
      "progressBar": true,
      "positionClass": "toast-top-left",
      "onclick": null,
      "showDuration": "3000",
      "hideDuration": "1000",
      "timeOut": "10000",
      "extendedTimeOut": "100000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    };

   toastr.info('<center><strong><u>NEW CONTENT ADDED !!!</u></strong></center><ul class="indented_ul_tost"><li>Tutorials on Interfacing Accelerometer and RFID with Firebird V Robot. Check Firebird V - Atmega 2560 tutorial section in TUTORIALS Tab</li><li>Tutorial on Scilab -XCOS added in Scilab - Integration with Firebird V Robot section in TUTORIALS Tab</li><li>Lessons on Interrupts added to 8051 and ARM7 Lesson Plans</li><li>Workshop video on "A glimpse into the economic transformation of India" by Prof. M. Rajivlochan is added to LECTURES Tab</li><li>Few more projects under PROJECT Tab</li>');
  
    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
    $('.image-popup-no-margins').magnificPopup({
      type: 'image',
      closeOnContentClick: true,
      closeBtnInside: false,
      fixedContentPos: true,
      mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
      image: {
        verticalFit: true
      },
      zoom: {
        enabled: true,
        duration: 300 // don't foget to change the duration also in CSS
      }
    });
    
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	});
  });
</script>
@stop
