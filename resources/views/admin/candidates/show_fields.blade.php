<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', __('models/candidates.fields.id').':') !!}
    <p>{{ $candidate->id }}</p>
</div>

<!-- First Name Field -->
<div class="form-group">
    {!! Form::label('first_name', __('models/candidates.fields.first_name').':') !!}
    <p>{{ $candidate->first_name }}</p>
</div>

<!-- Last Name Field -->
<div class="form-group">
    {!! Form::label('last_name', __('models/candidates.fields.last_name').':') !!}
    <p>{{ $candidate->last_name }}</p>
</div>

<!-- Date Of Birth Field -->
<div class="form-group">
    {!! Form::label('date_of_birth', __('models/candidates.fields.date_of_birth').':') !!}
    <p>{{ $candidate->date_of_birth->format('d/m/Y') }}</p>
</div>

<!-- Position Field -->
<div class="form-group">
    {!! Form::label('position', __('models/candidates.fields.position').':') !!}
    <p>{{ $candidate->position }}</p>
</div>

<!-- Cv Field -->
<div class="form-group">
    {!! Form::label('cv', __('models/candidates.fields.cv').':') !!}
    <p><a href="{{ asset($candidate->cv) }}" download>Visualiser</a></p>
</div>

<!-- Cover Letter Field -->
<div class="form-group">
    {!! Form::label('cover_letter', __('models/candidates.fields.cover_letter').':') !!}
    <p><a href="{{ asset($candidate->cover_letter) }}" download>Visualiser</a></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/candidates.fields.created_at').':') !!}
    <p>{{ $candidate->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/candidates.fields.updated_at').':') !!}
    <p>{{ $candidate->updated_at }}</p>
</div>

