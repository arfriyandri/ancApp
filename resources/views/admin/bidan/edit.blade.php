@include('admin.component.head')

<body>
    <div id="wrapper">
        @include('admin.component.partisial.navbar')

        <div id="page-wrapper" class="gray-bg">

            <header>
                @include('admin.component.partisial.header')
            </header>

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>{{ $tittle }}</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/admin">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="/admin/bidan">Data Bidan</a>
                        </li>
                        <li class="breadcrumb-item">
                            <strong>Edit Data</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
            <br>
            <form action="/admin/bidan/{{ $bidans -> id }}" method="POST">
                @method('PUT')
                @csrf
                <div class="row wrapper border-bottom white-bg page-heading wrapper-content animated fadeInRight">
                    <div hidden>
                        <input type="text" name="id" value="{{ $bidans -> id }}">
                    </div>
                    <h2 class="pasien">Edit Bidan</h2>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div>
                                    <label style="margin-left: 24; margin-top: 29px;">NIP</label>
                                </div>
                                <div class="col">
                                    <div class="" style="margin-left: 90px; margin-top: -30px;"><input
                                            type="text" name="username" class="form-control" placeholder="NIP" value="{{ $bidans -> username }}"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div>
                                    <label style="margin-left: 24; margin-top: 29px;">Nama</label>
                                </div>
                                <div class="col">
                                    <div class="" style="margin-left: 90px; margin-top: -30px;"><input
                                            type="text" name="name" class="form-control" placeholder="Nama" value="{{ $bidans -> name }}"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div>
                                    <label style="margin-left: 24; margin-top: 29px;">Alamat</label>
                                </div>
                                <div class="col">
                                    <div class="" style="margin-left: 90px; margin-top: -30px;"><input
                                            type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ $bidans -> alamat }}"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div>
                                    <label style="margin-left: 24; margin-top: 29px;">Kata Sandi</label>
                                </div>
                                <div class="col">
                                    <div class="" style="margin-left: 90px; margin-top: -30px;">
                                        <input
                                            type="text" name="password" class="form-control" placeholder="Kata Sandi">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <button type="button submit" class="btn pasien" name="Submit" value="submit">Simpan</button>
            </form>
        </div>
    </div>
    </div>
</body>
@include('admin.component.foot')
<script>
    $(document).ready(function() {
        $('.dataTables-example').DataTable({
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [{
                    extend: 'copy'
                },
                {
                    extend: 'csv'
                },
                {
                    extend: 'excel',
                    title: 'ExampleFile'
                },
                {
                    extend: 'pdf',
                    title: 'ExampleFile'
                },

                {
                    extend: 'print',
                    customize: function(win) {
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                }
            ]

        });

    });
</script>
