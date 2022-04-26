<div class="table-responsive-sm">
    <table class="table table-striped" id="clientCarousels-table">
        <thead>
            <tr>
                <th>@lang('models/clientCarousels.fields.entreprise')</th>
        <th>@lang('models/clientCarousels.fields.logo')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clientCarousels as $clientCarousel)
            <tr>
                <td>{{ $clientCarousel->entreprise }}</td>
            <td> <img src="{{ asset($clientCarousel->logo) }}" alt="" height="50"></td>
                <td>
                    {!! Form::open(['route' => ['admin.clientCarousels.destroy', $clientCarousel->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.clientCarousels.show', [$clientCarousel->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('admin.clientCarousels.edit', [$clientCarousel->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
