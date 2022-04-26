@extends('website.layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">
@endsection
@section('content')
    <section class="flat-title-page">
        <div class="container">
            <div class="row">
                <div class="breadcrumbs">
                    {{-- <div class="breadcrumb-trail link-style-2">
                        <a class="home" href="{{ route('website.home') }}">{{ __('app.Accueil') }}</a><span>À
                            PROPOS DE NOUS</span>
                    </div> --}}
                    <h2 class="section-title-page"> {{ __('about.section-title') }}</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="tf-space flat-approch">
        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <div class="content-left wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <img src="{{ asset('website/assets/images/about/1.jpg') }}" alt="images" style="height: 500px">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="approch-title wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInDown;">
                        <div class="section-title">
                            Synergy Packaging
                        </div>
                        <h2 class="section-heading text-justify">{{ __('app.beav') }}</h2>
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
                    <section class="tf-space flat-counter tf-counter">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="list-count">
                                        <li class="item col-md-4">
                                            {{-- <div class="img-counter">
                                <img src="{{ asset('website/assets/images/icon/img-counter-01.png') }}" alt="images">
                            </div> --}}
                                            <div class="content text-center">
                                                <h3 data-inviewport="yes">+6</h3>
                                                <span>{{ __('about.kpi1') }} </span>
                                            </div>
                                            <h2>01</h2>
                                        </li>
                                        <li class="item col-md-4">
                                            {{-- <div class="img-counter">
                                <img src="{{ asset('website/assets/images/icon/img-counter-01.png') }}" alt="images">
                            </div> --}}
                                            <div class="content text-center">
                                                <h3>+50</h3>
                                                <span>{{ __('about.kpi2') }}
                                                </span>
                                            </div>
                                            <h2>02</h2>
                                        </li>
                                        <li class="item col-md-4">
                                            {{-- <div class="img-counter">
                                <img src="{{ asset('website/assets/images/icon/img-counter-01.png') }}" alt="images">
                            </div> --}}
                                            <div class="content text-center">
                                                <h3>+200</h3>
                                                <span>{{ __('about.kpi3') }}
                                                </span>
                                            </div>
                                            <h2>03</h2>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </div>

    </section>

    <section class="tf-space flat-fun-fact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="funfact-content-left">
                        <h2 class="section-heading">Synergy Packaging</h2>
                        <p>{{ __('about.desc-paragraph-1') }}</p>
                        <p>{{ __('about.desc-paragraph-2') }}</p>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content-right wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                        <video id="video" controls><source src='https://synergy-packaging.bkhinvest.com/uploads/synergy-promo.mp4' type='video/mp4'></video>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="synergy-promo" aria-hidden="true">
        <div class="video-modal-dialog" role="document">
            <div class="modal-content">
            <div class="video-modal-body">
            <button type="button" class="close" onClick="closeVideo()" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>        
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                </div>
            </div>
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
                        <h2 class="section-heading">{{ __('about.our-valeurs') }}</h2>
                    </div>
                    <div class="col-md-6 approch-box box-1 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <h3><span>01.</span> {{ __('about.engagement-title') }} </h3>
                        <p>{{ __('about.engagement-desc') }}
                        </p>
                    </div>
                    <div class="col-md-6 approch-box box-2 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                        <h3><span>02.</span> {{ __('about.quality-title') }}</h3>
                        <p>{{ __('about.quality-desc') }}

                        </p>
                    </div>
                    <br>

                </div>

            </div>
            <div class="row">
                <div class="col-md 12">
                    <div class="col-md-6 approch-box box-1 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <h3><span>03.</span> {{ __('about.confiance-title') }}</h3>
                        <p>{{ __('about.confiance-des') }}
                        </p>
                    </div>
                    <div class="col-md-6 approch-box box-2 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                        <h3><span>04.</span> {{ __('about.sharing-title') }}
                        </h3>
                        <p> {{ __('about.sharing-desc') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <div class="tf-space ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="approch-title wow fadeInDown mb-5" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInDown;">
                        <div class="section-title">
                            Synergy Packaging
                        </div>
                        <h2 class="section-heading">{{ __('about.history') }}</h2>
                    </div>
                    <div class=" wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        {{-- <p class="text-justify">
                            En 2017, la création de SYNERGY PACKAGING
                            C’est une SARL, un bureau de service spécialisé dans les solutions d’emballage dans l’industrie
                            agroalimentaire et l’industrie médicale.

                        </p> --}}
                        <ul class="timeline">
                            <li>
                                <p class="text-justify text-dark">
                                    <strong>2021</strong> <br>
                                    {!! __('about.history-1') !!}

                                </p>
                            </li>

                            <li>
                                <p class="text-justify text-dark">
                                    <strong>2020</strong> <br>
                                    {!! __('about.history-2') !!}

                                </p>
                            </li>
                            <li>
                                <p class="text-justify text-dark">
                                    <strong>2019</strong> <br>
                                    {!! __('about.history-3') !!}


                                </p>
                            </li>
                            <li>
                                <p class="text-justify text-dark">
                                    <strong>2018</strong> <br>
                                    {!! __('about.history-4') !!}


                                </p>
                            </li>
                            <li>
                                <p class="text-justify text-dark">
                                    <strong>2017</strong> <br>
                                    {!! __('about.history-5') !!}


                                </p>
                            </li>

                        </ul>
                    </div>

                </div>

            </div>

        </div>
    </div>
   
    <!-- ======= Team Section ======= -->
    <section id="team" class="team tf-space flat-team">

      <div class="container" data-aos="fade-up">
        <header class="team-title wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
            <div class="section-title">{{ __('about.team') }}</div>
            <h2 class="section-heading">{{ __('about.experts') }}</h2>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-8 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('website/assets/images/team/1.jpg') }}"  class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
              
                <h4>Ghazi Kerfai</h4>
                <span>{!! __('about.dd') !!}</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-8 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('website/assets/images/team/2.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
             
                <h4>Nadhem Kahouech</h4>
                <span>{{ __('about.dtcp') }}</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-8 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('website/assets/images/team/3.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Mehdi Bahroun</h4>
                <span>{!! __('about.dc') !!}</span>
              </div>
            </div>
          </div>


        </div>

      </div>
    
  
    </section><!-- End Team Section -->
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

    <script>
        function closeVideo() {
            var video = document.getElementById('video');
            video.pause();
            video.currentTime = 0;
            video.srcObject = null;
        }
        $('.carousel-metier').slick({
            autoplay: true,
            autoplaySpeed: 1500,
            nav: false,
            arrows: false,
        });
        $('.funfact-video').fancybox({
            youtube: {
                controls: 0,
                showinfo: 0
            },

        });
    </script>
@endsection
