<?php

namespace App\Http\Livewire;

use App\Models\Banner as ModelsBanner;
use Livewire\Component;

class Banner extends Component
{
    public function render()
    {
        $data = [
            'banners' => ModelsBanner::all()
        ];
        return view('livewire.banner',$data);
    }
}
