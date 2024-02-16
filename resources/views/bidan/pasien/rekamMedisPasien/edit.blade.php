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
                    <h2>{{ $data['title'] }} {{ $data['pasiens'] -> name }}</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/bidan/pasien">Data Pasien</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="/bidan/pasien/{{ $data['pasiens'] -> id }}/rekamMedisPasien">Data Rekam Medis</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Edit Data Rekam Medis</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
            <br>
            <form action="/bidan/pasien/{{ $data['pasiens'] -> id }}/rekamMedisPasien/{{ $data['rekam_medis'] -> id }}" method="POST">
                @method('PUT')
                @csrf
                <div class="row wrapper border-bottom white-bg page-heading wrapper-content animated fadeInRight">
                    <h2 class="pasien">Tambah Rekam Medis {{ $data['pasiens'] -> name }}</h2>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div>
                                    <label style="margin-left: 24; margin-top: 29px;">Berat Badan</label>
                                </div>
                                <div class="col">
                                    <div class="" style="margin-left: 90px; margin-top: -30px;">
                                        <input type="text" name="berat_badan" class="form-control" placeholder="Berat Badan (kg)" value="{{ $data['rekam_medis'] -> berat_badan }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div>
                                    <label style="margin-left: 24; margin-top: 29px;">Jumlah Janin</label>
                                </div>
                                <div class="col">
                                    <div class="" style="margin-left: 90px; margin-top: -30px;">
                                        <select name="jumlah_janin" id="jumlah_janin" class="col-sm-2 col-form-label">
                                            <option value="{{ $data['rekam_medis'] -> jumlah_janin }}">{{ $data['rekam_medis'] -> jumlah_janin }}</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div>
                                    <label style="margin-left: 24; margin-top: 29px;">Keluhan</label>
                                </div>
                                <div class="col">
                                    <div class="" style="margin-left: 90px; margin-top: -30px;">
                                        <input type="text" name="keluhan" class="form-control" placeholder="Keluhan" value="{{ $data['rekam_medis'] -> keluhan }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div>
                                    <label style="margin-left: 24; margin-top: 29px;">TFU</label>
                                </div>
                                <div class="col">
                                    <div class="" style="margin-left: 90px; margin-top: -30px;">
                                        <input type="text" name="tfu" class="form-control" placeholder="TFU (cm)" value="{{ $data['rekam_medis'] -> tfu }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div>
                                    <label style="margin-left: 24; margin-top: 29px;">Usia Kehamilan</label>
                                </div>
                                <div class="col">
                                    <div class="" style="margin-left: 90px; margin-top: -30px;">
                                        <input type="text" name="uk" class="form-control" placeholder="Usia Kehamilan (minggu)" value="{{ $data['rekam_medis'] -> uk }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div>
                                    <label style="margin-left: 24; margin-top: 29px;">HB</label>
                                </div>
                                <div class="col">
                                    <div class="" style="margin-left: 90px; margin-top: -30px;">
                                        <input type="text" name="hb" class="form-control" placeholder="HB (mg/dL)" value="{{ $data['rekam_medis'] -> hb }}">
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
