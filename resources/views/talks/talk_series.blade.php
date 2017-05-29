<!doctype html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{!! csrf_token() !!}" /> 
</head>
<body>
	<div clas="container" style="margin-top:40px;" >
	@foreach($talk_details as $users)
		<div class="row" style="margin-bottom:40px;">
			<div class="col-md-12 text-center">
				<h1>{{ $users->title }}</h1>
			</div><br>
		</div>
		<div class="well">
			<div class="row">
				<div class="col-md-8">
					<!--<h2> {{$users->name}} </h2><br/>-->
				 	<br/><h4>{!!$users->short_intro!!} </h4>
				</div>
			<div class="col-md-3">
				<div class="thumbnail">
					<a href=""><img src="{!! asset('img/content/talks/'.$users->image_alt) !!}" width=100% height=100%/></a>
					<!--<div class="caption">
	          			<h3><center>{{$users->name}}</center></h3>
					</div>-->
	      		</div>
	    	</div>
		</div>
	@endforeach
</div>
<div class="container" style="margin-top:40px; padding-right:30px;" >
	<div class="row" style="margin-bottom:40px;">
		@foreach($cur_talk as $cur_data)
		<div class="col-sm-4"  style="border-top:30px">
			<div class="modal fade" id="modalvideo{{$cur_data->id}}" tabindex="-1" role="dialog" aria-labelledby="modalvideo" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<a class="close-video"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></a>
							<h4 class="modal-title" id="modalvideoLabel">{{ $users->title }}</h4>
						</div>
						<div class="modal-body">
							<div class="embed-responsive embed-responsive-4by3">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $cur_data->img_url }}" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
				 		<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>						
				</div>
			</div>

   			<a href="javascript:show_video({{$cur_data->id}})">
			<div class="topic_thumbnail">
				<div class="topic_caption ">
					<p>Click image to play video</p><br/>	
				</div>
				<img src="{!! asset('img/content/talks/'.$cur_data->image) !!}" width="400" height="250" />
			</div>
			</a><br/>
		</div>
		@endforeach
	</div>
</div>
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

<script>

	$(document).ready(function(){
		$('.topic_thumbnail').hover(function(){
			$(this).find('.topic_caption').slideDown(250); //.fadeIn(250)
		},
		function(){
			$(this).find('.topic_caption').slideUp(250); //.fadeOut(205)
		});
		$('#modalvideo1').on('hidden', function(){
		    $(this).data('modal', 'hide');
		});

	});

	function show_video(id){
		$('#modalvideo'+id).modal('show');

		$(".modal-backdrop, #modalvideo"+id+" .close, #modalvideo"+id+" .btn").on("click", function() {
			$("#modalvideo"+id+" iframe").attr("src", $("#modalvideo"+id+" iframe").attr("src"));
		});
	}

</script>	
</html>	
