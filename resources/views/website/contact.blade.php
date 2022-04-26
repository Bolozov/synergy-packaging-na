@extends('website.layouts.app')
@section('content')
    <section class="flat-title-page">
        <div class="container">
            <div class="row">
                <div class="breadcrumbs">
                    {{-- <div class="breadcrumb-trail link-style-2">
                        <a class="home"
                            href="{{ route('website.home') }}">{{ __('app.Accueil') }}</a><span>CONTACT</span>
                    </div> --}}
                    <h2 class="section-title-page">CONTACT</h2>
                </div>
            </div>
        </div>
    </section>


    <section class="tf-space flat-contact-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-title">
                        <div class="section-title">contact</div>
                        <h2 class="section-heading">{{ __('contact.section_heading') }}</h2>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-box link-style-3">
                        <div class="section-title">{{ __('contact.phone') }}</div>
                        <h3 class="text-center mt-3 my-5"><i class="bi bi-telephone"></i></h3>
                        <h5 class="text-center">+{{ $settings->phone_number }}</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-box link-style-3">
                        <div class="section-title">{{ __('contact.whatsapp') }}</div>
                        <h3 class="text-center mt-3 my-5"><i class="bi bi-telephone-fill"></i></h3>
                        <h5 class="text-center">+{{ $settings->phone_number }}</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-box link-style-3">
                        <div class="section-title">Email</div>
                        <h3 class="text-center mt-3 my-5"><i class="bi bi-envelope-check"></i></h3>
                        <h5 class="text-center">{{ $settings->contact_mail }}</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-box link-style-3">
                        <div class="section-title">{{ __('contact.address') }}</div>
                        <h3 class="text-center mt-3 my-5"><i class="bi bi-geo-fill"></i></h3>
                        <h5 class="text-center">{{ $settings->address }}</h5>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3192.8125695373565!2d10.193764414747664!3d36.8469646727666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd3589db3e1fd5%3A0x4044fb77944d7b5c!2sSynergy%20packaging!5e0!3m2!1sfr!2stn!4v1646930472585!5m2!1sfr!2stn"
            width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
    
    <section class="tf-space flat-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-title">
                        <div class="section-title">contact</div>
                        <h2 class="section-heading">{{ __('contact.sub_heading') }}</h2>
                    </div>
                    <!-- Success message -->
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
                    <form method="post" id="contactform" class=""
                        action="{{ route('website.submit-contact') }}" accept-charset="utf-8">
                        @csrf
                        <div class="row text-wrap clearfix">
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control {{ $errors->has('nom') ? 'is-invalid' : '' }}"
                                    id="nom" name="nom" placeholder="{{ __('contact.nom') }}" style="font-size: 14px">

                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control {{ $errors->has('prenom') ? 'is-invalid' : '' }}"
                                    id="prenom" name="prenom" placeholder="{{ __('contact.prenom') }}"
                                    style="font-size: 14px">
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text"
                                    class="form-control {{ $errors->has('entreprise') ? 'is-invalid' : '' }}"
                                    id="entreprise" name="entreprise" placeholder="{{ __('contact.entreprise') }}"
                                    style="font-size: 14px">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="email"
                                        class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email"
                                        name="email" placeholder="Email *" required style="font-size: 14px" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="tel" class="form-control {{ $errors->has('tel') ? 'is-invalid' : '' }}"
                                        id="tel" name="tel" placeholder="Téléphone *" required style="font-size: 14px"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form- {{ $errors->has('sujet') ? 'is-invalid' : '' }}"
                                        id="sujet" name="sujet" placeholder="{{ __('contact.sujet') }}">
                                </div>
                            </div>
                        </div>

                        <textarea id="comment-message" name="message" rows="8" tabindex="4" placeholder="Message..."
                            aria-required="true" class="{{ $errors->has('message') ? 'is-invalid' : '' }}"
                            required></textarea>

                        <div class="m-4 text-center">
                            <button name="submit" type="submit"
                                class="button btn-style2"><span>{{ __('contact.send') }}</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </section>
@endsection
@section('js')
    <script>
        $('#contactform').submit(function() {
            $(this).find(':input[type=submit]').prop('disabled', true);
            $(this).find(':input[type=submit]').text('{{ __('contact.sending') }}');

        });
    </script>
@endsection
