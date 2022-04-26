<div class="table-responsive-sm">
    <table class="table table-striped" id="expertises-table">
        <thead>
            <tr>
                <th>@lang('models/expertises.fields.title')</th>
                <th>@lang('models/expertises.fields.items')</th>
                <th>Image</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($expertises as $expertise)
                <tr>
                    <td>{{ $expertise->title_fr }}</td>
                    <td>
                        <ul>
                            @foreach ($expertise->expertises as $item)
                                <li> {{ $item->title_fr }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        @php
                            count($expertise->images) > 0 ? ($firstImage = $expertise->images->first()->image) : ($firstImage = null);
                        @endphp
                        <img src="{{ is_null($firstImage) ? '' : asset($firstImage) }}" alt="No Image Found."
                            height="50">
                    </td>
                    <td>
                        {!! Form::open(['route' => ['admin.expertises.destroy', $expertise->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('admin.expertises.show', [$expertise->id]) }}"
                                class='btn btn-success'><i class="fa fa-eye"></i></a>
                            <a href="{{ route('admin.expertises.edit', [$expertise->id]) }}" class='btn btn-info'><i
                                    class="fa fa-edit"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => 'return confirm("' . __('crud.are_you_sure') . '")']) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
