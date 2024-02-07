<body>
    @include('pasien.component.header')
    <div class="container-fluid">
        <div class="row">
            <section class="breadcrumbs container" style="height:66vh">
                <div class="col">
                    <div class="container">
                        <div class="row tm-catalog-item-list">
                                @foreach ($data['materis'] as $val)
                                <div class="col-lg-3">
                                    <div class="position-relative tm-thumbnail-container">
                                        <img src="{{ asset('template/assets/img/logo.jpeg') }}" alt="Image"
                                            class="img-fluid tm-catalog-item-img">
                                    </div>
                                    <div class="p-4 tm-catalog-item-description">
                                        <h3 style="margin-top: -15px; margin-left: -24px;"
                                            class="tm-text-primary tm-catalog-item-title">{{ $val->judul }}</h3>
                                        <a href="{{ asset('storage/uploads/' . $val->file) }}" target="_blank"
                                            class="appointment-btn scrollto"
                                            style="margin-left:-24px; border-radius:25px;">
                                            <span class="d-none d-md-inline">Download</span>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                    </div>
                </div>
                <section>
        </div>
    </div>
    @include('pasien.component.footer')
</body>
