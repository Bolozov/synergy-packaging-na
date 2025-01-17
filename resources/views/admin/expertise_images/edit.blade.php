@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('admin.expertiseImages.index') !!}">@lang('models/expertiseImages.singular')</a>
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
                              <strong>Edit @lang('models/expertiseImages.singular')</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($expertiseImages, ['route' => ['admin.expertiseImages.update', $expertiseImages->id], 'method' => 'patch', 'files' => true]) !!}

                              @include('admin.expertise_images.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection