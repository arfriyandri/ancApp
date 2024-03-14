<section id="materi" class="pt-5">
        <div class="ibox-title">
            <h5>Materi</h5>
        </div>
        <div class="row">
            @foreach ($data['materis'] as $d)
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">
                            <div class="product-imitation">
                                <img alt="image" src="{{ asset('template/assets/img/materi.png') }}"
                                    style="width: 100px" />
                            </div>
                            <div class="product-desc">
                                <small class="text-muted">Materi</small>
                                <h3 class="product-name">{{ $d->judul }}</h3>
                                <div class="m-t text-righ">
                                    <a href="{{ asset('storage/uploads/' . $d->file) }}" target="_blank"
                                        class="btn btn-xs btn-outline btn-primary">Download <i
                                            class="fa fa-cloud-download"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</section>
