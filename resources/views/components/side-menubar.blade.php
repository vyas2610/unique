<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('admin.dashboard') }}" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder">{{ $site->title }}</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->

        @foreach ($adminMenus as $key => $m)
        <li class="menu-item{{ in_array(request()->route()->getName(), $m->routes) ? ' active open' : '' }}">
            <a href="{{ !$m->route_name ? 'javascript:void(0);' : route($m->route_name) }}" class="menu-link{{ $m->children()->count() ? ' menu-toggle' : '' }}">
                <i class="menu-icon tf-icons {{ $m->icon }}"></i>
                {{ $m->label }}
            </a>

            @if( $m->children()->count() )

            <ul class="menu-sub">
                @foreach ($m->children as $m2)
                <li class="menu-item{{request()->route()->getName() === $m2->route_name ? ' active' : ''}}">
                    <a href="{{ !$m2->route_name ? 'javascript:void(0);' : route($m2->route_name) }}" class="menu-link">
                        {{ $m2->label }}
                    </a>
                </li>
                @endforeach
            </ul>

            @endif
        </li>
        @endforeach

    </ul>
</aside>
<!-- / Menu -->