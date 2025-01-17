<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', __('models/expertiseImages.fields.image').':') !!}
    {!! Form::file('image') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.expertiseImages.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
