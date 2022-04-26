<div class="table-responsive-sm">
    <table class="table table-striped" id="candidates-table">
        <thead>
            <tr>
                <th>@lang('models/candidates.fields.first_name')</th>
                <th>@lang('models/candidates.fields.last_name')</th>
                <th>@lang('models/candidates.fields.date_of_birth')</th>
                <th>@lang('models/candidates.fields.position')</th>
                <th>@lang('models/candidates.fields.cv')</th>
                <th>@lang('models/candidates.fields.cover_letter')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($candidates as $candidate)
                <tr>
                    <td>{{ $candidate->first_name }}</td>
                    <td>{{ $candidate->last_name }}</td>
                    <td>{{ $candidate->date_of_birth->format('d/m/Y') }}</td>
                    <td>{{ $candidate->position }}</td>
                    <td><a href="{{ asset($candidate->cv) }}" download>Visualiser</a></td>
                    <td><a href="{{ asset($candidate->cover_letter) }}" download>Visualiser</a></td>
                    <td>
                        {!! Form::open(['route' => ['admin.candidates.destroy', $candidate->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('admin.candidates.show', [$candidate->id]) }}"
                                class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                           
                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("' . __('crud.are_you_sure') . '")']) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
