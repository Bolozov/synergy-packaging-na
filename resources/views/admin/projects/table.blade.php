<div class="table-responsive-sm">
    <table class="table table-striped" id="projects-table">
        <thead>
            <tr>
                <th>@lang('models/projects.fields.titre')</th>
                <th>@lang('models/projects.fields.image')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->titre }} </td>
                    <td><img src="{{ asset($project->image) }}" height="50px"></td>
                    <td>
                        {!! Form::open(['route' => ['admin.projects.destroy', $project->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('admin.projects.show', [$project->id]) }}"
                                class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                            <a href="{{ route('admin.projects.edit', [$project->id]) }}" class='btn btn-ghost-info'><i
                                    class="fa fa-edit"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("' . __('crud.are_you_sure') . '")']) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
