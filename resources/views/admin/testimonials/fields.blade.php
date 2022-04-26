<div class="row mb-4">
    <!-- Name Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('name', __('models/testimonials.fields.name') . ': *') !!}
        {!! Form::text('name', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>

    <!-- Entreprise Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('entreprise', __('models/testimonials.fields.entreprise') . ':') !!}
        {!! Form::text('entreprise', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row mb-4">
    <!-- Testimonial Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('testimonial', __('models/testimonials.fields.testimonial') . ': *') !!}
        {!! Form::textarea('testimonial', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.testimonials.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
