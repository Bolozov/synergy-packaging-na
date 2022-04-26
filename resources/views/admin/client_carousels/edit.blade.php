@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('admin.clientCarousels.index') !!}">@lang('models/clientCarousels.singular')</a>
          </li>
          <li class="breadcrumb-item active">@lang('crud.edit')</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Edit @lang('models/clientCarousels.singular')</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($clientCarousel, ['route' => ['admin.clientCarousels.update', $clientCarousel->id], 'method' => 'patch', 'files' => true]) !!}

                              @include('admin.client_carousels.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection