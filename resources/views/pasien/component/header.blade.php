@include('component.head')

<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between"></div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <img src="{{ asset('template/assets/img/logo.jpeg') }}" alt=""class="img-fluid"
                        style="width: 100px; height: 100px" />
                </div>
                <div class="col-10">
                    <h2>{{ $data['pasiens']->name }}</h2>
                </div>
            </div>
        </div>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li>
                    <a class="nav-link scrollto {{ Route::currentRouteName() == 'pasien.index' ? 'active' : '' }}" href="/pasien">Materi</a>
                </li>
                <li><a class="nav-link scrollto {{ Route::currentRouteName() == 'pasien.rekamMedis' ? 'active' : '' }}" href="pasien/rekamMedis">Rekam Medis</a></li>
                <li><a class="nav-link scrollto" href="#">Jadwal Kunjungan</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>


        <a href="/logout" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span>Keluar</a>
    </div>
</header>
