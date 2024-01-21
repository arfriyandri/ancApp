@include('component.head')

<body>
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-between"></div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <a href="index.html" class="logo me-auto"><img src="{{ asset('template/assets/img/logo.jpeg') }}" alt=""
                    class="img-fluid" style="width: 100px; height: 100px" /></a>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li>
                        <a class="nav-link scrollto active" href="#hero">Beranda</a>
                    </li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#doctors">Tim Kami</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

            <a href="/logout" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span>Logout</a>
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <h1>Selamat Datang di</h1>
            <h2>Antenatal Care Bedede, Bedengah,</h2>
            <h2>Genem Menyusui</h2>
            <a href="#about" class="btn-get-started scrollto">Memulai</a>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Kenapa Antenatal Care?</h3>
                            <p>
                                Antenatal care berfokus dalam melayani ibu hamil agar mampu
                                menjalani kehamilan dengan sehat dan bersalin dengan selamat
                                melalui pelayanan ANC 10T
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bi bi-music-note-beamed"></i>
                                        <h4>Bedede</h4>
                                        <p>
                                            Mengajarkan materi dengan menyelipkan lagu-lagu sasak
                                            untuk dinyanyikan
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bi bi-lungs-fill"></i>
                                        <h4>Bedengah</h4>
                                        <p>Mengasuh bayi dan merespon janin dalam kandungan</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bi bi-universal-access"></i>
                                        <h4>Genem</h4>
                                        <p>
                                            Memberikan perhatian dan respons positif pada setiap
                                            perubahan ibu hamil, baik saat di kelas maupun saat
                                            melalukan pemeriksaan ANC
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .content-->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Why Us Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">
                <div class="row">
                    <div
                        class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
                    </div>

                    <div
                        class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                        <h3>Fitur Antenatal Care</h3>
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-book-fill"></i></div>
                            <h4 class="title" style="color: black">Materi Konseling</h4>
                            <p class="description">
                                Fitur ini memiliki materi-materi atau bacaan seputar kehamilan
                                yang dapat diakses dimana saja sehingga ibu hamil dapat
                                mempraktekan materi seputar kehamilan dari rumah
                            </p>
                        </div>

                        <div class="icon-box">
                            <div class="icon">
                                <i class="bi bi-clipboard2-pulse-fill"></i>
                            </div>
                            <h4 class="title" style="color: black">Rekam Medis</h4>
                            <p class="description">
                                Pasien dapet melihat rekam medis pribadi melalui akun
                                masing-masing
                            </p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-calendar-date-fill"></i></div>
                            <h4 class="title" style="color: black">Jadwal Kunjungan</h4>
                            <p class="description">
                                Dapat memudahkan pasien mengetahui dan mengingqt jadwal
                                kunjungan selanjutnya
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Doctors Section ======= -->
        <section id="doctors" class="doctors">
            <div class="container">
                <div class="section-title">
                    <h2>Tim Kami</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="member d-flex align-items-start">
                            <div class="pic">
                                <img src="{{ asset('template/assets/img/doctors/profil3.jpg') }}" class="img-fluid"
                                    alt="" />
                            </div>
                            <div class="member-info">
                                <h4>Dr. Sudarmi,SST.M.Biomed</h4>
                                <span>Dosen</span>
                                <p>Dosen Kebidanan POLTEKKES Kemenkes Mataram</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="member d-flex align-items-start">
                            <div class="pic">
                                <img src="{{ asset('template/assets/img/doctors/profil2.jpg') }}" class="img-fluid"
                                    alt="" />
                            </div>
                            <div class="member-info">
                                <h4>B.Iin Rumintang, S.ST.M.Keb</h4>
                                <span>Dosen</span>
                                <p>Dosen Kebidanan POLTEKKES Kemenkes Mataram</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="pic">
                                <img src="{{ asset('template/assets/img/doctors/profil4.jpg') }}" class="img-fluid"
                                    alt="" />
                            </div>
                            <div class="member-info">
                                <h4>Ni PT.Dian Ayu A, S.Si.T.MTr.Keb</h4>
                                <span>Dosen</span>
                                <p>Dosen Kebidanan POLTEKKES Kemenkes Mataram</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="pic">
                                <img src="{{ asset('template/assets/img/doctors/profil1.jpg') }}" class="img-fluid"
                                    alt="" />
                            </div>
                            <div class="member-info">
                                <h4>St.Halimatussyaadiah, SST.M.Kes</h4>
                                <span>Dosen</span>
                                <p>Dosen Kebidanan POLTEKKES Kemenkes Mataram</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Doctors Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Antenatal Care</h3>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
</body>
@include('component.foot')
