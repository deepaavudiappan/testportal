
<div class="row">
	<div class="col-sm-12" style="margin-top : 30px;">
		<!-- Footer ================================================== -->

		<div class="container">
			<div class="well well-small text-center">
				<em>
					e-Yantra is a project sponsored by MHRD through the National Mission on Education through ICT (NMEICT)
				</em>
			</div>

			<hr class="soften"/>
			<footer class="footer">
				<p>
					<span class="pull-right">
						<a class="btn btn-primary" href="https://twitter.com/eyantra_iitb" target="_blank">t</a>
						<a class="btn btn-danger" href="https://plus.google.com/u/0/115192232830737300162/posts" target="_blank">g+</a>
						<a class="btn btn-primary" href="https://www.facebook.com/eyantra" target="_blankk">f</a>
					</span>

					{{-- <a href="{!! route('home') !!}">Home</a> --}}
					<!-- <a href="http://portal.e-yantra.org/eyrc/about_eyrc">About Competition</a> -->
				</p>
				
				<p>&copy; Copyright e-Yantra <br/><br/></p>
				<p class="text-warning">This portal is best viewed in Mozilla Firefox® 10.x or higher, Google Chrome 18 or higher.</p>
			</footer>
		</div><!-- /container -->	</div>
	</div>

	<!-- Scripts are placed here -->
	<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
	<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
	<!--<script src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">-->
	@yield('scripts')