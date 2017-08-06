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
  <body id="site">
		<div id="canvass">
			<header>
				<nav class="navbar">
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
                <li class="link angle active">
                  <a href="/">Home</a>
                </li>
                <li class="link angle">
                  <a href="/facilities">Facilities</a>
                </li>
                <li class="link angle">
                  <a href="/clubs">Clubs</a>
                </li>
                <li class="link angle">
                  <a href="/people">People</a>
                </li>
                <li class="link angle">
                  <a href="/contact">Contact</a>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</header>
			<div id="content" class="container">
        @yield('content')
			</div>
      <footer>
        <div class="paper paper-title text-center">
          <div class="">
            Website designed and created by <a href="//mattleachdigital.com" target="_blank">Matt Leach</a>
          </div>
          <a href="{{ route('login') }}">Admin Login</a>
        </div>
        <div class="clearfix"></div>
      </footer>
    </div>
  </div>
  
  <script src="{{asset('js/app.js')}}"></script> 
		
	</body>
</html>
