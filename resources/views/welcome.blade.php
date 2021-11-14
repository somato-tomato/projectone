@extends('front.head')

@section('section')
    @include('front.header')

    <!--Ful Screen Section Video with caption-->
    <section class="full-screen parallax-video parallaxie center-block bg-video-container" id="ourhome">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-1"></div>
                <div class="col-md-12 col-sm-12">
                    <div class="center-item text-center video-content">
                        <h2 class="text-capitalize top50 bottom35  whitecolor">
                     <span class="font-xlight block wow fadeIn" data-wow-delay="400ms">{{ $video->description }}
                     </span><span class="block fontbold wow fadeIn" data-wow-delay="500ms">{{ $video->descriptionDua }}</span>
                        </h2>
                        <a href="#btn-feature" class="button btnwhite pagescroll wow fadeInUp" data-wow-delay="600ms">features</a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-1"></div>
            </div>
        </div>
        <video class="my-background-video jquery-background-video" loop autoplay muted poster="{{ asset('frontEnd/video/thumb-slide.jpg')}}">
            <source src="{{ asset('videos_site/'.$video->video) }}" type="video/webm">
        </video>
    </section>


    <div class="kokomi">
        <!--half img section-->
        @foreach($features as $f)
            <section class="half-section shiruko">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 nopadding aru">
                            <div class="image img-container">
                                <img alt="" src="{{ asset('images_site/'.$f->sectionImage)}}" class="equalheight">
                            </div>
                        </div>
                        <div class="col-lg-6 nopadding nozomi">
                            <div class="split-box text-center center-block container-padding equalheight" id="btn-feature">
                                <div class="heading-title padding">
                                    <span class=" wow fadeIn" data-wow-delay="300ms">{{ $f->sectionName }}</span>
                                    <h2 class="darkcolor bottom20 wow fadeIn" data-wow-delay="350ms">{{ $f->sectionTitle }}</h2>
                                    <p class="heading_space wow fadeIn" data-wow-delay="400ms">{{ $f->sectionDescription }}</p>
                                    <a href="{{ $f->buttonDestination }}" class="button btnprimary pagescroll wow fadeInUp" data-wow-delay="500ms">{{ $f->buttonName }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
        <!--half img section ends-->
    </div>


    <!-- WOrk Process-->
    <section id="our-process" class="padding gradient_bg_default">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <div class="heading-title wow fadeInUp" data-wow-delay="300ms">
                        <h2 class="whitecolor">Work <span class="fontregular">Process</span> </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <ul class="process-wrapp">
                    <li class="whitecolor wow fadeIn" data-wow-delay="350ms">
                        @if($process[0]->number == 1)
                            <span class="pro-step bottom20">{{ $process[0]->number }}</span>
                            <p class="fontbold bottom25">{{ $process[0]->processName }}</p>
                            <p>{{ $process[0]->processDesc }}</p>
                        @endif
                    </li>
                    <li class="whitecolor wow fadeIn" data-wow-delay="400ms">
                        @if($process[1]->number == 2)
                            <span class="pro-step bottom20">{{ $process[1]->number }}</span>
                            <p class="fontbold bottom25">{{ $process[1]->processName }}</p>
                            <p>{{ $process[1]->processDesc }}</p>
                        @endif
                    </li>
                    <li class="whitecolor wow fadeIn" data-wow-delay="500ms">
                        @if($process[2]->number == 3)
                            <span class="pro-step bottom20">{{ $process[2]->number }}</span>
                            <p class="fontbold bottom25">{{ $process[2]->processName }}</p>
                            <p>{{ $process[2]->processDesc }}</p>
                        @endif
                    </li>
                    <li class="whitecolor wow fadeIn" data-wow-delay="600ms">
                        @if($process[3]->number == 4)
                            <span class="pro-step bottom20">{{ $process[3]->number }}</span>
                            <p class="fontbold bottom25">{{ $process[3]->processName }}</p>
                            <p>{{ $process[3]->processDesc }}</p>
                        @endif
                    </li>
                    <li class="whitecolor wow fadeIn" data-wow-delay="700ms">
                        @if($process[4]->number == 5)
                            <span class="pro-step bottom20">{{ $process[4]->number }}</span>
                            <p class="fontbold bottom25">{{ $process[4]->processName }}</p>
                            <p>{{ $process[4]->processDesc }}</p>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--WOrk Process ends-->


    <!-- Our Team-->
    <section id="our-team" class="padding bglight">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-sm-12 text-center">
                    <div class="heading-title wow fadeInUp" data-wow-delay="300ms">
                        <span>Heros Behind the Company</span>
                        <h2 class="darkcolor bottom20">Team Kami</h2>
                        {{--               <p class="bottom10">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus. </p>--}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div class="team-box top60 wow fadeIn" data-wow-delay="350ms">
                        <div class="image">
                            <img src="{{ asset('frontEnd/images/p1.jpg') }}" alt="">
                        </div>
                        <div class="team-content gradient_bg whitecolor">
                            <h3>Usep Seumpena.ST, SPd,</h3>
                            <p class="bottom40">Project Manager, Importir Lift Rumah Indonesia</p>
                            <div class="text-center">
                                <h3>"We give the best services !"</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="team-box top60 wow fadeIn" data-wow-delay="400ms">
                        <div class="image">
                            <img src="{{ asset('frontEnd/images/p2.jpg') }}" alt="">
                        </div>
                        <div class="team-content gradient_bg_default whitecolor">
                            <h3>Aep ASDQ.SLR, DSLr</h3>
                            <p class="bottom40">Accountant, Importir Lift Rumah Indonesia</p>
                            <div class="text-center">
                                <h3>"We give our best to satisfy people"</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="team-box top60 wow fadeIn" data-wow-delay="350ms">
                        <div class="image">
                            <img src="{{ asset('frontEnd/images/p3.jpg') }}" alt="">
                        </div>
                        <div class="team-content gradient_bg whitecolor">
                            <h3>Richard Lioness.</h3>
                            <p class="bottom40">Head Technician, Importir Lift Rumah Indonesia</p>
                            <div class="text-center">
                                <h3>"Teknisi kami selalu siap untuk anda"</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Team ends-->

    <!--Some Feature -->
    {{--<section id="our-feature" class="padding single-feature">--}}
    {{--   <div class="container">--}}
    {{--      <div class="row">--}}
    {{--         <div class="col-md-6 col-sm-7 text-md-start text-center wow fadeInLeft" data-wow-delay="300ms">--}}
    {{--            <div class="heading-title heading_space">--}}
    {{--               <span>Service We Offer</span>--}}
    {{--               <h2 class="darkcolor bottom30">Awesome Features</h2>--}}
    {{--            </div>--}}
    {{--            <p class="bottom35">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus. </p>--}}
    {{--            <a href="#our-blog" class="button btnsecondary pagescroll">Our blog</a>--}}
    {{--         </div>--}}
    {{--         <div class="col-md-6 col-sm-5 wow fadeInRight" data-wow-delay="350ms">--}}
    {{--            <div class="image top50"><img alt="SEO" src="{{ asset('frontEnd/images/awesome--feature.png')}}"></div>--}}
    {{--         </div>--}}
    {{--      </div>--}}
    {{--   </div>--}}
    {{--</section>--}}
    <!--Some Feature ends-->

    <!--Gallery-->
    <section id="portfolio-xe" class="bglight padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-sm-12 text-center">
                    <div class="heading-title wow fadeInUp" data-wow-delay="300ms">
                        <span>Portfolio Designs</span>
                        <h2 class="darkcolor bottom10">Pemasangan Kami</h2>
                        {{--               <p class="heading_space">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus. </p>--}}
                    </div>
                </div>
            </div>
            <div id="flat-gallery" class="cbp">
                <div class="cbp-item itemshadow">
                    <img src="{{ asset('frontEnd/images/1.PNG')}}" alt="">
                    <div class="overlay center-block whitecolor">
                        <a class="plus" data-fancybox="gallery" href="{{ asset('frontEnd/images/1.PNG')}}"></a>
                        <h4 class="top30">Elevator</h4>
                        <p>Modern Design</p>
                    </div>
                </div>
                <div class="cbp-item itemshadow">
                    <img src="{{ asset('frontEnd/images/2.PNG')}}" alt="">
                    <div class="overlay center-block whitecolor">
                        <a class="plus" data-fancybox="gallery" href="{{ asset('frontEnd/images/2.PNG')}}"></a>
                        <h4 class="top30">Wood Work</h4>
                        <p>Small Portfolio Detail Here</p>
                    </div>
                </div>
                <div class="cbp-item itemshadow">
                    <img src="{{ asset('frontEnd/images/pr3.jpg')}}" alt="">
                    <div class="overlay center-block whitecolor">
                        <a class="plus" data-fancybox="gallery" href="{{ asset('frontEnd/images/4.PNG')}}"></a>
                        <h4 class="top30">Wood Work</h4>
                        <p>Small Portfolio Detail Here</p>
                    </div>
                </div>
                <div class="cbp-item itemshadow">
                    <img src="{{ asset('frontEnd/images/5.PNG')}}" alt="">
                    <div class="overlay center-block whitecolor">
                        <a class="plus" data-fancybox="gallery" href="{{ asset('frontEnd/images/5.PNG')}}"></a>
                        <h4 class="top30">Wood Work</h4>
                        <p>Small Portfolio Detail Here</p>
                    </div>
                </div>
                <div class="cbp-item itemshadow">
                    <img src="{{ asset('frontEnd/images/6.PNG')}}" alt="">
                    <div class="overlay center-block whitecolor">
                        <a class="plus" data-fancybox="gallery" href="{{ asset('frontEnd/images/6.PNG')}}"></a>
                        <h4 class="top30">Wood Work</h4>
                        <p>Small Portfolio Detail Here</p>
                    </div>
                </div>
                <div class="cbp-item itemshadow">
                    <img src="{{ asset('frontEnd/images/7.PNG')}}" alt="">
                    <div class="overlay center-block whitecolor">
                        <a class="plus" data-fancybox="gallery" href="{{ asset('frontEnd/images/7.PNG')}}"></a>
                        <h4 class="top30">Wood Work</h4>
                        <p>Small Portfolio Detail Here</p>
                    </div>
                </div>
                <div class="cbp-item itemshadow">
                    <img src="{{ asset('frontEnd/images/pr1.jpg')}}" alt="">
                    <div class="overlay center-block whitecolor">
                        <a class="plus" data-fancybox="gallery" href="{{ asset('frontEnd/images/7.PNG')}}"></a>
                        <h4 class="top30">Wood Work</h4>
                        <p>Small Portfolio Detail Here</p>
                    </div>
                </div>
                <div class="cbp-item itemshadow">
                    <img src="{{ asset('frontEnd/images/pr2.jpg')}}" alt="">
                    <div class="overlay center-block whitecolor">
                        <a class="plus" data-fancybox="gallery" href="{{ asset('frontEnd/images/7.PNG')}}"></a>
                        <h4 class="top30">Wood Work</h4>
                        <p>Small Portfolio Detail Here</p>
                    </div>
                </div>
                <div class="cbp-item itemshadow">
                    <img src="{{ asset('frontEnd/images/pr5.jpg')}}" alt="">
                    <div class="overlay center-block whitecolor">
                        <a class="plus" data-fancybox="gallery" href="{{ asset('frontEnd/images/7.PNG')}}"></a>
                        <h4 class="top30">Wood Work</h4>
                        <p>Small Portfolio Detail Here</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--Gallery ends -->

    <!-- Counters -->
    <section id="funfacts" class="padding_top fact-iconic gradient_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 margin_bottom whitecolor text-md-start text-center wow fadeInLeft" data-wow-delay="300ms">
                    <h3 class="bottom25">Our many years of experience in numbers</h3>
                    <p class="title">We show you our professional achievements in numbers, which show the acquired skills and trust of many clients.</p>
                </div>
                <div class="col-md-7 col-sm-12 text-center">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 icon-counters whitecolor margin_bottom  wow fadeInRight" data-wow-delay="400ms">
                            <div class="img-icon bottom15">
                                <i class="fa fa-smile-o"></i>
                            </div>
                            <div class="counters">
                                <span class="count_nums" data-to="2500" data-speed="2500"> </span> <i class="fa fa-plus"></i>
                            </div>
                            <p class="title">Satisfied customers</p>
                        </div>
                        <div class="col-md-4 col-sm-4 icon-counters whitecolor margin_bottom wow fadeInRight" data-wow-delay="350ms">
                            <div class="img-icon bottom15">
                                <i class="fa fa-language"> </i>
                            </div>
                            <div class="counters">
                                <span class="count_nums" data-to="9500" data-speed="2500"> </span> <i class="fa fa-plus"></i>
                            </div>
                            <p class="title">Completed consultations</p>
                        </div>
                        <div class="col-md-4 col-sm-4 icon-counters whitecolor margin_bottom wow fadeInRight" data-wow-delay="300ms">
                            <div class="img-icon bottom15">
                                <i class="fa fa-desktop"></i>
                            </div>
                            <div class="counters">
                                <span class="count_nums" data-to="6000" data-speed="2500"> </span> <i class="fa fa-plus"></i>
                            </div>
                            <p class="title">Carried out training</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Counters ends-->

    <section id="our-pricings" class="padding pricing-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-sm-12 text-center">
                    <div style="color: black;" class="heading-title whitecolor wow fadeInUp" data-wow-delay="300ms">
                        <span style="color: black;">Choose The Best One</span>
                        <h2 class="bottom30">Our Packages</h2>
                        <p>Kami juga menyediakan pilihan paket untuk anda.</p>
                    </div>
                </div>
            </div>
            <div class="row centered-table">
                <div class="col-md-4 col-sm-12">
                    <div class="price-table top60 wow fadeIn" data-wow-delay="300ms">
                        <h3 class="bottom20 darkcolor">Slow Down Elevator</h3>
                        <ul class="top20">
                            <li><span>Konsultasi Gratis</span></li>
                            <li><span>Pemasangan Elevator</span></li>
                            <li><span>Diskon Pemasangan 10%</span></li>
                            <li><span>Perawatan selama 3 bulan</span></li>
                            <li><span>X</span></li>
                            <li><span>X</span></li>
                        </ul>
                        <div class="clearfix"></div>
                        <a href="javascript:void(0)" class="button btnprimary top50">Hubungi Kami</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="price-table active top60 wow fadeIn" data-wow-delay="350ms">
                        <h3 class="bottom20 darkcolor">Middle Elevator</h3>
                        <ul class="top20">
                            <li><span>Konsultasi Gratis</span></li>
                            <li><span>Pemasangan Elevator</span></li>
                            <li><span>Diskon Pemasangan 15%</span></li>
                            <li><span>Perawatan selama 6 bulan</span></li>
                            <li><span>VIP Customer Care 3 Bulan</span></li>
                            <li><span>Pelayanan Lain</span></li>
                        </ul>
                        <div class="clearfix"></div>
                        <a href="javascript:void(0)" class="button btnsecondary top50">Hubungi Kami </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="price-table top60 wow fadeInUp" data-wow-delay="400ms">
                        <h3 class="bottom20 darkcolor">Expert Plan</h3>
                        <ul class="top20">
                            <li><span>Konsultasi Gratis</span></li>
                            <li><span>Pemasangan Elevator</span></li>
                            <li><span>Diskon Pemasangan 25%</span></li>
                            <li><span>Perawatan selama 12 bulan</span></li>
                            <li><span>VIP Customer Care 6 Bulan</span></li>
                            <li><span>Pelayanan Lain</span></li>
                        </ul>
                        <div class="clearfix"></div>
                        <a href="javascript:void(0)" class="button btnprimary top50">Hubungi Kami </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Background Parallax -->
    <section id="video-parallax" class="video-parallax padding parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7">
                    <div class="heading-title whitecolor text-md-start text-center wow fadeIn" data-wow-delay="500ms">
                        <span >We have an excellent story</span>
                        <h2 class="fontregular">Watch Our Video</h2>
                        <a data-fancybox href="https://youtu.be/ecjSmq-5680?list=TLGGYHkkgSG1gGQxMDExMjAyMQ" class="button btnprimary fontmedium top20"><i class="fa fa-play"></i> &nbsp;Play Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Background Parallax-->

    <!-- Testimonials -->
    <section id="our-testimonial" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <div class="heading-title bottom30 wow fadeInUp" data-wow-delay="300ms">
                        <span>Testimonials</span>
                        <h2 class="darkcolor">What People Say</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div id="testimonial-slider" class="owl-carousel">
                        <div class="item">
                            <div class="testimonial-wrapp">
                                <span class="quoted"><i class="fa fa-quote-right"></i></span>
                                <div class="testimonial-text">
                                    <p class="bottom40">Donec semper euismod nisi quis feugiat. Nullam finibus metus eget orci volutpat porta. Morbi quis arcu vulputate, dignissim mi ac, varius magna.</p>
                                </div>
                                <div class="testimonial-photo"><img alt="" src="{{ asset('frontEnd/images/logo1.png')}}"></div>
                                <h4 class="darkcolor">David Raleway</h4>
                                <small class="defaultcolor">Businessman</small>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-wrapp">
                                <span class="quoted"><i class="fa fa-quote-right"></i></span>
                                <div class="testimonial-text">
                                    <p class="bottom40">Donec semper euismod nisi quis feugiat. Nullam finibus metus eget orci volutpat porta. Morbi quis arcu vulputate, dignissim mi ac, varius magna.</p>
                                </div>
                                <div class="testimonial-photo"><img alt="" src="{{ asset('frontEnd/images/logo3.png')}}"></div>
                                <h4 class="darkcolor">Sam Billings</h4>
                                <small class="defaultcolor">Businessman</small>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-wrapp">
                                <span class="quoted"><i class="fa fa-quote-right"></i></span>
                                <div class="testimonial-text">
                                    <p class="bottom40">Donec semper euismod nisi quis feugiat. Nullam finibus metus eget orci volutpat porta. Morbi quis arcu vulputate, dignissim mi ac, varius magna.</p>
                                </div>
                                <div class="testimonial-photo"><img alt="" src="{{ asset('frontEnd/images/kleeman.jpg')}}"></div>
                                <h4 class="darkcolor">Jatinder Shahg</h4>
                                <small class="defaultcolor">Businessman</small>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-wrapp">
                                <span class="quoted"><i class="fa fa-quote-right"></i></span>
                                <div class="testimonial-text">
                                    <p class="bottom40">Donec semper euismod nisi quis feugiat. Nullam finibus metus eget orci volutpat porta. Morbi quis arcu vulputate, dignissim mi ac, varius magna.</p>
                                </div>
                                <div class="testimonial-photo"><img alt="" src="{{ asset('frontEnd/images/shenxi.jpg')}}"></div>
                                <h4 class="darkcolor">David Zucker</h4>
                                <small class="defaultcolor">Businessman</small>
                            </div>
                        </div>
                        {{--               <div class="item">--}}
                        {{--                  <div class="testimonial-wrapp">--}}
                        {{--                     <span class="quoted"><i class="fa fa-quote-right"></i></span>--}}
                        {{--                     <div class="testimonial-text">--}}
                        {{--                        <p class="bottom40">Donec semper euismod nisi quis feugiat. Nullam finibus metus eget orci volutpat porta. Morbi quis arcu vulputate, dignissim mi ac, varius magna.</p>--}}
                        {{--                     </div>--}}
                        {{--                     <div class="testimonial-photo"><img alt="" src="{{ asset('frontEnd/images/testimonial-2.jpg')}}"></div>--}}
                        {{--                     <h4 class="darkcolor">Akten Jansen</h4>--}}
                        {{--                     <small class="defaultcolor">Businessman</small>--}}
                        {{--                  </div>--}}
                        {{--               </div>--}}
                        {{--               <div class="item">--}}
                        {{--                  <div class="testimonial-wrapp">--}}
                        {{--                     <span class="quoted"><i class="fa fa-quote-right"></i></span>--}}
                        {{--                     <div class="testimonial-text">--}}
                        {{--                        <p class="bottom40">Donec semper euismod nisi quis feugiat. Nullam finibus metus eget orci volutpat porta. Morbi quis arcu vulputate, dignissim mi ac, varius magna.</p>--}}
                        {{--                     </div>--}}
                        {{--                     <div class="testimonial-photo"><img alt="" src="{{ asset('frontEnd/images/testimonial-3.jpg')}}"></div>--}}
                        {{--                     <h4 class="darkcolor">Doe Raleway</h4>--}}
                        {{--                     <small class="defaultcolor">Businessman</small>--}}
                        {{--                  </div>--}}
                        {{--               </div>--}}
                        {{--               <div class="item">--}}
                        {{--                  <div class="testimonial-wrapp">--}}
                        {{--                     <span class="quoted"><i class="fa fa-quote-right"></i></span>--}}
                        {{--                     <div class="testimonial-text">--}}
                        {{--                        <p class="bottom40">Donec semper euismod nisi quis feugiat. Nullam finibus metus eget orci volutpat porta. Morbi quis arcu vulputate, dignissim mi ac, varius magna.</p>--}}
                        {{--                     </div>--}}
                        {{--                     <div class="testimonial-photo"><img alt="" src="{{ asset('frontEnd/images/testimonial-1.jpg')}}"></div>--}}
                        {{--                     <h4 class="darkcolor">Shamoun Raleway</h4>--}}
                        {{--                     <small class="defaultcolor">Businessman</small>--}}
                        {{--                  </div>--}}
                        {{--               </div>--}}
                        {{--               <div class="item">--}}
                        {{--                  <div class="testimonial-wrapp">--}}
                        {{--                     <span class="quoted"><i class="fa fa-quote-right"></i></span>--}}
                        {{--                     <div class="testimonial-text">--}}
                        {{--                        <p class="bottom40">Donec semper euismod nisi quis feugiat. Nullam finibus metus eget orci volutpat porta. Morbi quis arcu vulputate, dignissim mi ac, varius magna.</p>--}}
                        {{--                     </div>--}}
                        {{--                     <div class="testimonial-photo"><img alt="" src="{{ asset('frontEnd/images/testimonial-3.jpg')}}"></div>--}}
                        {{--                     <h4 class="darkcolor">Albugdadi Raleway</h4>--}}
                        {{--                     <small class="defaultcolor">Businessman</small>--}}
                        {{--                  </div>--}}
                        {{--               </div>--}}
                        {{--               <div class="item">--}}
                        {{--                  <div class="testimonial-wrapp">--}}
                        {{--                     <span class="quoted"><i class="fa fa-quote-right"></i></span>--}}
                        {{--                     <div class="testimonial-text">--}}
                        {{--                        <p class="bottom40">Donec semper euismod nisi quis feugiat. Nullam finibus metus eget orci volutpat porta. Morbi quis arcu vulputate, dignissim mi ac, varius magna.</p>--}}
                        {{--                     </div>--}}
                        {{--                     <div class="testimonial-photo"><img alt="" src="{{ asset('frontEnd/images/testimonial-3.jpg')}}"></div>--}}
                        {{--                     <h4 class="darkcolor">Albugdadi Raleway</h4>--}}
                        {{--                     <small class="defaultcolor">Businessman</small>--}}
                        {{--                  </div>--}}
                        {{--               </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonials Ends-->


    <!-- Partners -->
    <section id="logos" class="padding_bottom">
        <div class="container">
            <h3 class="invisible">hidden</h3>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div id="partners-slider" class="owl-carousel">
                        <div class="item">
                            <div class="logo-item"> <img alt="" src="{{ asset('frontEnd/images/1.PNG')}}"></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><img alt="" src="{{ asset('frontEnd/images/2.PNG')}}"></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><img alt="" src="{{ asset('frontEnd/images/3.PNG')}}"></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><img alt="" src="{{ asset('frontEnd/images/4.PNG')}}"></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><img alt="" src="{{ asset('frontEnd/images/5.png')}}"></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><img alt="" src="{{ asset('frontEnd/images6.png')}}"></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><img alt="" src="{{ asset('frontEnd/images/7.png')}}"></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><img alt="" src="{{ asset('frontEnd/images/8.png')}}"></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><img alt="" src="{{ asset('frontEnd/images/9.png')}}"></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><img alt="" src="{{ asset('frontEnd/images/10.png')}}"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Partners Ends-->


    <!-- Our Blogs -->
    <section id="our-blog" class="half-section bglight">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6 nopadding">
                    <div class="image hover-effect"><img src="{{ $latest->featured_image }}" alt="our blog" class="equalheight"></div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="split-box text-center center-block equalheight container-padding">
                        <div class="heading-title padding_half">
                            <span class="wow fadeIn" data-wow-delay="300ms">Read Our Latest News</span>
                            <h2 class="darkcolor bottom25 wow fadeIn" data-wow-delay="350ms">{{ $latest->title }}</h2>
                            <p class="heading_space wow fadeIn" data-wow-delay="400ms">{{ \Illuminate\Support\Str::limit($latest->summary, '255', ' (...)') }}</p>
                            <a href="blog.blade.php" class="button btnsecondary wow fadeInUp" data-wow-delay="500ms">Read Full Story</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Our Blogs Ends-->

@endsection
