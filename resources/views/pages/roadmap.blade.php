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
                                    <h2 class="title ttu">@lang('navbar.nav12')</h2>
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
            <div class="p-2">
                <iframe class="rounded" width="100%" height="700" src="https://www.youtube.com/embed/p2PyVkYoi2Y"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
    </section>

</main>
@endsection
