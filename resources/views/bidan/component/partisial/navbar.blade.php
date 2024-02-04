<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <div class="d-flex justify-content-center">
                        <img alt="image" class="rounded-circle" src="{{ asset('template/assets/img/logo.jpeg') }}"
                            style="width: 84px" />
                    </div>
                    <div class="d-flex justify-content-center">
                        <span style="color: white" class="block m-t-xs font-bold">Bidan {{ $data['bidans'] -> name }}</span>
                    </div>
                </div>
                <div class="logo-element">
                    ANC
                </div>
            </li>
            <li class="{{ Route::currentRouteName() == 'pasien.index' || Route::currentRouteName() == 'rekamMedis.index' ? 'active' : '' }}">
                <a href="/bidan/pasien">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path
                            d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                    </svg>
                    <span class="nav-label" style="margin-left: 6px">Data Pasien</span></a>
            </li>
            <li class="{{ Route::currentRouteName() == 'materiBidan.index' ? 'active' : '' }}">
                <a href="/bidan/materi">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-file-earmark-fill" viewBox="0 0 16 16">
                        <path
                            d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z" />
                    </svg>
                    <span class="nav-label" style="margin-left: 6px">Data Materi</span></a>
            </li>
        </ul>
    </div>
</nav>
