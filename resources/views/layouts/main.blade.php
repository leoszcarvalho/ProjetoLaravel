<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="{{ asset('css/foundation.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
  </head>
  <body>

    <div class="row">
      <div class="large-12 columns">
        <h1>Welcome to Foundation for Sites 6</h1>
      </div>
    </div>

    @if(Session::has('message'))
      <div class="alert-box success">
        {{{ Session::get('message') }}}
      </div>
    @endif
    <div class="row">
      <div class="large-12 columns">
        @yield('content')
      </div>
    </div>

    <div class="row">
      <p>Teste</p>
    </div>




    <footer>Rodapé</footer>

    <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('js/vendor/what-input.min.js') }}"></script>
    <script src="{{ asset('js/foundation.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
