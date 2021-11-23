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
{{--                        <img src="{{ asset('frontEnd/images/logo.png')}}" alt="logo" style="width: 300px" class="" data-wow-delay="500ms">--}}

                        {{--                        <h2 class="text-capitalize top50 bottom35  whitecolor">--}}
{{--                     <span class="font-xlight block wow fadeIn" data-wow-delay="400ms">{{ $video->description }}--}}
{{--                     </span><span class="block fontbold wow fadeIn" data-wow-delay="500ms">{{ $video->descriptionDua }}</span>--}}
{{--                        </h2>--}}
{{--                        <a href="#btn-feature" class="button btnwhite pagescroll wow fadeInUp" data-wow-delay="600ms">features</a>--}}
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
                                <img alt="" src="{{ asset('images_site/'.$f->sectionImage)}}" class="equalheight" width="300" height="350">
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
                        <h2 class="whitecolor">Proses <span class="fontregular">Kerja Kami</span> </h2>
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
{{--                        <span>Heros Behind the Company</span>--}}
                        <h2 class="darkcolor bottom20">Team Kami</h2>
                        {{--               <p class="bottom10">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus. </p>--}}
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($team as $teams)
                    <div class="col-md-4 col-xs-12">
                        <div class="team-box top60 wow fadeIn" data-wow-delay="350ms">
                            <div class="image">
                                <img src="{{ asset('images_site/'.$teams->image)}}" alt="Admin" width="400"height="400">
                            </div>
                            <div class="team-content gradient_bg whitecolor">
                                <h3>{{$teams->nama_team}}</h3>
                                <p class="bottom40">{{$teams->jobdes}} - {{$teams->perusahaan}}</p>
                                <div class="text-center">
                                    <h3>{{$teams->deskripsi}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
{{--                        <span>Portfolio Designs</span>--}}
                        <h2 class="darkcolor bottom10">Pemasangan Kami</h2>
                        {{--               <p class="heading_space">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus. </p>--}}
                    </div>
                </div>
            </div>
            <div id="flat-gallery" class="cbp">
                <livewire:product/>
            </div>
            <div class="text-center">
                <a href="javascript:void(0)" id="load-more" class="btn btn-outline-primary btn-lg">Load More</a>
            </div>
        </div>
    </section>
    <!--Gallery ends -->

    <!-- Counters -->
    <section id="funfacts" class="padding_top fact-iconic gradient_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 margin_bottom whitecolor text-md-start text-center wow fadeInLeft" data-wow-delay="300ms">
                    <h3 class="bottom25">Pengalaman kami</h3>
                    <p class="title">Kami menunjukkan kepada Anda pencapaian profesional kami, keterampilan, kepuasan, dan kepercayaan yang diperoleh dari banyak klien dan kolega.</p>
                </div>
                <div class="col-md-7 col-sm-12 text-center">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 icon-counters whitecolor margin_bottom  wow fadeInRight" data-wow-delay="400ms">
                            <div class="img-icon bottom15">
                                <i class="fa fa-smile-o"></i>
                            </div>
                            <div class="counters">
                                <span class="count_nums" data-to="50" data-speed="100"> </span> <i class="fa fa-plus"></i>
                            </div>
                            <p class="title">Pelanggan Terpuaskan</p>
                        </div>
                        <div class="col-md-4 col-sm-4 icon-counters whitecolor margin_bottom wow fadeInRight" data-wow-delay="350ms">
                            <div class="img-icon bottom15">
                                <i class="fa fa-language"> </i>
                            </div>
                            <div class="counters">
                                <span class="count_nums" data-to="100" data-speed="100"> </span> <i class="fa fa-plus"></i>
                            </div>
                            <p class="title">Konsultasi Selesai</p>
                        </div>
                        <div class="col-md-4 col-sm-4 icon-counters whitecolor margin_bottom wow fadeInRight" data-wow-delay="300ms">
                            <div class="img-icon bottom15">
                                <i class="fa fa-desktop"></i>
                            </div>
                            <div class="counters">
                                <span class="count_nums" data-to="100" data-speed="100"> </span> <i class="fa fa-plus"></i>
                            </div>
                            <p class="title">Kegiatan Pelatihan</p>
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
                        <span style="color: black;">Pilih Yang Terbaik</span>
                        <h2 class="bottom30">Paket Kami</h2>
                        <p>Kami juga menyediakan pilihan paket untuk anda.</p>
                    </div>
                </div>
            </div>
            <div class="row centered-table">

                @forelse($package as $packages)
                    <div class="col-md-4 col-sm-12">
                        <div class="price-table top60 wow fadeIn" data-wow-delay="300ms">
                            <h3 class="bottom20 darkcolor">{{$packages->judul}}</h3>
                            <ul class="top20">
                                @foreach($packages->package_bodies as $data)
                                    <li><span>{{$data->content}}</span></li>

                                @endforeach
                            </ul>
                            <div class="clearfix"></div>
                            <a href="#contactus" class="button btnprimary top50">Hubungi Kami</a>
                        </div>
                    </div>
                @empty
                    <div class="text-center">
                        <h3>Pricing belum di tambahkan</h3>
                    </div>
                @endforelse

            </div>
        </div>
    </section>

    <!-- Background Parallax -->
    <section id="video-parallax" class="video-parallax padding parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7">
                    <div class="heading-title whitecolor text-md-start text-center wow fadeIn" data-wow-delay="500ms">
{{--                        <span >Cerita Kami</span>--}}
                        <h2 class="fontregular">Tonton Video Kami</h2>
                        <a data-fancybox href="https://youtu.be/ecjSmq-5680?list=TLGGYHkkgSG1gGQxNjExMjAyMQ&t=10" class="button btnprimary fontmedium top20"><i class="fa fa-play"></i> &nbsp;Play Now</a>
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
                        <h2 class="darkcolor">Apa yang mereka katakan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div id="testimonial-slider" class="owl-carousel">
                        @forelse($testi as $tes)
                            <div class="item">
                                <div class="testimonial-wrapp">
                                    <span class="quoted"><i class="fa fa-quote-right"></i></span>
                                    <div class="testimonial-text">
                                        <p class="bottom40">{{$tes->testimony}}</p>
                                    </div>
                                    <div class="testimonial-photo"><img alt="" src="{{ asset('images_site/'.$tes->photo)}}" height="100" width="100"></div>
                                    <h4 style="margin-top: 10px;" class="darkcolor">{{$tes->name}}</h4>
                                    <small class="defaultcolor">{{$tes->occupation}}</small>
                                </div>
                            </div>
                        @empty
                            <div class="text-center">
                                <h3>Testimonial belum di tambahkan</h3>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonials Ends-->

    <section id="logos" class="padding_bottom">
        <div class="container">
            <h3 class="invisible">hidden</h3>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div id="partners-slider" class="owl-carousel">
                        @foreach($client as $cl)
                        <div class="item" style="margin-top: 20px">
                                                    <div class="logo-item"> <img alt="" src="{{ asset('images_site/'.$cl->image)}}"></div>
                                                </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <<!-- Partners -->
{{--    <section id="logos" class="padding_bottom">--}}
{{--        <div class="container">--}}
{{--            <h3 class="invisible">hidden</h3>--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12 col-sm-12">--}}
{{--                    <div id="partners-slider" class="owl-carousel">--}}
{{--                        @foreach($client as $cl)--}}
{{--                        <div class="item" style="margin-top: 20px">--}}
{{--                            <div class="logo-item"> <img alt="" src="{{ asset('images_site/'.$cl->image)}}"></div>--}}
{{--                        </div>--}}
{{--                        @endforeach--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!--Partners Ends-->


    <!-- Our Blogs -->
    <section id="our-blog" class="half-section bglight">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6 nopadding">
                    <div class="image hover-effect"><img src="{{ asset('new_images/lift1.jpg')}}" alt="our blog" class="equalheight" height="500" width="400"></div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="split-box text-center center-block equalheight container-padding">
                        <div class="heading-title padding_half">
                            <span class="wow fadeIn" data-wow-delay="300ms">Berita Terbaru</span>
                            <h2 class="darkcolor bottom25 wow fadeIn" data-wow-delay="350ms">Cerita tentang perjalanan kami</h2>
                            <p class="heading_space wow fadeIn" data-wow-delay="400ms">Home Lift merupakan istilah yang saya baru saja dengar. Selama ini kita pasti tahu ya yang namanya lift. Dimana-mana ada. Di setiap gedung, kalau lebih dari tiga lantai pasti pakai lift atau elevator. Mungkin tak ada mahluk perkotaan yang belum pernah merasakan barang ini
                                Namun demikian, yang baru saja kita tahu, adalah home lift. Lift untuk “rumahan”. Berbeda dengan lift pada umumnya, lift rumahan ini menawarkan sensasi dan kenyamanan yang berbeda, sekaligus inovasi yang cukup wow.</p>
                            <a href="{{route('lp')}}" class="button btnsecondary wow fadeInUp" data-wow-delay="500ms">Baca Lengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Our Blogs Ends-->

@endsection
