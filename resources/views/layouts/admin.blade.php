<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ludwick Family Club</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">


    <!--[if lt IE 9]>
			<script src="//cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.js"></script>
			<script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

  </head>
  <body id="admin">
		<div id="canvass">
			<header>
				<nav class="navbar navbar-inverse">
					<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/">Ludwick Family Club</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="collapsable-nav">
              <ul class="nav navbar-nav navbar-right">
              @if (!Auth::guest())
                <li class="{{ Request::is('admin') ? 'active' : '' }}">
                  <a href="{{ url('admin') }}">Dashboard</a>
                </li>
                <li class="{{ Request::is('admin/facilities') ? 'active' : '' }}">
                  <a href="{{ url('admin/facilities') }}">Facilities</a>
                </li>
                <li class="{{ Request::is('admin/clubs') ? 'active' : '' }}">
                  <a href="{{ url('admin/clubs') }}">Clubs</a>
                </li>
                <li class="{{ Request::is('admin/people') ? 'active' : '' }}">
                  <a href="{{ url('admin/people') }}">People</a>
                </li>
                <li class="{{ Request::is('admin/messages') ? 'active' : '' }}">
                  <a href="{{ url('admin/messages') }}">Messages</a>
                </li>
                <li>
                  <a href="#">Users</a>
                </li>
                <li>
                  <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                      Logout
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                </li>
              @endif
              </ul>
            </div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</header>
			<div id="content" class="container">
        @yield('content')
			</div>
    </div>
  </div>
  <footer class="container">
    <p class="text-center">Website designed and created by <a href="http://mattleachdigital.com" target="_blank">Matt Leach</a></p>
  </footer>
  
  <script src="{{asset('js/app.js')}}"></script>
  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  <script>
    if($('.article-ckeditor')) {
      CKEDITOR.replace( 'article-ckeditor' );
    }
  </script>
		
	</body>
</html>
