<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    <title></title>
  </head>
  <body>
    @includeif('/layouts.nav')
    
  <div class="container-fluid">
  
  @yield('content')
  
<h1>home </h1>

  <footer class="footer">
    <div class="container">
        <span class="muted-text">
           copy right 2019
        </span>
    </div>
  </footer>
  </div>

   @include('layouts.script_links')
  </body>
</html>