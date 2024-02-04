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
                    <h2>{{$data['title']}}@foreach ($data['pasiens'] as $d) {{ $d -> name }} @endforeach</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/bidan/pasien">Data Pasien</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="/bidan/pasien/@foreach ($data['pasiens'] as $d){{ $d -> id }}/rekamMedisPasien @endforeach">Data Rekam Medis</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Tambah Data Jadwal</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
            <br>
            <form action="/bidan/pasien/@foreach ($data['pasiens'] as $d){{ $d -> id }}/jadwalPasien @endforeach" method="POST">
                @csrf
                <div class="row wrapper border-bottom white-bg page-heading wrapper-content animated fadeInRight">
                    <h2 class="pasien">Tambah Jadwal @foreach ($data['pasiens'] as $d) {{ $d -> name }} @endforeach</h2>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="col">
                                    <div class="" style="margin-left: 90px; margin-top: -30px;" hidden>
                                        <input type="text" name="id_bidans" class="form-control" value="@foreach ($data['pasiens'] as $d ){{ $d -> bidan -> id }}@endforeach" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="col">
                                    <div class="" style="margin-left: 90px; margin-top: -30px;" hidden>
                                        <input type="text" name="id_pasiens" class="form-control" value="@foreach ($data['pasiens'] as $d ){{ $d -> id }}@endforeach" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div>
                                    <label style="margin-left: 24; margin-top: 29px;">Tanggal</label>
                                </div>
                                <div class="col">
                                    <div class="" style="margin-left: 90px; margin-top: -30px;">
                                        <input type="date" name="tanggal" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div>
                                    <label style="margin-left: 24; margin-top: 29px;">Jam</label>
                                </div>
                                <div class="col">
                                    <div class="" style="margin-left: 90px; margin-top: -30px;">
                                        <input type="time" name="waktu" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <button type="button submit" class="btn pasien" name="Submit" value="submit">Tambah Jadwal</button>
            </form>
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
