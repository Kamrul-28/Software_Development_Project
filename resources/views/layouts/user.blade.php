<!doctype html>
<html lang="en">

        <head>
        <meta charset="utf-8">
        <title>BloodBank</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="{{ asset('site/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('site/css/style.css') }}" rel="stylesheet">
        <!-- styles -->
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-responsive.css')}}" rel="stylesheet">
        <link href="{{ asset('css/prettyPhoto.css')}}" rel="stylesheet">
        <link href="{{ asset('font/stylesheet.css')}}" rel="stylesheet">
        <link href="{{ asset('css/animate.css')}}" rel="stylesheet">
        <link href="{{ asset('css/flexslider.css')}}" rel="stylesheet">
        <link rel="stylesheet" media="screen" href="{{ asset('css/sequencejs.css')}}">
        <link href="{{ asset('css/style.css')}}" rel="stylesheet">
        <link href="{{ asset('color/default.css')}}" rel="stylesheet">

        </head>

        <body>
        <header>
            <!-- start top -->
            <div id="topnav" class="navbar navbar-fixed-top fixed">
                 <div class="h4 ml-5">
                   <a class="text-white nav-link" href="{{ route('indexRoute') }}">BloodBank ManageMent System</a>
                </div>
            <div class="navbar-inner">
                <div class="container-fluid mr-5">
                        <div class="navigation">
                            <nav class="pb-5 h6">
                                <ul class="nav">
                                    <li class="nav-item"><a href="{{ route('indexRoute') }}">Home</a></li>
                                    <li class="nav-item"><a href="{{ route('searchRoute') }}">Search Blood</a></li>
                                    <li class="nav-item"><a href="{{ route('donorShowRoute') }}">Become a Donor</a></li>
                                    <li class="nav-item"><a href="{{ route('contactRoute') }}">Donors</a></li>
                                    @guest
                                    <li class="nav-item"><a href="{{ route('login') }}">Login</a></li>
                                    @else
                                    <li class="nav-item"><a href="{{ route('dashboardRoute') }}">Dashboard</a></li>
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} 
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                    @endguest
                                </ul>
                            </nav>
                        </div>
                <!--/.nav-collapse -->
                </div>
            </div>
            </div>
            <!-- end top -->
        </header>

            <main class="py-4">
                @yield('content')
            </main>
        
        <footer>   
            <div class="container mb-5">
                <div class="row">
                    <div class="span12">
                        <div class="aligncenter">
                            <p>
                                &copy; Bloodbank - All right reserved
                            </p>
                            <div class="credits">
                            
                                Designed by Md. Kamrul Hasan &
                                Md.Ashiqur Rahman
                            </div>
                        </div>
                    </div>
                </div>
          
            </div>
        </footer>

        <!-- Javascript Library Files -->
        <script src="{{ asset('js/jquery.min.js')}}"></script>
        <script src="{{ asset('js/jquery.easing.js')}}"></script>
        <script src="{{ asset('js/bootstrap.js')}}"></script>
        <script src="{{ asset('js/jquery.lettering.js')}}"></script>
        <script src="{{ asset('js/parallax/jquery.parallax-1.1.3.js')}}"></script>
        <script src="{{ asset('js/nagging-menu.js')}}"></script>
        <script src="{{ asset('js/sequence.jquery-min.js')}}"></script>
        <script src="{{ asset('js/sequencejs-options.sliding-horizontal-parallax.js')}}"></script>
        <script src="{{ asset('js/portfolio/jquery.quicksand.js')}}"></script>
        <script src="{{ asset('js/portfolio/setting.js')}}"></script>
        <script src="{{ asset('js/jquery.scrollTo.js')}}"></script>
        <script src="{{ asset('js/jquery.nav.js')}}"></script>
        <script src="{{ asset('js/modernizr.custom.js')}}"></script>
        <script src="{{ asset('js/prettyPhoto/jquery.prettyPhoto.js')}}"></script>
        <script src="{{ asset('js/prettyPhoto/setting.js')}}"></script>
        <script src="{{ asset('js/jquery.flexslider.js')}}"></script>

        <!-- Contact Form JavaScript File -->
        <script src="{{ asset('contactform/contactform.js') }}"></script>

        <!-- Template Custom Javascript File -->
        <script src="{{ asset('js/custom.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
                     
</body>

</html>
