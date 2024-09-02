@php
    $user = auth()->user();
    //User info
    $customer = \App\Models\Customer::where('user_id', $user->id)->first();
    $role = null;

    if ($user->hasRole('super-admin')) {
        $role = 'super-admin';
    } elseif ($user->hasRole('admin')) {
        $role = 'admin';
    } elseif ($user->hasRole('agent')) {
        $role = 'agent';
    } elseif ($user->hasRole('user')) {
        $role = 'user';
    }
@endphp
<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ url($role) }}">
            <span class="sidebar-brand-text align-middle">
                Allstarsecurityusa
                <sup>
                    {{ $user->name }}
                </sup>
            </span>
            <svg class="sidebar-brand-icon align-middle" width="32px" height="32px" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="1.5"
                stroke-linecap="square" stroke-linejoin="miter" color="#FFFFFF" style="margin-left: -3px">
                <path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
                <path d="M20 12L12 16L4 12"></path>
                <path d="M20 16L12 20L4 16"></path>
            </svg>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route($role)}}">
                    <i class="align-middle" data-feather="sliders"></i>  <span class="align-middle">Dashboard</span>
                </a>
            </li>
            @if($role == 'super-admin')
                <li class="sidebar-header pt-0">
                    Main
                </li>

                {{-- <li class="sidebar-item">
                    <a data-bs-target="#user" data-bs-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">User</span>
                    </a>
                    <ul id="user" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a class='sidebar-link' href='{{ route('admin.users.index') }}'>All Users's</a>
                        </li>
                        <li class="sidebar-item">
                            <a class='sidebar-link' href='{{ route('admin.customers.index') }}'>Customer's</a>
                        </li>
                        <li class="sidebar-item">
                            <a class='sidebar-link' href='{{ route('admin.agents.index') }}'>Agent's</a>
                        </li>
                    </ul>
                </li> --}}

                {{-- <li class="sidebar-item">
                    <a data-bs-target="#pageManagement" data-bs-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle" data-feather="file-text"></i> <span class="align-middle">Pages Management</span>
                    </a>
                    <ul id="pageManagement" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar"> --}}
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('pages.index') }}">
                                <span class="align-middle">Pages</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('page-categories.index') }}">
                                <span class="align-middle">Page Categories</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('seo-pages.index') }}">
                                <span class="align-middle">SEO Pages</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('media.index') }}">
                                <span class="align-middle">Media</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('header-menus.index') }}">
                                <span class="align-middle">Header Menus</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('page-additional-info.index') }}">
                                <span class="align-middle">Page Content</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('contact-us.index') }}">
                                <span class="align-middle">Contact us </span>
                            </a>
                        </li>
                    {{-- </ul>
                </li>
                 --}}

            @endif

            @if($role == 'user')
                <li class="sidebar-header pt-0">
                    Main
                </li>
            @endif
        </ul>
    </div>
</nav>


