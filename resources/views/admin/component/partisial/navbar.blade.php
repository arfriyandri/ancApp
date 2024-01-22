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
                        <span style="color: white" class="block m-t-xs font-bold">Admin</span>
                    </div>
                </div>
                <div class="logo-element">
                    ANC
                </div>
            </li>
            <li class="{{ Route::currentRouteName() == 'index' ? 'active' : '' }}">
                <a href="/index-admin">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-house-fill" viewBox="0 0 16 16">
                        <path
                            d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
                        <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
                    </svg>
                    <span class="nav-label" style="margin-left: 6px">Dashboard</span>
                </a>
            </li>
            <li class="{{ Route::currentRouteName() == 'showBidan' ? 'active' : '' }}">
                <a href="/admin/bidan">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-file-earmark-medical-fill" viewBox="0 0 16 16">
                        <path
                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm-3 2v.634l.549-.317a.5.5 0 1 1 .5.866L7 7l.549.317a.5.5 0 1 1-.5.866L6.5 7.866V8.5a.5.5 0 0 1-1 0v-.634l-.549.317a.5.5 0 1 1-.5-.866L5 7l-.549-.317a.5.5 0 0 1 .5-.866l.549.317V5.5a.5.5 0 1 1 1 0zm-2 4.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zm0 2h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1z" />
                    </svg>
                    <span class="nav-label" style="margin-left: 6px">Data Bidan</span>
                </a>
            </li>
            <li class="{{ Route::currentRouteName() == 'showPasien' ? 'active' : '' }}">
                <a href="/admin/pasien">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path
                            d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                    </svg>
                    <span class="nav-label" style="margin-left: 6px">Data Pasien</span></a>
            </li>
            <li class="{{ Route::currentRouteName() == 'showMateri' ? 'active' : '' }}">
                <a href="/admin/materi">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-file-earmark-fill" viewBox="0 0 16 16">
                        <path
                            d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z" />
                    </svg>
                    <span class="nav-label" style="margin-left: 6px">Data Materi</span></a>
            </li>
            <li>
                <a href="/logout">
                    <i class="fa fa-sign-out"></i>
                    <span class="nav-label" style="margin-left: 6px">Keluar</span></a>
            </li>
        </ul>
    </div>
</nav>
