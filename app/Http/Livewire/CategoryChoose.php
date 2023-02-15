<?php

namespace App\Http\Livewire;

use App\Http\Controllers\CategoryChooseController;
use Livewire\Component;

class CategoryChoose extends Component
{
    public $readyToLoad = false;
 
    public function loadPosts()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        $categories = new CategoryChooseController;
        $data = [
            'category' => $this->readyToLoad ? $categories->show() : [] 
        ];
        return view('livewire.category-choose',$data);
    }
}
