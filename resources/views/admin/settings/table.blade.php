<div class="table-responsive-sm">
    <table class="table table-striped table-bordered" id="settings-table">
        <thead>
            <tr>
                <th>@lang('models/settings.fields.contact_mail')</th>
                <th>@lang('models/settings.fields.phone_number')</th>
                <th>@lang('models/settings.fields.address')</th>
                <th><i class="bi bi-facebook"> </span></th>
                <th><span class="bi bi-youtube"> </span></th>
                <th><span class="bi bi-twitter"> </span></th>
                <th><span class="bi bi-instagram"> </span></th>
                <th><i class="bi bi-linkedin"> </span></th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($settings as $setting)
                <tr>
                    <td>{{ $setting->contact_mail }}</td>
                    <td>{{ $setting->phone_number }}</td>
                    <td>{{ $setting->address }}</td>
                    <td><a href="{{ $setting->facbook_link }}"> <i class="fa fa-link"></i></a></td>
                    <td><a href="{{ $setting->youtube_link }}"> <i class="fa fa-link"></i></a></td>
                    <td><a href="{{ $setting->twitter_link }}"> <i class="fa fa-link"></i></a></td>
                    <td><a href="{{ $setting->instagram_link }}"> <i class="fa fa-link"></i></a></td>
                    <td><a href="{{ $setting->linkedin_link }}"> <i class="fa fa-link"></i></a></td>
                    <td>
                        {!! Form::open(['route' => ['admin.settings.destroy', $setting->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('admin.settings.show', [$setting->id]) }}"
                                class='btn btn-success'><i class="fa fa-eye"></i></a>
                            <a href="{{ route('admin.settings.edit', [$setting->id]) }}" class='btn btn-info'><i
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
