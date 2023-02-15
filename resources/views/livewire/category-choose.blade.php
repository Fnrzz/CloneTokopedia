<div wire:init="loadPosts">
    <div class="row">
        <div class="col">
            <h5 class="fw-bold">Kategori Pilihan</h5>
        </div>
    </div>
    <div class="row mt-3">
        @foreach ($category as $category)
            <div class="col-3">
                <div class="card card-category-choose">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <img src="{{ asset('/storage/categorychoose/' . $category->image) }}" class="img-fluid">
                            </div>
                            <div class="col-12 mt-3">
                                <h5 class="card-title text-center">{{ $category->subcategory->name }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
