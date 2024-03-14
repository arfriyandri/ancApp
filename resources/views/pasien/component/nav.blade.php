<nav class="navbar navbar-expand-lg navbar-static-top fixed-top" role="navigation">
    <a href="#" class="navbar-brand">{{ $data['title'] }}</a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar"
        aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-reorder"></i>
    </button>

    <div class="navbar-collapse collapse" id="navbar" style="">
        <ul class="nav navbar-nav mr-auto">
            <li class="active">
                <a aria-expanded="false" role="button" href="/pasien">Selamat datang, {{ $data['pasiens'] -> name }}</a>
            </li>
            <li class="dropdown">
                <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Menu item</a>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="#materi">Materi</a></li>
                    <li><a href="#rekamMedis">Rekam Medis</a></li>
                    <li><a href="#jadwal">Jadwal</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-top-links navbar-right">
            <li>
                <a aria-expanded="false" role="button" href="/pasien">Bidan {{ $data['pasiens'] -> bidan -> name }}</a>
            </li>
            <li>
                <a href="/logout">
                    <i class="fa fa-sign-out"></i> Log out
                </a>
            </li>
        </ul>
    </div>
</nav>
