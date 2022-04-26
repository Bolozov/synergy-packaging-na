<div class="table-responsive-sm">
    <table class="table table-striped" id="testimonials-table">
        <thead>
            <tr>
                <th>@lang('models/testimonials.fields.name')</th>
        <th>@lang('models/testimonials.fields.entreprise')</th>
        <th>@lang('models/testimonials.fields.testimonial')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($testimonials as $testimonial)
            <tr>
                <td>{{ $testimonial->name }}</td>
            <td>{{ $testimonial->entreprise }}</td>
            <td>{{ $testimonial->testimonial }}</td>
                <td>
                    {!! Form::open(['route' => ['admin.testimonials.destroy', $testimonial->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.testimonials.show', [$testimonial->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('admin.testimonials.edit', [$testimonial->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>