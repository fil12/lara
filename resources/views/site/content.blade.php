

<section class="section white-bg" id="section2">
    {{--<div id="ancor2"></div>--}}
    {{--<div id="ajax-anchor"></div>--}}
    {{--<div class="ajax-content" id="ajax-content"></div>--}}
    {{--<div id="loading">--}}
    {{--<p>loading</p>--}}
    {{--</div>--}}
    <div class="container clearfix">
        <div class="col-md-3">
            <h3>{{$pages[1]['name']}}</h3>
            <div class="divider"></div>
            <p class="sub-heading">{!! $pages[1]['text'] !!}</p>
            {{--<a href="#ancor4" class="button" id="inquire">Request a Quote</a>--}}
            <div class="clear"></div>
            <ul class="unordered-list">

                <li class="filter" data-filter="all">Показать Все</li>
                    @if(isset($tags) && is_object($tags))
                        @foreach($tags as $k=>$item)
                            <li class="filter" data-filter=".{{$item}}">{{$k}}</li>
                        @endforeach
                    @endif

            </ul>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div id="Container" class="clearfix">
                    @if(isset($portfolios) && is_object($portfolios))
                        @foreach($portfolios as $k=>$portfolio)
                            <div class="mix {{$portfolio->filter}} col-lg-6 col-md-6">
                                <div class="margin-wrapper"><a class="simple-ajax-popup" href="#" data-title="Project Title Here"> {{Html::image('images/'.$portfolio->img)}}
                                        <div class="covering-image centered">
                                            <div class="info-box-content">
                                                <div class="parent">
                                                    <div class="child">
                                                        <div class="inner">
                                                            <h4 class="atxt_hl">{{$portfolio->name}}</h4>
                                                            <p class="uppercase atxt_sl">{!! $portfolio->text !!}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a></div>
                            </div>
                        @endforeach
                    @endif


                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="section3">
    <div id="ancor3"></div>
    <div class="container clearfix">
        @if(isset($prices) && is_object($prices))
            @foreach($prices as $price)
                <div class="col-lg-4 col-md-4">
                    <figure class="price-table">
                        <div class="heading">
                            <h4> {!! $price->name !!}</h4>
                        </div>
                        <p class="price"><span>$</span>{!! $price->price !!}</p>
                        <p class="price-details">{!! $price->text !!}</p>
                        <a href="#section5" class="button">Задать вопрос</a> </figure>
                </div>
            @endforeach
        @endif
    </div>
</section>
<section class="section dark bg-image-1 parallax">
    <div class="overlay"></div>
    <div class="container clearfix centered">
        <div class="col-lg-12 centered">
            <p class="uppercase">Цитаты</p>
            <div class="icons quote margin-15"></div>
        </div>
        <div class="col-lg-8 aligncenter">
            <div class="testimonials">
                <ul class="flexslider">
                    <li class="slide first">
                        <blockquote class="clearfix centered">
                            <p class="atxt_hl"> "Не провалился! Я только что нашел 10 000 способов, которые не сработают."</p>
                            <p class="small atxt_sl">Steve Jacobs</p>
                        </blockquote>
                    </li>
                    <li class="slide">
                        <blockquote class="clearfix centered">
                            <p class="atxt_hl"> "Секрет удачи - сделать шаг!"</p>
                            <p class="small atxt_sl">Mike Matts</p>
                        </blockquote>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section" id="section4">
    <div id="ancor4"></div>
    <div class="container clearfix">
        <div class="col-lg-3 col-md-12">
            <h3>Команда</h3>
            <div class="divider"></div>
            <p class="sub-heading">Мы являемся экспертами в области индустрии создания веб-сайтов, ориентированных на предоставление IT решений в проектах.</p>
        </div>
        <div class="col-lg-9 col-md-12">
            <div class="row">
                @if(isset($peoples) && is_object($peoples))
                    @foreach($peoples as $people)
                        <div class="col-lg-6 col-md-6 col-sm-6"> {{Html::image('images/'.$people->img)}}
                            <div class="more-info">
                                <h5>{{$people->name}}</h5>
                                <h5>{{$people->lastname}}</h5>
                                <p>{{$people->position}}</p>
                                <h6><strong>НАВЫКИ </strong></h6>
                                <p>{!! $people->skills !!}</p>
                                {{--<ul class="social-list clearfix">--}}
                                    {{--<li> <a href="#"><i class="fa fa-twitter"></i></a> </li>--}}
                                    {{--<li> <a href="#"><i class="fa fa-500px"></i></a> </li>--}}
                                    {{--<li> <a href="#"><i class="fa fa-vk"></i></a> </li>--}}
                                {{--</ul>--}}
                            </div>
                        </div>
                    @endforeach

                @endif


                <div class="tiny-break"></div>
                <div class="col-lg-6 col-md-6 col-sm-12 add-padding left">
                    <div class="icons winner"></div>
                    <div class="next-to-icon">
                        <h4>АНАЛИЗИРУЕМ РЫНОК</h4>
                        <p>Изучаем потребности клиентов, сильные и слабые стороны ваших конкурентов, чтобы использовать их себе в преимущество при разработке сайта вашей компании </p>
                    </div>

                    <div class="icons works"></div>
                    <div class="next-to-icon">
                        <h4>ПРОВОДИМ ТЕХНИЧЕСКИЕ РАБОТЫ</h4>
                        <p>Настраиваем функционал сайта для корректного отображения на любых устройствах, делаем сайт максимально быстрым и удобным для ваших клиентов</p>
                    </div>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 add-padding right">
                    <div class="icons chat"></div>
                    <div class="next-to-icon">
                        <h4>СОЗДАЕМ КОНЦЕПЦИЮ ДИЗАЙНА</h4>
                        <p>Дизайнеры разрабатывают индивидуальный дизайн сайта, учитывая специфику тематики, поведенческие факторы пользователей и ваши пожелания</p>
                    </div>
                    <div class="icons time"></div>
                    <div class="next-to-icon">
                        <h4>ТЕСТИРУЕМ И НАСТРАИВАЕМ</h4>
                        <p>Проверяем сайт на наличие возможных ошибок, вносим последние правки. Делаем все, чтобы вы получили проект, работающий стабильно без каких-либо сбоев</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="section white-bg">
    <div class="container clearfix">
        <div class="col-lg-12 centered">
            <div class="clear"></div>
            <div class="client"><img alt="" src="{{asset('images/spotify.png')}}" /></div>
            <div class="client"><img alt="" src="{{asset('images/unilever.png')}}" /></div>
            <div class="client"><img alt="" src="{{asset('images/sass.png')}}" /></div>
            <div class="client"><img alt="" src="{{asset('images/envato.png')}}" /></div>
            <div class="client"><img alt="" src="{{asset('images/apple.png')}}" /></div>
            <div class="client"><img alt="" src="{{asset('images/wordpress.png')}}" /></div>
            <div class="clear"></div>
        </div>
    </div>
</section>
<section class="section dark bg-image-2 parallax">
    <div class="overlay"></div>
    <div class="container clearfix centered">
        <div class="col-lg-12 centered">
            <p class="uppercase">Agency Reel</p>
        </div>
        <div class="col-lg-8 aligncenter centered">
            <h4>Our approach to technology &amp; design is why some of the most significant, global brands have chosen to partner with us.</h4>
            <a href="http://player.vimeo.com/video/108018156?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" data-title="Project Title Here" data-fancybox-group="group1" class="video-popup round-button"><i class="fa fa-play"></i></a> </div>
    </div>
</section>
<section class="section" id="section5">
    <div id="ancor5"></div>
    <div class="container clearfix">
        <div class="col-lg-8 col-md-6 col-sm-6">
            <div id="contact">

                {{Form::open(['url'=>route('home'), 'method'=>'post'])}}

                    {{Form::label('name','Ваше имя',['class'=>'required'])}}
                    {{Form::text('name',old('name'),['placeholder'=>'Ваше имя'])}}

                    {{Form::label('email','Email',['class'=>'required'])}}
                    {{Form::email('email',old('email'),['placeholder'=>'Ваш Email'])}}

                    {{Form::label('text','Сообщение',['class'=>'required'])}}
                    {{Form::textarea('text', old('text'),['placeholder'=>'Ваше сообщение'])}}

                {!! Form::submit('Отправить', ['class'=>'submit', 'type'=>'submit'])!!}

                {{Form::close()}}
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <h3>Приветствуем Вас!</h3>
            <div class="divider"></div>
            <p class="sub-heading extra_spacing">Вы можете написать нам на почту или в форме обратной связи. Мы ответим Вам так быстро, как это возможно.</p>
            <h4><a href="mailto:hello@bushwick.com" title="" class="link">info@it-dev.com.ua</a></h4>
            {{--<ul class="social-list clearfix">--}}
                {{--<li> <a href="#"><i class="fa fa-google-plus"></i></a> </li>--}}
                {{--<li> <a href="#"><i class="fa fa-twitter"></i></a> </li>--}}
                {{--<li> <a href="#"><i class="fa fa-500px"></i></a> </li>--}}
                {{--<li> <a href="#"><i class="fa fa-vimeo"></i></a> </li>--}}
            {{--</ul>--}}
            {{--<div class="break"></div>--}}
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <p class="uppercase">Наши телефоны</p>
                    <p>+38(050) 823-85-99<br>
                       +38(068) 719-00-20<br>
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>