<div>
    <div class="input-group input-group-sm search">
        <span class="input-group-text bg-white" id="search"><i class="bi bi-search"></i></span>
        <input type="text" class="form-control" wire:model="message">
    </div>
    @if ($message)
        <div class="list-search shadow">
            <div class="row">
                <h5>Pencarian : {{ $message }}</h5>
            </div>
            @foreach ($products as $product)
                <div class="row">
                    <a href=""><i class="bi bi-search mx-3"></i> {{ $product->name }}</a>
                </div>
            @endforeach
        </div>
    @endif
</div>
