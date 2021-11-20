@extends('front.head')

@section('section')
    @include('front.navBlog')

    <!--page Header-->
    <section class="page-header parallaxie padding_top center-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-titles text-center">
                        <h2 class="whitecolor font-light bottom30">latest Blog</h2>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{url('/onepage')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">latest Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page Header ends-->


    <!-- Our Blogs -->
    <section id="our-blog" class="bglight padding text-center">
        <div class="container">
            <div id="blog-measonry" class="cbp">
                @foreach($posts as $p)
                    <div class="cbp-item">
                        <div class="news_item shadow">
                            <a class="image" href="{{ route('sp',$p->slug) }}">
                                <img src="{{ $p->featured_image }}" alt="Latest News" class="img-responsive">
                            </a>
                            <div class="news_desc">
                                <h3 class="text-capitalize font-light darkcolor"><a href="{{ route('sp',$p->slug) }}">{{ $p->title }}</a></h3>
                                <ul class="meta-tags top20 bottom20">
                                    <li><a href="#."><i class="fa fa-calendar"></i>{{ Carbon\Carbon::createFromTimeString($p->published_at)->format('g:i a')  }}</a></li>
                                    <li><a href="#."> <i class="fa fa-user-o"></i> {{ $p['user']->name }} </a></li>
                                </ul>
                                <p class="bottom35">{{ \Illuminate\Support\Str::limit($p->summary, '150', ' (...)') }}</p>
                                <a href="{{ route('sp',$p->slug) }}" class="button btnprimary btn-gradient-hvr">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <!--Pagination-->
                    <ul class="pagination justify-content-center top50">
                        {{ $posts->links() }}
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Our Blogs Ends-->
@endsection
