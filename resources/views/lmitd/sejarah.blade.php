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
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet">

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
</head>

<style>
    .timeline {
        list-style: none;
        padding: 0;
        margin: 0;
        position: relative;
    }

    .timeline::before {
        content: "";
        position: absolute;
        left: 50%;
        top: 0;
        width: 4px;
        height: 100%;
        background-color: #007bff;
        transform: translateX(-50%);
    }

    .item {
        position: relative;
        margin-bottom: 50px;
        display: flex;
        flex-direction: row;
    }

    .timeline-col {
        width: 50%;
        padding: 20px;
    }

    .timeline-col.left {
        text-align: right;
    }

    .timeline-col.right {
        text-align: left;
    }

    .year {
        font-size: 2.5rem;
        color: #007bff;
    }

    .photo img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
    }

    .heading {
        font-size: 1.5rem;
        color: #007bff;
    }

    .text {
        font-size: 1.3rem;
        line-height: 1.6;
        color: #333;
    }

    @media (max-width: 768px) {
        .timeline {
            padding-left: 0;
        }

        .timeline::before {
            left: 8%;
        }

        .timeline-col {
            width: 100%;
            text-align: center;
            padding: 10px;
        }
    }
</style>

<body>
    <x-spinner />
    <x-header />

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s"
        style="background-image: url('{{ asset('img/DJI_0308.jpg') }}'); 
            background-size: cover; 
            background-position: center;
            height: 400px;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown text-center mt-3"
                style="font-family: 'Arial', sans-serif; font-size: 58px; font-weight: bold; letter-spacing: 2px;">
                Sejarah
            </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0 justify-content-center"
                    style="font-family: 'Arial', sans-serif; font-size: 28px; letter-spacing: 2px;">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ url('/lmitd') }}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Sejarah</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Main Content Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <p>Perkembangan teknologi informasi yang sangat pesat menjadi tonggak berdirinya unit kerja yang bergerak di
                bidang teknologi informasi. Pengembangan dan penerapan Teknologi dan Sistem Informasi yang progresif dan
                adaptif mutlak diperlukan di IPB dalam mencapai tujuan organisasi.</p>

            <ul class="timeline">
                @if (!empty($datasejarah))
                    @foreach ($datasejarah as $item)
                        <li class="item animate">
                            <!-- Left Column (Image and Year) -->
                            <div class="timeline-col left">
                                <div class="year">{{ $item->tahun }}</div>
                                <div class="photo">
                                    <img decoding="async" loading="lazy" alt="{{ $item->unit ?? 'Foto sejarah' }}"
                                        src="{{ asset('storage/img/sejarah/' . $item->foto) }}">
                                </div>
                            </div>
                            <!-- Right Column (Description) -->
                            <div class="timeline-col right">
                                <h6 class="heading">{{ $item->unit }}</h6>
                                <div class="text">{{ $item->keterangan }}</div>
                            </div>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
    <!-- Main Content End -->

    <x-footer />

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
