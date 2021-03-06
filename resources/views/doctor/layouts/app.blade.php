<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Alabuja Daniel" />
    <meta name="keyword" content="" />
    <meta name="description" content="" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="javascript:;" type="image/png">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->

    <!--right slidebar-->
    <link href="{{URL::asset('css/slidebars.css')}}" rel="stylesheet">

    <!--jquery-ui-->
    <link href="{{URL::asset('js/jquery-ui/jquery-ui-1.10.1.custom.min.css')}}" rel="stylesheet" />

    <!--iCheck-->
    <link href="{{URL::asset('js/icheck/skins/all.css')}}" rel="stylesheet">

    <link href="{{URL::asset('css/owl.carousel.css')}}" rel="stylesheet">

    <!--common style-->
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/style-responsive.css')}}" rel="stylesheet">

</head>
<body class="sticky-header">
    <section>
        <!-- sidebar left start-->
        <div class="sidebar-left">
            <!--responsive view logo start-->
            <div class="logo dark-logo-bg visible-xs-* visible-sm-*">
                <a href="{{url('index')}}">
                    <img src="{{URL::asset('img/logo-icon.png')}}" alt="">
                    <!--<i class="fa fa-maxcdn"></i>-->
                    <span class="brand-name">SlickLab</span>
                </a>
            </div>
            <!--responsive view logo end-->

            <div class="sidebar-left-info">
                <!-- visible small devices start-->
                <div class=" search-field">  </div>
                <!-- visible small devices end-->

                <!--sidebar nav start-->
                <ul class="nav nav-pills nav-stacked side-navigation">
                    <li>
                        <h3 class="navigation-title">Navigation</h3>
                    </li>
                    <li class="active"><a href="index.html"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>

                    <li class="menu-list"><a href=""><i class="fa fa-book"></i> <span>UI Elements</span></a>
                        <ul class="child-list">
                            <li><a href="general.html"> BS Elements</a></li>
                            <li><a href="buttons.html"> Buttons</a></li>
                            <li><a href="toastr.html"> Toaster Notification</a></li>
                            <li><a href="widgets.html"> Widgets</a></li>
                            <li><a href="ion-slider.html"> Ion Slider</a></li>
                            <li><a href="tree.html"> Tree View</a></li>
                            <li><a href="nestable.html"> Nestable</a></li>
                            <li><a href="fontawesome.html"> Fontawesome</a></li>
                            <li><a href="line-icon.html"> Line Icon</a></li>
                        </ul>
                    </li>

                    <li class="menu-list"><a href=""><i class="fa fa-file-text"></i> <span>Extra Pages</span></a>
                        <ul class="child-list">
                            <li><a href="profile.html"> Profile</a></li>
                            <li><a href="invoice.html"> Invoice</a></li>
                            <li><a href="login.html"> Login </a></li>
                            <li><a href="registration.html"> Registration </a></li>
                            <li><a href="lock.html"> Lock Screen </a></li>
                            <li><a href="404.html"> 404 Error</a></li>
                            <li><a href="500.html"> 500 Error</a></li>

                        </ul>
                    </li>

                </ul>
                <!--sidebar nav end-->

            </div>
        </div>
        <!-- sidebar left end-->

        <!-- body content start-->
        <div class="body-content" >

            <!-- header section start-->
            <div class="header-section">

                <!--logo and logo icon start-->
                <div class="logo dark-logo-bg hidden-xs hidden-sm">
                    <a href="index.html">
                        <img src="{{URL::asset('img/logo-icon.png')}}" alt="">
                        <!--<i class="fa fa-maxcdn"></i>-->
                        <span class="brand-name">SlickLab</span>
                    </a>
                </div>

                <div class="icon-logo dark-logo-bg hidden-xs hidden-sm">
                    <a href="index.html">
                        <img src="{{URL::asset('img/logo-icon.png')}}" alt="">
                        <!--<i class="fa fa-maxcdn"></i>-->
                    </a>
                </div>
                <!--logo and logo icon end-->

                <!--toggle button start-->
                <a class="toggle-btn"><i class="fa fa-outdent"></i></a>
                <!--toggle button end-->

                <!--mega menu end-->
                <div class="notification-wrap">

                <!--right notification start-->
                <div class="right-notification">
                    <ul class="notification-menu">
                        <li>
                            <form class="search-content" action="index.html" method="post">
                                <input type="text" class="form-control" name="keyword" placeholder="Search...">
                            </form>
                        </li>

                        <li>
                            <a href="javascript:;" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ Auth::user()->avatar_url }}" alt="{{ Auth::user()->name }}">{{ Auth::user()->name }}
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu purple pull-right">
                                <li><a href="{{ url('doctor/profile') }}">  Profile</a></li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out pull-right"></i> Log Out
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                    
                                </li>
                            </ul>
                        </li>
                        {{-- <li>
                            <div class="sb-toggle-right">
                                <i class="fa fa-indent"></i>
                            </div>
                        </li> --}}

                    </ul>
                </div>
                <!--right notification end-->
                </div>

            </div>
            <!-- header section end-->
    


        @yield('content')
           

        </div>
        <!--body wrapper end-->


        <!-- body content end-->
    </section>

    <!-- Scripts -->
<!-- Placed js at the end of the document so the pages load faster -->
<script src="{{URL::asset('js/jquery-1.10.2.min.js')}}"></script>

<!--jquery-ui-->
<script src="{{URL::asset('js/jquery-ui/jquery-ui-1.10.1.custom.min.js')}}" type="text/javascript"></script>

<script src="{{URL::asset('js/jquery-migrate.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('js/modernizr.min.js')}}"></script>

<!--Nice Scroll-->
<script src="{{URL::asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>

<!--right slidebar-->
<script src="{{URL::asset('js/slidebars.min.js')}}"></script>

<!--Icheck-->
<script src="{{URL::asset('js/icheck/skins/icheck.min.js')}}"></script>

<!--jquery countTo-->
<script src="{{URL::asset('js/jquery.countTo.js')}}"  type="text/javascript"></script>

<!--owl carousel-->
<script src="{{URL::asset('js/owl.carousel.js')}}"></script>


<!--common scripts for all pages-->

<script src="{{URL::asset('js/scripts.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        //countTo
        $('.timer').countTo();
    });

</script>

</body>
</html>
