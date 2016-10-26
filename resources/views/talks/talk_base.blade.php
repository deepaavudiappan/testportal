@extends('layouts.content.con_master')

@section('head')
@stop

@section('content')
<!--start-tutorials-->
<div class="row" style="margin-top:80px;">
	<div class="col-md-10 col-md-offset-1" id="main_cont">

	</div>
</div>
<br/><br/>
@stop

@section('endscripts')
<script>

	$(document).ready(function(){
		$(function(){
			$('<div id="overlay" class="overlay"/>').hide().appendTo('body');

			$('<div id="gifloader" class="gifloader"/>').hide().appendTo('body');
		});

		$(function(){
			$('#overlay').show();
			$('#gifloader').show();
			$.ajax({
				type	:	"GET",
				url    	:	"{{route('conTalk')}}",		//the script to call to get data          
				dataType:	'html',			//data format                
				encode  :	true
			}).done(function(data) {
				$('#main_cont').html('');
				$('#main_cont').html(data);
				$('#overlay').hide();
				$('#gifloader').hide();
			});
		});
	});
</script>
@stop