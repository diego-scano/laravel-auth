<html>

  <head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <script src="{{ asset('js/app.js') }}" defer></script>
  </head>

  <body>

    <header>
      <div class="container">
        <h1>Guitars</h1>
      </div>
    </header>

    <div class="container">
      @yield('content')
    </div>

  </body>
</html>
