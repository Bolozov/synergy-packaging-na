@extends('website.layouts.app')
@section('content')
    <section class="flat-title-page">
        <div class="container">
            <div class="row">
                <div class="breadcrumbs">
                    <h2 class="section-title-page">{{ __('app.careers') }}</h2>
                </div>
            </div>
        </div>
    </section>


    <section class="tf-space flat-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-title">
                        <div class="section-title">{{ __('app.careers') }}</div>
                        <h2 class="section-heading">{{ __('careers.join-us') }}</h2>
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
                    <form method="post" id="carrersform" class=""
                        action="{{ route('website.apply') }}" accept-charset="utf-8"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4 text-wrap clearfix">
                            <div class="form-group col-md-6">
                                <b><label for="last_name">{{ __('careers.last_name') }} <span
                                            class="text-danger">*</span></label></b>
                                <input type="text"
                                    class="form-control mt-3 {{ $errors->has('last_name') ? 'is-invalid' : '' }}"
                                    id="last_name" name="last_name" placeholder="{{ __('careers.last_name') }}"
                                    style="font-size: 14px" required>
                            </div>
                            <div class="form-group col-md-6">
                                <b><label for="first_name">{{ __('careers.first_name') }} <span
                                            class="text-danger">*</span></label></b>
                                <input type="text"
                                    class="form-control mt-3 {{ $errors->has('first_name') ? 'is-invalid' : '' }}"
                                    id="first_name" name="first_name" placeholder="{{ __('careers.first_name') }}"
                                    style="font-size: 14px" required>
                            </div>
                        </div>
                        <div class="row  mb-4 text-wrap clearfix">
                            <div class="form-group col-md-6">
                                <b><label for="position">{{ __('careers.position') }} <span
                                            class="text-danger">*</span></label></b>
                                <select class=" mt-3 {{ $errors->has('position') ? 'is-invalid' : '' }}" id="position"
                                    name="position" required>
                                    <option value="Commercial">{{ __('careers.Commercial') }}</option>
                                    <option value="Technique">{{ __('careers.Technique') }}</option>
                                    <option value="Comptabilité">{{ __('careers.Comptabilité') }}</option>
                                    <option value="Finance">{{ __('careers.Finance') }}</option>
                                    <option value="RH">{{ __('careers.RH') }}</option>
                                    <option value="Marketing">{{ __('careers.Marketing') }}</option>
                                    <option value="Ingénierie">{{ __('careers.Ingénierie') }}</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <b><label for="position">{{ __('careers.dob') }} <span
                                                class="text-danger">*</span></label></b>
                                    <input class="mt-3" type="date" name="date_of_birth" id="date_of_birth"
                                        max="{{ today()->format('Y-m-d') }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row  mb-4 text-wrap clearfix">
                            <div class="form-group col-md-6">
                                <b><label for="cv">CV <span class="text-danger">*</span></label></b>
                                <input class="form-control mt-3" type="file" name="cv" id="cv" required
                                    style="padding: 13px;font-size: 15px;">
                                <small class="form-text text-muted mt-2">
                                    (2Mo max. | PDF, DOC, DOCX)
                                </small>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <b><label for="cover_letter">{{ __('careers.cover_letter') }} <span
                                                class="text-danger">*</span></label></b>
                                    <input class="form-control mt-3" type="file" name="cover_letter" id="cover_letter" required
                                        style="padding: 13px;font-size: 15px;">
                                    <small class="form-text text-muted mt-2">
                                        (2Mo max | PDF, DOC, DOCX)
                                    </small>
                                </div>
                            </div>
                        </div>



                        <div class="m-4 text-center">
                            <button name="submit" type="submit"
                                class="button btn-style2"><span>{{ __('careers.submit') }}</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
@section('js')
    <script>
        $('#carrersform').submit(function() {
            $(this).find(':input[type=submit]').prop('disabled', true);
            $(this).find(':input[type=submit]').text('{{ __('contact.sending') }}');

        });
    </script>
@endsection
