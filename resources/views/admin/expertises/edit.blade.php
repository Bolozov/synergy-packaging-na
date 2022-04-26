@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('admin.expertises.index') !!}">@lang('models/expertises.singular')</a>
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
                              <strong>Modifier @lang('models/expertises.singular')</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($expertise, ['route' => ['admin.expertises.update', $expertise->id], 'method' => 'patch', 'files' => true]) !!}

                              @include('admin.expertises.fields')

                              {!! Form::close() !!}
                            </div>
                            @if (Route::is('admin.expertises.edit'))
                            <div class="row mt-4">
                                @forelse ($expertise->images as $i => $expertiseImage)
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img class="card-img-top img-fluid" src="{{ asset($expertiseImage->image) }}"
                                                alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Image {{ $i + 1 }}</h4>

                                                <form action="{{ route('admin.expertiseImages.destroy', $expertiseImage) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button type="submit" class="btn btn-danger waves-effect waves-light"
                                                        onclick="return(confirm('Confirmer la suppression de cette image ? '))">
                                                        Supprimer
                                                        </a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                @empty
                                    <p class="col"> Pas d'image dans cette gallerie.</p>
                                @endforelse
                                @endif
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection
