    <div class="row container text-center">
        <div class="col-lg-4">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Jumlah Bidan</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">@foreach ($data['countBidans'] as $countBidans)
                        {{ $countBidans -> jumlah }}
                    @endforeach</h1>
                    <small>Data Bidan</small>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox ">
                <div class="ibox-title"">
                    <h5>Jumlah Pasien</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">@foreach ($data['countPasiens'] as $countPasiens)
                        {{ $countPasiens -> jumlah }}
                    @endforeach</h1>
                    <small>Data Pasien</small>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Jumlah Materi</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">@foreach ($data['countMateris'] as $countMateris)
                        {{ $countMateris -> jumlah }}
                    @endforeach</h1>
                    <small>Data Materi</small>
                </div>
            </div>
        </div>
    </div>
