<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', __('models/testimonials.fields.id').':') !!}
    <p>{{ $testimonial->id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/testimonials.fields.name').':') !!}
    <p>{{ $testimonial->name }}</p>
</div>

<!-- Entreprise Field -->
<div class="form-group">
    {!! Form::label('entreprise', __('models/testimonials.fields.entreprise').':') !!}
    <p>{{ $testimonial->entreprise }}</p>
</div>

<!-- Testimonial Field -->
<div class="form-group">
    {!! Form::label('testimonial', __('models/testimonials.fields.testimonial').':') !!}
    <p>{{ $testimonial->testimonial }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/testimonials.fields.created_at').':') !!}
    <p>{{ $testimonial->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/testimonials.fields.updated_at').':') !!}
    <p>{{ $testimonial->updated_at }}</p>
</div>

