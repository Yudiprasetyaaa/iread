<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="/home">
                    <img src="storage/Logo.png" alt="" width="50" height="50">
                  </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <div class="container">
                        <div class="container-fluid">
                          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                              <a class="nav-link active" aria-current="page" href="/home">Home</a>
                              <a class="nav-link" href="/profil">About Us</a>
                              <div class="btn-group">
                                <button type="button" class="btn outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                  Category
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="/novel-buku">Novel</a></li>
                                  <li><a class="dropdown-item" href="/cergam-buku">Picture Story</a></li>
                                  <li><a class="dropdown-item" href="/ensiklopedi-buku">Encyclopedia</a></li>
                                  <li><a class="dropdown-item" href="/komik-buku">Comic</a></li>
                                  <li><a class="dropdown-item" href="/antologi-buku">Anthology</a></li>
                                  <li><a class="dropdown-item" href="/biografi-buku">Biography</a></li>
                                </ul>
                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                  Login
                                </button>
                                <!-- Modal -->
                                <div id="myModal" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                    
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Please Login</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                    
                                        <form>
                                          <div class="form-group">
                                            <label for="expaleInputEmail">Email</label>
                                            <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Your Email">
                                          </div>
                                          <div class="form-group">
                                            <label for="expaleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1"  placeholder="Enter Your Password">
                                          </div>
                                          <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1"  placeholder="Password">
                                            <label class="form-check-label" for="exampleCheck1">Always Login</label>
                                          </div>
                                          <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleAlert">Login</button>
                                          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myRegist">
                                            Create Account
                                          </button>
                
                                          <div id="myRegist" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                              
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">Create Your Account</h5>
                                                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                              
                                                  <form>
                                                    <div class="form-group">
                                                      <label for="expaleInputEmail">Username</label>
                                                      <input type="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter Your Username">
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="expaleInputEmail">Email</label>
                                                      <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Your Email">
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="expaleInputPassword1">Password</label>
                                                      <input type="password" class="form-control" id="exampleInputPassword1"  placeholder="Enter Your Password">
                                                    </div>
                                                    <div class="form-group form-check">
                                                      <input type="checkbox" class="form-check-input" id="exampleCheck2"  placeholder="Password">
                                                      <label class="form-check-label" for="exampleCheck2">The data entered is correct</label>
                                                    </div>
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myRegist">
                                                      Create Account
                                                    </button>
                          
                                                    
                                                  </form>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                
                
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
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

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
