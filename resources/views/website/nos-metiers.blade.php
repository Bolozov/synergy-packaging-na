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
                        <a class="home"
                            href="{{ route('website.home') }}">{{ __('app.Accueil') }}</a><span>{{ __('metiers.NOS_METIERS') }}</span>
                    </div> --}}
                    <h2 class="section-title-page">{{ __('metiers.NOS_METIERS') }}</h2>
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
                        <h2 class="section-heading">{{ __('app.beav') }}</h2>
                    </div>

                </div>

            </div>
        </div>

    </section>
    <section class="tf-space flat-services">
        <div class="container">
            <div class="col-md-12">
                <div class="services-title wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"
                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                    <h2 class="section-heading">{{ ucwords(__('metiers.NOS_METIERS')) }} </h2>
                </div>
                @if (Session::has('success'))
                        <div class="cold-md-12 text-center pt-5 py-5">
                            <div class="alert alert-success alert-dismissible fade show mb-2 mt-2" role="alert">
                                <h6>{{ Session::get('success') }}</h6>
                            </div>
                        </div>
                    @endif
                    @if (Session::has('error'))
                        <div class="cold-md-12 text-center pt-5 py-5">
                            <div class="alert alert-danger alert-dismissible fade show mb-2 mt-2" role="alert">
                                <h6>{{ Session::get('error') }}</h6>
                            </div>
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="cold-md-12 text-left pt-5 py-5">
                            <div class="alert alert-danger alert-dismissible fade show mb-2 mt-2" role="alert">
                                @foreach ($errors->all() as $error)
                                    {{ $error }} <br>
                                @endforeach
                            </div>
                        </div>
                    @endif    
            </div>

            @foreach ($metiers as $metier)
                <div class="row mb-5 ">
                    <div class="col-md-6 col-12">
                        <div class="wow fadeIn d-block" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="card">
                                <div class="card-body">
                                    <div class="carousel-metier">
                                        @foreach ($metier->images as $image)
                                            <img class="d-block img-fluid " src="{{ asset($image->image) }}" alt=""
                                                loading="lazy">
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 col-12">
                        <div data-id="{{ $metier->{'title_' . config('app.locale')} }}" class="card h-100 p-5 text-center text-white bg-primary wow fadeIn" data-wow-delay="200ms"
                            data-wow-duration="1500ms">
                            <div class="card-header bg-primary  d-flex align-items-center  justify-content-center text-center">
                                @if ($metier->logo)
                                    <img src="{{ asset($metier->logo) }}" class="align-self-start mr-3"
                                        style="height: 150px;">
                                @endif
                                <div class="text-center">
                                    <h4 class="card-title mb-4" >{{ $metier->{'title_' . config('app.locale')} }}
                                    </h4>
                                </div>
                            </div>
                            <div class="card-body w-100">
                                <div class="card-text text-left">
                                    <ul class="list-group list-group-flush overflow-hidden ">
                                        @foreach ($metier->expertises as $expertise)
                                            <li  class="text-white bg-primary list-group-item mt-2 mb-2 border-0 border-bottom d-inline"
                                                style="line-height:2em ">
                                                <p class="text-white bg-primary">
                                                    <span class='fas fa-badge-check'></span>
                                                    {{ $expertise->{'title_' . config('app.locale')} }}
                                                </p>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="row mt-5">
                                        <div class="col-md-4 col-sm-12 col-xs-12"> <a
                                                href="{{ asset($metier->brochure) }}" download
                                                class="btn px-4 py-4 btn-style3 mb-4 w-100 solution-btn">
                                                <span class="fa fa-file pr-2"></span> Brochure</a>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12"><a
                                                href="{{ $metier->youtube ?? 'javascript:void(0)'}}"
                                                class="btn px-4 py-4 btn-style3 mb-4 w-100 solution-btn" target="{{ $metier->youtube ? '__blank' : '' }}">
                                                <span class="fa fa-video pr-2"></span> Video</a>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12"> <button class="btn px-4 py-4 btn-style3 mb-4 w-100 solution-btn quote_click" type="button" data-target="#quoteForm" data-toggle="modal"><span class="fa fa-file-alt pr-2"> </span>{{ __('metiers.QUOTE') }}</button>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- QUOTE MODAL -->
                <div class="modal fade" id="quoteForm" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
              
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                      <div class="modal-content p-md-3">
                        <div class="modal-header">
                          <h4 class="modal-title" id="quote">{{ __('quote.section_heading') }} <span class="text-primary">{{ __('quote.sub_heading') }}</span></h4>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                          <form method="post" id="quoteForm" action="{{ route('website.submit-quote') }}" accept-charset="utf-8">
                        @csrf
                            <div class="row">
                              <div class="form-group col-lg-6">
                                <label class="font-weight-bold text-big" for="firstname">{{ __('quote.firstName') }}<span class="text-primary ml-1">*</span></label>
                                <input class="quoteInput form-control {{ $errors->has('firstname') ? 'is-invalid' : '' }}" id="firstname" name="firstname" type="text" placeholder="{{ __('quote.placeholder_firstName') }}" required="" />
                              </div>
                              <div class="form-group col-lg-6">
                                <label class="font-weight-bold text-big" for="lastname">{{ __('quote.lastName') }}<span class="text-primary ml-1">*</span></label>
                                <input class="quoteInput form-control {{ $errors->has('lastname') ? 'is-invalid' : '' }}" id="lastname" name="lastname"  type="text" placeholder="{{ __('quote.placeholder_lastName') }}" required="" />
                              </div>
                              <div class="form-group col-lg-12">
                                <label class="font-weight-bold text-big" for="email">{{ __('quote.email') }}<span class="text-primary ml-1">*</span></label>
                                <input class="quoteInput form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" name="email" type="email" placeholder="{{ __('quote.placeholder_email') }}" required="" />
                              </div>
                              <div class="form-group col-lg-6">
                                <label class="font-weight-bold text-big" for="phone">{{ __('quote.phone') }}</label>
                                <input class="quoteInput form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" id="phone" name="phone" type="tel" placeholder="{{ __('quote.placeholder_phone') }}" />
                              </div>
                              <div class="form-group col-lg-6">
                                <label class="font-weight-bold text-big" for="projecttype">{{ __('quote.solution') }}<span class="text-primary ml-1">*</span></label>
                                <input class="quoteInput form-control" value="" id="projecttype" name="projecttype" type="text" disabled required />
                              </div>
                              <div class="form-group col-lg-12">
                                <label class="font-weight-bold text-big" for="projectdetail">{{ __('quote.details') }}<span class="text-primary ml-1">*</span></label>
                                <textarea class="quoteInput form-control {{ $errors->has('projectdetail') ? 'is-invalid' : '' }}" id="projectdetail" name="projectdetail" rows="5" placeholder="{{ __('quote.placeholder_details') }}" required></textarea>
                              </div>
                              <div class="form-group col-lg-12">
                                <button class="button" name="submit" style="padding: 10px 15px;" type="submit">{{ __('quote.submit') }}</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <script>
         $('#quoteForm').submit(function() {
            $(this).find(':input[type=submit]').prop('disabled', true);
            $(this).find(':input[type=submit]').text('{{ __('contact.sending') }}');

        });
        $(".quote_click").click(function () {
            var quoteId = $(this).parent().parent().parent().parent().parent().data("id");
            $("#projecttype").val( quoteId );
        });
        $('.carousel-metier').slick({
            autoplay: true,
            autoplaySpeed: 1500,
            nav: false,
            arrows: false,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>
@endsection
