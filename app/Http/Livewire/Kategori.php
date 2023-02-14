<?php

namespace App\Http\Livewire;

use App\Http\Controllers\CategoryController;
use App\Models\SubCategory;
use Livewire\Component;

class Kategori extends Component
{
    public $idCategory;

    public function subCategory($props)
    {
        $this->idCategory = $props;
    }
    
    public function render()
    {
        $category = new CategoryController;
        $data = [
            'category' => $category->show(),
            'subCategory' => SubCategory::where('category_id',$this->idCategory)->get()
        ];
        return view('livewire.kategori',$data);
    }
}
