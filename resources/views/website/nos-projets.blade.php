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
                <div class="breadcrumbs">
                    {{-- <div class="breadcrumb-trail link-style-2">
                        <a class="home" href="{{ route('website.home') }}">{{ __('app.Accueil') }}</a><span>Nos
                            Projets</span>
                    </div> --}}
                    <h2 class="section-title-page">Nos Projets</h2>
                </div>
            </div>
        </div>
    </section>

    <!--<section class="tf-space flat-skillset home-2">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-6">-->
    <!--                <div class="content-left wow zoomIn" data-wow-delay="0ms" data-wow-duration="1500ms"-->
    <!--                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: zoomIn;">-->
    <!--                    <div class="post">-->
    <!--                        <img src="{{ asset('website/images/missions-bg.jpg') }}" alt="images">-->

    <!--                        <div class="layer-skill">-->
    <!--                            <img src="{{ asset('website/assets/images/mark-page/layer-circel-skillset.png') }}"-->
    <!--                                alt="images">-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-6">-->
    <!--                <div class="content-right wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"-->
    <!--                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">-->
    <!--                    <div class="section-title">-->
    <!--                        Synergy Packaging-->
    <!--                    </div>-->
    <!--                    <h2 class="section-heading">{{ __('missions.section_heading') }}</h2>-->
    <!--<p>{!! __('missions.sub_heading') !!}</p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
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
                    <!--<div class="approch-box box-1 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"-->
                    <!--    style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">-->
                    <!--    <h3><span>01.</span> {{ __('metiers.creativite') }}</h3>-->
                    <!--    <p>{{ __('metiers.creativite_sub_text') }}</p>-->
                    <!--</div>-->
                    <!--<div class="approch-box box-2 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms"-->
                    <!--    style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">-->
                    <!--    <h3><span>02.</span> {{ __('metiers.engagement') }}</h3>-->
                    <!--    <p>-->
                    <!--        {{ __('metiers.engagement_sub_text') }}-->
                    <!--    </p>-->
                    <!--</div>-->
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


    <!-- flat portfolio-grid -->

    <section class="tf-space flat-portfolio flat-portfolio-grid">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-5">
                    <div class="services-title wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="section-title">Découvrir</div>
                        <h2 class="section-heading">{{ __('references.realisations') }}</h2>
                    </div>
                </div>


                {{-- <div class="col-md-12 mt-3 mb-3">
                        <h4 class=""> <i class="fa fa-calendar-alt"></i> {{ __('references.Projets') }} {{ $year }}</h4>
                    </div> --}}
                <div class="col-md-12 mt-5">
                    <div class="portfolio-menu">
                        <ul class="flat-filter-isotope">
                            <li class="active"><a href="#" data-filter="*">{{ __('references.tout') }}</a>
                            </li>
                            @foreach ($realisations_domaines as $domaine)
                                @if (!is_null($domaine->domaine))
                                    <li><a href="#"
                                            data-filter=".{{ Str::snake($domaine->domaine) }}">{{ __('references.' . trim($domaine->domaine)) }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="fl-gallery isotope-gl mb-4">
                    @forelse ($realisations as  $realisation)
                        <div class="tf-col-4 tf-living tf-interior {{ Str::snake($realisation->domaine) }}">
                            <div class="portfolio-post box-gallery">

                                <img src="{{ asset($realisation->image) }}" alt="images">
                                <div class="read-more-content">
                                    <h3><a data-toggle="modal" href="javascript:;;"
                                            onclick="toggleModal({{ $realisation->id }})">{{ __('references.read_more') }}</a>
                                    </h3>
                                    <a data-toggle="modal" href="#realisation{{ $realisation->id }}"
                                        class="readmore"></a>

                                </div>
                                <h6 class="text-dark mt-2">
                                    {{ $realisation->{'title_' . config('app.locale')} }}
                                </h6>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade " id="{{ $realisation->id }}" role="dialog">
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
                                                <div class="w-100 text-center">

                                                    <img src="{{ asset($realisation->image) }}" alt="images">

                                                </div>
                                            @else
                                                <div class="fancySlider text-center"
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

                                            <table class="table table-striped">

                                                <tbody>
                                                    <tr>
                                                        <th scope="row"><span class="bi bi-person-check mr-2"></span>
                                                            <b>Client </b>
                                                        </th>
                                                        <td>{{ $realisation->client }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><span class="bi bi-bank mr-2"></span>
                                                            <b>Mission :</b>
                                                        </th>
                                                        <td>{{ $realisation->{'mission_' . config('app.locale')} }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><span class="bi bi-geo-alt-fill mr-2"></span>
                                                            <b>{{ __('references.lieu') }} :</b>
                                                        </th>
                                                        <td>{{ $realisation->lieu }}</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                            {{-- <ul class="list-quotes h3 mt-5">

                                                    <li><span class="bi bi-bank"></span> <b> :
                                                        </b></a>
                                                    </li>
                                                    <li><span class="bi bi-geo-alt-fill"></span>
                                                        <b>{{ __('references.lieu') }} :
                                                        </b>{{ $realisation->lieu }}</a>
                                                    </li>

                                                </ul> --}}
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>


                    @empty
                        <div class="alert alert-dark">
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
