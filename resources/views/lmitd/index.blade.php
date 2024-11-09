<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LMITD</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/logo.png') }}" rel="icon" type="image/png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
    .carousel-item img {
        animation: zoomIn 20s ease-in-out infinite alternate;
    }

    /* Menambahkan efek shadow saat hover */
    .service-item:hover {
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transform: translateY(-5px);
        /* Sedikit mengangkat card */
        transition: all 0.3s ease-in-out;
    }

    .service-item {
        transition: all 0.3s ease-in-out;
    }

    @keyframes zoomIn {
        0% {
            transform: scale(1);
        }

        100% {
            transform: scale(1.1);
        }
    }
</style>

<body>
    <x-spinner />
    <x-header />

    <!-- Header Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="headerCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide Pertama -->
                <div class="carousel-item active position-relative">
                    <img class="d-block w-100" src="img/DJI_0307.jpg" alt="Slide 1" style="height: 120vh; object-fit: cover;">
                    <div class="position-absolute top-0 left-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.6);"></div>
                    <div class="carousel-caption custom-caption text-start p-5 text-white" style="margin-bottom: 200px;">
                        <h1 class="display-4" style="font-weight: 700; text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.5); font-size: 1rem; color: white;">
                            SELAMAT DATANG DI WEBSITE
                        </h1>
                        <h2 class="display-4" style="font-weight: 700; text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.5); font-size: 2.5rem; color: white;">
                            LEMBAGA MANAJEMEN
                        </h2>
                        <h2 class="display-4" style="font-weight: 700; text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.5); font-size: 2.5rem; color: white;">
                            INFORMASI DAN TRANSFORMASI DIGITAL
                        </h2>
                        <h3 class="display-4" style="font-weight: 100; text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.5); font-size: 2rem; color: white;">
                            IPB University
                        </h3>
                    </div>
                </div>

                <!-- Slide Kedua -->
                <div class="carousel-item position-relative">
                    <img class="d-block w-100" src="img/DJI_0308.jpg" alt="Slide 2" style="height: 120vh; object-fit: cover;">
                    <div class="position-absolute top-0 left-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.6);"></div>
                    <div class="carousel-caption text-start p-5" style="font-family: 'Anton', sans-serif;">
                    </div>
                </div>

                <!-- Slide Ketiga -->
                <div class="carousel-item position-relative">
                    <img class="d-block w-100" src="img/DJI_0302.jpg" alt="Slide 3" style="height: 120vh; object-fit: cover;">
                    <div class="position-absolute top-0 left-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.6);"></div>
                    <div class="carousel-caption text-start p-5" style="font-family: 'Anton', sans-serif;">
                    </div>
                </div>
            </div>

            <!-- Tombol Navigasi Kiri dan Kanan -->
            <button class="carousel-control-prev" type="button" data-bs-target="#headerCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#headerCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div id="tentang" class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column align-items-center mt-4">
                        <!-- Menampilkan satu foto saja -->
                        <img class="img-fluid rounded mt-5" src="img/DJI_0308.jpg" alt="" style="max-width: 100%; height: auto; max-height: 300px; object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block border rounded-pill py-1 px-4 mb-3 text-white" style="background-color: #007bff;">Tentang Kami</p>
                    <h1 class="mb-4">Lembaga Manajemen Informasi dan Transformasi Digital IPB University</h1>
                    <p>
                        LMITD IPB, atau Laboratorium Manajemen Informasi Teknologi dan Data di Institut Pertanian Bogor,
                        adalah pusat penelitian yang berfokus pada pengembangan teknologi informasi dan manajemen data.
                        Berada di bawah Departemen Ilmu Komputer FMIPA IPB, laboratorium ini mendalami riset dalam bidang
                        big data, data mining, keamanan siber, kecerdasan buatan, dan pengembangan sistem informasi. LMITD
                        juga berkolaborasi dengan industri, pemerintah, dan lembaga akademik untuk menciptakan solusi
                        teknologi, serta mengadakan pelatihan untuk meningkatkan keterampilan digital masyarakat.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4 text-white" style="background-color: #007bff;">Layanan</p>
                <h1 class="text-dark">Layanan Transformasi Digital</h1>
            </div>
            <div class="row g-4">
                @if(!empty($data))
                    @foreach ($data as $item)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-white rounded shadow h-100 p-4 text-center transition-all hover-shadow">
                            <div class="d-flex justify-content-center align-items-center mb-4" style="width: 100%; height: 200px; overflow: hidden;">
                                <img src="{{ asset('storage/img/layanan/' . $item->foto) }}" 
                                style="max-width: 100%; max-height: 100%; object-fit: cover;" 
                                alt="{{ $item->nama ?? 'Foto layanan' }}">                           
                            </div>
                            <h4 class="mb-3 text-dark">{{ $item->nama }}</h4>
                            <p class="mb-4 text-muted">{{ $item->keterangan }}</p>
                        </div>
                    </div>
                    @endforeach
                    @endif
            </div>
        </div>
    </div>
    <!-- Service End -->

    <x-footer />

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('LQUhj7GZow3b3aB6mHUZgzGYzuG5Fkpu4b') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    
    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
