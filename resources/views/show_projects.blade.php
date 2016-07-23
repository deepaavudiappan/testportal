<script>
	function load_project(proj_id){
		$('#overlay').show();
		$('#gifloader').show();
		$.ajax({
			type	:	"GET",
			url 	: 	"{{route('conProjectload')}}",
			data 	: 	{ "proj_id": proj_id },
			dataType: 	'html',
			encode 	: 	true
		}).done(function(data){
			
			$('#main_cont').html('');
			$('#main_cont').html(data);
			$('#overlay').hide();
			$('#gifloader').hide();
		}).fail(function(){
					alert("Unable to process the request.");
					$("#college_content").removeClass('show').addClass('hidden');
				});
	}
</script>
<script>
	$(document).ready(function(){
		$('.topic_thumbnail').hover(function(){
			$(this).find('.topic_caption').slideDown(250); //.fadeIn(250)
		},
		function(){
			$(this).find('.topic_caption').slideUp(250); //.fadeOut(205)
		});
		$('#modalvideo').modal('hide');

		$(".modal-backdrop, #modalvideo .close, #modalvideo .btn").on("click", function() {
			$("#modalvideo iframe").attr("src", $("#modalvideo iframe").attr("src"));
		});
	});

	function show_video(){
		$('#modalvideo').modal('show');
	}
</script>
@if($data->available == 1)
<div class="row">
	<div class='col-md-2 text-left'>
		<a href="javascript:load_project({{$cur_proj->proj_id}});" class="btn btn-primary">Back to Projects</a>
		<br/>
	</div>
	<div class='col-md-8 text-center'>
	</div>
</div>
<hr/>
<div class="row">
	<div class="row-same-height">
	
		<div class="col-md-12 col-xs-height col-top sidebar topic_sidebar">
		<h2 align="center">{!! $cur_proj->name !!}</h2>
						<hr/>
				<div class="row-same-height">

					<div class="col-md-8">

						{!! $data->description !!}<br/>
						<p><strong>Hardware Requirement:&nbsp;</strong>{!! $data->hardware !!}</p><br/>
						<p><strong>Software Requirement:&nbsp;</strong>{!! $data->software !!}</p><br/>
						<p><strong>Authors:&nbsp;</strong>{!! $data->authors !!}</p><br/>

						<strong>Video:</strong><br/><ul class="indented_ul"><li><p>The video shown on top-right section describes about overall project</p></li></ul><strong>Dowload Report:</strong><br/><ul class="indented_ul"><li><p>Click on the <strong>View Report</strong> button to view the project report.</p></li></ul>

			
					</div>
				
					<!--Modal for vide-->
					<div class="modal fade" id="modalvideo" tabindex="-1" role="dialog" aria-labelledby="modalvideo" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="modalvideoLabel">{{$data->topic_name}}</h4>
								</div>
								<div class="modal-body">
									<div class="embed-responsive embed-responsive-4by3">
										<iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $data->video_code}}" frameborder="0" allowfullscreen></iframe>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						@if($data->video_code != Null && !empty($data->video_code))
						<a href="javascript:show_video()">
							<div class="topic_thumbnail">
								<div class="topic_caption">
									<p>Click image to play video</p><br/>	
								</div>
								<img src="http://img.youtube.com/vi/{{$data->video_code}}/0.jpg" style="width:100%;" />
							</div>
						</a>
						<br/>
						@endif
						<div class="row text-center">
								<div class="row text-center">
							<div class="col-md-12">
							<hr/>
								<a role="button" href="{!! asset('img/content/projects/pdf/'.$cur_proj->report_name) !!}" target="_blank" class="btn btn-primary" type="submit"><i class="fa fa-download">View Report</i></a>
							</div>
						</div>
						</div>
					</div>
				</div>
		
		</div>
	</div>
</div>
	@endif
	
