<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Autoservice</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Автосерсис" />
        <!-- font files -->
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <!-- /font files -->
        <!-- css files -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/pogo-slider.min.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="css/swipebox.css">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="//fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <!-- /css files -->
        <!-- js files -->
        <script src="js/modernizr.custom.js"></script>
        <link href="//fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">





                <div class="main-top" id="home">
                    <!-- banner section -->
                    <div class="pogoSlider" id="js-main-slider">
                        <div class="pogoSlider-slide" data-transition="verticalSlide" data-duration="1000"  style="background-image:url(images/banner1.jpg);">
                            <div class="pogoSlider-slide-element">
                                <h3>АВТО <span>СЕРВИС</span> ЗАПЧАСТИ</h3>
                            </div>
                        </div>
                        <div class="pogoSlider-slide " data-transition="verticalSlide" data-duration="1000"  style="background-image:url(images/banner2.jpg);">
                            <div class="pogoSlider-slide-element">
                                <h3>АВТО<span>СЕРВИС</span>. РЕМОНТ</h3>
                            </div>
                        </div>
                        <div class="pogoSlider-slide " data-transition="verticalSlide" data-duration="1000"  style="background-image:url(images/banner3.jpg);">
                            <div class="pogoSlider-slide-element">
                                <h3>МЫ <span>ЦЕНИМ </span>ВАШЕ ВРЕМЯ</h3>
                            </div>
                        </div>
                        <div class="pogoSlider-slide " data-transition="verticalSlide" data-duration="1000"  style="background-image:url(images/banner4.jpg);">
                            <div class="pogoSlider-slide-element">

                                <h3>АВТО <span>СЕРВИС</span>.ТЕХОСЛУЖИВАНИЕ</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /banner section -->
                    <!-- top bar -->
                    <div class="top-bar">
                        <div class="container">
                            <ul class="top-contacts">
                                <li class="top-unhover"><p><span class="fa fa-phone-square" aria-hidden="true"></span> +1 124 234 0079</p>
                                <li class="top-hover"><p><span class="fa fa-envelope" aria-hidden="true"></span> <a href="mailto:support@company.com">my@company.com</a></p>
                            </ul>
                            <ul class="top-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- /top bar -->
                    <div class="header-top">
                        <div class="container">
                            <nav class="navbar navbar-default">
                                <div class="navbar-header navbar-left">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <h1><a class="navbar-brand" href="index.html">АВТО <span>сервис</span></a></h1>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav cl-effect-14">

                                        <li><a class="scroll" href="#about">Услуги</a></li>
                                        <li><a class="scroll" href="#service">Про нас</a></li>
                                        {{--<li><a class="scroll" href="#team">Team</a></li>--}}
                                        <li><a class="scroll" href="#gallery">Галерея</a></li>
                                        <li><a class="scroll" href="#contact">Контакт</a></li>
                                    </ul>
                                </div>
                                <!-- /.navbar-collapse -->

                            </nav>


                        </div>

                    </div>
                </div>
                <!-- Nav tabs -->
                <!--what-we-do-->
                <div class="tabs" id="about">
                    <div class="container">
                        <div class="t-head">
                            <h3 class="head">Наш автосервис - лучший выбор!</h3>
                            {{--<p class="urna">Vestibulum commodo urna sit amet volutpat.</p>--}}
                        </div>
                        <div class="tabs-grids">
                            <div id="#">
                                <ul class="resp-tabs-list hor_1">
                                    <li><a class="scroll" href="#service1">Обслуживание и ремонт</a></li>
                                    <li><a class="scroll" href="#service2"> | Сопровождение |</a></li>
                                    <li> <a class="scroll" href="#service3">
                                            Доставка </a>
                                    </li>

                                </ul>

                                <div class="resp-tabs-container hor_1">
                                    <div id="service1" class="text agile-info">
                                        <h4><a href="{{ route('all_services') }}">Забронировать время для ремонта</a></h4>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accUKntium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                                        <p>Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>


                                    </div>

                                    <div id="service2" class="text agile-info">
                                        <h4 style="margin-left: 0.5em">
                                            <form action="{{ route('find') }}" method="POST">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    История заказов по VIN номеру машины
                                                    @include('admin.fields.text', ['field' => 'name', 'name' => 'vin'])
                                                    <input type="submit" class="btn btn-primary" value="Начать поиск">
                                                </div>

                                            </form>
                                        </h4>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accUKntium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                                        <p>Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>


                                    </div>

                                    <div id="service3" class="text agile-info">
                                        <h4>Доставка машины клиенту</h4>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accUKntium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                                        <p>Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//what-we-do-->
                <!--count-down -->
                <div class="count" id="service">
                    <div class="container">
                        <div class="col-md-3 agile_count_grid">
                            <div class="agile_count_grid_left">
                                <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                            </div>
                            <div class="agile_count_grid_right">
                                <p class="counter">324</p>
                            </div>
                            <div class="clearfix"> </div>
                            <h3>Творческий подход</h3>
                        </div>
                        <div class="col-md-3 agile_count_grid">
                            <div class="agile_count_grid_left">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            </div>
                            <div class="agile_count_grid_right">
                                <p class="counter">543</p>
                            </div>
                            <div class="clearfix"> </div>
                            <h3>Довольные заказчики</h3>
                        </div>
                        <div class="col-md-3 agile_count_grid">
                            <div class="agile_count_grid_left">
                                <span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
                            </div>
                            <div class="agile_count_grid_right">
                                <p class="counter">434</p>
                            </div>
                            <div class="clearfix"> </div>
                            <h3>Превосходные отзывы</h3>
                        </div>
                        <div class="col-md-3 agile_count_grid">
                            <div class="agile_count_grid_left">
                                <span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span>
                            </div>
                            <div class="agile_count_grid_right">
                                <p class="counter">234</p>
                            </div>
                            <div class="clearfix"> </div>
                            <h3>Отличные расценки</h3>
                        </div>
                        <div class="clearfix"> </div>

                    </div>
                </div>
                <!-- //count-down -->
                <!-- work -->
                <div class="work" id="work">
                    <h3 class="head">Наши работы</h3>
                    <p class="urna">Vestibulum commodo urna sit amet volutpat.</p>

                    <div class="agileits_works-top">
                        <div class="col-md-4 agileits_works-grid">
                            <img src="images/4.jpg" alt=" " class="img-responsive" />
                        </div>
                        <div class="col-md-4 agileits_works-grid two">
                            <div class="wthree-text">
                                <h4>Lorem Ipsum</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry,Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            </div>

                        </div>
                        <div class="col-md-4 agileits_works-grid">
                            <img src="images/10.jpg" alt=" " class="img-responsive" />
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <div class="agileits_work_grids">
                        <ul id="flexiselDemo1">
                            <li>
                                <div class="agileits_work_grid view view-sixth">
                                    <img src="images/2.jpg" alt=" " class="img-responsive" />
                                    <div class="mask">
                                        <a href="#" class="info"><i class="fa fa-cogs" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="agileits_work_grid view view-sixth">
                                    <img src="images/3.jpg" alt=" " class="img-responsive" />
                                    <div class="mask">
                                        <a href="#" class="info"><i class="fa fa-car" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="agileits_work_grid view view-sixth">
                                    <img src="images/4.jpg" alt=" " class="img-responsive" />
                                    <div class="mask">
                                        <a href="#" class="info"><i class="fa fa-cogs" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="agileits_work_grid view view-sixth">
                                    <img src="images/5.jpg" alt=" " class="img-responsive" />
                                    <div class="mask">
                                        <a href="#" class="info"><i class="fa fa-car" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
                <!-- //work -->
                <!--team -->
                <div class="team" id ="team">
                    <div class="container">
                        <h3 class="head">Наша команда</h3>
                        <p class="urna">Vestibulum commodo urna sit amet volutpat.</p>
                        <div class="agile_team_grids">
                            <div class="col-md-3 agile_team_grid">
                                <div class="agile_team_grid_main">
                                    <img src="images/t1.jpg" alt=" " class="img-responsive">
                                    <div class="p-mask">
                                        <ul class="top-links two">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="agile_team_grid1">
                                    <h3>Riya John</h3>
                                    <p>Car Repair</p>
                                </div>
                            </div>
                            <div class="col-md-3 agile_team_grid">
                                <div class="agile_team_grid_main">
                                    <img src="images/t2.jpg" alt=" " class="img-responsive">
                                    <div class="p-mask">
                                        <ul class="top-links two">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="agile_team_grid1">
                                    <h3>Williamson </h3>
                                    <p>Car Inspection</p>
                                </div>
                            </div>
                            <div class="col-md-3 agile_team_grid three">
                                <div class="agile_team_grid_main">
                                    <img src="images/t3.jpg" alt=" " class="img-responsive">
                                    <div class="p-mask">
                                        <ul class="top-links two">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="agile_team_grid1">
                                    <h3>Rosy John</h3>
                                    <p>Car Wash</p>
                                </div>
                            </div>
                            <div class="col-md-3 agile_team_grid four">
                                <div class="agile_team_grid_main">
                                    <img src="images/t4.jpg" alt=" " class="img-responsive">
                                    <div class="p-mask">
                                        <ul class="top-links two">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="agile_team_grid1">
                                    <h3>David Pal</h3>
                                    <p>Car Delivery</p>
                                </div>
                            </div>

                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <!-- //team -->
                <!--Gallery-->
                <div class="gallery" id="gallery">
                    <div class="container">
                        <h3 class="head">Галерея</h3>
                        <p class="urna">Vestibulum commodo urna sit amet volutpat.</p>

                        <div class="gallery-grids">
                            <div class="col-md-4 baner-top">
                                <a href="images/1.jpg" class="b-link-stripe b-animate-go  swipebox">
                                    <div class="gal-spin-effect vertical ">
                                        <img src="images/1.jpg" alt=" " />
                                        <div class="gal-text-box">
                                            <div class="info-gal-con">
                                                <h4>Car Towing</h4>
                                                <span class="separator"></span>
                                                <p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
                                                <span class="separator"></span>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 baner-top">
                                <a href="images/2.jpg" class="b-link-stripe b-animate-go  swipebox">
                                    <div class="gal-spin-effect vertical ">
                                        <img src="images/2.jpg" alt=" " />
                                        <div class="gal-text-box">
                                            <div class="info-gal-con">
                                                <h4>Car Towing</h4>
                                                <span class="separator"></span>
                                                <p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
                                                <span class="separator"></span>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 baner-top ban-mar">
                                <a href="images/3.jpg" class="b-link-stripe b-animate-go  swipebox">
                                    <div class="gal-spin-effect vertical ">
                                        <img src="images/3.jpg" alt=" " />
                                        <div class="gal-text-box">
                                            <div class="info-gal-con">
                                                <h4>Car Towing</h4>
                                                <span class="separator"></span>
                                                <p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
                                                <span class="separator"></span>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 baner-top ban-mar">
                                <a href="images/4.jpg" class="b-link-stripe b-animate-go  swipebox">
                                    <div class="gal-spin-effect vertical ">
                                        <img src="images/4.jpg" alt=" " />
                                        <div class="gal-text-box">
                                            <div class="info-gal-con">
                                                <h4>Автосервис</h4>
                                                <span class="separator"></span>
                                                <p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
                                                <span class="separator"></span>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 baner-top ban-mar">
                                <a href="images/5.jpg" class="b-link-stripe b-animate-go  swipebox">
                                    <div class="gal-spin-effect vertical ">
                                        <img src="images/5.jpg" alt=" " />
                                        <div class="gal-text-box">
                                            <div class="info-gal-con">
                                                <h4>Автосервис</h4>
                                                <span class="separator"></span>
                                                <p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
                                                <span class="separator"></span>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 baner-top ban-mar">
                                <a href="images/6.jpg" class="b-link-stripe b-animate-go  swipebox">
                                    <div class="gal-spin-effect vertical ">
                                        <img src="images/6.jpg" alt=" " />
                                        <div class="gal-text-box">
                                            <div class="info-gal-con">
                                                <h4>Автосервис</h4>
                                                <span class="separator"></span>
                                                <p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
                                                <span class="separator"></span>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 baner-top">
                                <a href="images/7.jpg" class="b-link-stripe b-animate-go  swipebox">
                                    <div class="gal-spin-effect vertical ">
                                        <img src="images/7.jpg" alt=" " />
                                        <div class="gal-text-box">
                                            <div class="info-gal-con">
                                                <h4>Автосервис</h4>
                                                <span class="separator"></span>
                                                <p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
                                                <span class="separator"></span>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 baner-top">
                                <a href="images/8.jpg" class="b-link-stripe b-animate-go  swipebox">
                                    <div class="gal-spin-effect vertical ">
                                        <img src="images/8.jpg" alt=" " />
                                        <div class="gal-text-box">
                                            <div class="info-gal-con">
                                                <h4>Car Towing</h4>
                                                <span class="separator"></span>
                                                <p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
                                                <span class="separator"></span>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 baner-top">
                                <a href="images/9.jpg" class="b-link-stripe b-animate-go  swipebox">
                                    <div class="gal-spin-effect vertical ">
                                        <img src="images/9.jpg" alt=" " />
                                        <div class="gal-text-box">
                                            <div class="info-gal-con">
                                                <h4>Автосервис</h4>
                                                <span class="separator"></span>
                                                <p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
                                                <span class="separator"></span>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <!-- //gallery -->



                <!-- map -->
                <div class="map agileits">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26359195.17562375!2d-113.7156245614499!3d36.2473834534249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1471497559566"  frameborder="0" style="border:0" allowfullscreen></iframe>
                    <div class="map-grids">
                        <div class="map-grid-left">
                            <ul>
                                <li class="dot"><i class="fa fa-location-arrow" aria-hidden="true"></i> BD 2 Mars, N1 136, Morocco Casablanca</li>
                                <li class="mobile"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +212 522 275 386</li>
                                <li class="mes"><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">Example @mail.com</a></li>
                            </ul>
                            <p class="text">Местонахождение </p>
                            <label class="right-arrow"> </label>
                        </div>
                        <div class="map-grid-right">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                </div>
                <!-- //map -->



                <div class="footer">
                    <div class="container">
                        <div class="agileinfo_footer_grids">
                            <div class="col-md-4 agileinfo_footer_grid">
                                <h2><a href="index.html">Авто <span>Сервис</span></a></h2>
                                <p>Etiam condimentum mi nec tortor euismod, id lobortis odio dictum. Cras
                                    suscipit elit eget mi volutpat facilisis.</p>
                                <ul class="top-links two three">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div id="contact" class="col-md-4 agileinfo_footer_grid">
                                <h3>Контактная информация</h3>
                                <ul class="agileinfo_footer_grid_list">
                                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Украина, <span>New York City.</span></li>
                                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
                                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
                                </ul>
                            </div>
                            <div class="col-md-4 agileinfo_footer_grid">
                                <h3>Местонахождение</h3>
                                <ul class="agileinfo_footer_grid_nav">
                                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a class="scroll" href="#home">В начало</a></li>
                                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a class="scroll" href="#service">Про нас</a></li>
                                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a class="scroll" href="#about">Услуги  </a></li>
                                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a class="scroll" href="#team">Команда</a></li>

                                </ul>
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                    </div>
                </div>
                <div class="w3agile_footer_copy">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>

                                {{--@if (Route::has('register'))--}}
                                {{--<a href="{{ route('register') }}">Register</a>--}}
                                {{--@endif--}}
                            @endauth
                        </div>
                        for IT STEP by SV, 2019
                    @endif

                </div>
                <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
                <!-- //footer -->
                <!-- swipe box js -->
                <script src="js/jquery-2.2.3.min.js"></script>
                <script src="js/jquery.pogo-slider.min.js"></script>
                <script src="js/main.js"></script>
                <!-- /js files -->
                <!-- Starts-Number-Scroller-Animation-JavaScript -->
                <script src="js/waypoints.min.js"></script>
                <script src="js/counterup.min.js"></script>
                <script>
                    jQuery(document).ready(function( $ ) {
                        $('.counter').counterUp({
                            delay: 20,
                            time: 1000
                        });
                    });
                </script>
                <!-- //Starts-Number-Scroller-Animation-JavaScript -->
                <script type="text/javascript">
                    $(window).load(function() {
                        $("#flexiselDemo1").flexisel({
                            visibleItems: 4,
                            animationSpeed: 1000,
                            autoPlay: true,
                            autoPlaySpeed: 3000,
                            pauseOnHover: true,
                            enableResponsiveBreakpoints: true,
                            responsiveBreakpoints: {
                                portrait: {
                                    changePoint:480,
                                    visibleItems: 1
                                },
                                landscape: {
                                    changePoint:640,
                                    visibleItems:2
                                },
                                tablet: {
                                    changePoint:768,
                                    visibleItems: 3
                                }
                            }
                        });

                    });
                </script>
                <script type="text/javascript" src="js/jquery.flexisel.js"></script>
                <link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
                <script src="js/easyResponsiveTabs.js"></script>
                <!--Plug-in Initialisation-->
                <script type="text/javascript">
                    $(document).ready(function() {

                        //Vertical Tab
                        $('#parentVerticalTab').easyResponsiveTabs({
                            type: 'vertical', //Types: default, vertical, accordion
                            width: 'auto', //auto or any width like 600px
                            fit: true, // 100% fit in a container
                            closed: 'accordion', // Start closed if in accordion view
                            tabidentify: 'hor_1', // The tab groups identifier
                            activate: function(event) { // Callback function if tab is switched
                                var $tab = $(this);
                                var $info = $('#nested-tabInfo2');
                                var $name = $('span', $info);
                                $name.text($tab.text());
                                $info.show();
                            }
                        });
                    });
                </script>
                <!--/script-->

                <script type="text/javascript" src="js/move-top.js"></script>
                <script type="text/javascript" src="js/easing.js"></script>
                <script type="text/javascript">
                    jQuery(document).ready(function($) {
                        $(".scroll").click(function(event){
                            event.preventDefault();
                            $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
                        });
                    });
                </script>
                <!-- swipe box js -->
                <script src="js/jquery.swipebox.min.js"></script>
                <script type="text/javascript">
                    jQuery(function($) {
                        $(".swipebox").swipebox();
                    });
                </script>
                <!-- //swipe box js -->

                <script type="text/javascript">
                    $(document).ready(function() {
                        /*
                        var defaults = {
                              containerID: 'toTop', // fading element id
                            containerHoverID: 'toTopHover', // fading element hover id
                            scrollSpeed: 1200,
                            easingType: 'linear'
                         };
                        */

                        $().UItoTop({ easingType: 'easeOutQuart' });

                    });
                </script>

                <!--end-smooth-scrolling-->
                <script src="js/bootstrap.js"></script>
        </div>
    </body>
</html>
