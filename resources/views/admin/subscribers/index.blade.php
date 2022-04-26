@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">@lang('models/subscribers.plural')</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('flash::message')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>
                            @lang('models/subscribers.plural')
                             <a class="float-end btn btn-success btn-sm" href="{{ route('admin.subscribers.create') }}"><i
                                    class="fa fa-plus "></i> Ajouter</a>
                             <a class="float-end btn btn-info btn-sm" style="margin-right: 10px;" href="{{ route('admin.exportSubscribers') }}"><i
                                    class="fa fa-file-export"></i> Exporter la liste</a>
                        </div>
                        <div class="card-body">
                            @include('admin.subscribers.table')
                            <div class="pull-right mr-3">

                                @include('coreui-templates::common.paginate', [
                                    'records' => $subscribers,
                                ])

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
