<nav class="navbar navbar-default navbar-fixed-top">
	 <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">
	        <img alt="e-Yantra" src="{!!asset('img/eyrtc/logo.png')!!}">
	      </a>
	    </div>
	    
	    <ul class="nav navbar-nav navbar-right">
			@if (Auth::check())
				<li><a href="{!! route('changePwdLand') !!}">Change Password</a></li>
				<li><a href="{!! route('eyrtcHome')!!}">Team ID: e-YRTC#{{Auth::user()->clg_id}}</a></li>
				<li><a href="{!! route('eyrtcHome') !!}">{{ Auth::user()->username }}</a></li>
				<li><a href="{!! route('logout') !!}">Logout</a></li>
				
				<!--<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->username }} <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">						
						<li><a href="{{ url('/logout') }}">Logout</a></li>
					</ul>
				</li>-->
			@else
				<li><a href="{!! route('loginLand') !!}">Login</a></li>
			@endif
		</ul>
	 </div>
</nav>