<li class="nav-item {{ Request::is('admin/references*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.references.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/references.plural')</span>
    </a>
</li>
<li class="nav-item {{ Request::is('admin/expertises*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.expertises.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/expertises.plural')</span>
    </a>
</li>

<li class="nav-item {{ Request::is('admin/settings*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.settings.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/settings.plural')</span>
    </a>
</li>
<li class="nav-item {{ Request::is('admin/testimonials*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.testimonials.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/testimonials.plural')</span>
    </a>
</li>
<li class="nav-item {{ Request::is('admin/expertiseImages*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.expertiseImages.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/expertiseImages.plural')</span>
    </a>
</li>
<li class="nav-item {{ Request::is('admin/clientCarousels*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.clientCarousels.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/clientCarousels.plural')</span>
    </a>
</li>
<li class="nav-item {{ Request::is('admin/projects*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.projects.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Nos Références</span>
    </a>
</li>
<li class="nav-item {{ Request::is('admin/subscribers*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.subscribers.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/subscribers.plural')</span>
    </a>
</li>
<li class="nav-item {{ Request::is('admin/candidates*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.candidates.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/candidates.plural')</span>
    </a>
</li>
