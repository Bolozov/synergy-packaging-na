<!-- Entreprise Field -->
<div class="row">
    <div class="form-group col-sm-6">
    {!! Form::label('entreprise', __('models/clientCarousels.fields.entreprise').': *') !!}
    {!! Form::text('entreprise', null, ['class' => 'form-control']) !!}
</div>

<!-- Logo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logo', __('models/clientCarousels.fields.logo').': *') !!}
    {!! Form::file('logo' , ['class' => 'form-control']) !!}
</div>
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.clientCarousels.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
