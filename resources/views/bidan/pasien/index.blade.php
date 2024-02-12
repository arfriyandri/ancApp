@include('bidan.component.head')

<div id="wrapper">
    @include('bidan.component.partisial.navbar')

    <div id="page-wrapper" class="gray-bg">

        <header>
            @include('bidan.component.partisial.header')
        </header>

        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>{{ $data['title'] }}</h2>
                <ol class="breadcrumb">
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
                                            <th>Nama</th>
                                            <th>NIK</th>
                                            <th>Alamat</th>
                                            <th>Pekerjaan</th>
                                            <th>Umur</th>
                                            <th>Agama</th>
                                            <th>Tinggi Badan</th>
                                            <th>Nomor HP</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data['pasiens'] as $d)
                                            <tr class="gradeX">
                                                {{-- ganti pake nomor --}}
                                                <td>{{ $loop->iteration }}</td>
                                                <td><a
                                                        href="/bidan/pasien/{{ $d->id }}/rekamMedisPasien">{{ $d->name }}</a>
                                                </td>
                                                <td>{{ $d->username }}</td>
                                                <td>{{ $d->alamat }}</td>
                                                <td>{{ $d->pekerjaan }}</td>
                                                <td>{{ $d->umur }}</td>
                                                <td>{{ $d->agama }}</td>
                                                <td>{{ $d->tinggi_badan }}</td>
                                                <td>{{ $d->nomor_hp }}</td>
                                                <td>
                                                    <div class="row justify-content-center">
                                                        <a href="/bidan/pasien/{{ $d->id }}/edit"
                                                            class="btn btn-info" style="margin: 6px">
                                                            <i class="fa fa-edit" title="edit"></i>
                                                        </a>
                                                        <form action="/bidan/pasien/{{ $d->id }}"
                                                            method="POST">
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
                                <a href="pasien/create" class="btn">Tambah data</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
