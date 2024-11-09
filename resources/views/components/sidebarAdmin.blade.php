        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.layanan.index') }}">
                <div class="sidebar-brand-icon">
                    <i class="fa-solid fa-i"></i>
                </div>
                <div class="sidebar-brand-text mx-3">LMITD</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.sejarah.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <hr class="sidebar-divider" />
{{-- 
            <li class="nav-item">
                <a class="nav-link" href="tim.php">
                    <i class="fa-solid fa-user-secret"></i>
                    <span>Tim</span></a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.layanan.index') }}">
                    <i class="fa-solid fa-list"></i>
                    <span>Layanan</span></a>
            </li>
            {{-- <li class="nav-item ">
                <a class="nav-link" href="kontak.php">
                    <i class="fa-solid fa-envelope"></i>
                    <span>Kontak</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="tentangkami.php">
                    <i class="fa-solid fa-layer-group"></i>
                    <span>Tentang Kami</span></a>
            </li> --}}

            <!-- Divider -->
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->