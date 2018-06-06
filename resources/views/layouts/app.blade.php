<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SMA</title>

    <!-- Styles -->   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css"> 
    <link href="{{ asset('MDB/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('MDB/css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ asset('MDB/css/simple-sidebar.css') }}" rel="stylesheet">
</head>
<body style="background-color:  #eff5fb;">
    <div id="wrapper">
        @if (Route::has('login'))
         @if (Auth::check())
        <nav class="navbar navbar-default navbar-static-top" style="background-color:  #0e457b;">
            <div class="container-fluid">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>-->
<div>
                     <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a>
                        Tablero de indicadores
                    </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o" aria-hidden="true"></i> Indicadores</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-globe" aria-hidden="true"></i> Geoindicadores</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-book" aria-hidden="true"></i> Histórico</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-line-chart" aria-hidden="true"></i> Datos Abiertos</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Administración</a>
                </li>                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
</div>

                    <div class="float-left navbar-brand">
                        <a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
                    </div>
                     <!-- Branding Image -->
                    <!--<a class="navbar-brand" href="{{ url('/') }}">
                        SMA
                    </a>-->
                </div>

                   

                <div id="app-navbar-collapse">                    
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
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
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
            @endif
         @endif
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/chart.js') }}"></script>
    <script src="{{ asset('MDB/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('MDB/js/mdb.min.js') }}"></script>
    <script src="{{ asset('MDB/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('MDB/js/bootstrap.min.js') }}"></script>
    
    <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
    </script>

</body>
</html>
