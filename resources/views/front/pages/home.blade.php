@extends('front.layout.app')
@section('content')

    <!-- Latest News -->
    <div class="practice-areas">
        <div class="container">
            <div class="wthree_head_section">
                <h3 class="w3l_header">Our <span>Services</span></h3>
                <p>Treat yourself to a facial or celebrating a special occasion, aromatherapy, our beauty
                    and skin care services will suit every beauty need.</p>
            </div>

            <div class=" col-md-12">
              @foreach($services as $service)
                <div class="col-md-6 text-center">
                    <div class="area-right p{{ $loop->index+1 }}">
                        <img src="{{ asset('storage') }}/{{ $service->image }}" alt="" width="200" height="200">
                        <h5>{{ $service->name }}</h5>
                        <p class="para-w3-agile">{{$service->description}}</p>
                    </div>
                </div>
                 @endforeach
            </div>


        </div>
    </div>
    <!-- //Latest News -->
    <!-- wthree-mid -->
    <div class="wthree-mid jarallax">
        <div class="container">
            <h3>Nisl amet dolor sit ipsum veroeros sed blandit</h3>
            <p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
            <div class="botton">
                <a href="about.html">About Us</a>
            </div>
        </div>
    </div>
    <!-- //wthree-mid -->
    <!-- pricing -->
    <div class="w3ls-section wthree-pricing" id="pricing">
        <div class="container">
            <div class="wthree_head_section">
                <h3 class="w3l_header">Packages <span>Pricing</span></h3>
                <p>Treat yourself to a facial or celebrating a special occasion, aromatherapy, our beauty
                    and skin care services will suit every beauty need.</p>
            </div>

            @foreach($packages as $package)
            <div class="pricing-grids-info  col-md-3">
                <div class="pricing-grid " style="width: 100%;">
                    <div class="w3ls-top">
                        <h3>{{ $package->name }}</h3>
                    </div>
                    <div class="w3ls-bottom">
                        <ul class="count">
                            @foreach(explode(',',$package->services) as $item)
                            <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                        <h4> {{ $package->price }}<span class="sup">{{ setting('currency') }}</span> </h4>
                        <div class="more">
                            <a href="contact.html">Book Now</a>
                        </div>
                    </div>
                </div>


                <div class="clearfix"> </div>
                <!--End-slider-script-->
            </div>
            @endforeach

        </div>
    </div>
    <!--//pricing-->
    <!-- counter -->
    <div class="services-bottom stats services jarallax">
        <div class="banner-dott1">
            <div class="container">
                <div class="wthree_head_section">
                    <h3 class="w3l_header two">Our <span>Statistics</span></h3>
                    <p class="tho">Treat yourself to a facial or celebrating a special occasion, aromatherapy, our beauty
                        and skin care services will suit every beauty need.</p>
                </div>
                <div class="wthree-agile-counter">
                    <div class="col-md-3 w3_agile_stats_grid-top">
                        <div class="w3_agile_stats_grid">
                            <div class="agile_count_grid_left">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </div>
                            <div class="agile_count_grid_right">
                                <p class="counter">324</p>
                            </div>
                            <div class="clearfix"> </div>
                            <h4>Services</h4>
                        </div>
                    </div>
                    <div class="col-md-3 w3_agile_stats_grid-top">
                        <div class="w3_agile_stats_grid">
                            <div class="agile_count_grid_left">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            </div>
                            <div class="agile_count_grid_right">
                                <p class="counter">543</p>
                            </div>
                            <div class="clearfix"> </div>
                            <h4>Happy Clients</h4>
                        </div>
                    </div>
                    <div class="col-md-3 w3_agile_stats_grid-top">
                        <div class="w3_agile_stats_grid">
                            <div class="agile_count_grid_left">
                                <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                            </div>
                            <div class="agile_count_grid_right">
                                <p class="counter">434</p>
                            </div>
                            <div class="clearfix"> </div>
                            <h4>People Loved</h4>
                        </div>
                    </div>
                    <div class="col-md-3 w3_agile_stats_grid-top">
                        <div class="w3_agile_stats_grid">
                            <div class="agile_count_grid_left">
                                <span class="fa fa-trophy" aria-hidden="true"></span>
                            </div>
                            <div class="agile_count_grid_right">
                                <p class="counter">234</p>
                            </div>
                            <div class="clearfix"> </div>
                            <h4>Win Awards</h4>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //counter -->
    <!-- Clients -->
    <div class="clients-main" id="clients">
        <div class="container">
            <!-- Owl-Carousel -->
            <div class="wthree_head_section">
                <h3 class="w3l_header">What <span>People Say</span></h3>
                <p>Treat yourself to a facial or celebrating a special occasion, aromatherapy, our beauty
                    and skin care services will suit every beauty need.</p>
            </div>
            <div id="owl-demo" class="owl-carousel text-center clients-right">
                <div class="item g1">
                    <div class="agile-dish-caption">
                        <h4>John Smith</h4>
                        <span>Lorem Ipsum</span>
                    </div>
                    <img class="lazyOwl" src="{{asset('images')}}/c1.jpg" alt="" />
                    <div class="clearfix"></div>
                    <p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Duis nulla nulla, faucibus id diam ac, luctus sodales purus.
                        Quisque nibh ipsum,Ut accumsan.</p>
                </div>
                <div class="item g1">
                    <div class="agile-dish-caption">
                        <h4>Jecy Deoco</h4>
                        <span>Lorem Ipsum</span>
                    </div>
                    <img class="lazyOwl" src="{{asset('images')}}/c2.jpg" alt="" />
                    <div class="clearfix"></div>
                    <p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Duis nulla nulla, faucibus id diam ac, luctus sodales purus.
                        Quisque nibh ipsum,Ut accumsan.</p>
                </div>
                <div class="item g1">
                    <div class="agile-dish-caption">
                        <h4>Devid Fahim</h4>
                        <span>Lorem Ipsum</span>
                    </div>
                    <img class="lazyOwl" src="{{asset('images')}}/c3.jpg" alt="" />
                    <div class="clearfix"></div>
                    <p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Duis nulla nulla, faucibus id diam ac, luctus sodales purus.
                        Quisque nibh ipsum,Ut accumsan.</p>
                </div>
                <div class="item g1">
                    <div class="agile-dish-caption">
                        <h4>Honey Jisa</h4>
                        <span>Lorem Ipsum</span>
                    </div>
                    <img class="lazyOwl" src="{{asset('images')}}/c1.jpg" alt="" />
                    <div class="clearfix"></div>
                    <p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Duis nulla nulla, faucibus id diam ac, luctus sodales purus.
                        Quisque nibh ipsum,Ut accumsan.</p>
                </div>
                <div class="item g1">
                    <div class="agile-dish-caption">
                        <h4>Jecy Deoco</h4>
                        <span>Lorem Ipsum</span>
                    </div>
                    <img class="lazyOwl" src="{{asset('images')}}/c2.jpg" alt="" />
                    <div class="clearfix"></div>
                    <p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Duis nulla nulla, faucibus id diam ac, luctus sodales purus.
                        Quisque nibh ipsum,Ut accumsan.</p>
                </div>
                <div class="item g1">
                    <div class="agile-dish-caption">
                        <h4>Devid Fahim</h4>
                        <span>Lorem Ipsum</span>
                    </div>
                    <img class="lazyOwl" src="{{asset('images')}}/c3.jpg" alt="" />
                    <div class="clearfix"></div>
                    <p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Duis nulla nulla, faucibus id diam ac, luctus sodales purus.
                        Quisque nibh ipsum,Ut accumsan.</p>
                </div>
            </div>
            <!--// Owl-Carousel -->
        </div>
    </div>
    <!--// Clients -->


@endsection
