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
                            <strong>Data Materi</strong>
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
                                                <th>Judul</th>
                                                <th>File</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ( $data['materis'] as $d )
                                            <tr class="gradeX">
                                                <td>{{ $loop -> iteration}}</td>
                                                <td><a href="{{ asset('storage/uploads/' . $d -> file) }}" target="_blank">{{ $d -> file }}</a></td>
                                                <td>{{ $d -> judul}}</td>
                                                <td>
                                                    <div class="row justify-content-center">
                                                        <a href="/admin/materi/{{ $d -> id }}/edit" class="btn btn-info" style="margin: 6px"> <i class="fa fa-edit" title="edit"></i> </a>
                                                        <form action="/admin/materi/{{ $d -> id }}" method="POST">
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
                                    <a href="/admin/materi/create" class="btn">Tambah data</a>
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
