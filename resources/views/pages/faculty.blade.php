@extends('layouts.layout')

@section('content')
    <!-- Banner @s-->
    <div class="header-banner bg-theme-grad">
        <div class="nk-banner">
            <div class="banner banner-page">
                <div class="banner-wrap">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-9">
                                <div class="banner-caption cpn tc-light text-center">
                                    <div class="cpn-head">
                                        <h2 class="title ttu">@lang('navbar.nav5')</h2>

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

        <!-- // -->
        <section class="section section-team bg-light-alt">
            <div class="container">
                <div class="row gx-3 mx-n1">
                    @foreach ($faculties as $item)

                        <div class="col-sm-6 col-md-4 mb-3">
                            <!-- Card -->
                            <div class="card card-bordered card-transition h-100 card-line">
                                <a class="card-body" target="_blank" href="#">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="flex-grow-1 ms-3">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <h5 class="card-title mb-0 text-danger text-center">{{ $item['name_'.\App::getLocale()] }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="line bg-danger"></div>
                            </div>
                            <!-- End Card -->
                        </div>

                    @endforeach
                </div>
            </div>
        </section>

    </main>
@endsection
