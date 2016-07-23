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


@extends('layouts.content.con_master')

@section('head')
<style type="text/css">
	.panel-eyrc1>.panel-heading {
    color: #3f5da5;
    background-color: #d8dff0;
    border-color: #c6d6e9;
}
</style>
@stop

@section('content')
<!--start-tutorials-->
<div class="row">
	<div class="col-md-12 text-center">
		<h3 style="padding-top: 30px;">Projects</h3>
	</div>
</div>
<hr/>

<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-warning text-center">
    		<div class="panel-body"><h3>Embedded System Projects</h3></div>
  		</div>
	</div>
</div>

<div class="row" >
	<div class="col-md-12 text-center">
		@foreach($projectgen as $cur_data)
		<div class="col-md-3">
			@if($cur_data->available == 1)
			<div class="panel panel-default">
				<div class="panel-body"><span style="font-weight:bold;"> {!!$cur_data->name!!}</span></div>
			</div>
			
			<div class="modal fade" id="modalvideo{{$cur_data->id}}" tabindex="-1" role="dialog" aria-labelledby="modalvideo" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<a class="close-video"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></a>
							<h4 class="modal-title" id="modalvideoLabel">{!!$cur_data->name!!}</h4>
						</div>
						<div class="modal-body">
							<div class="embed-responsive embed-responsive-4by3">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $cur_data->video_url }}" frameborder="0" allowfullscreen></iframe>
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
				<img src="http://img.youtube.com/vi/{{$cur_data->video_url}}/0.jpg" style="width:100%;" />
			<hr/>
			</div>
			</a><br/>
		</div>	        	
	        	@endif
	        	
				@endforeach	
				<br/>		

	</div>	
</div>
	
@stop

@section('endscripts')
<script>

</script>
@stop

		


