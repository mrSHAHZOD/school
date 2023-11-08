@extends('layouts.layout')

@section('content')<!-- Banner @s -->
<div class="header-banner bg-theme-grad">
    <div class="nk-banner">
        <div class="banner banner-page">
            <div class="banner-wrap">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-9">
                            <div class="banner-caption cpn tc-light text-center">
                                <div class="cpn-head">
                                    <h2 class="title ttu">@lang('navbar.nav39')</h2>

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
      <a class="btn btn-success" href="/assets/pdf/ntsipdf.pdf">@lang('others.download1')</a>
   </div>
</section>

</main>

@endsection
