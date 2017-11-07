<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=1170">
      
      <link rel="stylesheet" href="./css/font-awesome.min.css">
      <link rel="stylesheet" href="./css/app.css">
      <link rel="stylesheet" href="./css/slick.css">
      <link rel="stylesheet" href="./css/slick-theme.css">      

      {{-- ReCaptcha --}}
      <script src='https://www.google.com/recaptcha/api.js'>
      </script>

      <title>@yield('title')</title>
  </head>

  <body>
    {{-- Form error --}}
    @if (session('message'))
      <script>
        alert("{{ session('message') }}");
      </script>
    @endif

    {{--  Main content wrapper  --}}
    <div class="page">
      
      {{--  Header view is not similar for home & others  --}}
      @yield('header')

      {{--  Content has various view for pages --}}
      @yield('content')

      {{--  Similar views  --}}
      @include('includes.feedback')
      @include('includes.footer')

    </div>

    {{--  Extra js script  --}}
    <script src="./js/jquery.min.js"></script>
    <script src="./js/instafeed.min.js"></script>
    <script src="./js/masonry.pkgd.min.js"></script>
    <script src="./js/imagesloaded.pkgd.min.js"></script>
    <script src="./js/slick/slick.min.js"></script>    
    <script src="./js/app.js"></script>
  </body>
</html>
