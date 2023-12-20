<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="SIA Arheoloģiskā izpēte piedāvā arheologu pakalpojumus, saskaņā ar Nacionālās Kultūras mantojuma pārvaldes noteikumiem.">
    <meta name="keywords" content="arheoloģija, arheoloģiskā izpēte, arheoloģiskā uzraudzība, arheologs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="any" href="img/favicon.png">
    <title>@yield('title')SIA "Arheoloģiskā izpēte"</title>
    @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('index') }}">
                        <img src="img/white_logo.png" alt="logo" width="30" class="d-inline-block align-text-top">
                        SIA "Arheoloģiskā izpēte"
                      </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}" href="{{ route('index') }}">Sākums</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">Par mums</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Darbības veidi</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('blog') ? 'active' : '' }}" href="{{ route('blog') }}">Jaunumi</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contacts') ? 'active' : '' }}" href="{{ route('contacts') }}">Kontakti</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </header>
    <main>
        @yield('main')
    </main>
    <footer>
        &copy; SIA "Arheoloģiskā izpēte", 2023
    </footer>
</body>

</html>
