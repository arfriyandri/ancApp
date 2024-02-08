<section id="rekamMedis">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Rekam Medis </h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row justify-content-end">
                        <div class="col-sm-3">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-sm" placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-sm btn-primary" type="button">Cari</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Berat Badan</th>
                                    <th>Jumlah Janin</th>
                                    <th>Keluhan</th>
                                    <th>TFU</th>
                                    <th>Usia Kehamilan</th>
                                    <th>HB</th>
                                    <th>Tanggal Pemeriksaan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['rekamMedis'] as $val)
                                <tr>
                                    <td>{{ $loop -> iteration }}</td>
                                    <td>{{ $val -> berat_badan }}</td>
                                    <td>{{ $val -> jumlah_janin }}</td>
                                    <td>{{ $val -> keluhan }}</td>
                                    <td>{{ $val -> tfu }}</td>
                                    <td>{{ $val -> uk }}</td>
                                    <td>{{ $val -> hb }}</td>
                                    <td>{{ $val -> created_at }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
