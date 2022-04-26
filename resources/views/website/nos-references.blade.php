@extends('website.layouts.app')
@section('css')
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.0/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">
@endsection
@section('content')
    <section class="flat-title-page">
        <div class="container">
            <div class="row">
                <div class="breadcrumbs ">
                    {{-- <div class="breadcrumb-trail link-style-2">
                        <a class="home"
                            href="{{ route('website.home') }}">{{ __('app.Accueil') }}</a><span>{{ __('references.nos_references') }}</span>
                    </div> --}}
                    <h2 class="section-title-page">{{ __('references.nos_references') }}</h2>
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
    {{-- <section class="tf-space flat-services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="services-title wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <!--<div class="section-title">{{ __('metiers.decouvrir') }}</div>-->
                        <h2 class="section-heading">{{ __('references.realisations') }}</h2>
                    </div>
                </div>
                @forelse ($realisations as $realisation)
                    @if ($loop->even)

                        <div class="col-md-6">
                            <div class="services-post-left wow zoomIn" data-wow-delay="0ms" data-wow-duration="1500ms"
                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: zoomIn;">
                                <div class="fancySlider">
                                    <a href="{{ asset($realisation->image) }}"
                                        data-fancybox="{{ $realisation->{'title_' . config('app.locale')} }}"
                                        data-caption="{{ $realisation->{'title_' . config('app.locale')} }}">
                                        <img src="{{ asset($realisation->image) }}" alt="images">
                                    </a>
                                    @forelse ($realisation->images as $realisationImage)
                                        <a href="{{ asset($realisationImage->image) }}"
                                            data-fancybox="{{ $realisation->{'title_' . config('app.locale')} }}"
                                            data-caption="{{ $realisation->{'title_' . config('app.locale')} }}">
                                            <img src="{{ asset($realisationImage->image) }}" alt="images">
                                        </a>
                                    @empty

                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="services-content right wow fadeInUp" data-wow-delay="200ms"
                                data-wow-duration="1500ms"
                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                                <div class="title">{{ __('references.realisation') }}
                                    #0{{ $loop->iteration }}</div>
                                <h3>{{ $realisation->title }}</h3>
                                <ul class="list-quotes h4">
                                    <li><span class="bi bi-person-check"></span> <b>Client :
                                        </b>{{ $realisation->client }}</a>
                                    </li>
                                    <li><span class="bi bi-bank"></span> <b>Mission :
                                        </b>{{ $realisation->{'mission_' . config('app.locale')} }}</a>
                                    </li>
                                    <li><span class="bi bi-geo-alt-fill"></span> <b>{{ __('references.lieu') }} :
                                        </b>{{ $realisation->lieu }}</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    @elseif ($loop->odd)
                        <div class="col-md-6">
                            <div class="services-content left wow fadeInUp" data-wow-delay="200ms"
                                data-wow-duration="1500ms"
                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                                <div class="title">{{ __('references.realisation') }}
                                    #0{{ $loop->iteration }}</div>
                                <h3>{{ $realisation->title }}</h3>
                                <ul class="list-quotes h4">
                                    <li><span class="bi bi-person-check"></span> <b>Client :
                                        </b>{{ $realisation->client }}</a>
                                    </li>
                                    <li><span class="bi bi-bank"></span> <b>Mission :
                                        </b>{{ $realisation->{'mission_' . config('app.locale')} }}</a>
                                    </li>
                                    <li><span class="bi bi-geo-alt-fill"></span> <b>{{ __('references.lieu') }} :
                                        </b>{{ $realisation->lieu }}</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="services-post-right wow zoomIn" data-wow-delay="0ms" data-wow-duration="1500ms"
                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: zoomIn;">
                                <div class="fancySlider">
                                    <a href="{{ asset($realisation->image) }}"
                                        data-fancybox="{{ $realisation->{'title_' . config('app.locale')} }}"
                                        data-caption="{{ $realisation->{'title_' . config('app.locale')} }}">
                                        <img src="{{ asset($realisation->image) }}" alt="images">
                                    </a>
                                    @forelse ($realisation->images as $realisationImage)
                                        <a href="{{ asset($realisationImage->image) }}"
                                            data-fancybox="{{ $realisation->{'title_' . config('app.locale')} }}"
                                            data-caption="{{ $realisation->{'title_' . config('app.locale')} }}">
                                            <img src="{{ asset($realisationImage->image) }}" alt="images">
                                        </a>
                                    @empty

                                    @endforelse
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                    <div class="alert alert-dark">
                        Section Vide.
                    </div>
                @endforelse




            </div>
        </div>
    </section> --}}

    {{-- <section class="tf-space flat-team home-2">
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
                            @foreach ($projects as $project)
                                {{-- <div>
                                    <img src="{{ asset($partenaire->logo) }}" alt="{{ $partenaire->entreprise }}">
                                </div> 
                                <div class="swiper-slide">
                                    <div class="team-content wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <img src="{{ asset($project->image) }}" >
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}
    <!-- flat portfolio-grid -->
    <section class="tf-space flat-portfolio flat-portfolio-grid">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-5">
                    <div class="services-title wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <!--<div class="section-title">{{ __('metiers.decouvrir') }}</div>-->
                        <h2 class="section-heading">{{ __('app.our_partners') }}</h2>
                    </div>
                </div>


                <div class="fl-gallery isotope-gl mb-3">

                    @forelse ($projects as $realisation)
                        <div class="col-md-3 tf-living tf-interior {{ Str::snake($realisation->domaine) }}">
                            <div class="portfolio-post box-gallery">

                                <img src="{{ asset($realisation->image) }}" alt="images">

                            </div>
                            <!-- Modal -->
                            {{-- <div class="modal fade " id="{{ $realisation->id }}" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">

                                                <h4 class="modal-title">
                                                    {{ $realisation->{'title_' . config('app.locale')} }} </h4>
                                                <button type="button" class="close" data-dismiss="modal"> <i
                                                        class="fas fa-times-circle text-danger"> </i></button>
                                            </div>
                                            <div class="modal-body">
                                                @if (count($realisation->images) < 1)
                                                    <div class="w-100">

                                                        <img src="{{ asset($realisation->image) }}" alt="images">

                                                    </div>
                                                @else
                                                    <div class="fancySlider"
                                                        data-slider-id="slider-{{ $realisation->id }}">
                                                        <a href="{{ asset($realisation->image) }}"
                                                            data-fancybox="{{ $realisation->{'title_' . config('app.locale')} }}"
                                                            data-caption="{{ $realisation->{'title_' . config('app.locale')} }}">
                                                            <img src="{{ asset($realisation->image) }}" alt="images">
                                                        </a>
                                                        @foreach ($realisation->images as $realisationImage)
                                                            <a href="{{ asset($realisationImage->image) }}"
                                                                data-fancybox="{{ $realisation->{'title_' . config('app.locale')} }}"
                                                                data-caption="{{ $realisation->{'title_' . config('app.locale')} }}">
                                                                <img src="{{ asset($realisationImage->image) }}"
                                                                    alt="images">
                                                            </a>
                                                        @endforeach
                                                    </div>
                                                @endif


                                                <ul class="list-quotes h3 mt-5">
                                                    <li><span class="bi bi-person-check"></span> <b>Client :
                                                        </b>{{ $realisation->client }}</a>
                                                    </li>
                                                    <li><span class="bi bi-bank"></span> <b>Mission :
                                                        </b>{{ $realisation->{'mission_' . config('app.locale')} }}</a>
                                                    </li>
                                                    <li><span class="bi bi-geo-alt-fill"></span>
                                                        <b>{{ __('references.lieu') }} :
                                                        </b>{{ $realisation->lieu }}</a>
                                                    </li>

                                                </ul>
                                            </div>

                                        </div>

                                    </div>
                                </div> --}}

                        </div>
                    @empty
                        <div class="alert alert-dark text-center">
                            Section Vide.
                        </div>
                    @endforelse



                    <!--/fl-gallery -->
                </div>

            </div>
        </div>
    </section>
    <!-- /flat portfolio-grid -->
@endsection
@section('js')
    <script src="{{ asset('website/assets/js/jquery.isotope.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.0/jquery.fancybox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>


    <script>
        const toggleModal = (id) => {
            $(`#${id}`).modal();

            $().fancybox({
                selector: '.slick-slide:not(.slick-cloned)',
                hash: false
            });
        };

        // Init fancyBox

        // Init Slick
        $(".fancySlider").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: false,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 700,
            responsive: [{
                breakpoint: 960,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    </script>
@endsection
