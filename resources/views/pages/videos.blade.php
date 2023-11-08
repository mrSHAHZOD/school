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
                                    <h2 class="title ttu">@lang('navbar.nav16')</h2>

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
                <!-- 1 -->
                @foreach ($videos as $item)
                <div class="col-lg-4 col-sm-9">
                    <div class="blog blog-s2 animated" data-animate="fadeInUp" data-delay=".2">
                        <div class="ratio ratio-16x9">
                            <iframe width="300" src="{{ $item->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <div class="p-2">
                            <h4 class="title title-sm"><a href="#">{{ $item['title_'.\App::getLocale()] }}</a>
                            <ul class="blog-meta">
                                <li><a href="#">{{ $item->created_at->format('d-m-Y') }}</a></li>

                            </ul>
                        </div>
                    </div><!-- .blog -->
                </div>
                @endforeach

                <!-- .col -->

            </div><!-- .row -->
        </div><!-- .block @e -->
        <div class="text-center pdt-r animated" data-animate="fadeInUp" data-delay=".5">
            {{ $videos->links() }}
        </div>
    </div>
</section>
</main>

@endsection
