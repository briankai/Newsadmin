<!DOCTYPE html>
<html  class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="{{asset('css/base.css')}}" id="camera-css">
    <link rel="stylesheet" href="{{asset('css/framework.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper-3.4.0.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/noscript.css')}}" media="screen,all" id="noscript">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" />
    @yield('css')
</head>
<body>

@yield('content')

</body>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/swiper-3.4.0.min.js')}}"></script>
<script src="{{asset('js/jquery.easing-1.3.min.js')}}"></script>
<script src="{{asset('js/tooltip.js')}}"></script>
<script src="{{asset('js/dropdown.js')}}"></script>
<script src="{{asset('js/tinynav.min.js')}}"></script>
<script src="{{asset('js/camera.min.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.js?v=2.0.6')}}"></script>
<script src="{{asset('js/jquery.fancybox-media.js?v=1.0.3')}}"></script>
<script src="{{asset('js/jquery.ui.totop.min.js')}}"></script>
<script src="{{asset('js/ddaccordion.js')}}"></script>
<script src="{{asset('js/jquery.twitter.js')}}"></script>
<script src="{{asset('js/jflickrfeed.min.js')}}"></script>
<script src="{{asset('js/faq-functions.js')}}"></script>
<script src="{{asset('js/theme-functions.js')}}"></script>
<script type='text/javascript' src='http://www.365webcall.com/IMMe2.aspx?settings=mw7m6Nmm7wwX7mz3APX6Nwz3AmI00z3A66mmwN&LL=0'></script>
<script>
    $('#noscript').remove();
</script>
@yield('js')
</html>