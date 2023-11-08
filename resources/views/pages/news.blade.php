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
                <!-- Block @s
        -->
                    <div class="nk-block nk-block-blog">
                        <div class="row justify-content-center">
                            @foreach ($news as $item)
                                <div class="col-lg-4 col-sm-9">
                                    <div class="blog blog-s2 animated" data-animate="fadeInUp" data-delay=".2">
                                        <div class="blog-photo">
                                            <img src="/images/{{ $item->img }}" alt="blog-thumb">
                                        </div>
                                        <div class="blog-text">
                                            <ul class="blog-meta">
                                                <li><a href="/single-new/{{ $item->id }}">{{ $item->created_at->format('d.m.Y') }}</a></li>
                                                <li><a href="/single-new/{{ $item->id }}">{{ $item->owner }}</a></li>
                                            </ul>
                                            <h4 class="title title-sm"><a href="#">{{ $item['title_'.\App::getLocale()] }}</a>
                                            </h4>
                                            <p>{!! \Str::limit($item['title_'.\App::getLocale()], 100) !!}...</p>
                                            <a href="/single-new/{{ $item->id }}" class="link-primary">Batafsil</a>
                                        </div>
                                    </div><!-- .blog -->
                                </div><!-- .col -->
                            @endforeach


                        </div><!-- .row -->
                    </div><!-- .block @e -->
                    <div class="text-center pdt-r animated" data-animate="fadeInUp" data-delay=".5">
                        {{ $news->links() }}
                    </div>
                </div>
            </section>
        </main>
    @endsection
