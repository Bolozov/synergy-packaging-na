@extends('layouts.app')

@section('content')
  <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">@lang('models/settings.plural')</h6>
            </div>

        </div>
    </div>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('admin.settings.index') !!}">@lang('models/settings.singular')</a>
      </li>
      <li class="breadcrumb-item active">@lang('crud.add_new')</li>
    </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>Create @lang('models/settings.singular')</strong>
                            </div>
                            <div class="card-body">
                                {!! Form::open(['route' => 'admin.settings.store']) !!}

                                   @include('admin.settings.fields')

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
@endsection
