<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css')}}">
    <style>
      .is-complete{
        text-decoration: line-through;
      }
    </style>
  </head>
  <body>

    <div class="container">
      @yield('content')
    </div>
    <div id="app">
      <example-component></example-component>
    </div>
    <script src="{{ mix('/js/manifest.js')}}"></script>
    <script src="{{ mix('/js/vendor.js')}}"></script>
    <script src="{{ mix('/js/app.js')}}"></script>
  </body>
</html>
