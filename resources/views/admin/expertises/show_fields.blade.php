<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', __('models/expertises.fields.id') . ':') !!}
    <p>{{ $expertise->id }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', __('models/expertises.fields.title') . ':') !!}
    <p>{{ $expertise->title }}</p>
</div>

<!-- Items Field -->
<div class="form-group">
    {!! Form::label('items', __('models/expertises.fields.items') . ':') !!}
    <p>
    <ul>
        @foreach ($expertise->expertises as $item)
        <li> {{ $item->title }}</li>
        @endforeach
    </ul>
    </p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', __('models/expertises.fields.image') . ':') !!}
    <p><img src="{{ asset($expertise->image) }}" alt="{{ $expertise->title }}" class="image-fluid" width="50%">
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/expertises.fields.created_at') . ':') !!}
    <p>{{ $expertise->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/expertises.fields.updated_at') . ':') !!}
    <p>{{ $expertise->updated_at }}</p>
</div>
