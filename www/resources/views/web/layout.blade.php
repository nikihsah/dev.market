<!doctype html>
<html class="webkit chrome chrome112 win js no-hidpi datauri csstransforms csstransforms3d csstransitions minw_768 maxw_979 orientation_portrait"
      lang="{{ config('app.locale') }}">
<head>
    @include('web.layout.head')
</head>
<body>
<header>
    @include('web.layout.header')
</header>
<section>
    <div class="wrapper">
        @yield('content')
    </div>
</section>
<footer>
    @include('web.layout.footer')
</footer>
</body>
</html>
