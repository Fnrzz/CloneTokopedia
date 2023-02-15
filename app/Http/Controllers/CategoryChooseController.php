<?php

namespace App\Http\Controllers;

use App\Models\CategoryChoose;
use Illuminate\Http\Request;

class CategoryChooseController extends Controller
{
    public function show(){
        $data = CategoryChoose::all();
        return $data;
    }
}
