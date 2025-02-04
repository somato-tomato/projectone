<!-- header -->
<header class="site-header">
    <nav class="navbar navbar-expand-lg fixed-bottom gradient_bg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src=" {{ asset('images_site/'.$siteConfig->siteLogo) }}" alt="logo"> </a>
            <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#xenav">
                <span> </span>
                <span> </span>
                <span> </span>
            </button>
            <div class="collapse navbar-collapse" id="xenav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link pagescroll" href="#ourhome">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#aboutus">Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#our-team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#portfolio-xe">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#our-pricings">Paket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#our-testimonial">Klien</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#our-blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#contactus">Kontak</a>
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
                        <a class="nav-link pagescroll" href="#ourhome">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#aboutus">Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#our-team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#portfolio-xe">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#our-pricings">Paket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#our-testimonial">Klien</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#our-blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#contactus">Kontak</a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{url('/login')}}" class="nav-link" target="_blank">Login</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{url('/canvas/login')}}" class="nav-link" target="_blank">Login Blog</a>--}}
{{--                    </li>--}}
                </ul>
            </nav>

            <ul class="social-icons-simple white top50 w-100">
                @if($siteConfig->facebook)
                    <li><a href="{{ $siteConfig->facebook }}"><i class="fa fa-facebook"></i> </a> </li>
                @endif
                @if($siteConfig->instagram)
                    <li><a href="{{ $siteConfig->instagram }}"><i class="fa fa-instagram"></i> </a> </li>
                @endif
                @if($siteConfig->youtube)
                    <li><a href="{{ $siteConfig->youtube }}"><i class="fa fa-youtube"></i> </a> </li>
                @endif
            </ul>
            <p class="whitecolor">&copy; 2021</p>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
    <!-- End side menu -->
</header>
<!-- header -->
