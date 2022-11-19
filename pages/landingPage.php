<!-- 
    created by silvia
    @ 2022
-->
<?php
    require '../conf/init.php' ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiKasir</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../assets/css/styles1.css" rel="stylesheet" />
</head>
<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><h1>SiKasir</h1></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="#whyus">Kenapa Kami?</a></li>
                    <li class="nav-item"><a class="nav-link" href="#layanan">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                    <li class="gets"><a class="getstarted" href="login.php">Daftar/Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Selamat Datang di SiKasir!</div>
            <div class="masthead-heading">Rapikan Laporan Penjualan dan Maksimalkan Penghasilan dengan SiKasir</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="login.php">Coba Sekarang!</a>
        </div>
    </header>
    <section class="page-section" id="whyus">
        <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Kenapa Kami?</h2><br>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-solid fa-cart-shopping fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Mudah dan Cepat</h4>
                        <p class="text-muted">Sistem SiKasir mudah digunakan dan mempercepat pencatatan laporan penjualan.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-solid fa-coins fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Manajemen Transaksi Penjualan</h4>
                        <p class="text-muted">Catat Transaksi Penjualan dengan Mudah.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-solid fa-money-bills fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Manajemen Pengeluaran Usaha</h4>
                        <p class="text-muted">Catat Pengeluaran Usaha Anda dengan Mudah.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-solid fa-bag-shopping fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Manajemen Stok</h4>
                        <p class="text-muted">Catat dan Kelola Stok dengan Mudah.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-solid fa-book fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Laporan Lengkap</h4>
                        <p class="text-muted">Laporan dan Ringkasan Usaha.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-solid fa-chart-simple fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Tersedia Grafik</h4>
                        <p class="text-muted">Adanya Grafik Memudahkan Anda Memantau Pemasukan dan Pengeluaran Usaha.</p>
                    </div>
                </div>
        </div>
    </section>
    <section class="page-section bg-light" id="layanan">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Apapun Bisnismu Pakai SiKasir</h2><br>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Cafe & Restoran</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Toko Retail</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Makanan dan Minuman</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Laundry</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Fashion</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Gadget & Accessories</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <div class="white">
                        <span class="email">
                            <h6><i class="fas fa-solid fa-envelope"></i>&nbsp;&nbsp;Email:</h6>
                            <!--<h6>Email:</h6>-->
                            <p>sikasir@gmail.com</p>
                        </span>
        
                        <span class="phone">
                            <h6><i class="fas fa-solid fa-phone"></i>&nbsp;&nbsp;Telp.:</h6>
                            <!--<h6>Telp.:</h6>-->
                            <p>+62 85895548855</p>
                        </span>
                </div>
                
            </div>
    </section>
    <!-- ======= Footer ======= -->
    <footer class="footer py-4" id="footer">
        <div class="container">
        <h3>SiKasir</h3>
        <p>Layanan sistem kasir dan pencatatan penjualan bagi semua bidang bisnis.</p>
        <!--<div class="social-links">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>-->
        <div class="copyright">
            &copy; Copyright <strong><span>SiKasir</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/green-free-one-page-bootstrap-template/ -->
            Designed by Kelompok 8
        </div>
        </div>
    </footer><!-- End Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>