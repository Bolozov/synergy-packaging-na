@extends('website.layouts.app')
@section('content')
    <div class="content">

        <!-- About  -->
        <section class="about section">
            <div class="container">
                <header class="section-header">
                    <h2 class="section-title">ILS M'ONT FAIT <span class="text-primary">CONFIANCE</span></h2>
                </header>

            </div>
        </section>

        <!-- Projects -->

        <section class="projects">
            <div class="js-projects-gallery">
                <div class="row">
                    <div class="project project-light col-sm-6 col-md-4 col-lg-3">
                        <a href="img/projects/1-480x880.jpg" title="Residential care project in Paris">
                            <figure>
                                <img alt="" src="img/projects/1-480x880.jpg">
                                <figcaption>
                                    <h3 class="project-title">
                                        Residential care<br> project in Paris
                                    </h3>
                                    <h4 class="project-category">
                                        Architecture
                                    </h4>
                                    <div class="project-zoom"></div>
                                </figcaption>
                            </figure>
                        </a>
                    </div>

                </div>
            </div>

        </section>

        @include('website.partials.footer')

    </div>
@endsection
