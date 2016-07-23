<script>
$(document).ready(function(){
    $("#im1").hover(function(){
        $("#im1").css("cursor","pointer");
    });
   
});
</script>
<script>

	function load_project(proj_id){
		$('#overlay').show();
		$('#gifloader').show();

		$.ajax({
			type	:	"GET",
			url 	: 	"{{route('conShowProjDtls')}}",
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
<div class="row">
	<div class="col-md-12 text-center">
		<h3>Projects</h3>
	</div>
</div>
<hr/>

<div class="row">
	<div class="col-md-12">
			<div class="well well-small text-center">
				<h3>Embedded System Projects</h3>
			</div>
	</div>
</div>

<div class="row" >
	<div class="col-md-12 text-center">
		<div class="row-same-height" >
				@foreach($project as $cur_proj)
				@if($cur_proj->available == 1)
				<div class="col-md-3" id="im1">
					<!-- <div class="panel panel-default"> -->
    					<a href="javascript:load_project({{ $cur_proj->id }});"><div class="panel-heading"><strong>{{$cur_proj->name}}</strong></div></a>
    					<!-- <div class="panel-body"> -->
			           		<a href="javascript:load_project({{ $cur_proj->id }});"><img src="{{ asset('img/content/projects/'.$cur_proj->image_name)}}" width="200" height="180" style="border:2px solid black" alt="{{$cur_proj->name}}" /></a>			
	        			<!-- </div>
	        		</div> -->
	        	</div>
	        	@endif
				@endforeach
		</div>
	</div>	
</div>
<br/><br/>
<div class="row">
	<div class="col-md-12">
		<div class="well well-small text-center">
			<h3>Image Processing</h3>
		</div>
	</div>
</div>

<div class="row" >
	<div class="col-md-12 text-center">

		<div class="row-same-height" >
				@foreach($project as $cur_proj)
				@if($cur_proj->available == 2)
				<div class="col-md-3" id="im1">
					<!-- <div class="panel panel-default"> -->
    					<a href="javascript:load_project({{ $cur_proj->id }});"><div class="panel-heading"><strong>{!!$cur_proj->name!!}</strong></div></a>
    					<!-- <div class="panel-body"> -->
	           				<a href="javascript:load_project({{ $cur_proj->id }});"><img src="{{ asset('img/content/projects/'.$cur_proj->image_name)}}" width="200" height="180" style="border:2px solid black" alt="{{$cur_proj->name}}" /></a>
	        			<!-- </div>
	        		</div> -->
	        	</div>
	        	@endif
				@endforeach
		</div>
	</div>
</div>

<br/><br/>
<div class="row">
	<div class="col-md-12">
		<div class="well well-small text-center">
			<h3>Swarm Robotics</h3>
		</div>
	</div>
</div>
<div class="row" >
	<div class="col-md-12 text-center">
		<div class="row-same-height" >
				@foreach($project as $cur_proj)
				@if($cur_proj->available == 3)
				<div class="col-md-3" id="im1">
					<!-- <div class="panel panel-default"> -->
    					<a href="javascript:load_project({{ $cur_proj->id }});"><div class="panel-heading"><strong>{!!$cur_proj->name!!}</strong></div></a>
    					<!-- <div class="panel-body"> -->
	           				<a href="javascript:load_project({{ $cur_proj->id }});"><img src="{{ asset('img/content/projects/'.$cur_proj->image_name)}}" width="200" height="180" style="border:2px solid black" alt="{{$cur_proj->name}}" /></a>
	        		<!-- 	</div> -->
	        		<!-- </div> -->
	        	</div>
	        	@endif
				@endforeach
		</div>
	</div>
</div>