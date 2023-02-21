<div class="container mt-5">
    <div class="row mb-3">
        <div class="col">
            <h5>Traktiran Pengguna Baru</h5>
        </div>
    </div>
    <div class="traktiran-wrapper">
        <a class="traktiran-block">
            <div class="traktiran-image-wrapper">
                <img src="{{ asset('/storage/icon/traktiran.webp') }}">
            </div>
        </a>
        <div class="traktiran-product-wrapper">
            <div class="traktiran-row">
                <div class="traktiran-corusel">
                    <div class="card first-card">
                        <div class="card-body">
                        </div>
                    </div>
                    @foreach ($products as $product)
                        <div class="card">
                            <a href="" class="text-decoration-none text-dark">
                                @foreach ($images as $image)
                                    @if ($image->product_id == $product->id)
                                        <img src="{{ $image->name }}" class="card-img-top rounded">
                                    @endif
                                @endforeach
                                <div class="card-body">
                                    <h6 class="fw-bold mt-2">Rp. {{ number_format($product->price, 0, ',', '.') }}</h6>
                                    <div class="progress" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                        aria-valuemax="100" style="height: 3px">
                                        <div class="progress-bar bg-danger" style="width: 75%"></div>
                                    </div>
                                    <p class="card-sub">Segera Habis</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
