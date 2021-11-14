<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>XeOne</title>
<link href="images/favicon')}}" rel="icon">
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
             <img src="{{ asset('frontEnd/images/logo.png')}}" alt="logo"> </a>
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
{{--               <li class="nav-item">--}}
{{--                  <a class="nav-link pagescroll" href="#our-blog">Blog</a>--}}
{{--               </li>--}}
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
            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i> </a> </li>
         </ul>
         <p class="whitecolor">&copy; 2018 XeOne. Made With Love by themesindustry</p>
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
                  <h2 class="text-capitalize top50 bottom35  whitecolor">
                     <span class="font-xlight block wow fadeIn" data-wow-delay="400ms">PT. INDORASMI PERKASA
                     </span><span class="block fontbold wow fadeIn" data-wow-delay="500ms">Lift With Care</span>
                  </h2>
                   <a href="#btn-feature" class="button btnwhite pagescroll wow fadeInUp" data-wow-delay="600ms">features</a>
               </div>
         </div>
         <div class="col-md-2 col-sm-1"></div>
      </div>
   </div>
   <video class="my-background-video jquery-background-video" loop autoplay muted poster="{{ asset('frontEnd/video/thumb-slide.jpg')}}">
		<source src=" {{ asset('frontEnd/images/logo-transparent')}}') }}" type="video/mp4">
		<source src="{{ asset('frontEnd/images/logo-transparent')}}') }}" type="video/webm">
		<source src=" {{ asset('frontEnd/video/vid.webm') }}" type="video/ogg">
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
               <p class="heading_space wow fadeIn" data-wow-delay="400ms">Kami menawarkan dua model Lift Rumah yang biasanya dipesan oleh seluruh customer kami. Model pertama, Lift Rumah dengan bahan full stainless yang mana lift model ini tertutup dan tidak terlihat dari dalam dan luar oleh orang lain. Kedua, model lift dengan bahan kaca tembus pandang. Sehingga terlihat baik dari luar maupun dalam lift. Kaca yang dipakai sangat tebal dan kokoh, dengan jenis kaca tempered dan laminate 5+5.</p>
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
               <span class="wow fadeIn" data-wow-delay="300ms">Services We Offer</span>
               <h2 class="darkcolor bottom20 wow fadeIn" data-wow-delay="350ms">Perawatan Elevator</h2>
               <p class="heading_space wow fadeIn" data-wow-delay="400ms">Pemeliharaan lift diperlukan karena selain menjaga kebersihan, juga untuk menjaga fungsional nya lift tersebut. Berikut merupakan beberapa bagian lift yang perlu pemeliharaan.</p>
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
               <h2 class="whitecolor">Work <span class="fontregular">Process</span> </h2>
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

<!-- Mobile Apps -->
{{--<section id="our-apps" class="padding">--}}
{{--   <div class="container">--}}
{{--      <div class="row">--}}
{{--         <div class="col-md-12 col-sm-12 text-center">--}}
{{--            <div class="heading-title wow fadeInUp" data-wow-delay="300ms">--}}
{{--               <span>Yes We Provide Mobile Apps</span>--}}
{{--               <h2 class="darkcolor heading_space">Mobile Applications</h2>--}}
{{--            </div>--}}
{{--         </div>--}}
{{--      </div>--}}
{{--      <div class="row" id="app-feature">--}}
{{--         <div class="col-lg-4 col-md-4 col-sm-12">--}}
{{--            <div class="content-left clearfix">--}}
{{--               <div class="feature-item left top30 bottom30 wow fadeInUp" data-wow-delay="300ms">--}}
{{--                  <span class="icon"><i class="fa fa-mobile-phone"></i></span>--}}
{{--                  <div class="text">--}}
{{--                     <h4>Responsive Design</h4>--}}
{{--                     <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet</p>--}}
{{--                  </div>--}}
{{--               </div>--}}
{{--               <div class="feature-item left top30 bottom30 wow fadeInUp" data-wow-delay="350ms">--}}
{{--                  <span class="icon"><i class="fa fa-cog"></i></span>--}}
{{--                  <div class="text">--}}
{{--                     <h4>Amazing Theme Options</h4>--}}
{{--                     <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet</p>--}}
{{--                  </div>--}}
{{--               </div>--}}
{{--               <div class="feature-item left top30 bottom30 wow fadeInUp" data-wow-delay="400ms">--}}
{{--                  <span class="icon"><i class="fa fa-edit"></i></span>--}}
{{--                  <div class="text">--}}
{{--                     <h4>Easy to Customize</h4>--}}
{{--                     <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet</p>--}}
{{--                  </div>--}}
{{--               </div>--}}
{{--            </div>--}}
{{--         </div>--}}
{{--         <div class="col-lg-4 col-md-4 col-sm-12">--}}
{{--            <div class="image feature-item text-center wow fadeIn" data-wow-delay="500ms">--}}
{{--               <img src="{{ asset('frontEnd/images/responsive.png')}}" alt="">--}}
{{--            </div>--}}
{{--         </div>--}}
{{--         <div class="col-lg-4 col-md-4 col-sm-12">--}}
{{--            <div class="content-right clearfix">--}}
{{--               <div class="feature-item right top30 bottom30 wow fadeInUp" data-wow-delay="300ms">--}}
{{--                  <span class="icon"><i class="fa fa-code"></i></span>--}}
{{--                  <div class="text">--}}
{{--                     <h4>Powerful BackEnd</h4>--}}
{{--                     <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet</p>--}}
{{--                  </div>--}}
{{--               </div>--}}
{{--               <div class="feature-item right top30 bottom30 wow fadeInUp" data-wow-delay="350ms">--}}
{{--                  <span class="icon"><i class="fa fa-folder-o"></i></span>--}}
{{--                  <div class="text">--}}
{{--                     <h4>Well Documented</h4>--}}
{{--                     <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet</p>--}}
{{--                  </div>--}}
{{--               </div>--}}
{{--               <div class="feature-item right top30 bottom30 wow fadeInUp" data-wow-delay="400ms">--}}
{{--                  <span class="icon"><i class="fa fa-support"></i></span>--}}
{{--                  <div class="text">--}}
{{--                     <h4>24/7 Support</h4>--}}
{{--                     <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet</p>--}}
{{--                  </div>--}}
{{--               </div>--}}
{{--            </div>--}}
{{--         </div>--}}
{{--      </div>--}}
{{--   </div>--}}
{{--</section>--}}
<!--Mobile Apps ends-->

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

<!-- Pricing Tables -->
{{--<section id="our-pricings" class="padding pricing-bg">--}}
{{--   <div class="container">--}}
{{--      <div class="row">--}}
{{--         <div class="col-md-8 offset-md-2 col-sm-12 text-center">--}}
{{--            <div class="heading-title whitecolor wow fadeInUp" data-wow-delay="300ms">--}}
{{--               <span>Choose The Best One</span>--}}
{{--               <h2 class="bottom30">About Company</h2>--}}
{{--               <p>Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. </p>--}}
{{--            </div>--}}
{{--         </div>--}}
{{--      </div>--}}
{{--      <div class="row centered-table">--}}
{{--         <div class="col-md-6 col-sm-12">--}}
{{--            <div class="price-table top60 wow fadeIn" data-wow-delay="300ms">--}}
{{--               <h3 class="bottom20 darkcolor">Visi Perusahaan</h3>--}}
{{--               <ul class="top20">--}}
{{--                  <li><span>LIFT RUMAH PALING EKONOMIS</span></li>--}}
{{--                  <li><span> HIGH QUALITY PRODUCTS</span></li>--}}
{{--                  <li><span>SERVICES WITH 3 YEARS OF WARRANTY</span></li>--}}
{{--                  <li><span>TERBAIK DI KELASNYA</span></li>--}}
{{--               </ul>--}}
{{--               <div class="clearfix"></div>--}}
{{--               <div class="ammount top50">--}}
{{--                  <h2 class="defaultcolor"><i class="fa fa-dollar"></i> 9.99</h2>--}}
{{--               </div>--}}
{{--               <a href="javascript:void(0)" class="button btnprimary top50">Get Started </a>--}}
{{--            </div>--}}
{{--         </div>--}}
{{--         <div class="col-md-6 col-sm-12">--}}
{{--            <div class="price-table active top60 wow fadeIn" data-wow-delay="350ms">--}}
{{--                <h3 class="bottom20 darkcolor">Misi Perusahaan</h3>--}}
{{--                <ul class="top20">--}}
{{--                    <li><span>LIFT RUMAH PALING EKONOMIS</span></li>--}}
{{--                    <li><span> HIGH QUALITY PRODUCTS</span></li>--}}
{{--                    <li><span>SERVICES WITH 3 YEARS OF WARRANTY</span></li>--}}
{{--                    <li><span>TERBAIK DI KELASNYA</span></li>--}}
{{--                </ul>--}}
{{--               </ul>--}}
{{--               <div class="clearfix"></div>--}}
{{--               <div class="ammount top50">--}}
{{--                  <h2 class="defaultcolor"><i class="fa fa-dollar"></i> 29.99</h2>--}}
{{--               </div>--}}
{{--               <a href="javascript:void(0)" class="button btnsecondary top50">Get Started </a>--}}
{{--            </div>--}}
{{--         </div>--}}
{{--         <div class="col-md-4 col-sm-12">--}}
{{--            <div class="price-table top60 wow fadeInUp" data-wow-delay="400ms">--}}
{{--               <h3 class="bottom20 darkcolor">Expert Plan</h3>--}}
{{--               <ul class="top20">--}}
{{--                  <li><span>Designing a small brand</span></li>--}}
{{--                  <li><span>Redesign the company logo</span></li>--}}
{{--                  <li><span>New visual design of the website</span></li>--}}
{{--                  <li><span>Deploying a website</span></li>--}}
{{--                  <li><span>Studio and product photography</span></li>--}}
{{--               </ul>--}}
{{--               <div class="clearfix"></div>--}}
{{--               <div class="ammount top50">--}}
{{--                  <h2 class="defaultcolor"><i class="fa fa-dollar"></i> 99.99 </h2>--}}
{{--               </div>--}}
{{--               <a href="javascript:void(0)" class="button btnprimary top50">Get Started </a>--}}
{{--            </div>--}}
{{--         </div>--}}
{{--      </div>--}}
{{--   </div>--}}
{{--</section>--}}
<!--Pricing Tables ends-->

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
{{--<section id="our-blog" class="half-section bglight">--}}
{{--   <div class="container-fluid">--}}
{{--      <div class="row">--}}
{{--         <div class="col-md-6 col-sm-6 nopadding">--}}
{{--            <div class="image hover-effect"><img src="{{ asset('frontEnd/images/split-blog.jpg')}}" alt="our blog" class="equalheight"></div>--}}
{{--         </div>--}}
{{--         <div class="col-md-6 col-sm-6">--}}
{{--            <div class="split-box text-center center-block equalheight container-padding">--}}
{{--               <div class="heading-title padding_half">--}}
{{--               <span class="wow fadeIn" data-wow-delay="300ms">Read Our News</span>--}}
{{--               <h2 class="darkcolor bottom25 wow fadeIn" data-wow-delay="350ms">Latest Blog Post</h2>--}}
{{--               <p class="heading_space wow fadeIn" data-wow-delay="400ms">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus. </p>--}}
{{--               <a href="blog.html" class="button btnsecondary wow fadeInUp" data-wow-delay="500ms">Read Full Story</a>--}}
{{--            </div>--}}
{{--            </div>--}}
{{--         </div>--}}
{{--      </div>--}}
{{--   </div>--}}
{{--</section>--}}
<!--Our Blogs Ends-->


<!-- Contact US -->
<section id="contactus" class="padding_top">
   <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12">
           <div class="heading-title heading_space wow fadeInUp" data-wow-delay="300ms">
               <span>Lets Get In Touch</span>
               <h2 class="darkcolor">Contact liftrumah.id</h2>
            </div>
        </div>
         <div class="col-md-6 col-sm-12 margin_bottom wow fadeInUp" data-wow-delay="350ms">
            <p>Even though it's only for Home, pick from futuristic, modern, or classics design, and create your ideal design with doors and cabin parts including ceiling, floor, walls, handrail, mirrors and operation panels</p>
            <div class="row">
               <div class="col-md-6 col-sm-6 our-address top40">
                  <h5 class="bottom25">Our Address</h5>
                  <p class="bottom15">Gd Wisma Laena R317, Jl. KH. Abdullah Syafei No.7, RT.6/RW.2, Manggarai Sel., Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12860 </p>
{{--                  <a class="pickus" href="#." data-text="Get Directions">Get Directions</a>--}}
               </div>
               <div class="col-md-6 col-sm-6 our-address top40">
                  <h5 class="bottom25">Our Phone</h5>
                  <p class="bottom15">Office Telephone :0812-1380-3939 <span class="block">
{{--                     Mobile : 001 63165370895--}}
                  </span> </p>
                  <a class="pickus" href="#." data-text="Call Us">Call Us</a>
               </div>
               <div class="col-md-6 col-sm-6 our-address top40">
                  <h5 class="bottom25">Our Email</h5>
                  <p class="bottom15">Main Email : liftrumah@gmail.com  </p>
                  <a class="pickus" href="#." data-text="Send a Message">Send a Message</a>
               </div>
               <div class="col-md-6 col-sm-6 our-address top40">
                  <h5 class="bottom25">Our Support</h5>
                  <p class="bottom15">Main Support : info@website.com <span>Sales : support@website</span> </p>
                  <a class="pickus" href="#." data-text="Open a Ticket">Open a Ticket</a>
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

   <!--Location Map here-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.306952197492!2d106.84752771471683!3d-6.22319659549515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f38ee5d21441%3A0x44b3ece8d15487ea!2sRT.6%2FRW.2%2C%20South%20Manggarai%2C%20Tebet%2C%20South%20Jakarta%20City%2C%20Jakarta!5e0!3m2!1sen!2sid!4v1636822551297!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>
<!--Contact US Ends-->

<!--Site Footer Here-->
<footer id="site-footer" class="padding_half">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12 text-center">
            <ul class="social-icons bottom25 wow fadeInUp" data-wow-delay="300ms">
               <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i> </a> </li>
               <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i> </a> </li>
               <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i> </a> </li>
               <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i> </a> </li>
               <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i> </a> </li>
               <li><a href="javascript:void(0)"><i class="fa fa-envelope-o"></i> </a> </li>
            </ul>
            <p class="copyrights wow fadeInUp" data-wow-delay="350ms"> &copy; 2021 liftrumah.id  made with love by <a href="#" target="_blank">Panji Denis Giantoro</a> </p>
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

<!--Google Map API-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJnKEvlwpyjXfS_h-J1Cne2fPMqeb44Mk"></script>
<script src="{{ asset('frontEnd/js/functions.js')}}"></script>
</body>
</html>
