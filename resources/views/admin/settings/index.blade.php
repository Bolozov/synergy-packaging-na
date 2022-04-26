@extends('layouts.app')

@section('content')
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">@lang('models/settings.plural')</h6>
            </div>

        </div>
    </div>
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('flash::message')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">

                            <h6> <i class="fa fa-cog"></i> Informations du siteweb</h6>
                        </div>
                        <div class="card-body">
                            @include('admin.settings.table')
                            <div class="pull-right mr-3">

                                @include('coreui-templates::common.paginate', [
                                    'records' => $settings,
                                ])

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
