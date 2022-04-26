@extends('website.layouts.app')
@section('content')
    <section class="flat-title-page">
        <div class="container">
            <div class="row">
                <div class="breadcrumbs">
                    {{-- <div class="breadcrumb-trail link-style-2">
                        <a class="home"
                            href="{{ route('website.home') }}">{{ __('app.Accueil') }}</a><span>{{ __('missions.NOS_MISSIONS') }}</span>
                    </div> --}}
                    <h2 class="section-title-page">{{ __('missions.NOS_MISSIONS') }}</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-space flat-approch">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="approch-title wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInDown;">
                        <div class="section-title">
                            Synergy Packaging
                        </div>
                        <h2 class="section-heading">{{ __('missions.section_heading') }}</h2>
                    </div>

                </div>

            </div>
        </div>

    </section>
   
    <section class="tf-space flat-services " style="background: white!important">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="services-title wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        {{-- <h2 class="section-heading">{{ __('missions.NOS_MISSIONS') }}</h2> --}}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="services-post-left wow zoomIn" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="height: 100%;">
                        <img src="{{ asset('website/assets/images/missions/m1.jpg') }}" alt="images"
                            style="height: 100%;">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="services-content right wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms"
                        style="padding-top: 30px !important">
                        <h3>{{ __('missions.m1_title') }}</h3>
                        <p class="text-justify">{!! __('missions.m1_desc') !!}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="services-content left wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms"
                        style="padding-top: 30px !important">
                        <h3>{{ __('missions.m2_title') }}</h3>
                        <p>{!! __('missions.m2_desc') !!}</p>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="services-post-right wow zoomIn" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="height: 100%;">
                        <img src="{{ asset('website/assets/images/missions/m2.jpg') }}" alt="images"
                            style="height: 100%;">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="services-post-left wow zoomIn" data-wow-delay="200ms" data-wow-duration="1500ms"
                        style="height: 100%;">
                        <img src="{{ asset('website/assets/images/missions/m3.jpg') }}" alt="images"
                            style="height: 100%;">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="services-content right pd-0 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="padding-top: 30px !important">
                        <h3>{{ __('missions.m3_title') }}</h3>
                        <p>{!! __('missions.m3_desc') !!}</p>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="services-content left wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms"
                        style="padding-top: 30px !important">
                        <h3>{{ __('missions.m4_title') }}</h3>
                        <p>{!! __('missions.m4_desc') !!}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="services-post-right wow zoomIn" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="height: 100%;">
                        <img src="{{ asset('website/assets/images/missions/m4.jpg') }}" alt="images"
                            style="height: 100%;">
                    </div>
                </div>
            </div>
            <div class="text-center col-md-12 mt-5">
                <a href="{{ route('website.nos-references') }}"
                    class="button"><span>{{ __('app.Nos références') }}</span></a>
            </div>
        </div>
    </section>
@endsection
