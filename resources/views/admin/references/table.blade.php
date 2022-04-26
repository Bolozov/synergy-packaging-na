<div class="table-responsive">
    <table class="table" id="references-table">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($references as $reference)
                <tr>
                    <td>{{ $reference->title }}</td>
                    <td>{{ $reference->image }}</td>
                    <td class=" text-center">
                        {!! Form::open(['route' => ['admin.references.destroy', $reference->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{!! route('admin.references.show', [$reference->id]) !!}" class='btn btn-light action-btn '><i
                                    class="fa fa-eye"></i></a>
                            <a href="{!! route('admin.references.edit', [$reference->id]) !!}" class='btn btn-warning action-btn edit-btn'><i
                                    class="fa fa-edit"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Êtes-vous sûr que vous voulez supprimer cet enregistrement?")']) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
