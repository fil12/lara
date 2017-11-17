<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">




    <title>{{$title }}</title>




    <link href="/css/app.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin_style/images/favicon.png')}}">
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('admin_style/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{asset('admin_style/bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{asset('admin_style/bower_components/morrisjs/morris.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('admin_style/css/style.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{asset('admin_style/js/ckeditor/ckeditor.js')}}"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
<![endif]-->
</head>

<body>
<header id="header_wrapper">

        @yield('header')


</header>
@if(count($errors)>0)
    <div class="alert alert-danger  text-center" style="margin: 50px 0 0 0;">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session('status'))
    <div class="alert alert-success text-center" style="margin: 50px 0 0 0;">
        {{session('status')}}
    </div>
@endif
    @yield('content')

<script src="{{asset('admin_style/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('admin_style/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{asset('admin_style/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>
<!--Nice scroll JavaScript -->
<script src="{{asset('admin_style/js/jquery.nicescroll.js')}}"></script>
<!--Morris JavaScript -->
<script src="{{asset('admin_style/bower_components/raphael/raphael-min.js')}}"></script>
<script src="{{asset('admin_style/bower_components/morrisjs/morris.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('admin_style/js/waves.js')}}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{asset('admin_style/js/myadmin.js')}}"></script>
<script src="{{asset('admin_style/js/dashboard1.js')}}"></script>
</body>
</html>