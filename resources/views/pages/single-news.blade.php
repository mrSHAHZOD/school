@extends('layouts.layout')

@section('content')

 <!-- Banner @s -->
 <div class="header-banner bg-theme-grad">
    <div class="nk-banner">
        <div class="banner banner-page">
            <div class="banner-wrap">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-9">
                            <div class="banner-caption cpn tc-light text-center">
                                <div class="cpn-head">
                                    <h2 class="title ttu">@lang('navbar.nav14')</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .nk-banner -->
    <div class="nk-ovm shape-a-sm"></div>
</div>
<!-- .header-banner @e -->
</header>
<main class="nk-pages">
<section class="section bg-theme-light tc-dark" id="blog">
<div class="container">
        <!-- Block @s -->
        <div class="nk-block nk-block-blog">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-sm-10">
                    <div class="blog blog-s2 animated" data-animate="fadeInUp" data-delay=".2">
                        <div class="blog-photo__single">
                            <img src="/images/{{ $news->img }}" alt="blog-thumb">
                        </div>
                        <div class="blog-text">
                            <ul class="blog-meta">
                                <li><a href="#">{{ $news->created_at->format('d-m-Y') }}</a></li>
                                <li><a href="#">{{ $news['owner'] }}</a></li>
                            </ul>
                            <h4 class="title title-sm"><a href="#">{{ $news['title_'.\App::getLocale()] }}</a>
                            </h4>
                            <p>{!! $news['body_'.\App::getLocale()] !!}
                            </p>
                        </div>
                    </div><!-- .blog -->
                </div><!-- .col -->

            </div><!-- .row -->
        </div><!-- .block @e -->
    </div>
</section>
</main>

@endsection
