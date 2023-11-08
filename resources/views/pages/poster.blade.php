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
                                    <h2 class="title ttu">@lang('home.h23')</h2>
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

                        <div class="blog-text">
                            <ul class="blog-meta">
                                <li><a href="#"></a></li>
                                <li><a href="#">{{ $poster->number }} - {{ $poster['month_'.\App::getLocale()] }}</a></li>
                            </ul>
                            <h4 class="title title-sm"><a href="#">{{ $poster['title_'.\App::getLocale()] }}</a>
                            </h4>
                            <p>{!! $poster['body_'.\App::getLocale()] !!}
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
