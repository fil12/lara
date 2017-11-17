<!-- Preloader -->
<div id="preloader">
    <div id="status">
        <div class="parent">
            <div class="child">
                <p class="small">loading</p>
            </div>
        </div>
    </div>
</div>
<!-- end preloader -->

@if (count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<section class="intro parallax section" id="section1">
    <div class="overlay">
        <div id="headline_cycler">
            <div class="headline_cycler_centralizer">
                <ul class="flexslider">
                    <li class="slide first">
                        <h2 class="atxt_hl">Создание сайтов</h2>
                    </li>
                    <li class="slide">
                        <h2 class="atxt_hl">Передовые IT технологии</h2>
                    </li>
                    <li class="slide">
                        <h2 class="atxt_hl">Мы это It-devеlopment</h2>
                        <p class="atxt_sl">Creative Agency</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <a href="#section2" data-title="" id="arrow-down" class="aligncenter">Get started</a> </section>
<!-- start header -->
<header class="clearfix">
    <div id="logo"> <a href="{{route('home')}}">It-dev</a> </div>
    <div class="tagline"><span>creative agency</span></div>
    <div id="nav-button"> <span class="nav-bar"></span> <span class="nav-bar"></span> <span class="nav-bar"></span> </div>
    <nav>
        <ul id="nav">
            @if(isset($pages) && is_object($pages))
            @foreach($pages as $k=>$page)
                <li><a  href="#{{$page['alias']}}">{{$page['name']}}</a></li>
            @endforeach
            @endif
            {{--<li class="active"><a href="#section1">Home</a> </li>--}}
        </ul>
    </nav>

</header>
{{--{{dump(session['status'])}}--}}
@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>

@endif
<!-- end header -->