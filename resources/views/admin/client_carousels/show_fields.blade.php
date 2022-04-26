<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', __('models/clientCarousels.fields.id').':') !!}
    <p>{{ $clientCarousel->id }}</p>
</div>

<!-- Entreprise Field -->
<div class="form-group">
    {!! Form::label('entreprise', __('models/clientCarousels.fields.entreprise').':') !!}
    <p>{{ $clientCarousel->entreprise }}</p>
</div>

<!-- Logo Field -->
<div class="form-group">
    {!! Form::label('logo', __('models/clientCarousels.fields.logo').':') !!}
    <p>{{ $clientCarousel->logo }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/clientCarousels.fields.created_at').':') !!}
    <p>{{ $clientCarousel->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/clientCarousels.fields.updated_at').':') !!}
    <p>{{ $clientCarousel->updated_at }}</p>
</div>

