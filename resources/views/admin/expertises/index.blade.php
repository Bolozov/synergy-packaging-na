@extends('layouts.app')
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">@lang('models/expertises.plural')</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('flash::message')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>
                            @lang('models/expertises.plural')

                            <a class="pull-right" href="{{ route('admin.expertises.create') }}"><i
                                    class="fa fa-plus-square fa-lg"></i></a>
                        </div>
                        <div class="card-body">
                            @include('admin.expertises.table')
                            <div class="pull-right mr-3">

                                @include('coreui-templates::common.paginate', [
                                    'records' => $expertises,
                                ])

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
