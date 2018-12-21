<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> @yield('title')</title>
    <link rel="stylesheet" href={{ asset('/css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('/css/styles.css') }}>
    <link rel="stylesheet" href={{ asset('/css/home-index.css') }}>
    <link rel="stylesheet" href={{ asset('/css/forms.css') }}>
</head>
<body id="body">
    @include('partials.header')
    <div class="container">
      <div class="row">
        <div class="col-12">
          @yield('content')
        </div>
      </div>
    </div>
    @include('partials.footer')
    <script src={{ asset('/js/jquery-3.3.1.min.js')}} ></script>
		<script src={{ asset('/js/bootstrap.min.js')}} ></script>
    <script src={{ asset('/js/darkTheme.js')}} ></script>
    <script src={{ asset('/js/reparacion.js')}} ></script>
		@yield('custom-js')
    @yield('moreCss')
</body>
</html>
