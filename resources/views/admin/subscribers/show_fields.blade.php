<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', __('models/subscribers.fields.id').':') !!}
    <p>{{ $subscriber->id }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', __('models/subscribers.fields.email').':') !!}
    <p>{{ $subscriber->email }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/subscribers.fields.created_at').':') !!}
    <p>{{ $subscriber->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/subscribers.fields.updated_at').':') !!}
    <p>{{ $subscriber->updated_at }}</p>
</div>

