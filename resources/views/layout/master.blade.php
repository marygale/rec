<html ng-app="recApp">
<head>
    <title>@yield('title') &lsaquo; REC</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link type="text/css" href="{{asset('build/css/all.css')}}" rel="stylesheet">
</head>
<body>
<div class="wrapper lw">
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
            	<span class="aux-text hidden-xs">
                    Welcome to Boomerang: hello@webpixels.ro or +40 724 123 456
                </span>
                    <nav class="top-header-menu">
                        <ul class="menu">
                            <li><a href="/users/login">Login</a></li>
                            <li><a href="/users/register">Register</a></li>
                            {{--<li><a href="/register" ng-show="currentUser == null">Login</a></li>
                            <li class="aux-languages dropdown animate-hover" data-animate="animated fadeInUp" ng-show="currentUser != null"><a href="#">Welcome </a>
                                <ul id="auxLanguages" class="sub-menu animate-wr animated fadeInUp">
                                    <li><a href="#"><span class="language">My Profile</span></a></li>
                                </ul>
                            </li>--}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div> <!--end top-header-->
    <header>
        <div id="navOne" class="navbar navbar-wp" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle navbar-toggle-aside-menu">
                        <i class="fa fa-outdent icon-custom"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/" title="Boomerang | One template. Infinite solutions">
                        <img src="{{asset('images/boomerang-logo-dark.png')}}" alt="Boomerang | One template. Infinite solutions">
                    </a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">Communities</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">Our Services</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">About Us</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">Contact</a>
                        </li>
                    </ul>

                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <div class="pg-opt pin">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>
                       {{-- @if(!empty($aData['pagename']))
                            {!!$aData['pagename']!!}
                        @endif--}}

                    </h2>
                </div>
                {{--@if($aData['pagename'] != 'Home')--}}
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">
                            {{--@if(!empty($aData['pagename']))
                                {!!$aData['pagename']!!}
                            @endif--}}
                        </li>
                    </ol>
                </div>
                {{--@endif--}}

            </div>
        </div>
    </div>

    @yield('content')

    {{--footer here--}}
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="col">
                        <h4>Contact us</h4>
                        <ul>
                            <li>5th Avenue, New York - United States</li>
                            <li>Phone: +10 724 1234 567 | Fax: +10 724 1234 567 </li>
                            <li>Email: <a href="mailto:hello@example.com" title="Email Us">hello@example.com</a></li>
                            <li>Skype: <a href="skype:my.business?call" title="Skype us">my-business</a></li>
                            <li>Creating great templates is our passion</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="col">
                        <h4>Mailing list</h4>
                        <p>Sign up if you would like to receive occasional treats from us.</p>
                        <form class="form-inline">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Your email address...">
                            <span class="input-group-btn">
                                <button class="btn btn-two" type="button">Go!</button>
                            </span>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="col col-social-icons">
                        <h4>Follow us</h4>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-skype"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-flickr"></i></a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="col">
                        <h4>About us</h4>
                        <p>
                            Boomerang Bootstrap Template is made with love and passion for your own business.
                            <br><br>
                            <a href="#" class="btn btn-two">Try it now!</a>
                        </p>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-lg-9 copyright">
                    2013 © Web Pixels. All rights reserverd.
                    <a href="#">Terms of use</a> |
                    <a href="#">Privacy policy</a>
                </div>
                <div class="col-lg-3 footer-logo">

                </div>
            </div>
        </div>
    </footer>

</div>

<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/vendors/angular.js')}}"></script>
<script src="{{ asset('build/js/vendors.min.js') }}"></script>
<script src="{{ asset('build/js/scripts.js') }}"></script>
<script src="{{ asset('build/js/controllers.js') }}"></script>
<script src="{{ asset('build/js/services.js') }}"></script>
<script type="text/javascript" src="{{asset('js/modernizr.custom.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.wp.custom.js')}}"></script>
</body>
</html>
