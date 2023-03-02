<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ !Route::is('admin.dashboard') ? 'collapsed' : '' }}" href="{{ route('admin.home') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link {{ !Route::is('admin.cities.index') ? 'collapsed' : '' }}" href="{{ route('admin.cities.index') }}">
                <i class="bi bi-grid"></i>
                <span>Cities</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ !Route::is('admin.areas.index') ? 'collapsed' : '' }}" href="{{ route('admin.areas.index') }}">
                <i class="bi bi-grid"></i>
                <span>Areas</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ !Route::is('admin.roles') ? 'collapsed' : '' }}" href="#">
                <i class="bi bi-grid"></i>
                <span>Roles</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ !Route::is('admin.roles') ? 'collapsed' : '' }}" href="#">
                <i class="bi bi-grid"></i>
                <span>Games</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ !Route::is('admin.roles') ? 'collapsed' : '' }}" href="#">
                <i class="bi bi-grid"></i>
                <span>Recomended Games</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ !Route::is('admin.users') ? 'collapsed' : '' }}" href="#">
                <i class="bi bi-grid"></i>
                <span>Users</span>
            </a>
        </li>

    </ul>

</aside>
