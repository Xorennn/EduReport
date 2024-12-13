<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>EduReport</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/EduReport.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    @include('includes.landing.stylesheet')

    <!-- =======================================================
    * Template Name: Vesperr - v4.7.0
    * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
<body>

    @include('includes.landing.navbar')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Layanan Pengaduan <br>SMAN 1 SLEMAN</br></h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Laporkan masalah Anda di sini, kami akan
                        merespon tanggapan  dengan cepat, aman, dan nyaman.</h2>
                    <div data-aos="fade-up" data-aos-delay="800">
                        <a href="{{ url('login')}}" class="btn-get-started scrollto">Form Pengaduan</a>

                        <a href="#services" class="btn-get-started-2 scrollto">Alur Pengaduan</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img src="img/anak3.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Tentang Kami</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                        <p>
                        <h3><b>EduReport</b></h3> Adalah platform berbasis online yang dirancang untuk memudahkan pengaduan keluhan, masukan, atau informasi 
                        terkait lingkungan <b>SMAN 1 SLEMAN</b>. Aplikasi ini hadir sebagai solusi untuk memastikan suara siswa, orang tua, 
                        maupun tenaga pendidik dapat didengar dan ditindaklanjuti dengan cepat oleh pihak yang berwenang.
                        </p>
                        <ul>
                            <h3>Tujuan <b>EduReport</b></h3>
                            <li><i class="ri-check-double-line"></i>Memberikan kemudahan dalam menyampaikan laporan secara online, kapan saja dan di mana saja.</li>
                            <li><i class="ri-check-double-line"></i>Memastikan setiap laporan atau masukan ditangani dengan profesional dan bertanggung jawab.</li>
                            <li><i class="ri-check-double-line"></i>Mengajak semua pihak untuk bersama-sama menciptakan lingkungan sekolah yang aman, nyaman, dan berkualitas.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <p>
                        <h4><b>Komitmen Kami</b></h4> <b>EduReport</b> berkomitmen untuk menjadi jembatan komunikasi yang efektif antara masyarakat sekolah dan pihak berwenang. 
                        Dengan sistem pelaporan yang mudah digunakan, kami percaya bahwa setiap aspirasi yang disampaikan dapat memberikan dampak positif bagi seluruh komunitas sekolah.
                        Mari bersama-sama membangun sekolah yang lebih baik melalui laporan dan masukan Anda di <b>EduReport</b>.
                        </p>
                        <a href="#services" class="btn-learn-more">Tata cara atau alur pengaduan</a>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row <div class=" image col-xl-5 d-flex align-items-stretch justify-content-center
                    justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
                    <img src="img/anak.png" alt="" class="img-fluid">
                </div>

                <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
                    <div class="content d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-md-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-people"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="10"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p><strong>Pengguna</strong><br>Daftar pengguna <b>EduReport</b></p>
                                </div>
                            </div>

                            <div class="col-md-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-journal-text"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="20"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p><strong>Pengaduan</strong> <br> Jumlah pengaduan yang sudah dilaporkan</p>
                                </div>
                            </div>

                            <div class="col-md-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi-journal-check"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="15"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p><strong>Tuntas</strong> <br> Jumlah laporan yang sudah ditangani</p>
                                </div>
                            </div>

                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>TATA CARA</h2>
                    <p>Nah ini dia alur pelaporan yang ada di website <b>EduReport</b></p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class='bx bxs-edit-alt'></i></div>
                            <h4 class="title"><a href="">Buat Laporan</a></h4>
                            <p class="description">Silakan tulis laporan keluhan Anda dengan penjelasan yang rinci dan jelas agar dapat ditindaklanjuti dengan tepat.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-shuffle"></i></div>
                            <h4 class="title"><a href="">Proses Validasi</a></h4>
                            <p class="description">Harap menunggu hingga laporan Anda selesai diverifikasi oleh admin/petugas yang berwenang.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bi-arrow-repeat"></i></div>
                            <h4 class="title"><a href="">Tindak Lanjut</a></h4>
                            <p class="description">Laporan Anda saat ini sedang dalam proses penanganan dan akan segera ditindaklanjuti oleh admin/petugas yang berwenang.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class='bx bx-check-shield'></i></div>
                            <h4 class="title"><a href="">Selesai</a></h4>
                            <p class="description">Laporan pengaduan Anda telah berhasil diselesaikan dan akan ditindaklanjuti oleh pihak terkait.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->


        @include('includes.landing.footer')

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        @include('includes.landing.javascript')

</body>

</html>