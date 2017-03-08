<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
  <meta name="description" content="The official website for Kyle James Eisenbarger.">
  <meta name="author" content="Kyle Eisenbarger">
  <title>Kyle Eisenbarger | @yield('title')</title>
  <link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}">
  <link rel="apple-touch-icon-precomposed" href="{{ URL::asset('favicon.ico') }}" />
  <link href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="{{ URL::asset('css/font-awesome.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="{{ URL::asset('css/main.css') }}" type="text/css" rel="stylesheet" media="screen,projection" />

  @yield('head')
</head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Kyle Eisenbarger</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="http://testing.kyle-eisenbarger.com/" target="_blank">Testing</a></li>
                                    <li><a href="#">Drone</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li class="dropdown-header">Websites</li>
                                    <li><a href="#" target="_blank">Atrium Display</a></li>
                                    <li><a href="#" target="_blank">K-State ACM</a></li>
                                </ul>
                                <li><a href="#">Contact</a></li>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>



@yield('content')
<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.mb.YTPlayer.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/main.js') }}"></script>

@yield('footer')
    </body>
</html>
