<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ !Route::is('admin.dashboard') ? 'collapsed' : '' }}" href="{{ route('admin.home') }}">
                <span>Dashboard</span>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link {{ !Route::is('admin.cities.index') ? 'collapsed' : '' }}" href="{{ route('admin.cities.index') }}">
                <span>Cities</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ !Route::is('admin.areas.index') ? 'collapsed' : '' }}" href="{{ route('admin.areas.index') }}">
                <span>Areas</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ !Route::is('admin.roles.index') ? 'collapsed' : '' }}" href="{{ route('admin.roles.index') }}">
                <span>Roles</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ !Route::is('admin.games.index') ? 'collapsed' : '' }}" href="{{ route('admin.games.index') }}">
                <span>Games</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ !Route::is('admin.stadiums.index') ? 'collapsed' : '' }}" href="{{ route('admin.stadiums.index') }}">
                <span>Stadiums</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ !Route::is('admin.users.index') ? 'collapsed' : '' }}" href="{{ route('admin.users.index') }}">
                <span>Users</span>
            </a>
        </li>

    </ul>

</aside>
