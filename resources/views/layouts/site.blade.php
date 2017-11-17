<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <title>{{$title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="ppandp">
    <meta name="Description" content="Bushwick - One-Page Bootstrap HTML5 Portfolio" />
    <link href="{{asset('css/reset.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/contact.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('css/flexslider.css')}}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{asset('css/jquery.fancybox.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css" media="screen">
    <!--[if gt IE 8]><!-->
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <!--<![endif]-->
    <!--[if !IE]> <link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css" media="screen" /> <![endif]-->
    <link href="http://fonts.googleapis.com/css?family=Inconsolata:400,400italic,600,700" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Raleway:300,400,400italic,600,700" rel="stylesheet" type="text/css" />
    <script src="{{asset('js/modernizr.custom.js')}}" type="text/javascript"></script>
</head>
<body>
@yield('header')
@yield('content')
@yield('footer')

<script src="{{asset('js/jquery-1.11.2.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery-easing-1.3.js')}}" type="text/javascript"></script>
<script src="{{asset('js/retina.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.touchSwipe.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.nav.js')}}" type="text/javascript"></script>
<script src="{{asset('js/input.fields.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.form.js')}}" type="text/javascript"></script>
<script src="{{asset('js/preloader.js')}}" type="text/javascript"></script>
<script src="{{asset('js/responsive-nav.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.flexslider-min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.sticky.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.lettering.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.textillate.js')}}" type="text/javascript"></script>
<script src="{{asset('js/general-lettering.js')}}" type="text/javascript"></script>
<script src="{{asset('js/ajax.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.mixitup.min.js')}}"></script>
<script src="{{asset('js/jquery.fitvids.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</body>
</html>
