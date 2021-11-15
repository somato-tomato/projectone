<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ $siteConfig->siteName }}</title>

    <meta name="description" content="{{ $siteConfig->siteDescription }}">

    {{--    Open Graph Card--}}
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $siteConfig->siteName }}" />
    <meta property="og:description" content="{{ $siteConfig->siteDescription }}" />
    <meta property="og:image" content="{{ asset($siteConfig->siteLogo) }}" />
    <meta property="twitter:card" content="website" />

    <link rel="icon" href="{{ asset('images_site/'.$siteConfig->siteFavicon) }}" type="image/png" sizes="16x16">

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

@yield('section')

@include('front.footer')


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
<script>
    $(".kokomi .half-section:first-child").attr("id", "aboutus");

    $('.shiruko').each(function(index) {
        if (index % 2 === 0) {
            var img = $(this).find('.aru');
            $(this).find('.aru').remove();
            $(this).find('.nozomi').after(img);
        }
    });
</script>
@stack('sukuripu')
</body>
</html>
