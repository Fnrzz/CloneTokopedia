<?php

namespace App\Http\Livewire;

use App\Http\Controllers\ProductController;
use Livewire\Component;

class Search extends Component
{
    public $message = '';

    public function render()
    {
        $products = new ProductController;
        $data = [
            'products' => $products->getProduct($this->message)
        ]; 
        return view('livewire.search',$data);
    }
}
