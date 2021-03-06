<!doctype html>
<html lang="en" class="no-js">
<head>
    <title>{{ucwords(str_replace('_', ' ', Route::currentRouteName()))}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{url('public/css/bootstrap.min.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{url('public/css/font-awesome.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{url('public/css/layout2.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{url('public/css/media.css')}}" media="all"/>
    <link href="{{url('public/css/polyglot-language-switcher.css')}}" type="text/css" rel="stylesheet">
    <link href="{{url('public/css/screen.css')}}" type="text/css" rel="stylesheet">
    <link href="{{url('public/css/thumbnail-slider.css')}}" type="text/css" rel="stylesheet">
    @yield('header_script')
</head>
<body>
<header>
    <div class="topStrip clearfix">
        <div class="container">
            <section class="row">
                <ul>
                    <li class="countryFlag">
                        <div id="polyglotLanguageSwitcher">
                            <form action="#">
                                <select id="polyglot-language-options3">
                                    <option id="es3" value="en"> Spanish</option>
                                    <option id="en3" value="fr" selected> English</option>
                                </select>
                            </form>
                        </div>
                    </li>

                    @if(Auth::check())
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Welcome {{Auth::user()->first_name}} &nbsp; <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                @if(Auth::user()->user_level==2)
                                    <li><a href="{{url('/doctor/appointments')}}">Appointments</a></li>
                                    <li><a href="{{url('/doctor/schedule')}}">My Schedule</a></li>
                                    <li><a href="{{url('/doctor/settings')}}">Settings</a></li>
                                @else
                                    <li><a href="{{url('/patient/medicalteam')}}">Medical Team</a></li>
                                    <li><a href="{{url('/patient/appointments')}}">Past Appointments</a></li>
                                    <li><a href="{{url('/patient/settings')}}">Settings</a></li>
                                @endif
                                <li><a href="{{ url('/logout') }}" style="color:#e04848 !important;">Logout</a></li>
                            </ul>
                        </div>
                    @else
                        <li class="lock"><a href="{{url('/user-login')}}"><img src="{{url('public/images/lock.png')}}" alt=""/>Sign in/ Join</a></li>
                    @endif

                    <li><a href="#"><img src="{{url('public/images/fb.png')}}" alt=""/></a></li>
                    <li><a href="#"><img src="{{url('public/images/in.png')}}" alt=""/></a></li>
                    <li><a href="#"><img src="{{url('public/images/gp.png')}}" alt=""/></a></li>
                    <li><a href="#"><img src="{{url('public/images/rss.png')}}" alt=""/></a></li>
                </ul>
            </section>
        </div>
    </div>
    <div class="headerMiddle clearfix">
        <div class="container">
            <section class="row">
                <a href="{{url('')}}" class="logoBlock"><img src="{{url('public/images/logo.png')}}" alt=""/></a>
                <a href="{{url('/list-your-practice')}}">
                    <button class="providerBtn2">Join Today!</button>
                </a>
            </section>
        </div>
    </div>
</header>
@yield('content')
<footer class="footerSec clearfix">
    <section class="topFooter clearfix">
        <div class="container">
            <section class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mobftr clearfix">
                    <h2 class="helpTxt">Need help booking online?</h2>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mobftr clearfix">
                    <p class="call"><img src="{{url('public/images/call.png')}}" alt=""/>+212-882-1096</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mobftr clearfix">
                    <p class="msg"><img src="{{url('public/images/msg.png')}}" alt=""/>info@weekenddocs.com</p>
                </div>
            </section>
        </div>
    </section>
    <article class="redFooter clearfix">
        <div class="container">
            <section class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 clearfix">
                    <p class="genderDoc">Are You a <br/>
                        Top Doctor?</p>
                    <a href="#" class="joinTodyIpad">Join Today</a></div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 clearfix">
                    <p class="medicalkit">Medical for <br/>
                        Business</p>
                    <a href="#">Learn More</a></div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 clearfix">
                    <p class="vital">Medical for <br/>
                        Health <br/>
                        Systems</p>
                    <a href="#">Learn More</a></div>
            </section>
        </div>
    </article>
    <section class="bottomFooter clearfix">
        <div class="container">
            <section class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 clearfix">
                    <div class="weekEnd clearfix">
                        <h2>WeekendDocs</h2>
                        <ul class="">
                            <li><a href="#"><img src="{{url('public/images/white_fb.png')}}" alt=""/></a></li>
                            <li><a href="#"><img src="{{url('public/images/white_tw.png')}}" alt=""/></a></li>
                            <li><a href="#"><img src="{{url('public/images/blue_rss.png')}}" alt=""/></a></li>
                        </ul>
                    </div>
                    <p>WeekendsDocs is a weekend medical directory and appointment scheduling service for medical professionals who work on the weekends. WeekendDocs is a new medical directory for doctors who are available on Saturdays and Sundays. Search by specialty or area, brows medical professionals here on WeekendDocs today!</p>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 clearfix">
                    <aside class="col-lg-3 col-md-3 col-sm-3 col-xs-6 footerMiddleBox  clearfix">
                        <h6>Navagation</h6>
                        <ul class="">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Answers</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Doctor Blog</a></li>
                        </ul>
                    </aside>
                    <aside class="col-lg-3 col-md-3 col-sm-3 col-xs-6 footerMiddleBox  clearfix">
                        <h6>Search by</h6>
                        <ul class="">
                            <li><a href="#">Doctor Name</a></li>
                            <li><a href="#">Practice Name</a></li>
                            <li><a href="#">Procedure</a></li>
                            <li><a href="#">Language</a></li>
                            <li><a href="#">Location</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Hospital</a></li>
                            <li><a href="#">Insurance</a></li>
                        </ul>
                    </aside>
                    <aside class="col-lg-3 col-md-3 col-sm-3 col-xs-6 footerMiddleBox  clearfix">
                        <h6>Cities</h6>
                        <ul class="">
                            <li><a href="#">Cincinnati</a></li>
                            <li><a href="#">Detroit</a></li>
                            <li><a href="#">Omaha</a></li>
                            <li><a href="#">Orlando</a></li>
                            <li><a href="#">Pittsburgh</a></li>
                            <li><a href="#">San Diego</a></li>
                            <li><a href="#">Tampa</a></li>
                            <li><a href="#">Virginia Beach</a></li>
                        </ul>
                    </aside>
                    <aside class="col-lg-3 col-md-3 col-sm-3 col-xs-6 footerMiddleBox  clearfix">
                        <h6>Specialities</h6>
                        <ul class="">
                            <li><a href="#">hiropractors</a></li>
                            <li><a href="#">Dentists</a></li>
                            <li><a href="#">Dermatologists</a></li>
                            <li><a href="#">Eye Doctors</a></li>
                            <li><a href="#">Gynecologists</a></li>
                            <li><a href="#">Primary Care Doctors</a></li>
                            <li><a href="#">Psychiatrist</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 footerMiddleBox  clearfix">
                    <h6>newsletter</h6>

                    <p>Join our newsletter for health related news, updates,and offers.</p>

                    <div class="searchBlock clearfix">
                        <form>
                            <input type="text" placeholder="Address" class="srch">
                            <button class="srchBtn">ok</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <p class="copyRight">Copyright © weekenddocs.com {{date('Y')}}</p>
</footer>
    <script type="text/javascript" src="{{url('public/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{url('public/js/bootstrap.min.js')}}"></script>
    <script src="{{url('public/js/jquery.polyglot.language.switcher.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{url('public/js/script.js')}}"></script>
    <script type="text/javascript" src="{{url('public/js/jquery.validate.js')}}"></script>
    <script src="{{url('public/js/notify.js')}}"></script>
    <script src="{{url('public/js/thumbnail-slider.js')}}"></script>
@yield('footer_custom_script')
</body>
</html>