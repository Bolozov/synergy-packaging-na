<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', __('models/expertiseImages.fields.id').':') !!}
    <p>{{ $expertiseImages->id }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', __('models/expertiseImages.fields.image').':') !!}
    <p>{{ $expertiseImages->image }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/expertiseImages.fields.created_at').':') !!}
    <p>{{ $expertiseImages->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/expertiseImages.fields.updated_at').':') !!}
    <p>{{ $expertiseImages->updated_at }}</p>
</div>

