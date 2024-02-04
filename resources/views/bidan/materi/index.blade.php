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
                    <h2>{{$data['title']}}</h2>
                    <ol class="breadcrumb">
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
                    @foreach ( $data['materis'] as $d)
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="ibox-content product-box">
                                <div class="product-imitation">
                                    <img alt="image" src="{{ asset('template/assets/img/logo.jpeg') }}" style="width: 100px" />
                                </div>
                                <div class="product-desc">
                                    <small class="text-muted">Materi</small>
                                    <h3 class="product-name">{{$d -> judul}}</h3>
                                    <div class="m-t text-righ">
                                        <a href="{{ asset('storage/uploads/' . $d -> file) }}" target="_blank" class="btn btn-xs btn-outline btn-primary">Download <i class="fa fa-cloud-download"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
