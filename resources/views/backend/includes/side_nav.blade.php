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

                <li class="menu-title">Quick Shortcut</li>

                <li>
                    <a href="{{ route('site-setting.index') }}" class=" waves-effect">
                        <i class="bx bx-key"></i>
                        <span>Add New Site</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('clients.create') }}" class=" waves-effect">
                        <i class="bx bx-user-plus"></i>
                        <span>Add New User</span>
                    </a>
                </li>

                <li class="menu-title">Super Admin Area</li>

                 <li>
                    <a href="{{ route('sites.index') }}" class=" waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span>Site's</span>
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

                @if (auth()->user()->role == 1)
                    <li class="menu-title">Topics</li>

                    @forelse($topics as $topic)
                    <li>
                        <a href="#" class="waves-effect">
                            <i class="bx bxs-flag"></i>
                            <span>{{ $topic->title }}</span>
                        </a>
                    </li>
                    @empty
                        <li>
                            <a href="javascript:" class="waves-effect">
                                <i class="bx bx-user-circle"></i>
                                <span>No Topics Yet</span>
                            </a>
                        </li>
                    @endforelse
                @endif
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->