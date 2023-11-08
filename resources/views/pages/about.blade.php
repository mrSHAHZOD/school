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
                                    <h2 class="title ttu">@lang('about.title')</h2>
                                    <p>

                                    </p>
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
<section class="section bg-white">
    <div class="container">
        <div class="nk-block nk-block-blog">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details">
                        <div class="blog-featured">
                            <img class="round" src="/images/bino.png" alt="featured">
                        </div>

                        <div class="blog-content">
                            <p>@lang('about.info')</p>
                        </div>


                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar ms-lg-4 mt-5 mt-lg-0">
                        <div class="wgs wgs-category">

                            <div class="wgs-body">
                                <ul class="wgs-links wgs-links-category">
                                    <li><a href="/about">@lang('navbar.nav2')</a></li>
                                    <li><a href="/docs">@lang('navbar.nav3')</a></li>
                                    <li><a href="/team">@lang('navbar.nav4')</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .row -->
        </div><!-- .nk-block -->
    </div><!-- .container -->
</section><!-- .section -->
</main>

@endsection
