<!-- banner -->
<div class="  @if(Request::is('/')) banner @else banner-1 @endif jarallax" id="home">
    <header >
        <div class="container">
            <div class="header-bottom-agileits">
                <div class="w3-logo">
                        <a href="/"><img src="{{ asset('storage') }}/{{ setting('siteLogo') }}" alt="" width="80" height="50"></a>
                    <h1></h1>
                </div>
                <div class="address">
                    <p>{{ setting('siteAddress') }}</p>
                    <p class="para-y"><a href="{{ setting('/about') }}">Get more info</a></p>
                </div>
                <div class="nav-contact-w3ls">
                    <p>{{ setting('sitePhone') }}<span class="fa fa-phone" aria-hidden="true"></span></p>
                    <p class="para-y"><a href="mailto:info@example.com">{{ setting('siteEmail') }}</a><span class="fa fa-envelope-o" aria-hidden="true"></span></p>

                </div>
                {{-- <div class="shopping-cart" style="position: fixed;top:33px;right:0px; ">
                        <button class="btn btn-danger text-white pull-right" style="border-radius: 0px;"><i class="badge badge-default" id="btnCart">0</i> <br>   <i class="fa fa-shopping-cart"></i>   Cart  </button>
                </div> --}}

                <div class="clearfix"></div>
            </div>
        </div>
    </header>
    <!-- navigation -->
    <div class="nav-bg">
        <div class="container">
            <nav class="navbar navbar-default shift">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                            aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a class="active" href="{{url('/')}}">Home</a></li>
                        <li><a href="{{ url('/about') }}">About</a></li>
                        <li><a href="{{ url('/services') }}">Services</a></li>
                        {{-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Pages<b class="caret"></b></a>
                            <ul class="dropdown-menu agile_short_dropdown">
                                <li><a href="icons.html">Web Icons</a></li>
                                <li><a href="typography.html">Typography</a></li>
                            </ul>
                        </li> --}}
                        <li><a href="{{ url('/packages') }}">Packages</a></li>
                        <li><a href="{{  url('/contact')  }}">Contact</a></li>
                         @if(!auth()->guard('customer')->check())
                        <li><a class="btn btn-info" href="{{ url('/sign_up') }}">Signup/Sign In</a></li>
                         @endif

                        @if(auth()->guard('customer')->check())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">{{ substr( auth()->guard('customer')->user()->name,0,7) }}.<b class="caret"></b></a>
                            <ul class="dropdown-menu agile_short_dropdown">
                                <li><a href="{{ url('/profile') }}">Profile</a></li>
                                <li><a href="{{ url('/my_bookings') }}">Bookings</a></li>
                                {{-- <li><a href="typography.html">Products</a></li> --}}
                                <li><a href="{{ url('/customer/logout') }}">Logout</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>

                </div>
                <!-- /.navbar-collapse -->

            </nav>
        </div>
    </div>

    @if(Request::is("/"))
    <div class="container">
        <!-- header -->
        <!-- //header -->
        <div class="agileits_w3layouts_banner_info">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="banner-text-w3-agileits">
                                <h5>Experienced hair stylists </h5>
                                <h2>Enjoy Professional Beauty Services!</h2>
                                <p>Providing expert skin care advice & beauty services using natural products to cater for any skin.</p>
                                <div class="botton">
                                    <a href="{{ url('/contact') }}">Contact Now</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="banner-text-w3-agileits">
                                <h5>The best and fastest service</h5>
                                <h2>Are You Planning to Pamper Yourself?</h2>
                                <p>Providing expert skin care advice & beauty services using natural products to cater for any skin.</p>
                                <div class="botton">
                                    <a href="{ url('/contact') }}">Contact Now</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="banner-text-w3-agileits">
                                <h5>Experienced hair stylists </h5>
                                <h2>Enjoy Professional Beauty Services!</h2>
                                <p>Providing expert skin care advice & beauty services using natural products to cater for any skin.</p>
                                <div class="botton">
                                    <a href="{ url('/contact') }}">Contact Now</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    @endif
</div>
<!-- //banner -->


<!-- Modal1 -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Beauty Salon</h4>
                <img src="images/11.jpg" alt=" " class="img-responsive">
                <h5>Neque porro quisquam est qui dolorem </h5>
                <p>Ut in ligula sollicitudin, auctor elit vel, mollis tortor. Nullam id magna in eros mollis porttitor vel et eros.Phasellus
                    sed iaculis nibh, non suscipit tortor. Aenean ante massa, lobortis et dolor eget, sollicitudin luctus arcu. Donec eros
                    tortor, ultrices in lectus quis, aliquet commodo lectus.Donec eros tortor, ultrices in lectus quis, aliquet commodo
                    lectus.</p>
            </div>
        </div>
    </div>
</div>
<!-- //Modal1 -->
