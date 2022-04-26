<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Titre:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image',['class' => 'form-control']) !!}
    {{-- Help Text --}}
    <small class="text-muted text-danger">
        <i class="fa fa-info-circle"></i>
        Les images doivent avoir ideéalement 480x880 comme dimension.
    </small>
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Sauvegarder', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.references.index') }}" class="btn btn-light">Annuler</a>
</div>
