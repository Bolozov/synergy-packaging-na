@extends('layouts.app')

@section('content')
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.candidates.index') }}">@lang('models/candidates.singular')</a>
            </li>
            <li class="breadcrumb-item active">@lang('crud.detail')</li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                 @include('coreui-templates::common.errors')
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong>@lang('crud.detail')</strong>
                                  <a href="{{ route('admin.candidates.index') }}" class="btn btn-ghost-light">Back</a>
                             </div>
                             <div class="card-body">
                                 @include('admin.candidates.show_fields')
                             </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div>
@endsection
