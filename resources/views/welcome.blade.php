<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir Pintar</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- AOS Library -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #e3f2fd;
            color: #0d47a1;
        }
        .hero {
            background-color: #0d47a1;
            color: white;
            padding: 60px 0;
        }
        .hero h1 {
            font-size: 48px;
            font-weight: bold;
        }
        .hero p {
            font-size: 18px;
        }
        .hero .btn-primary, .card .btn-primary {
            background-color: white;
            border-color: #0d47a1;
            color: #0d47a1;
        }
        .hero .btn-primary:hover, .card .btn-primary:hover {
            background-color: #1565c0;
            color: white;
        }
        .testimonial img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
        }
        .footer {
            background-color: #1565c0;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .card-title {
            color: #0d47a1;
        }
        .btn-outline-success {
            border-color: #0d47a1;
            color: #0d47a1;
        }
        .btn-outline-success:hover {
            background-color: #0d47a1;
            color: white;
        }

        .features .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: cover;  
        }
    </style>
</head>
<body>

    <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm" data-aos="fade-down">
    <div class="container">
        <a class="navbar-brand" href="#">Kasir Pintar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Dropdown for Fitur Lengkap -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdownFitur" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Fitur Lengkap
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownFitur">
                        <li><a class="dropdown-item" href="#">Fitur 1</a></li>
                        <li><a class="dropdown-item" href="#">Fitur 2</a></li>
                        <li><a class="dropdown-item" href="#">Fitur 3</a></li>
                    </ul>
                </li>
                <!-- Dropdown for Solusi Bisnis -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdownSolusi" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Solusi Bisnis
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownSolusi">
                        <li><a class="dropdown-item" href="#">Solusi 1</a></li>
                        <li><a class="dropdown-item" href="#">Solusi 2</a></li>
                        <li><a class="dropdown-item" href="#">Solusi 3</a></li>
                    </ul>
                </li>
                <!-- Dropdown for Harga -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdownHarga" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Harga
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownHarga">
                        <li><a class="dropdown-item" href="#">Harga Paket 1</a></li>
                        <li><a class="dropdown-item" href="#">Harga Paket 2</a></li>
                        <li><a class="dropdown-item" href="#">Harga Paket 3</a></li>
                    </ul>
                </li>
                <!-- Dropdown for Inspirasi -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdownInspirasi" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Inspirasi
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownInspirasi">
                        <li><a class="dropdown-item" href="#">Inspirasi 1</a></li>
                        <li><a class="dropdown-item" href="#">Inspirasi 2</a></li>
                        <li><a class="dropdown-item" href="#">Inspirasi 3</a></li>
                    </ul>
                </li>
            </ul>
            <div class="ms-3">
                <a href="{{ route('register') }}" class="btn btn-outline-success me-2">Daftar</a>
                <a href="{{ route('login') }}" class="btn btn-primary">Masuk</a>
            </div>
        </div>
    </div>
</nav>

    <!-- Hero Section -->
    <section class="hero" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>Dukung Usaha Anda Dengan Kasir Pintar</h1>
                    <p>1,5 juta UMKM telah mempercayakan Kasir Pintar untuk mengembangkan usaha mereka</p>
                    <a href="#" class="btn btn-primary">Coba Gratis 30 Hari</a>
                    <a href="#" class="btn btn-light text-primary">Tonton Video Kami</a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('assets/images/landing_page/foto_belanja.png') }}" alt="Kasir Pintar" class="img-fluid" data-aos="fade-left" data-aos-delay="200">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features py-5">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Fitur Yang Mengintegrasikan Seluruh Aspek Bisnis Anda</h2>
        <div class="row">
            <div class="col-md-4" data-aos="fade-up">
                <div class="card">
                    <img src="{{ asset('assets/images/landing_page/pos.jpg')}}" class="card-img-top" alt="Point of Sales">
                    <div class="card-body text-center">
                        <h5 class="card-title">Point Of Sales</h5>
                        <p class="card-text">Dengan Aplikasi POS (Point of Sales), proses penjualan di toko dapat dikelola dengan lebih cepat dan akurat.</p>
                        <a href="#" class="btn btn-primary">Pelajari Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                    <img src="{{ asset('assets/images/landing_page/stok.jpg') }}" class="card-img-top" alt="Manajemen Stok Barang">
                    <div class="card-body text-center">
                        <h5 class="card-title">Manajemen Stok Barang (Inventory)</h5>
                        <p class="card-text">Atur dan monitoring pengelolaan stok barang yang tersedia di sistem dan gudang secara akurat.</p>
                        <a href="#" class="btn btn-primary">Pelajari Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card">
                    <img src="{{ asset('assets/images/landing_page/qris.jpg') }}" class="card-img-top" alt="QRIS Payment">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pembayaran Digital dengan QRIS</h5>
                        <p class="card-text">Lengkapi kebutuhan transaksi penjualan dengan QRIS dan metode pembayaran lainnya hanya dengan satu aplikasi.</p>
                        <a href="#" class="btn btn-primary">Pelajari Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ROW TAMBAHAN -->
        <div class="row mt-5">
            <div class="col-md-4" data-aos="fade-up">
                <div class="card">
                    <img src="{{ asset('assets/images/landing_page/laporan_keuangan.jpg') }}" class="card-img-top" alt="Laporan Usaha Lengkap">
                    <div class="card-body text-center">
                        <h5 class="card-title">Laporan Usaha Lengkap</h5>
                        <p class="card-text">Nikmati akses laporan usaha lengkap dari aplikasi kasir pintar dimana saja dan kapan saja.</p>
                        <a href="#" class="btn btn-primary">Pelajari Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                    <img src="{{ asset('assets/images/landing_page/ppob.jpg') }}" class="card-img-top" alt="PPOB">
                    <div class="card-body text-center">
                        <h5 class="card-title">PPOB</h5>
                        <p class="card-text">Solusi Pembayaran Online dengan PPOB Kasir Pintar.kamu bisa melakukan pembayaran dengan mudah dan cepat.</p>
                        <a href="#" class="btn btn-primary">Pelajari Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card">
                    <img src="{{ asset('assets/images/landing_page/hardware.jpg') }}" class="card-img-top" alt="Hardware">
                    <div class="card-body text-center">
                        <h5 class="card-title">Hardware</h5>
                        <p class="card-text">Percepat Proses Penjualan dan Pembayaran dengan Hardware Mesin kasir dan pastinya aman.</p>
                        <a href="#" class="btn btn-primary">Pelajari Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="growth-solutions py-5 bg-light">
    <div class="container">
        <h2 class="text-center" data-aos="fade-up">Tumbuhkan Bisnis Anda Dengan Kasir Pintar</h2>
        <div class="row text-center">
            <div class="col-md-4" data-aos="fade-up">
                <h3 class="display-4 text-primary">2 Juta+</h3>
                <p>Instalasi Aplikasi</p>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <h3 class="display-4 text-primary">30 Ribu</h3>
                <p>Ulasan Positif</p>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <h3 class="display-4 text-primary">180 Juta</h3>
                <p>Transaksi</p>
            </div>
        </div>
    </div>
</section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Kasir Pintar. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS and AOS Library -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
