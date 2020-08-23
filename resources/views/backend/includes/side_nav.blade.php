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

                <li class="menu-title">Gallery</li>

                <li>
                    <a href="{{ route('media.index') }}" class="waves-effect">
                        <i class="bx bx-image-add"></i>
                        <span>Media</span>
                    </a>
                </li>

                @endif

                @if (auth()->user()->role == 1)
                    <li class="menu-title">Topics</li>

                    @forelse($topics as $topic)
                    <li>
                        <a href="{{ url('admin/site-topics/'.$topic->id) }}" class="waves-effect">
                            <i class="bx bx-purchase-tag-alt"></i>
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

                     <li class="menu-title">Site's</li>

                    @forelse(auth()->user()->userDomains('domain') as $site)
                    <li>
                        <a href="https://{{ replaceHttps($site) }}/login" class="waves-effect">
                            <i class="bx bxs-flag"></i>
                            <span>{{ $site }}</span>
                        </a>
                    </li>
                    @empty
                      
                    @endforelse
                @endif

                @if (auth()->user()->role == 2)
                    
                    <li>
                        <a href="{{ url('user/profile_settings') }}" class="waves-effect">
                            <i class="bx bx-shield"></i>
                            <span>Profile Settings</span>
                        </a>
                    </li>
                   
                @endif
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->