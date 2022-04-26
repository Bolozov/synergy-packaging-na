<div class="table-responsive-sm">
    <table class="table table-striped" id="subscribers-table">
        <thead>
            <tr>
                <th>@lang('models/subscribers.fields.email')</th>
                <th>@lang('models/subscribers.fields.created_at')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($subscribers as $subscriber)
            <tr>
                <td>{{ $subscriber->email }}</td>
                <td>{{ $subscriber->created_at }}</td>
                <td>
                    {!! Form::open(['route' => ['admin.subscribers.destroy', $subscriber->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.subscribers.show', [$subscriber->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("Confirmer la suppression ?")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>