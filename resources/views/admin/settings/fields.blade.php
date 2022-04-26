<div class="row mb-3">
    <!-- Contact Mail Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('contact_mail', __('models/settings.fields.contact_mail') . ':') !!}
        {!! Form::email('contact_mail', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Phone Number Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('phone_number', __('models/settings.fields.phone_number') . ':') !!}
        {!! Form::number('phone_number', null, ['class' => 'form-control']) !!}
    </div>
    <!-- Phone Number Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('fax_number', 'Numéro Fixe:') !!}
        {!! Form::text('fax_number', null, ['class' => 'form-control']) !!}
    </div>
</div>


<!-- Adress Field -->
<div class="form-group col-sm-12 mb-3">
    {!! Form::label('adresse', __('models/settings.fields.address') . ':') !!}
    {!! Form::text('adresse', null, ['class' => 'form-control']) !!}
</div>
<div class="row mb-3">

    <!-- Facbook Link Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('facbook_link', __('models/settings.fields.facbook_link') . ':') !!}
        {!! Form::text('facbook_link', null, ['class' => 'form-control']) !!}
    </div>
    <!-- Linkedin Link Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('linkedin_link', __('models/settings.fields.linkedin_link') . ':') !!}
        {!! Form::text('linkedin_link', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row mb-3">
    <!-- Youtube Link Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('youtube_link', __('models/settings.fields.youtube_link') . ':') !!}
        {!! Form::text('youtube_link', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Twitter Link Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('twitter_link', __('models/settings.fields.twitter_link') . ':') !!}
        {!! Form::text('twitter_link', null, ['class' => 'form-control']) !!}
    </div>

</div>
<!-- Instagram Link Field -->
<div class="form-group col-sm-6 mb-3">
    {!! Form::label('instagram_link', __('models/settings.fields.instagram_link') . ':') !!}
    {!! Form::text('instagram_link', null, ['class' => 'form-control']) !!}
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.settings.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
