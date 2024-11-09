<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top p-0 wow fadeIn" style="background-color: #003DA5; height: 110px;" data-wow-delay="0.1s">
    <a href="{{ url('/lmitd') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img src="/img/LMITD-Logo-IPB-University-Vertical-Kandiro-Putih-scaled-600x119.webp" alt="LMITD Logo" style="width: 250px; height: auto;">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ url('/lmitd') }}" class="nav-item nav-link active" style="color: white;">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" style="color: white;" data-bs-toggle="dropdown">Tentang</a>
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                    <a href="{{ route('sejarah') }}" class="dropdown-item">Sejarah</a>
                    <a href="{{ route('tugas') }}" class="dropdown-item">Tugas dan Fungsi</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" style="color: white;" data-bs-toggle="dropdown">Profil</a>
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                    <a href="{{ route('struktur') }}" class="dropdown-item">Struktur</a>
                </div>
            </div>
            <a href="{{ route('admin.layanan.index') }}" class="nav-item nav-link" style="color: white;">Admin</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->

<!-- Custom CSS for Mobile Optimization -->
<style>
    @media (max-width: 768px) {
        .navbar-brand img {
            width: 200px; /* Adjust logo size on mobile */
        }

        .navbar-nav {
            text-align: center; /* Center align nav items on small screens */
            background-color: #140606fa;
        }

        .navbar-nav .nav-link {
            font-size: 16px; /* Adjust font size for better readability */
            padding: 10px 0; /* Add padding for a more spacious look */
        }

        .navbar-toggler {
            border: none;
        }

        .dropdown-menu {
            min-width: 200px; /* Ensure dropdown menu has a proper width */
        }
    }
</style>
