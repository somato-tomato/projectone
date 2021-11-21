<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ $post->title }}</title>

    <meta name="description" content="{{ $post->meta['description'] }}">
    <meta name="author" content="{{ $post['user']->name }}">

    {{--    Open Graph Card--}}
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $post->title }}" />
    <meta property="og:description" content="{{ $post->meta['description'] }}" />
    <meta property="og:image" content="{{ asset($post->featured_image) }}" />

    <meta property="twitter:card" content="article" />

    <link rel="icon" href="{{ asset('images_site/'.$siteConfig->siteFavicon) }}" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="{{ asset('frontEnd/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/css/style.css') }}">
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar-nav">


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


@include('front.navBlog')

<!--page Header-->
<section style="background: url({{ asset('new_images/bg1.jpg') }})" class="page-header parallaxie padding_top">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <div class="page-titles text-center">
               <h2 class="whitecolor font-light bottom30">Blog Detail</h2>
               <ul class="breadcrumb justify-content-center">
                 <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                 <li class="breadcrumb-item active" aria-current="page">Blog Detail</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<!--page Header ends-->

<!-- Our Blogs -->
<section id="our-blog" class="padding bglight">
   <div class="container">
      <div class="row">
         <div class="col-md-8">
            <div class="news_item shadow">
               <div class="image">
                  <img src="{{ $post->featured_image }}" alt="Latest News" class="img-responsive">
               </div>
               <div class="news_desc text-start">
                   <h3 class="text-capitalize font-light darkcolor">{{ $post->title }}</h3>
                   <ul class="meta-tags top20 bottom20">
                       <li><a href="#."><i class="fa fa-calendar"></i>{{ Carbon\Carbon::createFromTimeString($post->published_at)->format('g:i a')  }}</a></li>
                       <li><a href="#."> <i class="fa fa-user-o"></i> {{ $post['user']->name }}</a></li>
                   </ul>
                   <style>
                       .news_item .news_desc img{
                           width: 100px;

                       }
                   </style>
                   {!! $post->body !!}
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <aside class="sidebar whitebox">
               <div class="widget heading_space">
                  <h4 class="text-capitalize darkcolor bottom20">Recent Posts</h4>
                   @forelse($latest as $l)
                       <div class="single_post bottom15">
                           <a href="{{ route('sp',$l->slug) }}" class="post"><img src="{{ $l->featured_image }}" alt="post image" width="60%"height="60%"></a>
                           <div class="text">
                               <a href="{{ route('sp', $l->slug) }}">{{ $l->title }}</a>
                               <span>{{ Carbon\Carbon::createFromTimeString($l->published_at)->format('g:i a')  }}</span>
                           </div>
                       </div>
                   @empty
                       <div class="text-center">
                           <h4>Belum ada post</h4>
                       </div>
                   @endforelse
               </div>
               <div class="widget heading_space">
                  <h4 class="text-capitalize darkcolor bottom20">Tags</h4>
                  <ul class="webtags">
                      @foreach($post['tags'] as $t)
                          <li><a href="javascript:void(0)">{{ $t->name }}</a></li>
                      @endforeach
                  </ul>
               </div>
            </aside>
         </div>
      </div>
   </div>
</section>
<!--Our Blogs Ends-->

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
</body>
</html>
