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
                                        <h2 class="title ttu">@lang('navbar.nav4')</h2>
                                        <p></p>
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
        <section class="section section-team bg-light">
            <div class="container">
                <!-- Block @s -->
                <div class="nk-block nk-block-team-featured team-featured">
                    <div class="row align-items-center">
                        <div class="col-lg-5 mb-4 mb-lg-0">
                            <div class="team-featured-photo tc-light">
                                <img src="images/team/rektor.jpg" alt="team">
                                <h5 class="team-featured-info bg-secondary">@lang('others.team1')<span>@lang('others.team2')</span></h5>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="team-featured-cont">

                                <h2 class="title title-lg title-dark">@lang('others.team2')</h2>
                                <p> @lang('others.team3')</p>
                            </div>
                        </div>
                    </div><!-- .row -->
                </div>
                <!-- Block @e -->
            </div>
        </section>
        <!-- // -->
        <section class="section section-team bg-light-alt">
            <div class="container">
                <!-- Section Head @s -->
                <div class="section-head text-center wide-auto">
                    <h2 class="title title-lg title-dark">@lang('others.team4')</h2>
                </div><!-- .section-head @e -->
                <!-- Block @s -->
                <div class="nk-block nk-block-team-list team-list">
                    <div class="row justify-content-center">
                        @foreach ($teams1 as $item)
                            <div class="col-md-3 col-6">
                                <div class="team">
                                    <div class="team-photo team-photo-sm">
                                        <img src="images/{{ $item->img }}" alt="team">
                                        <a href="#{{ $item->id }}" class="team-show content-popup"></a>
                                        <ul class="team-social">
                                            <li><a href="{{ $item->tg_link }}"><em class="fab fa-linkedin-in"></em></a></li>
                                            <li><a href="{{ $item->fb_link }}"><em class="fab fa-facebook-f"></em></a></li>
                                        </ul>
                                    </div>
                                    <h5 class="team-name title title-sm">{{ $item['name_'.\App::getLocale()] }}</h5>
                                    <span class="team-position">{{ $item['job_'.\App::getLocale()] }}</span>
                                </div>
                                <!-- Start .team-profile  -->
                                <div id="{{ $item->id }}" class="team-popup mfp-hide">
                                    <a title="Close" class="mfp-close">×</a>
                                    <div class="row align-items-start">
                                        <div class="col-md-6">
                                            <div class="team-photo">
                                                <img src="/images/{{ $item->img }}" alt="team">
                                            </div>
                                        </div><!-- .col  -->
                                        <div class="col-md-6">
                                            <div class="team-popup-info ps-md-3">
                                                <h3 class="team-name title title-lg pt-4">{{ $item['name_'.\App::getLocale()] }}</h3>
                                                <p class="team-position">{{ $item['job_'.\App::getLocale()] }} </p>
                                                <ul class="team-social mb-4">
                                                    <li><a href="{{ $item->fb_link }}"><em class="fab fa-facebook-f"></em></a></li>
                                                    <li><a href="{{ $item->tg_link }}"><em class="fab fa-linkedin-in"></em></a></li>
                                                </ul>
                                                <p>{{ $item['description_'.\App::getLocale()] }}</p>

                                            </div>
                                        </div><!-- .col  -->
                                    </div><!-- .row  -->
                                </div><!-- .team-profile  -->
                            </div><!-- .col -->
                        @endforeach


                    </div><!-- .row -->
                </div>
                <!-- Block @r -->
            </div>
        </section>
        <!-- // -->
        <section class="section section-team bg-light">
            <div class="container">
                <!-- Section Head @s -->
                <div class="section-head text-center wide-auto">
                    <h2 class="title title-lg title-dark">
                        @lang('others.team5')</h2>
                </div><!-- .section-head @e -->
                <!-- Block @s
        -->
                    <div class="nk-block nk-block-team-list team-list">
                        <div class="row justify-content-center">
                            @foreach ($teams2 as $item)
                            <div class="col-md-3 col-6">
                                <div class="team">
                                    <div class="team-photo team-photo-sm">
                                        <img src="images/{{ $item->img }}" alt="team">
                                        <a href="#team-popup-1" class="team-show content-popup"></a>
                                        <ul class="team-social">
                                            <li><a href="{{ $item->tg_link }}"><em class="fab fa-linkedin-in"></em></a></li>
                                            <li><a href="{{ $item->fb_link }}"><em class="fab fa-facebook-f"></em></a></li>
                                        </ul>
                                    </div>
                                    <h5 class="team-name title title-sm">{{ $item['name_'.\App::getLocale()] }}</h5>
                                    <span class="team-position">{{ $item['job_'.\App::getLocale()] }}</span>
                                </div>
                                <!-- Start .team-profile  -->
                                <div id="team-popup-1" class="team-popup mfp-hide">
                                    <a title="Close" class="mfp-close">×</a>
                                    <div class="row align-items-start">
                                        <div class="col-md-6">
                                            <div class="team-photo">
                                                <img src="/images/{{ $item->img }}" alt="team">
                                            </div>
                                        </div><!-- .col  -->
                                        <div class="col-md-6">
                                            <div class="team-popup-info ps-md-3">
                                                <h3 class="team-name title title-lg pt-4">{{ $item['name_'.\App::getLocale()] }}</h3>
                                                <p class="team-position">{{ $item['job_'.\App::getLocale()] }} </p>
                                                <ul class="team-social mb-4">
                                                    <li><a href="{{ $item->fb_link }}"><em class="fab fa-facebook-f"></em></a></li>
                                                    <li><a href="{{ $item->tg_link }}"><em class="fab fa-linkedin-in"></em></a></li>
                                                </ul>
                                                <p>{{ $item['description_'.\App::getLocale()] }}</p>

                                            </div>
                                        </div><!-- .col  -->
                                    </div><!-- .row  -->
                                </div><!-- .team-profile  -->
                            </div><!-- .col -->
                            @endforeach


                        </div><!-- .row -->
                    </div>
                    <!-- Block @r -->
                </div>
            </section>
        </main>
    @endsection
