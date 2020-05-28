<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BloodBank</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- bootstrap-->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm nav p-5">
            <div class="container-fluid">
                <a class="navbar-brand margin text-white" href="{{ url('/site/index') }}">
                   BloodBank Management System
                </a>


                    <div class="search">


                            <div class="mr-5 float-left">

                                <form action="{{route('searchAddressRoute')}}" method="post">
                                        @csrf
                                        <div class="float-left">
                                            <input type="text" name="searchAddress" placeholder="Search Address" class="form-control"> 
                                        </div>
                                        
                                        <div class="float-right">
                                            <input type="submit" value="search" class="btn btn-primary ml-1">
                                        </div>                                  
                                </form>

                            </div>


                            <div class="mr-2">

                                    <?php $value=bloodGroups(); ?>

                                    <form action="{{route('bloodSearchResultRoute')}}" method="post">
                                            @csrf
                                            <div class="float-left">

                                                <select name="blood" id="blood" class="form-control">

                                                    <option value="">---- Select Blood ----</option>

                                                    @foreach($value as $blood)

                                                    <option value="{{$blood}}">{{$blood}}</option>

                                                    @endforeach

                                                </select>
                                            </div>
                                            
                                            <div>
                                                <input type="submit" value="search" class="btn btn-primary ml-1">
                                            </div>                                  
                                    </form>

                            </div>


                    </div>


                    <div class="collapse navbar-collapse mr-5" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link btn btn-info text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
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
                    </div>



                
            </div>
        </nav>


        <!-- Main content -->
        <div class="">
            <div class="row">

                <div class="col-md-2">
                    @include('admin.theam.sidebar')

                </div>
                <div class="col-md-8 mainContent">

                    @yield('content')

                </div>
            </div>
        </div>


        <main class="py-4">
             
        </main>
    </div>
    <!-- Scripts-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('admin/js/functions.js') }}"></script>
   

    @yield('script')

</body>
</html>
