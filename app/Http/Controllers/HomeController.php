<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\ProductController;

class HomeController extends Controller
{
    public function showProducts(){
        $product = new ProductController;
        $data = [
            'products' => $product->show()
        ];
        return view('Home/index',$data);
    }
}
