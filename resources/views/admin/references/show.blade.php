@extends('layouts.app')

@section('title')

    Détails de la référence

@endsection

@section('content')

    <section class="section">

        <div class="section-header">

            <h1>Détails de la référence</h1>

            <div class="section-header-breadcrumb">

                <a href="{{ route('admin.references.index') }}" class="btn btn-primary form-btn float-right">Retour</a>

            </div>

        </div>

        @include('coreui-templates::common.errors')

        <div class="section-body">

            <div class="card">

                <div class="card-body">

                    @include('admin.references.show_fields')

                </div>

            </div>

        </div>

    </section>

@endsection

