<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LMITD - Struktur Organisasi</title>
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

    <!-- Lightbox Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">

    <style>
        /* Hover overlay style */
        .img-container {
            position: relative;
            display: inline-block;
            max-width: 100%;
        }
        .img-container img {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease-in-out; /* Smooth zoom on hover */
        }
        .img-container:hover img {
            transform: scale(1.05); /* Slight zoom effect on hover */
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 255, 0.5); /* Blue with transparency */
            opacity: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: opacity 0.3s ease;
        }
        .img-container:hover .overlay {
            opacity: 1;
        }
        .overlay i {
            color: white;
            font-size: 2rem;
        }
    </style>
</head>

<body>
    <x-spinner />
    <x-header />

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s"
         style="background-image: url('{{ asset('img/DJI_0308.jpg') }}'); background-size: cover; background-position: center; height: 400px;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown text-center mt-3"
                style="font-family: 'Arial', sans-serif; font-size: 58px; font-weight: bold; letter-spacing: 2px;">
                Struktur Organisasi
            </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0 justify-content-center"
                    style="font-family: 'Arial', sans-serif; font-size: 28px; letter-spacing: 2px;">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ url('/lmitd') }}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Struktur</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Main Content Start -->
    <div class="container-xxl py-5">
        <div class="container text-center">
            <div class="img-container mb-4">
                <a href="{{ asset('img/Struktur-LMITD-2024.png') }}" data-lightbox="struktur" data-title="Struktur Organisasi LMITD 2024">
                    <img src="{{ asset('img/Struktur-LMITD-2024.png') }}" alt="Struktur Organisasi LMITD 2024" class="img-fluid">
                    <div class="overlay">
                        <i class="fas fa-search"></i>
                    </div>
                </a>
            </div>
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

    <!-- Lightbox Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
