<!-- Title Field -->
<div class="row">
    <div class="form-group col-md-6">
        {!! Form::label('title', __('models/expertises.fields.title') . ': (FR)') !!}
        {!! Form::text('title_fr', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('title', __('models/expertises.fields.title') . ': (EN)') !!}
        {!! Form::text('title_en', null, ['class' => 'form-control']) !!}
    </div>

</div>


<!-- Items Field -->
<div class="form-group col-sm-12 col-lg-12 mt-4 mb-4">
    {!! Form::label('items', __('models/expertises.fields.items') . ':') !!}
    <!-- Add rows button-->
    <a class="btn btn-success btn-sm" id="insertRow" href="#"><i class="fa fa-plus"></i></a>

    <div class="table-responsive mt-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Titre</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @if (Route::is('admin.expertises.edit'))
                    @foreach ($expertise->expertises as $item)
                        <tr>
                            <td><input class="form-control rounded-0" type="text" value="{{ $item->title_fr }}"
                                    name="expertise[fr][]" placeholder="Description d'expertise (FRANCAIS)" required>
                            </td>
                            <td>

                            <td><input class="form-control rounded-0" type="text" value="{{ $item->title_en }}"
                                    name="expertise[en][]" placeholder="Description d'expertise (ANGLAIS)" required>
                            </td>
                            <td>
                                <button class="btn btn-danger rounded-0" id="deleteRow"><i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td><input class="form-control rounded-0" type="text" name="expertise[fr][]"
                                placeholder="Description d'expertise (FRANCAIS)" required></td>
                        <td>

                        <td><input class="form-control rounded-0" type="text" name="expertise[en][]"
                                placeholder="Description d'expertise (ANGLAIS)" required></td>
                        <td>

                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>

</div>

<!-- Images Field -->
<div class="row">
    <div class="form-group col-sm-4 my-4">
        {!! Form::label('images', "Gallerie d'images:") !!}
        {!! Form::file('images[]', ['accept' => 'image/*', 'multiple' => 'multiple', 'class' => 'form-control']) !!}
        <small id="emailHelp" class="form-text text-danger">Vous pouvez sélectionner plusieurs photos.</small>

    </div>
    <div class="form-group col-sm-4 my-4">
        {!! Form::label('logo', 'Logo') !!}
        {!! Form::file('logo', ['class' => 'form-control']) !!} <br>
    </div>
    <div class="form-group col-sm-4 my-4">
        {!! Form::label('brochure', 'Brochure') !!}
        <input type="file" name="brochure" id="brochure" class="form-control" accept ="application/pdf"/>
        <span id="file_error" class="form-text text-danger"/>
    </div>

</div>
<div class="form-group col-md-6">
    {!! Form::label('youtube','Lien youtube') !!}
    {!! Form::text('youtube', null, ['class' => 'form-control']) !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12 mt-4">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.expertises.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
@section('js')
    <script>
        $(document).ready(() => {
            $("#brochure").on('change', function(event) {
            event.preventDefault();
            $("#file_error").empty();
            var file = event.target.files[0];
            if(file.size>=10*1024*1024) {
                $("#file_error").html("<strong>La taille de la pièce jointe dépasse la limite maximale de 10MB</strong>");
                $("#brochure").val(null);
                return;
            }
            if(!file.type.match('application/pd.*')) {
                $("#file_error").html("<strong>Désolé, ce type de fichier n’est pas autorisé</strong>");
                $("#brochure").val(null);
                return;
            }
        });
            $("#insertRow").on("click", function(event) {
                event.preventDefault();
                var newRow = $("<tr>");
                var cols = '';
                // Table columns
                cols +=
                    '<td><input required class="form-control rounded-0" type="text" name="expertise[fr][]" placeholder="Description d\'expertise (FRANCAIS)"></td>';
                cols +=
                    '<td><input required class="form-control rounded-0" type="text" name="expertise[en][]" placeholder="Description d\'expertise (ANGLAIS)"></td>';
                cols +=
                    '<td><button class="btn btn-danger rounded-0" id ="deleteRow"><i class="fa fa-trash"></i></button</td>';

                // Insert the columns inside a row
                newRow.append(cols);

                // Insert the row inside a table
                $("table").append(newRow);

            });
            // Remove row when delete btn is clicked
            $("table").on("click", "#deleteRow", function(event) {
                $(this).closest("tr").remove();
            });
        });
    </script>
@show
