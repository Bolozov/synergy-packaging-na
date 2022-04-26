<div class="row mb-3">
    <!-- First Name Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('first_name', __('models/candidates.fields.first_name') . ':') !!}
        {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Last Name Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('last_name', __('models/candidates.fields.last_name') . ':') !!}
        {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row mb-3">
    <!-- Date Of Birth Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('date_of_birth', __('models/candidates.fields.date_of_birth') . ':') !!}
        {!! Form::date('date_of_birth', null, ['class' => 'form-control', 'id' => 'date_of_birth']) !!}
    </div>
    <!-- Position Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('position', __('models/candidates.fields.position') . ':') !!}
        {!! Form::select('position', ['Commercial' => 'Commercial', 'Technique' => 'Technique', 'Comptabilité' => 'Comptabilité', 'Finance' => 'Finance', 'RH' => 'RH', 'Marketing' => 'Marketing', 'Ingénierie' => 'Ingénierie'], null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row mb-3">
    <!-- Cv Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('cv', __('models/candidates.fields.cv') . ':') !!}
        {!! Form::file('cv',['class' => 'form-control']) !!}
    </div>

    <!-- Cover Letter Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('cover_letter', __('models/candidates.fields.cover_letter') . ':') !!}
        {!! Form::file('cover_letter',['class' => 'form-control']) !!}
    </div>
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.candidates.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
