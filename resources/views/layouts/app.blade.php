<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link href="//fonts.bunny.net" rel="dns-prefetch">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

  <!-- Scripts -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  @stack('css')
</head>

<body>
  <div id="app">
    <nav class="navbar navbar-expand-md navbar-dark bg-primary shadow-sm">
      <div class="container">
        <a class="navbar-brand fs-4" href="{{ url('/home') }}">
          {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" type="button"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ms-auto">
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
              <div class="nav-login">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('mahasiswa.index') }}">Mahasiswa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('matkul.index') }}">Matakuliah</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('nilai.index') }}">Nilai</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('dosen.index') }}">Dosen</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('users.index') }}">Data Users</a>
                  </li>
                </ul>
              </div>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fw-bold" id="navbarDropdown" data-bs-toggle="dropdown" href="#"
                  role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>
                  <form class="d-none" id="logout-form" action="{{ route('logout') }}" method="POST">
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
    @include('sweetalert::alert')
    @stack('js')
  </div>
</body>

</html>
