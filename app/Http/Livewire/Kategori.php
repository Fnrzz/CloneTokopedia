<?php

namespace App\Http\Livewire;

use App\Http\Controllers\CategoryController;
use Livewire\Component;

class Kategori extends Component
{
    public function render()
    {
        $category = new CategoryController;
        $data = [
            'category' => $category->show()
        ];
        return view('livewire.kategori',$data);
    }
}
