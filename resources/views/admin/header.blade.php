{{--<div class="preloader">--}}
    {{--<div class="cssload-speeding-wheel"></div>--}}
{{--</div>--}}
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0">
        <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
            <div class="top-left-part"><a class="logo" href="{{route('home')}}" target="_blank"><i class="glyphicon glyphicon-fire"></i>&nbsp;<span class="hidden-xs">My Site</span></a></div>
            <ul class="nav navbar-top-links navbar-left hidden-xs">
                <li><a href="javascript:void(0)" class="open-close hidden-xs hidden-lg
 waves-effect waves-light"><i class="ti-arrow-circle-left ti-menu"></i>
                    </a></li>
            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Выйти
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>

            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
    <div class="navbar-default sidebar nicescroll" role="navigation">
        <div class="sidebar-nav navbar-collapse ">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="ti-search"></i> </button>
                            </span>
                    </div>
                </li>

                <li>
                    <a href="{{route('admin')}}" class="waves-effect"><i class="glyphicon glyphicon-fire fa-fw"></i> Панель управления</a>
                </li>
                <li>
                    <a href="{{route('peoples')}}" class="waves-effect"><i class="ti-user fa-fw"></i>Команда</a>
                </li>
                <li>
                    <a href="{{route('pages')}}" class="waves-effect"><i class="ti-layout fa-fw"></i>Страницы</a>
                </li>
                <li>
                    <a href="{{route('portfolio')}}" class="waves-effect"> <i class="ti-files fa-fw"></i>Портфолио</a>
                </li>
                <li>
                    <a href="{{route('prices')}}" class="waves-effect"><i class="ti-location-pin fa-fw"></i> Цены</a>
                </li>
                <li>
                    <a href="{{route('users')}}" class="waves-effect"> <i class="ti-face-smile fa-fw"></i>Пользователи</a>
                </li>
                <li>
                    <a href="404.html" class="waves-effect"><i class="ti-info fa-fw"></i> Error 404</a>
                </li>

            </ul>
            <div class="center p-20">
                <span class="hide-menu"><a href="{{route('home')}}" target="_blank" class="btn btn-info btn-block btn-rounded waves-effect waves-light">Перейти на сайт</a></span>
            </div>
        </div>
        <!-- /.sidebar-collapse -->
    </div>