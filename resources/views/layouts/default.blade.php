<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
  </head>
  <body>
    <h1>@yield('page_title')</h1>
    <div class="content">
      @yield('content')
    </div>
  </body>
</html>
