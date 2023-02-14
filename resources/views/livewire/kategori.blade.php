<div class="container category-container">
    <div class="row">
        <div class="col-3 category-column">
            @foreach ($category as $category)
                <div class="row">
                    <form wire:submit.prevent="subCategory({{ $category->id }})">
                        <button type="submit">{{ $category->name }}</button>
                    </form>
                </div>
            @endforeach
        </div>
        <div class="col-9 category-column">
            <div class="row">
                @foreach ($subCategory as $subCategory)
                    <div class="col-3">
                        <a href="" class="subCategory">{{ $subCategory->name }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
