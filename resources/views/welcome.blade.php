<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PT. Indorasmi Perkasa - Your Lift Home Solution</title>
    <link href="{{ asset('new_images/fav.png') }}" rel="icon">
    <link rel="stylesheet" href="{{ asset('frontEnd/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/css/style.css') }}">

</head>
<body data-bs-spy="scroll" data-bs-target="#xenav">

<!--PreLoader-->
<div class="loader">
    <div class="loader-inner">
        <div class="loader-blocks">
            <span class="block-1"></span>
            <span class="block-2"></span>
            <span class="block-3"></span>
            <span class="block-4"></span>
            <span class="block-5"></span>
            <span class="block-6"></span>
            <span class="block-7"></span>
            <span class="block-8"></span>
            <span class="block-9"></span>
            <span class="block-10"></span>
            <span class="block-11"></span>
            <span class="block-12"></span>
            <span class="block-13"></span>
            <span class="block-14"></span>
            <span class="block-15"></span>
            <span class="block-16"></span>
        </div>
    </div>
</div>
<!--PreLoader Ends-->


<!-- header -->
<header class="site-header">
    <nav class="navbar navbar-expand-lg fixed-bottom gradient_bg">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{ asset('frontEnd/images/logo.png')}}" alt="logo">   </a>
            <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#xenav">
                <span> </span>
                <span> </span>
                <span> </span>
            </button>
            <div class="collapse navbar-collapse" id="xenav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link pagescroll" href="#ourhome">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#aboutus">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#our-team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#portfolio-xe">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#our-pricings">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#our-testimonial">Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#our-blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#contactus">contact</a>
                    </li>
                </ul>
            </div>
        </div>

        <!--side menu open button-->
        <a href="javascript:void(0)" class="d-none d-lg-inline-block sidemenu_btn" id="sidemenu_toggle">
            <span></span> <span></span> <span></span>
        </a>
    </nav>

    <!-- side menu -->
    <div class="side-menu">
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav">
                <ul class="navbar-nav w-100">
                    <li class="nav-item active">
                        <a class="nav-link pagescroll" href="#ourhome">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#aboutus">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#our-team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#portfolio-xe">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#our-pricings">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#our-testimonial">Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#our-blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#contactus">contact</a>
                    </li>
                </ul>
            </nav>

            <ul class="social-icons-simple white top50 w-100">
                <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i> </a> </li>
                <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i> </a> </li>
                <li><a href="javascript:void(0)"><i class="fa fa-youtube"></i> </a> </li>
            </ul>
            <p class="whitecolor">&copy; 2021 . . . 2021 &copy;</p>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
    <!-- End side menu --PT. INDORASMI PERKASA>
 <!-- header -->

    <!--Ful Screen Section Video with caption-->
    <section class="full-screen parallax-video parallaxie center-block bg-video-container" id="ourhome">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-1"></div>
                <div class="col-md-8 col-sm-10">
                    <div class="center-item text-center video-content">
                        <img src="{{ asset('frontEnd/images/logo.png')}}" alt="logo" style="width: 300px" class="" data-wow-delay="500ms">

                        <h2 class="text-capitalize top50 bottom35  whitecolor">
                            {{--                     <span class="font-xlight block wow fadeIn" data-wow-delay="400ms">PT. INDORASMI PERKASA--}}
                            {{--                     </span><span class="block fontbold wow fadeIn" data-wow-delay="500ms">Your Home Lift Solution</span>--}}
                        </h2>
                        {{--                   <a href="#btn-feature" class="button btnwhite pagescroll wow fadeInUp" data-wow-delay="600ms">features</a>--}}
                    </div>
                </div>
                <div class="col-md-2 col-sm-1"></div>
            </div>
        </div>
        <video class="my-background-video jquery-background-video" loop autoplay muted>
            <source src=" {{ asset('new_images/web.webm') }}" type="video/webm">
        </video>
    </section>


    <!--half img section-->
    <section class="half-section" id="aboutus">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 nopadding">
                    <div class="image img-container">
                        <img alt="" src="{{ asset('frontEnd/images/f1.png')}}" class="equalheight">
                    </div>
                </div>
                <div class="col-lg-6 nopadding">
                    <div class="split-box text-center center-block container-padding equalheight" id="btn-feature">
                        <div class="heading-title padding">
                            <span class=" wow fadeIn" data-wow-delay="300ms">Layanan yang Kami Tawarkan</span>
                            <h2 class="darkcolor bottom20 wow fadeIn" data-wow-delay="350ms">Supplier Elevator</h2>
                            <p style="text-align: justify" class="heading_space wow fadeIn" data-wow-delay="400ms">
                                Kami adalah professional dari berbagai bidang yang berkumpul di ELEVA menjadi satu kesatuan perusahaan LIFT yang tangguh dan elegant.
                                Teknisi kami memiliki sertifikasi terkait dengan pemasangan Lift dan jam terbang yang banyak baik untuk pemasangan high rise building ataupun untuk home lift.
                                Kami menawarkan dua model Lift Rumah yang biasanya dipesan oleh seluruh customer kami.
                                Model pertama, Lift Rumah dengan bahan full stainless yang mana lift model ini tertutup dan tidak terlihat dari dalam dan luar oleh orang lain.
                                Kedua, model lift dengan bahan kaca tembus pandang.
                                Sehingga terlihat baik dari luar maupun dalam lift. Kaca yang dipakai sangat tebal dan kokoh, dengan jenis kaca tempered dan laminate 5+5.</p>
                            <a href="#portfolio-xe" class="button btnprimary pagescroll wow fadeInUp" data-wow-delay="500ms">Design Works</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="half-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 nopadding">
                    <div class="split-box text-center center-block container-padding equalheight">
                        <div class="heading-title padding">
                            <span class="wow fadeIn" data-wow-delay="300ms">Layanan yang Kami Tawarkan</span>
                            <h2 class="darkcolor bottom20 wow fadeIn" data-wow-delay="350ms">Perawatan Elevator</h2>
                            <p style="text-align: justify" class="heading_space wow fadeIn" data-wow-delay="400ms">
                                Mengingat elevator/ lift adalah alat transportasi angkut manusia atau barang yang unik,
                                maka pekerjaan perawatan pesawat lift bukan merupakan pekerjaan yang sederhana. Tidak perlu khawatir dengan elevator yang anda gunakan,
                                karena dengan tenaga kerja kami yang sudah terlatih dan tersertifikasi dapat merawat dan memperbaiki elevator anda. Lift kami adalah buatan Eropa dengan kualitas nomor satu di kelasnya. Support dengan berbagai macam situasi dan kondisi bangunan anda.
                            </p>
                            <a href="#our-team" class="button btnsecondary pagescroll wow fadeInUp" data-wow-delay="500ms">Team Kami</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 nopadding">
                    <div class="image img-container">
                        <img alt="" src="{{ asset('frontEnd/images/f2.png') }}" style="padding-right: 20px;height: 70%"  class="equalheight">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--half img section ends-->

    <!-- WOrk Process-->
    <section id="our-process" class="padding gradient_bg_default">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <div class="heading-title wow fadeInUp" data-wow-delay="300ms">
                        <h2 class="whitecolor">Proses <span class="fontregular">Pengerjaan</span> </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <ul class="process-wrapp">
                    <li class="whitecolor wow fadeIn" data-wow-delay="350ms">
                        <span class="pro-step bottom20">01</span>
                        <p class="fontbold bottom25">Konsep</p>
                        {{--               <p>Quisque tellus risus, adipisci viverra bibendum urna.</p>--}}
                    </li>
                    <li class="whitecolor wow fadeIn" data-wow-delay="400ms">
                        <span class="pro-step bottom20">02</span>
                        <p class="fontbold bottom25">Perencanaan</p>
                        {{--               <p>Quisque tellus risus, adipisci viverra bibendum urna.</p>--}}
                    </li>
                    <li class="whitecolor wow fadeIn" data-wow-delay="500ms">
                        <span class="pro-step bottom20">03</span>
                        <p class="fontbold bottom25">Pemilihan Desain</p>
                        {{--               <p>Quisque tellus risus, adipisci viverra bibendum urna.</p>--}}
                    </li>
                    <li class="whitecolor wow fadeIn" data-wow-delay="600ms">
                        <span class="pro-step bottom20">04</span>
                        <p class="fontbold bottom25">Pelaksanaan</p>
                        {{--               <p>Quisque tellus risus, adipisci viverra bibendum urna.</p>--}}
                    </li>
                    <li class="whitecolor wow fadeIn" data-wow-delay="700ms">
                        <span class="pro-step bottom20">05</span>
                        <p class="fontbold bottom25">Quality Check</p>
                        {{--               <p>Quisque tellus risus, adipisci viverra bibendum urna.</p>--}}
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
                        <span>Heroes Behind the Company</span>
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
                                <img src="{{ asset('storage/' . ($file_foto1[0] ?? ''))}}" alt="Admin" >
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
{{--                <div class="col-md-4 col-xs-12">--}}
{{--                    <div class="team-box top60 wow fadeIn" data-wow-delay="400ms">--}}
{{--                        <div class="image">--}}
{{--                            <img src="{{ asset('frontEnd/images/666.png') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="team-content gradient_bg_default whitecolor">--}}
{{--                            <h3>Maulana Firza Mahesa</h3>--}}
{{--                            <p class="bottom40">Direktur Marketing</p>--}}
{{--                            <div class="text-center">--}}
{{--                                <h3>"We give our best to satisfy people"</h3>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 col-xs-12">--}}
{{--                    <div class="team-box top60 wow fadeIn" data-wow-delay="350ms">--}}
{{--                        <div class="image">--}}
{{--                            <img src="{{ asset('frontEnd/images/55555.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="team-content gradient_bg whitecolor">--}}
{{--                            <h3>Adhie Kurnia</h3>--}}
{{--                            <p class="bottom40">Direktur Keuangan</p>--}}
{{--                            <div class="text-center">--}}
{{--                                <h3>"Teknisi kami selalu siap untuk anda"</h3>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
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
                        <span>Desain Portofolio</span>
                        <h2 class="darkcolor bottom15">Desain Elegant Hanya Untuk Anda</h2>
                        {{--               <p class="heading_space">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus. </p>--}}
                    </div>
                </div>
            </div>
            <div id="flat-gallery" class="cbp">
                <div class="cbp-item itemshadow">
                    <img src="{{ asset('new_images/prd1.jpg')}}" alt="" style="height:600px">
                    <div class="overlay center-block whitecolor">
                        <a class="plus" data-fancybox="gallery" href="{{ asset('new_images/prd1.jpg')}}"></a>
                        <h4 class="top30">Eleva Elevator Model 1</h4>
                        <p>Eleva Elevator Model 1</p>
                    </div>
                </div>
                <div class="cbp-item itemshadow">
                    <img src="{{ asset('new_images/prd2.jpg')}}" alt=""style="height:600px">
                    <div class="overlay center-block whitecolor">
                        <a class="plus" data-fancybox="gallery" href="{{ asset('new_images/prd2.jpg')}}"></a>
                        <h4 class="top30">Eleva Elevator Model 2</h4>
                        <p>Eleva Elevator Model 2</p>
                    </div>
                </div>
                <div class="cbp-item itemshadow">
                    <img src="{{ asset('new_images/prd3.jpg')}}" alt=""style="height:600px">
                    <div class="overlay center-block whitecolor">
                        <a class="plus" data-fancybox="gallery" href="{{ asset('new_images/prd3.jpg')}}"></a>
                        <h4 class="top30">Eleva Elevator Model 3</h4>
                        <p>Eleva Elevator Model 3</p>
                    </div>
                </div>
                <div class="cbp-item itemshadow">
                    <img src="{{ asset('new_images/prd4.jpg')}}" alt=""style="height:600px">
                    <div class="overlay center-block whitecolor">
                        <a class="plus" data-fancybox="gallery" href="{{ asset('new_images/prd4.jpg')}}"></a>
                        <h4 class="top30">Eleva Elevator Model 4</h4>
                        <p>Eleva Elevator Model 4</p>
                    </div>
                </div>
                <div class="cbp-item itemshadow">
                    <img src="{{ asset('new_images/prd5.jpg')}}" alt=""style="height:600px">
                    <div class="overlay center-block whitecolor">
                        <a class="plus" data-fancybox="gallery" href="{{ asset('new_images/prd5.jpg')}}"></a>
                        <h4 class="top30">Eleva Elevator Model 5</h4>
                        <p>Eleva Elevator Model 5</p>
                    </div>
                </div>
                <div class="cbp-item itemshadow">
                    <img src="{{ asset('new_images/prd6.jpg')}}" alt=""style="height:600px">
                    <div class="overlay center-block whitecolor">
                        <a class="plus" data-fancybox="gallery" href="{{ asset('new_images/prd6.jpg')}}"></a>
                        <h4 class="top30">Eleva Elevator Model 6</h4>
                        <p>Eleva Elevator Model 6</p>
                    </div>
                </div>
                <div class="cbp-item itemshadow">
                    <img src="{{ asset('new_images/prd7.jpg')}}" alt=""style="height:600px">
                    <div class="overlay center-block whitecolor">
                        <a class="plus" data-fancybox="gallery" href="{{ asset('new_images/prd7.jpg')}}"></a>
                        <h4 class="top30">Eleva Elevator Model 7</h4>
                        <p>Eleva Elevator Model 7</p>
                    </div>
                </div>
                <div class="cbp-item itemshadow">
                    <img src="{{ asset('new_images/prd8.jpg')}}" alt=""style="height:600px">
                    <div class="overlay center-block whitecolor">
                        <a class="plus" data-fancybox="gallery" href="{{ asset('new_images/prd8.jpg')}}"></a>
                        <h4 class="top30">Eleva Elevator Model 8</h4>
                        <p>Eleva Elevator Model 8</p>
                    </div>
                </div>
                <div class="cbp-item itemshadow">
                    <img src="{{ asset('new_images/prd9.jpg')}}" alt=""style="height:600px">
                    <div class="overlay center-block whitecolor">
                        <a class="plus" data-fancybox="gallery" href="{{ asset('new_images/prd9.jpg')}}"></a>
                        <h4 class="top30">Eleva Elevator Model 9</h4>
                        <p>Eleva Elevator Model 9</p>
                    </div>
                </div>
                <div class="cbp-item itemshadow">
                    <img src="{{ asset('new_images/prd10.jpg')}}" alt=""style="height:600px">
                    <div class="overlay center-block whitecolor">
                        <a class="plus" data-fancybox="gallery" href="{{ asset('new_images/prd10.jpg')}}"></a>
                        <h4 class="top30">Eleva Elevator Model 10</h4>
                        <p>Eleva Elevator Model 10</p>
                    </div>
                </div>
                <div class="cbp-item itemshadow">
                    <img src="{{ asset('new_images/prd11.jpg')}}" alt=""style="height:600px">
                    <div class="overlay center-block whitecolor">
                        <a class="plus" data-fancybox="gallery" href="{{ asset('new_images/prd11.jpg')}}"></a>
                        <h4 class="top30">Eleva Elevator Model 11</h4>
                        <p>Eleva Elevator Model 11</p>
                    </div>
                </div>
                <div class="cbp-item itemshadow">
                    <img src="{{ asset('new_images/prd12.jpg')}}" alt=""style="height:600px">
                    <div class="overlay center-block whitecolor">
                        <a class="plus" data-fancybox="gallery" href="{{ asset('new_images/prd12.jpg')}}"></a>
                        <h4 class="top30">Eleva Elevator Model 12</h4>
                        <p>Eleva Elevator Model 12</p>
                    </div>
                </div>
                <div class="cbp-item itemshadow">
                    <img src="{{ asset('new_images/prd13.jpg')}}" alt=""style="height:600px">
                    <div class="overlay center-block whitecolor">
                        <a class="plus" data-fancybox="gallery" href="{{ asset('new_images/prd13.jpg')}}"></a>
                        <h4 class="top30">Eleva Elevator Model 13</h4>
                        <p>Eleva Elevator Model 13</p>
                    </div>
                </div>
    </section>
    <!--Gallery ends -->

    <!-- Counters -->
    <section id="funfacts" class="padding_top fact-iconic gradient_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 margin_bottom whitecolor text-md-start text-center wow fadeInLeft" data-wow-delay="300ms">
                    <h3 class="bottom25">Pengalaman kami selama bertahun-tahun</h3>
                    <p class="title">Kami menunjukkan kepada Anda pencapaian profesional kami, keterampilan, kepuasan, dan kepercayaan yang diperoleh dari banyak klien dan kolega.</p>
                </div>
                <div class="col-md-7 col-sm-12 text-center">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 icon-counters whitecolor margin_bottom  wow fadeInRight" data-wow-delay="400ms">
                            <div class="img-icon bottom15">
                                <i class="fa fa-smile-o"></i>
                            </div>
                            <div class="counters">
                                <span class="count_nums" data-to="100" data-speed="100"> </span> <i class="fa fa-plus"></i>
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
                        <a href="#contactus" class="button btnprimary top50">Hubungi Kami</a>
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
                        <a href="#contactus" class="button btnsecondary top50">Hubungi Kami </a>
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
                        <a href="#contactus" class="button btnprimary top50">Hubungi Kami </a>
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
                        <span >Ini Cerita Kami </span>
                        <h2 class="fontregular">Lihat Video </h2>
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
                        <div class="item">
                            <div class="testimonial-wrapp">
                                <span class="quoted"><i class="fa fa-quote-right"></i></span>
                                <div class="testimonial-text">
                                    <p class="bottom40">Liftnya keren! Desain finishing beraneka ragam. Bahkan tanpa ruang mesin jadi ga perlu ribet-ribet lagi buat memakan ruangan terlalu banyak. Sangat memuaskan!</p>
                                </div>
                                <div class="testimonial-photo"><img alt="" src="{{ asset('frontEnd/images/t1.jpg') }}"></div>
                                <h4 style="margin-top: 10px;" class="darkcolor">David Raleway</h4>
                                <small class="defaultcolor">Pro Player</small>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-wrapp">
                                <span class="quoted"><i class="fa fa-quote-right"></i></span>
                                <div class="testimonial-text">
                                    <p class="bottom40">Lift & escalator teknologi canggih dengan harga terbaik di Indonesia. Layanan purna jual yang memadai & terpercaya. Responsif, cekatan, dan profesional.</p>
                                </div>
                                <div class="testimonial-photo"><img alt="" src="{{ asset('frontEnd/images/t2.jpg') }}"></div>
                                <h4 style="margin-top: 10px;" class="darkcolor">Sam Billings</h4>
                                <small class="defaultcolor">CEO Ultra Corp</small>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-wrapp">
                                <span class="quoted"><i class="fa fa-quote-right"></i></span>
                                <div class="testimonial-text">
                                    <p class="bottom40">Pengerjaan yang sangat cepat dan tepat. Kualitas terjamin.begitu juga dengan kinerja nya. Ramah dan bertanggung jawab. Hemat energi pula. Saya paling suka desainnya.</p>
                                </div>
                                <div class="testimonial-photo"><img alt="" src="{{ asset('frontEnd/images/t6.jpg') }}"></div>
                                <h4 style="margin-top: 10px;" class="darkcolor">Jessica Wang</h4>
                                <small class="defaultcolor">Designer</small>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-wrapp">
                                <span class="quoted"><i class="fa fa-quote-right"></i></span>
                                <div class="testimonial-text">
                                    <p class="bottom40">Teknisi bersertifikat, pelayanan ramah, banyak pilihan desain dan banyak yang ga bisa saya utarakan. Sangat membantu, karena ketika lelah tidak usah naik tangga</p>
                                </div>
                                <div class="testimonial-photo"><img alt="" src="{{ asset('frontEnd/images/t4.jpg') }}"></div>
                                <h4 style="margin-top: 10px;" class="darkcolor">Cathrine</h4>
                                <small class="defaultcolor">Businesswoman</small>
                            </div>
                        </div>
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
                        <div class="item"style="margin-top: 20px">
                            <div class="logo-item"> <img alt="" src="{{ asset('new_images/c1.png')}}"></div>
                        </div>
                        <div class="item"style="margin-top: 20px">
                            <div class="logo-item"><img alt="" src="{{ asset('new_images/c2.png')}}"></div>
                        </div>
                        <div class="item"style="margin-top: 20px">
                            <div class="logo-item"><img alt="" src="{{ asset('new_images/c3.png')}}"></div>
                        </div>
                        <div class="item"style="margin-top: 20px">
                            <div class="logo-item"><img alt="" src="{{ asset('new_images/c4.png')}}"></div>
                        </div>
                        <div class="item"style="margin-top: 20px">
                            <div class="logo-item"><img alt="" src="{{ asset('new_images/c5.png')}}"></div>
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
                    <div class="image hover-effect"><img src="{{ asset('new_images/blog1.jpg')}}" alt="our blog" class="equalheight"></div>
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


    <!-- Contact US -->
    <section id="contactus" class="padding_top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="heading-title heading_space wow fadeInUp" data-wow-delay="300ms">
                        <span>Hubungi Kami </span>
                        <h3 class="darkcolor"> PT. INDORASMI PERKASA</h3>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 margin_bottom wow fadeInUp" data-wow-delay="350ms">
                    <p style="text-align: justify" >Kami adalah professional dari berbagai bidang yang berkumpul di ELEVA menjadi satu kesatuan perusahaan LIFT yang tangguh dan elegant. Teknisi kami memiliki sertifikasi terkait dengan pemasangan Lift dan jam terbang yang banyak baik untuk pemasangan high rise building ataupun untuk home lift.
                        Sistem keamanan lift yang aman, Desain yang Elegant, Harga yang kompetitif, dan Pelayanan yang memuaskan adalah motto perusahaan kami.
                        Lift kami adalah buatan Eropa dengan kualitas nomor satu di kelasnya. Support dengan berbagai macam situasi dan kondisi bangunan anda.</p>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 our-address top40">
                            <h5 class="bottom25">Alamat Kami</h5>
                            <p class="bottom15">Gd Wisma Laena R317, Jl. KH. Abdullah Syafei No.7, RT.6/RW.2, Manggarai Sel., Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12860 </p>
                        </div>
                        <div class="col-md-6 col-sm-6 our-address top40">
                            <h5 class="bottom25">Whatsapp Kami</h5>
                            <p class="bottom15">Whatsapp :087811781180 <span class="block">
                  </span> </p>
                        </div>
                        <div class="col-md-6 col-sm-6 our-address top40">
                            <h5 class="bottom25">Email</h5>
                            <p class="bottom15">Email Utama : eleva.elevator@gmail.com  </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 margin_bottom">
                    <form class="getin_form wow fadeInUp" data-wow-delay="400ms" onsubmit="return false;">
                        <div class="row">

                            <div class="col-sm-12" id="result"></div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group bottom35">
                                    <input class="form-control" type="text" placeholder="First Name:" required id="first_name" name="first_name">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group bottom35">
                                    <input class="form-control" type="text" placeholder="Last Name:" required id="last_name" name="last_name">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group bottom35">
                                    <input class="form-control" type="email" placeholder="Email:" required id="email" name="email">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group bottom35">
                                    <input class="form-control" type="tel" placeholder="Phone:" id="phone" name="phone">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <textarea class="form-control" placeholder="Message" id="message" name="message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="button btnprimary" id="submit_btn">submit request</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.306952197492!2d106.84752771471683!3d-6.22319659549515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f38ee5d21441%3A0x44b3ece8d15487ea!2sRT.6%2FRW.2%2C%20South%20Manggarai%2C%20Tebet%2C%20South%20Jakarta%20City%2C%20Jakarta!5e0!3m2!1sen!2sid!4v1636822551297!5m2!1sen!2sid"width="800" height="600"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
    <!--Contact US Ends-->

    <!--Site Footer Here-->
    <footer id="site-footer" class="padding_half">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <ul class="social-icons bottom25 wow fadeInUp" data-wow-delay="300ms">
                        <li><a href="https://m.facebook.com/elevaindorasmi"><i class="fa fa-facebook"></i> </a> </li>
                        <li><a href="https://www.youtube.com/channel/UCHaIRS-m4-b1qy8cnstXTAQ/featured"><i class="fa fa-youtube"></i> </a> </li>
                        <li><a href="https://www.instagram.com/liftrumah.id/"><i class="fa fa-instagram"></i> </a> </li>
                        <li><a href="mailto:eleva.elevator@gmail.com"><i class="fa fa-envelope-o"></i> </a> </li>
                    </ul>
                    <p class="copyrights wow fadeInUp" data-wow-delay="350ms"> &copy; copyright eleva.id bersama RiseTech &copy;</p>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer ends-->


    <!-- jQuery first, then Popper')}}, then Bootstrap JS -->
    <script src="{{ asset('frontEnd/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('frontEnd/js/jquery-3.6.0.min.js')}}"></script>

    <!--Bootstrap Core-->
    <script src="{{ asset('frontEnd/js/popper.min.js')}}"></script>


    <!--to view items on reach-->
    <script src="{{ asset('frontEnd/js/jquery.appear.js')}}"></script>

    <!--Equal-Heights-->
    <script src="{{ asset('frontEnd/js/jquery.matchHeight-min.js')}}"></script>

    <!--Owl Slider-->
    <script src="{{ asset('frontEnd/js/owl.carousel.min.js')}}"></script>

    <!--number counters-->
    <script src="{{ asset('frontEnd/js/jquery-countTo.js')}}"></script>

    <!--Parallax Background-->
    <script src="{{ asset('frontEnd/js/parallaxie.js')}}"></script>

    <!--Cubefolio Gallery-->
    <script src="{{ asset('frontEnd/js/jquery.cubeportfolio.min.js')}}"></script>

    <!--FancyBox popup-->
    <script src="{{ asset('frontEnd/js/jquery.fancybox.min.js')}}"></script>

    <!-- Video Background-->
    <script src="{{ asset('frontEnd/js/jquery.background-video.js')}}"></script>

    <!--TypeWriter-->
    <script src="{{ asset('frontEnd/js/typewriter.js')}}"></script>

    <!--Particles-->
    <script src="{{ asset('frontEnd/js/particles.min.js')}}"></script>

    <!--WOw animations-->
    <script src="{{ asset('frontEnd/js/wow.min.js')}}"></script>

    <!--Revolution SLider-->
    <script src="{{ asset('frontEnd/js/revolution/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{ asset('frontEnd/js/revolution/jquery.themepunch.revolution.min.js')}}"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{ asset('frontEnd/js/revolution/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{ asset('frontEnd/js/revolution/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{ asset('frontEnd/js/revolution/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{ asset('frontEnd/js/revolution/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{ asset('frontEnd/js/revolution/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{ asset('frontEnd/js/revolution/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{ asset('frontEnd/js/revolution/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{ asset('frontEnd/js/revolution/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{ asset('frontEnd/js/revolution/extensions/revolution.extension.video.min.js')}}"></script>
    <script>
        (function () {
            var options = {
                whatsapp: "+6287811781180", // WhatsApp number
                call_to_action: "Message us", // Call to action
                position: "right", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>

    <!--Google Map API-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJnKEvlwpyjXfS_h-J1Cne2fPMqeb44Mk"></script>
    <script src="{{ asset('frontEnd/js/functions.js')}}"></script>
</body>
</html>
