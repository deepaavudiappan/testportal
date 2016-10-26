<!doctype html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{!! csrf_token() !!}" /> 
</head>
<body>
   <div id="title"><center><h3>Lecture Series</h3></center></div>
<hr>
  <div class='container'>
   <div class="row" style="margin-top:50px;">
    
    @foreach($table_talks as $user)
    
    <div class="col-sm-3 text-center" id="im1{!! $user->id !!}">
    <div class="panel panel-default">
    <div class="panel-heading"><strong>{{$user->title}}</strong></div>
    <div class="panel-body">
      <div class="img-wrapper">
        
        <a href="javascript:load_project({{$user->id}});"><img src="{!! asset('img/content/talks/'.$user->image) !!}" width="140px" height="130px" style="border:2px solid black"><div class='caption'><strong>{{$user->name}} </strong></div></img></a>
        
      </div>
    </div>
  </div>
</div>
    @endforeach
    </div>

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
$.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') }
      });
$(document).ready(function(){
    $("#im11").hover(function(){
        $("#im11").css("cursor","pointer");
    });
    $("#im12").hover(function(){
        $("#im12").css("cursor","pointer");
    });
    $("#im13").hover(function(){
        $("#im13").css("cursor","pointer");
    });
});
</script>
<script>

  function load_project(talk_id){

    $('#overlay').show();
    $('#gifloader').show();
    $.ajax({
      type  : "GET",
      url   : "{!!route('conTalkSeries')!!}",
      data  : { "talk_id": talk_id }, 
      dataType:   'html'
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
  </html>