<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>GitPug</title>
    <link href="{{asset('css/master.less')}}" rel="stylesheet/less">
    @yield('styles')
  </head>
  <body>
    <nav>
      <div>GitPug</div>
      <div>Contact</div>
      <div>Login</div>
    </nav>
    @yield('content')
  </body>
  <script src="{{asset('js/vendor/less.js')}}"></script>
  @yield('scripts')
</html>
