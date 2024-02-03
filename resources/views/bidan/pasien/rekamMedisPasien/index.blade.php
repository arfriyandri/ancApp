@include('bidan.component.head')

<body>
    <div id="wrapper">
        @include('bidan.component.partisial.navbar')

        <div id="page-wrapper" class="gray-bg">

            <header>
                @include('bidan.component.partisial.header')
            </header>

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>{{ $data['title'] }} @foreach ( $data['pasiens'] as $d ){{ $d -> name }}@endforeach</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/bidan/pasien">Data Pasien</a>
                        </li>
                        <li class="breadcrumb-item">
                            <strong>Data Rekam Medis</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">
                            <div class="ibox-content">
                                <h2>Rekam Medis</h2>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Berat Badan</th>
                                                <th>Jumlah Janin</th>
                                                <th>Keluhan</th>
                                                <th>TFU (cm)</th>
                                                <th>Umur Kandungan (Minggu)</th>
                                                <th>HB (mg/dL)</th>
                                                <th>Tanggal Pemeriksaan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ( $data['rekam_medis'] as $d )
                                            <tr class="gradeX">
                                                {{-- ganti pake nomor --}}
                                                <td>{{ $loop -> iteration}}</td>
                                                <td>{{ $d -> berat_badan }}</td>
                                                <td>{{ $d -> jumlah_janin}}</td>
                                                <td>{{ $d -> keluhan}}</td>
                                                <td>{{ $d -> tfu}}</td>
                                                <td>{{ $d -> uk}}</td>
                                                <td>{{ $d -> hb}}</td>
                                                <td>{{ $d -> created_at}}</td>
                                                <td>
                                                    <div class="row justify-content-center">
                                                    <a href="/bidan/pasien/@foreach ( $data['pasiens'] as $value ){{ $value -> id }}@endforeach/rekamMedisPasien/{{ $d -> id }}/edit" class="btn btn-info" style="margin: 6px">
                                                        <i class="fa fa-edit" title="edit"></i>
                                                    </a>
                                                    <form action="/bidan/pasien/@foreach ( $data['pasiens'] as $value ){{ $value -> id }}@endforeach/rekamMedisPasien/{{ $d -> id }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="btn btn-danger" style="margin: 6px">
                                                            <i class="fa fa-trash" title="hapus"></i></a>
                                                        </button>
                                                    </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex" style="padding-left: 15px">
                                    <a href="/bidan/pasien/@foreach( $data['pasiens'] as $d ){{ $d -> id }}@endforeach/rekamMedisPasien/create" class="btn">Tambah data</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">
                            <div class="ibox-content">
                                <h2>Jadwal</h2>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>Waktu</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ( $data['jadwals'] as $d )
                                            <tr class="gradeX">
                                                {{-- ganti pake nomor --}}
                                                <td>{{ $loop -> iteration}}</td>
                                                <td>{{ $d -> tanggal }}</td>
                                                <td>{{ $d -> waktu}}</td>
                                                <td>
                                                    <div class="row justify-content-center">
                                                        <a hidden href="/bidan/pasien/@foreach ( $data['pasiens'] as $value ){{ $value -> id }}@endforeach/rekamMedisPasien/{{ $d -> id }}/edit" class="btn btn-info" style="margin: 6px">
                                                            <i class="fa fa-edit" title="edit"></i>
                                                        </a>
                                                        <form action="/bidan/pasien/@foreach ( $data['pasiens'] as $value ){{ $value -> id }}@endforeach/jadwalPasien/{{ $d -> id }}" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button class="btn btn-danger" style="margin: 6px">
                                                                <i class="fa fa-trash" title="hapus"></i></a>
                                                            </button>
                                                        </form>
                                                        </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex" style="padding-left: 15px">
                                    <a href="/bidan/pasien/@foreach( $data['pasiens'] as $d ){{ $d -> id }}@endforeach/rekamMedisPasien/create" class="btn">Tambah data</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@include('bidan.component.foot')
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
