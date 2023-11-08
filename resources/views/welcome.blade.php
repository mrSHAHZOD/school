@extends('layouts.layout')

@section('content')
    <!-- Banner @s -->
    <div class="header-banner bg-theme-dark">
        <div class="nk-banner">
            <div class="banner banner-mask-fix banner-fs banner-single tc-light">
                <div class="swiper mySwiper mt-4">
                    <div class="swiper-wrapper">

                        @foreach ($sliders as $item)
                            <div class="swiper-slide">
                                <img src="/images/{{ $item->img }}" alt="">
                                <div class="slide__text">

                                    <h1>{{  $item['title_'.\App::getLocale()]  }}</h1>
                                    {{-- <a href="/single-new/{{$item->id }}"><button
                                        class="btn btn-rg btn-auto btn-outline btn-grad on-bg-theme btn-round">@lang('home.h2')</button></a> --}}
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div><!-- .nk-banner -->
        <div class="nk-ovm mask-c-dark shape-v mask-contain-bottom"></div>
        <!-- Place Particle Js -->
        <div id="particles-bg" class="particles-container particles-bg" data-pt-base="#00c0fa" data-pt-base-op=".3"
            data-pt-line="#2b56f5" data-pt-line-op=".5" data-pt-shape="#00c0fa" data-pt-shape-op=".2"></div>
    </div>
    <!-- .header-banner @e -->
    </header>
    <main class="nk-pages">
        <section class="section bg-theme-light tc-dark" id="blog">
            <div class="container">
                <div class="section-head text-center wide-auto-sm">
                    <h2 class="title title-s4 animated" data-animate="fadeInUp" data-delay=".1" title="@lang('home.h1')">
                        @lang('home.h1')</h2>
                </div><!-- .section-head @e -->
                <!-- Block @s -->
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
                                        <h4 class="title title-sm"><a href="/single-new/{{ $item->id }}">{{ $item['title_'.\App::getLocale()] }}</a>
                                        </h4>
                                        <p>{!! \Str::limit($item['title_'.\App::getLocale()], 100) !!}...</p>
                                        <a href="/single-new/{{ $item->id }}" class="link-primary">@lang('home.h2')</a>
                                    </div>
                                </div><!-- .blog -->
                            </div>
                        @endforeach
                        <!-- .col -->

                    </div><!-- .row -->
                </div><!-- .block @e -->
                <div class="text-center pdt-r animated" data-animate="fadeInUp" data-delay=".5">
                    <a href="/news" class="link link-primary link-uc link-animate"><span>@lang('home.h3')</span> <em
                            class="link-icon ti ti-angle-right"></em></a>
                </div>
            </div>
        </section>
        <section class="section bg-white">
            <div class="container">
                <div class="section-head text-center wide-auto-sm">
                    <div class="section-head-line">
                        <span class="line-1"></span><span class="line-2"></span><span class="line-3"></span><span
                            class="line-4"></span>
                        <span class="line-5"></span><span class="line-6"></span><span class="line-7"></span><span
                            class="line-8"></span>
                    </div>
                    <h2 class="title title-s4 animated" data-animate="fadeInUp" data-delay=".1" title="@lang('home.h23')">
                       @lang('home.h23')</h2>
                </div>
                <!-- Block @s -->
                <div class="nk-block nk-block-text-wrap">
                    <div class="row gx-3 mb-md-2">
                        @foreach ($posters as $item)
                            <div class="col-sm-6 col-xl-4 mb-3 shadow">
                                <!-- Card -->
                                <a class="card card-transition card-line" href="/poster/{{ $item->id }}">
                                    <div class="card-header d-flex justify-content-center align-items-end">
                                        <h1 class="text-info">{{ $item->number }}</h1>
                                        <p class="text-info fw-semibold">- {{ $item['month_'.\App::getLocale()] }}</p>
                                    </div>
                                    <div class="card-body py-3 px-4">
                                        <h5 class="card-text lh-base text-uppercase text-dark">{{ $item['title_'.\App::getLocale()] }}</h5>
                                        <div class="row mt-5">
                                            <div class="col-sm-auto me-auto small text-dark fw-normal">{{ $item->time }}</div>
                                            <div class="col-sm-auto">
                                                <p class="card-text text-body fw-bold">
                                                    <span class="badge  bi-stopwatch">
                                                        @if($item->status == 0) @lang('home.h4') @else @lang('home.h5') @endif </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                </a>
                                <!-- End Card -->
                            </div>
                        @endforeach
                    </div>
                </div><!-- .block @e -->
            </div>
        </section>
        <!-- // -->
        <section class="section section-tokensale tc-light bg-theme">
            <!-- Block @s -->
            <div class="container">
                <div class="section-head text-center wide-auto-sm">
                    <h2 class="title title-s4 animated" data-animate="fadeInUp" data-delay=".1"
                        title="@lang('home.h6')">@lang('home.h6')</h2>
                    <p class="animated" data-animate="fadeInUp" data-delay=".2"></p>
                </div>
                <div class="nk-block nk-block-token mgb-m30">
                    <div class="row gx-3 mx-n1">
                        @foreach ($services as $item)
                            <div class="col-sm-6 col-md-4 mb-3">
                                <!-- Card -->
                                <div class="card card-bordered card-transition h-100 card-line">
                                    <a class="card-body" target="_blank" href="{{ $item->link }}">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-shrink-0">
                                                <span class="svg-icon svg-icon-xl text-primary">
                                                    <img src="/icons/{{ $item->icon }}" width="100px" alt="">
                                                </span>
                                            </div>

                                            <div class="flex-grow-1 ms-3">
                                                <div class="d-flex align-items-start">
                                                    <h4 class="card-title mb-0 text-primary">{{ $item['title_'.\App::getLocale()] }}</h4>
                                                </div>
                                                <p class="card-text text-body small">
                                                    {{ $item['info_'.\App::getLocale()] }}</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="line bg-primary"></div>
                                </div>
                                <!-- End Card -->
                            </div>
                        @endforeach
                        <!-- End Col -->
                    </div>
                </div><!-- .block @e -->
                <div class="nk-block">
                    <div class="container content-space-2">
                        <!-- Heading -->
                        <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                            <img class="img-fluid" src="./images/13logos.png" alt="">
                        </div>

                        <!-- End Heading -->

                        <div class="container">
                            <div class="row row-cols-1 row-cols-sm-2 1 row-cols-md-3 row-cols-lg-4">
                                <div class="col mb-4">
                                    <!-- Card -->
                                    <div class="card bg-theme  card-sm card-bordered h-100 bg-soft-light shadow-none">
                                        <div class="card-body text-center">
                                            <span class="bi-people-fill text-white" style="font-size: 40px"></span>
                                            <br>
                                            <span class="text-white-50  mb-2">@lang('home.h7')</span>
                                            <br>
                                            <h2 class="text-white">{{ $numbers->num1 }}</h2>
                                            <!-- End Row -->
                                        </div>
                                    </div>
                                    <!-- End Card -->
                                </div>
                                <!-- End Col -->

                                <div class="col mb-4">
                                    <!-- Card -->
                                    <div class="card bg-theme card-sm card-bordered h-100 bg-soft-light shadow-none">
                                        <div class="card-body text-center">
                                            <span class="bi-award-fill text-white" style="font-size: 40px"></span>
                                            <br>
                                            <span class="text-white-50  mb-2">@lang('home.h8')</span>
                                            <br>
                                            <h2 class="text-white">{{ $numbers->num2 }}</h2>
                                            <!-- End Row -->
                                        </div>
                                    </div>
                                    <!-- End Card -->
                                </div>
                                <!-- End Col -->

                                <div class="col mb-4">
                                    <!-- Card -->
                                    <div class="card bg-theme card-sm card-bordered h-100 bg-soft-light shadow-none">
                                        <div class="card-body text-center">
                                            <span class="bi-mortarboard-fill text-white" style="font-size: 40px"></span>
                                            <br>
                                            <span class="text-white-50  mb-2">@lang('home.h9')</span>
                                            <br>
                                            <h2 class="text-white">{{ $numbers->num3 }}</h2>
                                            <!-- End Row -->
                                        </div>
                                    </div>
                                    <!-- End Card -->
                                </div>
                                <!-- End Col -->

                                <div class="col mb-4">
                                    <!-- Card -->
                                    <div class="card bg-theme card-sm card-bordered h-100 bg-soft-light shadow-none">
                                        <div class="card-body text-center">
                                            <span class="bi-book-fill text-white" style="font-size: 40px"></span>
                                            <br>
                                            <span class="text-white-50  mb-2">@lang('home.h10')</span>
                                            <br>
                                            <h2 class="text-white">{{ $numbers->num4 }}</h2>
                                            <!-- End Row -->
                                        </div>
                                    </div>
                                    <!-- End Card -->
                                </div>
                                <!-- End Col -->

                              
                                <!-- End Col -->
                            </div>
                            <!-- End Row -->
                        </div>

                    </div>
                </div><!-- .block @e -->
            </div>
        </section>
        <!-- // -->
        <section class="section bg-white section-connect" id="roadmap">
            <div class="container ov-h">
                <div class="section-head text-center wide-auto-sm">
                    <h2 class="title title-s4 animated" data-animate="fadeInUp" data-delay=".1" title="@lang('home.h15')">
                        @lang('home.h15')
                    </h2>
                </div><!-- .section-head @e -->
            </div>
            <!-- Block @s -->
            <div class="nk-block ov-h">
                <div class="container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2137.9508306963785!2d71.24291989142168!3d41.118546216768735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38a4d77e2d18f55b%3A0x3cf4abd05123f1e8!2s13-maktab!5e0!3m2!1suz!2s!4v1698767443242!5m2!1suz!2s" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div><!-- .block @e -->
        </section>
        <!-- // -->
        <section class="section section-contact bg-white" id="contact">
            <div class="container">
                <div class="section-head text-center wide-auto-sm">
                    <h2 class="title title-s4 animated" data-animate="fadeInUp" data-delay=".1" title="@lang('home.h16')">
                        @lang('home.h16')</h2>
                    <p class="animated" data-animate="fadeInUp" data-delay=".2">@lang('home.h17').</p>
                </div><!-- .section-head @e -->
                <!-- Block @s
        -->
                    <div class="nk-block block-contact">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-8 col-lg-10">
                                <ul class="contact-list contact-list-s1 flex-wrap flex-md-nowrap pdb-l">
                                    <li class="animated" data-animate="fadeInUp" data-delay=".3">
                                        <em class="contact-icon fas fa-phone"></em>
                                        <div class="contact-text">
                                            <a class="text-secondary" href="tel:+998 55 251 43 03">+998 55 251 43 04</a>
                                        </div>
                                    </li>
                                    <li class="animated" data-animate="fadeInUp" data-delay=".5">
                                        <em class="contact-icon fas fa-paper-plane"></em>
                                        <div class="contact-text">
                                            <a class="text-secondary" href="#">@lang('home.h18')</a>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- .col -->
                            <div class="col-xl-8 col-lg-10">
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                                <div class="contact-wrap p-0">
                                    <form id="contact" action="/messages" method="post">
                                        @csrf
                                        <fieldset>
                                            <input placeholder="@lang('home.h19')" name="name" type="text" required>
                                          </fieldset>
                                          <fieldset>
                                            <input placeholder="@lang('home.h20')" name="email" type="email" required>
                                          </fieldset>
                                          <fieldset>
                                            <input placeholder="@lang('home.h21')" name="message" type="tel" required>
                                          </fieldset>
                                          <fieldset>
                                            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">@lang('home.h22')</button>
                                          </fieldset>
                                    </form>

                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .block @e -->
                </div>
            </section>
            <!-- // -->
        </main>
    @endsection
