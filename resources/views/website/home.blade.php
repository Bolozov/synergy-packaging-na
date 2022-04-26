@extends('website.layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">
@endsection
@section('content')
    <section class="slider-style-2" style="padding:0 !important;">
        <div class="swiper-container mainslider" style="width: 100%">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="background">
                        <img src="{{ asset('website/assets/images/image-slider/1.jpeg') }}" alt="images"
                            style="min-width:100%">
                    </div>
                    <div class="content">
                        <h1>Synergy Packaging.</h1>
                        <h2>{{ __('app.slider_text') }}</h2>
                        <div class="button-slider">
                            <a href="{{ route('website.nos-metiers') }}" class="button btn-style3"
                                style="margin-right: 10px;"><span>{{ __('app.Nos métiers') }}</span></a>
                            <a href="{{ route('website.contact') }}"
                                class="button btn-style3"><span>{{ __('app.contact_us') }}</span></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="background">
                        <img src="{{ asset('website/assets/images/image-slider/2.jpeg') }}" alt="images"
                            style="min-width:100%">
                    </div>
                    <div class="content">
                        <h1>Synergy Packaging.</h1>
                        <h2>{{ __('app.slider_text') }}</h2>
                        <div class="button-slider">
                            <a href="{{ route('website.nos-metiers') }}" class="button btn-style3"
                                style="margin-right: 10px;"><span>{{ __('app.Nos métiers') }}</span></a>
                            <a href="{{ route('website.contact') }}"
                                class="button btn-style3"><span>{{ __('app.contact_us') }}</span></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="background">
                        <img src="{{ asset('website/assets/images/image-slider/3.png') }}" alt="images"
                            style="min-width:100%">
                    </div>
                    <div class="content">
                        <h1>Synergy Packaging.</h1>
                        <h2>{{ __('app.slider_text') }}</h2>
                        <div class="button-slider">
                            <a href="{{ route('website.nos-metiers') }}" class="button btn-style3"
                                style="margin-right: 10px;"><span>{{ __('app.Nos métiers') }}</span></a>
                            <a href="{{ route('website.contact') }}"
                                class="button btn-style3"><span>{{ __('app.contact_us') }}</span></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="background">
                        <img src="{{ asset('website/assets/images/image-slider/4.jpeg') }}" alt="images"
                            style="min-width:100%">
                    </div>
                    <div class="content">
                        <h1>Synergy Packaging.</h1>
                        <h2>{{ __('app.slider_text') }}</h2>
                        <div class="button-slider">
                            <a href="{{ route('website.nos-metiers') }}" class="button btn-style3"
                                style="margin-right: 10px;"><span>{{ __('app.Nos métiers') }}</span></a>
                            <a href="{{ route('website.contact') }}"
                                class="button btn-style3"><span>{{ __('app.contact_us') }}</span></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="background">
                        <img src="{{ asset('website/assets/images/image-slider/5.jpeg') }}" alt="images"
                            style="min-width:100%">
                    </div>
                    <div class="content">
                        <h1>Synergy Packaging.</h1>
                        <h2>{{ __('app.slider_text') }}</h2>
                        <div class="button-slider">
                            <a href="{{ route('website.nos-metiers') }}" class="button btn-style3"
                                style="margin-right: 10px;"><span>{{ __('app.Nos métiers') }}</span></a>
                            <a href="{{ route('website.contact') }}"
                                class="button btn-style3"><span>{{ __('app.contact_us') }}</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button-custom-slider">
                <div class="swiper-button-next button-slide-custom-next"></div>
                <div class="swiper-button-prev button-slide-custom-prev"></div>
            </div>
        </div>
    </section>

    <section class="tf-space flat-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="content-right wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="section-title">
                            Synergy Packaging
                        </div>
                        <h3>{{ __('app.beav') }}</h3>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="content-left text-justify">
                        <p>{{ __('app.beav_text') }}
                            <br> <br>
                            {{ __('app.beav_text2') }}
                        </p>
                        <a href="{{ route('website.contact') }}"
                            class="button"><span>{{ __('app.contact_us') }}</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tf-space flat-blog-grid home-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="funfact-title wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInDown;">
                        <h2 class="section-heading">{{ __('app.valeurs') }}</h2>
                    </div>
                </div>

                <ul class=" w-100 d-sm-block d-block d-md-flex d-lg-flex">

                    <li class="col-sm-12 col-md-3 mb-5">
                        <div class="icon-box text-center">
                            <div class="icon mb-5">
                                <img src="{{ asset('website/images/interventions/1.png') }}" alt="images">
                            </div>
                            <div class="content">
                                <h4><a href="{{ route('website.about') }}">{{ __('app.batiment_habitation') }}</a>
                                </h4>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-12 col-md-3 mb-5">
                        <div class="icon-box text-center">
                            <div class="icon mb-5">
                                <img src="{{ asset('website/images/interventions/2.png') }}" alt="images">
                            </div>
                            <div class="content">
                                <h4><a href="{{ route('website.about') }}">{{ __('app.batiment_commercial') }}</a>
                                </h4>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-12 col-md-3 mb-5">
                        <div class="icon-box text-center">
                            <div class="icon mb-5">
                                <img src="{{ asset('website/images/interventions/3.png') }}" alt="images">
                            </div>
                            <div class="content">
                                <h4><a href="{{ route('website.about') }}">{{ __('app.batiment_fublic') }}</a></h4>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-12 col-md-3 mb-5">
                        <div class="icon-box text-center">
                            <div class="icon mb-5">
                                <img src="{{ asset('website/images/interventions/4.png') }}" alt="images">
                            </div>
                            <div class="content">
                                <h4><a href="{{ route('website.about') }}">{{ __('app.batiment_fonctionnel') }}</a>
                                </h4>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </section>

    <section class="tf-space flat-quote blue-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <div class="quote-title wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="section-title">{{ __('app.our_missions') }}</div>
                        <h2 class="section-heading">{{ __('app.our_missions_text') }}</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="content-right wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="btn-1">
                            <a href="{{ route('website.nos-references') }}"
                                class="button"><span>{{ __('app.Nos références') }}</span></a>
                        </div>
                        <div class="btn-2">
                            <a href="{{ route('website.contact') }}"
                                class="button btn-style3"><span>{{ __('app.contact_us') }}</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-space flat-portfolio tf-space flat-portfolio pt-0 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="section-title">Synergy Packaging</div>
                    <h2 class="section-heading">{{ __('app.Nos missions') }}</h2>
                </div>
                {{-- <div class="col-md-6">
                    <div class="content-right wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="button-custom-slider">
                            <div class="swiper-button-next button-slide-custom-next"></div>
                            <div class="swiper-button-prev button-slide-custom-prev"></div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md-12">
                    <div class="swiper-container portfolio-slider carousel-2 wow fadeInUp" data-wow-delay="200ms"
                        data-wow-duration="1500ms">
                        <div class="swiper-wrapper">
                            <div id="section1" class="swiper-slide">
                                <div class="portfolio-post">
                                    <img src="{{ asset('website/assets/images/missions/m1.jpg') }}" alt="images"
                                        >
                                    <div class="read-more-content">
                                        <h3><a href="{{ route('website.nos-missions') }}">{{ __('missions.m1_title') }}</a>
                                        </h3>
                                        <a href="{{ route('website.nos-missions') }}" class="readmore"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="portfolio-post">
                                    <img src="{{ asset('website/assets/images/missions/m2.jpg') }}" alt="images"
                                        >
                                    <!-- <div class="content">
                                        <h3 class="text-white">{{ __('missions.m2_title') }}</h3>
                                    </div> -->
                                    <div class="read-more-content">
                                        <h3><a href="{{ route('website.nos-missions') }}">{{ __('missions.m2_title') }}</a>
                                        </h3>
                                        <a href="{{ route('website.nos-missions') }}" class="readmore"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="portfolio-post">
                                    <img src="{{ asset('website/assets/images/missions/m3.jpg') }}" alt="images"
                                        >
                                    
                                    <div class="read-more-content">
                                        <h3><a href="{{ route('website.nos-missions') }}">{{ __('missions.m3_title') }}</a>
                                        </h3>
                                        <a href="{{ route('website.nos-missions') }}" class="readmore"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="portfolio-post">
                                    <img src="{{ asset('website/assets/images/missions/m4.jpg') }}" alt="images"
                                        >        
                                    <div class="read-more-content">
                                        <h3><a href="{{ route('website.nos-missions') }}">{{ __('missions.m4_title') }}</a>
                                        </h3>
                                        <a href="{{ route('website.nos-missions') }}" class="readmore"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="tf-space flat-services-home-2 services">
        <div class="container">
            <!--<div class="row">-->
            <!--    <div class="col-md-12">-->
            <!--            <div class="funfact-title wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">-->
            <!--                <div class="section-title">{{ __('app.accompagnement') }}</div>-->
            <!--                <h2 class="section-heading">{{ __('app.Nos missions') }}</h2>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--</div>-->

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="services-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="post">
                            <img src="{{ asset('website/assets/images/missions/m1.jpg') }}" alt="images">
                            <div class="item">
                                <!--<div class="icon icon-1"></div>-->
                            </div>
                        </div>
                        <div class="content flat-approch">
                            <h3>{{ __('missions.m1_title') }}</h3>

                            <div class="approch-box-1">
                                <ul class="list">
                                    <li class=" text-justify">{{ __('missions.m1_desc_1') }}</li>
                                    <li class=" text-justify">{{ __('missions.m1_desc_2') }}
                                    </li>
                                    <li class=" text-justify">{{ __('missions.m1_desc_3') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-box wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInDown;">
                        <div class="post">
                            <img src="{{ asset('website/assets/images/missions/m2.jpg') }}" alt="images">
                            <div class="item">
                                <!--<div class="icon icon-3"></div>-->
                            </div>
                        </div>
                        <div class="content flat-approch">
                            <h3>{{ __('missions.m2_title') }}</h3>
                            <div class="approch-box-1">
                                <ul class="list">
                                    <li class=" text-justify">{{ __('missions.m2_desc_1') }}</li>
                                    <li class=" text-justify">{{ __('missions.m2_desc_2') }}</li>
                                    <li class=" text-justify">{{ __('missions.m2_desc_3') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="post">
                            <img src="{{ asset('website/assets/images/missions/m3.jpg') }}" alt="images">
                            <div class="item">
                                <!--<div class="icon icon-2"></div>-->
                            </div>
                        </div>
                        <div class="content flat-approch ">
                            <h3>{{ __('missions.m3_title') }}</h3>
                            <div class="approch-box-1">
                                <ul class="list">
                                    <li class=" text-justify">{{ __('missions.m3_desc_1') }}
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6  offset-lg-2">
                    <div class="services-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="post">
                            <img src="{{ asset('website/assets/images/missions/m1.jpg') }}" alt="images">
                            <div class="item">
                                <!--<div class="icon icon-1"></div>-->
                            </div>
                        </div>
                        <div class="content flat-approch">
                            <h3>Installation machine</h3>

                            <div class="approch-box-1">
                                <ul class="list">
                                    <li class=" text-justify">SYNERGY PACKAGING propose une large gamme de services pour
                                        satisfaire les besoins de chaque client : conseil technologique, assistance
                                        technique, maintenance et pièces de rechange pour les machines, formation…</li>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="services-box wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInDown;">
                        <div class="post">
                            <img src="{{ asset('website/assets/images/missions/m2.jpg') }}" alt="images">
                            <div class="item">
                                <!--<div class="icon icon-3"></div>-->
                            </div>
                        </div>
                        <div class="content flat-approch">
                            <h3>Maintenance machine</h3>
                            <div class="approch-box-1">
                                <ul class="list">
                                    <li class=" text-justify">SYNERGY PACKAGING propose une équipe de maintenance afin
                                        d’assurer la disponibilité des équipements et garantir ainsi leur bon
                                        fonctionnement,Ceci implique deux types d’interventions : <br>
                                        <u>Les interventions de maintenance</u> préventive servant à empêcher l’apparition
                                        de pannes ou de mauvais fonctionnements. <br>
                                        <u>Les maintenances curatives</u> qui traitent les dysfonctionnements.
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="text-center col-md-12 mt-5">
                <a href="{{ route('website.nos-references') }}"
                    class="button"><span>{{ __('app.Nos références') }}</span></a>
            </div>
        </div>
    </section> --}}
    <!-- flat team -->
    <section class="tf-space flat-team home-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="team-title wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="section-title">{{ __('app.discover') }}</div>
                        <h2 class="section-heading">{{ __('app.our_partners') }}</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="carousel-3 swiper-container  ">
                        <div class="swiper-wrapper">
                            @foreach ($partenaires as $partenaire)
                                {{-- <div>
                                    <img src="{{ asset($partenaire->logo) }}" alt="{{ $partenaire->entreprise }}">
                                </div> --}}
                                <div class="swiper-slide">
                                    <div class="team-content wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <img src="{{ asset($partenaire->logo) }}"
                                            alt="{{ $partenaire->entreprise }}">
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- /flat team -->
    <!-- flat testimonials -->
    {{-- <section class="tf-space flat-testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonials-title wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="section-title">Clients</div>
                        <h2 class="section-heading">{{ __('app.testimonials') }}</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="feedback-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon">
                            <img src="{{ asset('website/assets/images/icon/icon-quote.png') }}" alt="images">
                        </div>
                        <div class="button-custom-slider">
                            <div class="swiper-button-next button-slide-custom-next"></div>
                            <div class="swiper-button-prev button-slide-custom-prev"></div>
                        </div>
                        <div class="swiper-container slide">
                            <div class="swiper-wrapper">
                                @forelse ($testimonials as $testimonial)
                                    <div class="swiper-slide">
                                        <div class="inner">

                                            <div class="content p-4">
                                                <p>" {{ $testimonial->testimonial }} "</p>
                                                <div class="title-sub">{{ $testimonial->entreprise ?? '' }}</div>
                                                <h3 class="name"> <a
                                                        href="javascript:;;">{{ $testimonial->name }}</a> </h3>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                @endforelse


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- /flat testimonials -->
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

    <script>
        $('.partenaires-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1000,
            adaptiveHeight: false

        });
    </script>
@endsection
