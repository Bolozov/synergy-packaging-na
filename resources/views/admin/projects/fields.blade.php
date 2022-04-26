<div class="row mb-3">
    <!-- Titre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titre', __('models/projects.fields.titre').':') !!}
    {!! Form::text('titre', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', __('models/projects.fields.image').':') !!}
    {!! Form::file('image' , ['class' => 'form-control']) !!}
</div>
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.projects.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
