<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', __('models/settings.fields.id').':') !!}
    <p>{{ $setting->id }}</p>
</div>

<!-- Contact Mail Field -->
<div class="form-group">
    {!! Form::label('contact_mail', __('models/settings.fields.contact_mail').':') !!}
    <p>{{ $setting->contact_mail }}</p>
</div>

<!-- Phone Number Field -->
<div class="form-group">
    {!! Form::label('phone_number', __('models/settings.fields.phone_number').':') !!}
    <p>{{ $setting->phone_number }}</p>
</div>

<!-- Adress Field -->
<div class="form-group">
    {!! Form::label('address', __('models/settings.fields.address').':') !!}
    <p>{{ $setting->address }}</p>
</div>

<!-- Facbook Link Field -->
<div class="form-group">
    {!! Form::label('facbook_link', __('models/settings.fields.facbook_link').':') !!}
    <p>{{ $setting->facbook_link }}</p>
</div>

<!-- Youtube Link Field -->
<div class="form-group">
    {!! Form::label('youtube_link', __('models/settings.fields.youtube_link').':') !!}
    <p>{{ $setting->youtube_link }}</p>
</div>

<!-- Twitter Link Field -->
<div class="form-group">
    {!! Form::label('twitter_link', __('models/settings.fields.twitter_link').':') !!}
    <p>{{ $setting->twitter_link }}</p>
</div>

<!-- Instagram Link Field -->
<div class="form-group">
    {!! Form::label('instagram_link', __('models/settings.fields.instagram_link').':') !!}
    <p>{{ $setting->instagram_link }}</p>
</div>

<!-- Linkedin Link Field -->
<div class="form-group">
    {!! Form::label('linkedin_link', __('models/settings.fields.linkedin_link').':') !!}
    <p>{{ $setting->linkedin_link }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/settings.fields.created_at').':') !!}
    <p>{{ $setting->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/settings.fields.updated_at').':') !!}
    <p>{{ $setting->updated_at }}</p>
</div>

