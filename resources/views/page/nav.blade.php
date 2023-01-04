<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-header">MAIN</li>
    <li class="{{ request()->is('/') ? 'active' : '' }}">
        <a href="/" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>Dashboard</p>
        </a>
    </li>
    <li class="{{ request()->is('user') ? 'active' : '' }}">
        <a href="/user" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>User</p>
        </a>
    </li>
    <li class="{{ request()->is('mahasiswa') ? 'active' : '' }}">
        <a href="/mahasiswa" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>Mahasiswa</p>
        </a>
    </li>
    <li class="{{ request()->is('dosen') ? 'active' : '' }}">
        <a href="/dosen" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>Dosen</p>
        </a>
    </li>
    <li class="{{ request()->is('kaprodi') ? 'active' : '' }}">
        <a href="/kaprodi" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>Kaprodi</p>
        </a>
    </li>
    <li class=" {{request()->is('magang') ? 'active' : '' }}">
        <a href="/magang" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>Magang</p>
        </a>
    </li>
    <li class="nav-header">MULTI LEVEL EXAMPLE</li>
    <li class="{{ request()->is('/') ? 'active' : '' }}">
        <a href="#" class="nav-link">
            <i class="fas fa-circle nav-icon"></i>
            <p>Level 1</p>
        </a>
    </li>
    <li class="{{request()->is('/') ? 'active' : ''}}">
        <a href="#" class="nav-link">
            <i class="fas fa-circle nav-icon"></i>
            <p>Level 1</p>
        </a>
    </li>
    </ul>
</nav>