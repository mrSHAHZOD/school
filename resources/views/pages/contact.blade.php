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
                                        <h2 class="title ttu"> @lang('navbar.nav19') </h2>
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
        <section class="section section-contact bg-transparent">
            <div class="container">
                <!-- Block @s -->
                <div class="nk-block block-contact">
                    <div class="row justify-content-center g-0">
                        <div class="col-lg-6">
                            <div class="contact-wrap round split split-left split-lg-left bg-white">

                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif

                                <h5 class="title title-md">@lang('others.contact1')</h5>
                                <form id="contact" action="/messages" method="post">
                                    @csrf
                                    <fieldset>
                                      <input placeholder="@lang('home.h19')" name="name" type="text" tabindex="1" required>
                                    </fieldset>
                                    <fieldset>
                                      <input placeholder="@lang('home.h20')" name="email" type="email" tabindex="2" required>
                                    </fieldset>
                                    <fieldset>
                                      <input placeholder="@lang('home.h21')" name="message" type="tel" tabindex="3" required>
                                    </fieldset>
                                    <fieldset>
                                      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">@lang('home.h22')</button>
                                    </fieldset>
                                </form>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg-4">
                            <div class="contact-wrap split split-right split-lg-right bg-genitian bg-theme tc-light">
                                <div class="d-flex flex-column justify-content-between h-100">
                                    <ul class="contact-list">

                                        <li>
                                            <em class="contact-icon fas fa-phone"></em>
                                            <div class="contact-text">
                                                 <h5> @lang('navbar.footer4')</h5>
                                                <span><a href="#">+998 (95)-200-43-04</a></span><br>
                                                <span><a href="#">+998 (95)-400-43-04</a></span><br>
                                                <span><a href="#"> +998 (55)-251-43-04</a></span><br>
                                                <span><a href="#"> +998 (95)-800-43-04</a></span><br>
                                            </div>
                                        </li>
                                        <li>
                                            <em class="contact-icon fas fa-envelope"></em>
                                            <div class="contact-text">
                                                <h5> @lang('home.h20') </h5>
                                                <span>
                                                    <a href="info@ntsi.uz"> info@ntsi.uz</a>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <em class="contact-icon fas fa-paper-plane"></em>
                                            <div class="contact-text">
                                                   <h5>@lang('others.contact2') </h5>
                                                <span> <a href="https://t.me/ntsiuz"> @lang('others.contact3')</a></span>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="contact-social">
                                        <h5>  @lang('others.contact4') </h5>
                                        <ul class="social-links">
                                            <li><a href="https://t.me/ntsiuz"><em class="fab fa-telegram"></em></a></li>
                                            <li><a href="#"><em class="fab fa-facebook-f"></em></a></li>
                                            <li><a href="#"><em class="fab fa-youtube"></em></a></li>
                                            <li><a href="#"><em class="fab fa-instagram"></em></a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .block @e -->
            </div>
        </section>
    </main>
@endsection
