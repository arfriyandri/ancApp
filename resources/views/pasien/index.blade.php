@include('pasien.component.head')

<body class="top-navigation">
    @include('sweetalert::alert')
    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom white-bg">
                @include('pasien.component.nav')
                <div class="container">
                    <div class="wrapper wrapper-content">
                        <div class="container">
                            @include('pasien.component.materi')
                            @include('pasien.component.rekamMedis')
                            @include('pasien.component.jadwal')
                        </div>
                    </div>
                </div>
            </div>
            @include('pasien.component.foot')
        </div>
    </div>
</body>
