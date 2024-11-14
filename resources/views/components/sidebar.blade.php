<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="ion-close"></i>
    </button>

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <a href="/" class="logo"><i class="mdi mdi-book"></i> {{ config('app.name') }}</a>
        </div>
    </div>

    <div class="sidebar-inner slimscrollleft">

        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>

                @foreach (config('menu') as $menu)
                    @isset($menu['submenu'])
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-{{ $menu['icon'] }}"></i>
                                <span>
                                    {{ $menu['label'] }}
                                </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                @foreach ($menu['submenu'] as $menu)
                                    <li><a
                                            href="{{ isset($menu['route']) ? route($menu['route']) : '#' }}">{{ $menu['label'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li>
                            <a href="{{ isset($menu['route']) ? route($menu['route']) : '#' }}" class="waves-effect">
                                <i class="mdi mdi-{{ $menu['icon'] }}"></i>
                                <span>{{ $menu['label'] }}</span>
                            </a>
                        </li>
                    @endisset
                @endforeach

            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->
