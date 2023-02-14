<div class="container category-container">
    <div class="row">
        <div class="col-3 category-column">
            @foreach ($category as $category)
                <div class="row">
                    <a>{{ $category->name }}</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
