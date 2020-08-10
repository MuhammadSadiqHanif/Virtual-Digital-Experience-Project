<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                @if (auth()->user()->role == 0)
                    
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span>Dashboards</span>
                    </a>
                </li>

                <li class="menu-title">Super Admin Area</li>

                <li>
                    <a href="{{ route('site-setting.index') }}" class=" waves-effect">
                        <i class="bx bx-key"></i>
                        <span>Site Settings</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('clients.index') }}" class=" waves-effect">
                        <i class="bx bx-user"></i>
                        <span>User's Setting</span>
                    </a>
                </li>
                

                <li class="menu-title">Topics</li>

                <li>
                    <a href="{{ route('topics.index') }}" class="waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span>Add Topics</span>
                    </a>
                </li>

                @endif
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->