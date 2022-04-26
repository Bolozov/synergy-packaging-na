@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h6 class="page-title">Tableau de bord</h6>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Bienvenue sur le tableau de bord de Synergy Packaging</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-4">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="assets/images/services-icon/01.png" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">Solutions</h5>
                            <h4 class="fw-medium font-size-24">{{ $expertisesCount }} </h4>

                        </div>
                        <div class="pt-2">
                            <div class="float-start">
                                <p class="text-white-50 mb-0 mt-1"><a href="{{ route('admin.expertises.index') }}"
                                        class="text-white-50">Afficher tout <i class="mdi mdi-arrow-right h5"></i> </a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="assets/images/services-icon/03.png" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">Projets</h5>
                            <h4 class="fw-medium font-size-24">{{ $referencesCount }}
                            </h4>
                        </div>
                        <div class="pt-2">
                            <div class="float-start">
                                <p class="text-white-50 mb-0 mt-1"><a href="{{ route('admin.references.index') }}"
                                        class="text-white-50">Afficher tout <i class="mdi mdi-arrow-right h5"></i> </a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="assets/images/services-icon/04.png" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">Références</h5>
                            <h4 class="fw-medium font-size-24">{{ $projectsCount }} </h4>

                        </div>
                        <div class="pt-2">
                            <div class="float-start">
                                <p class="text-white-50 mb-0 mt-1"><a href="{{ route('admin.projects.index') }}"
                                        class="text-white-50">Afficher tout <i class="mdi mdi-arrow-right h5"></i> </a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-xl-4 col-md-4">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="assets/images/services-icon/02.png" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">Visiteurs</h5>
                            <h4 class="fw-medium font-size-24">{{ $visitorsCount }} </h4>

                        </div>
                        <div class="pt-2">
                            <p class="text-white-50 mb-0 mt-1">{{ now()->startOfWeek()->format('d/m/Y') }} -
                                {{ now()->endOfWeek()->format('d/m/Y') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <i class="fa fa-briefcase fa-2x"></i>
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">Candidatures</h5>
                            <h4 class="fw-medium font-size-24">{{ $candidatesCount }} </h4>

                        </div>
                        <div class="pt-2">
                            <div class="float-start">
                                <p class="text-white-50 mb-0 mt-1"><a href="{{ route('admin.candidates.index') }}"
                                        class="text-white-50">Afficher la liste <i class="mdi mdi-arrow-right h5"></i> </a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <i class="fa fa-envelope-open fa-2x text-dark"></i>
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">Abonnés</h5>
                            <h4 class="fw-medium font-size-24">{{ $subscribersCount }} </h4>

                        </div>
                        <div class="pt-2">
                            <div class="float-start">
                                <p class="text-white-50 mb-0 mt-1"><a href="{{ route('admin.subscribers.index') }}"
                                        class="text-white-50">Afficher la liste <i class="mdi mdi-arrow-right h5"></i> </a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    </div>
@endsection
