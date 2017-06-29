<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._header')
    @include('partials.navigation._navigation')
    @yield('title')
  </head>
  <body>
      <div class="container">
          <hr>
          @include('partials._messages')
          @yield('content')
          <hr>
          @include('partials._footer')

      </div>

    @include('partials._javascripts')

  </body>
</html>
