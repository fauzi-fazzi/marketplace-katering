<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="">Merchant</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="">M</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li
                class="nav-item {{ request()->is('dashboard/*') ? 'active' : '' }} {{ request()->is('dashboard') ? 'active' : '' }}">
                <a href="{{ url('dashboard') }}" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
            </li>
            <li><a class="nav-link" href="{{ url('profile') }}"><i class="fas fa-user"></i> <span>Profile
                    </span></a></li>
            <li class="menu-header">Menu</li>
            <li
                class="nav-item {{ request()->is('menu/*') ? 'active' : '' }} {{ request()->is('menu') ? 'active' : '' }}">
                <a href="{{ url('menu') }}" class="nav-link"><i class="fas fa-th-large"></i>
                    <span>Menu</span></a>
            </li>
            <li
                class="nav-item {{ request()->is('order/*') ? 'active' : '' }} {{ request()->is('order') ? 'active' : '' }}">
                <a href="{{ url('order') }}" class="nav-link"><i class="fas fa-list"></i>
                    <span>Daftar Order</span></a>
            </li>
        </ul>
    </aside>
</div>
