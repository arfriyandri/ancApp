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
                    <h2>{{$data['title']}}</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/admin">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Data Pasien</strong>
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
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Berat Badan</th>
                                                <th>Jumlah Janin</th>
                                                <th>Keluhan</th>
                                                <th>TFU</th>
                                                <th>Umur Kandungan (Mgg)</th>
                                                <th>HB (mg/dL)</th>
                                                <th>Tanggal Pemeriksaan</th>
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
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
