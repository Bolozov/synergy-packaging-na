<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', __('models/projects.fields.id').':') !!}
    <p>{{ $project->id }}</p>
</div>

<!-- Titre Field -->
<div class="form-group">
    {!! Form::label('titre', __('models/projects.fields.titre').':') !!}
    <p>{{ $project->titre }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', __('models/projects.fields.image').':') !!}
    <p>{{ $project->image }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/projects.fields.created_at').':') !!}
    <p>{{ $project->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/projects.fields.updated_at').':') !!}
    <p>{{ $project->updated_at }}</p>
</div>

