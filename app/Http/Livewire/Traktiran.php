<?php

namespace App\Http\Livewire;

use App\Http\Controllers\ProductController;
use App\Models\ImageProduct;
use Livewire\Component;

class Traktiran extends Component
{
    public function render()
    {
        $products =  new ProductController;

        $data = [
            'products' => $products->show(),
            'images' => ImageProduct::all()
        ];
        return view('livewire.traktiran', $data);
    }
}
