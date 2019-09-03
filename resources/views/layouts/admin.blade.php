<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

        <main class="col px-md-4 py-4">
            <div class="row">
                {{-- <div class="col col-lg-2 float-left">
                    <div class="card text-white bg-info mb-3">
                        <div class="card-body">
                            <div class="card-title">Bienvenido</div>
                            <div class="card-text">Carlos Riquelme</div>
                        </div>
                    </div>
                    <a href="/admin/panel" class="btn btn-primary" style="width: 100%">Admin Panel</a>
                    <div class="card card-header">
                            Recursos
                    </div>
                    <div class="card card-body">
                        <ul class="list-group">
                            <li class="list-group-item"><a href="{{ route('productos.index') }}">Productos</a></li>
                        </ul>
                    </div>
                </div> --}}
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                        <div class="sidebar-sticky">
                          <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('panel') }}">
                                <span data-feather="home"></span>
                                Dashboard <span class="sr-only">(current)</span>
                              </a>
                            </li>
                            <li class="nav-item dropright" aria-haspopup="true" aria-expanded="false">
                              {{-- <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                                <span data-feather="file"></span>
                                Productos
                              </a> --}}
                              <button type="button" class="btn btn-outline-primary btn-block dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Productos
                              </button>
                              <div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(111px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item" href="{{ route('productos.index') }}">Productos Vigentes</a>
                                <a class="dropdown-item" href="{{ route('productos.novigente') }}">Productos Descontinuados</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('productos.create') }}">Agregar Producto</a>
                                </div>
                            </li>
                            <li class="nav-item dropright" aria-haspopup="true" aria-expanded="false">
                            <button type="button" class="btn btn-outline-primary btn-block dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Proveedores
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('proveedores.index') }}">Todos los Proveedores</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('proveedores.create') }}">Agregar Proveedor</a>
                            </div>
                            </li>
                            <li class="nav-item dropright">
                                <button type="button" class="btn btn-outline-primary btn-block dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Clientes y Mascotas
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('clientes.index') }}">Todos los Clientes</a>
                                    <a class="dropdown-item" href="{{ route('clientes.create') }}">Agregar Cliente</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('mascotas.index') }}">Todas las Mascotas</a>

                                </div>
                            </li>
                            <li class="nav-item dropright">
                                <button type="button" class="btn btn-outline-primary btn-block dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Movimientos
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Todos los Proveedores</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Agregar Proveedor</a>
                                </div>
                            </li>
                            <li class="nav-item dropright">
                                <button type="button" class="btn btn-outline-primary btn-block dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Otros
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Todos los Proveedores</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Agregar Proveedor</a>
                                </div>
                            </li>
                          </ul>

                          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Reportes</span>
                            <a class="d-flex align-items-center text-muted" href="#">
                              <span data-feather="plus-circle"></span>
                            </a>
                          </h6>
                          <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                              <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Current month
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Last quarter
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Social engagement
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Year-end sale
                              </a>
                            </li>
                          </ul>
                        </div>
                      </nav>
                <div class="col">
                        @yield('content')
                </div>
            </div>
        </main>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    @yield('js')
    @yield('js_confirm')
</body>
</html>
