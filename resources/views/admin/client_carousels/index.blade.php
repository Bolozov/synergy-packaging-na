@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">@lang('models/clientCarousels.plural')</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('flash::message')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>
                            @lang('models/clientCarousels.plural')
                           
                            <a class="float-end btn btn-success btn-sm" href="{{ route('admin.clientCarousels.create') }}"><i
                                    class="fa fa-plus "></i> Ajouter</a>
                        </div>
                        <div class="card-body">
                            @include('admin.client_carousels.table')
                            <div class="pull-right mr-3">

                                @include('coreui-templates::common.paginate', [
                                    'records' => $clientCarousels,
                                ])

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
