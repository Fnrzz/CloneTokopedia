<?php

namespace Database\Seeders;

use App\Models\CategoryChoose;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryChooseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryChoose::create([
            'subcategory_id' => 5,
            'image' => 'jamdinding.jpeg'
        ]);
        CategoryChoose::create([
            'subcategory_id' => 17,
            'image' => 'bukubangunan.jpeg'
        ]);
        CategoryChoose::create([
            'subcategory_id' => 27,
            'image' => 'celemek.jpeg'
        ]);
        CategoryChoose::create([
            'subcategory_id' => 14,
            'image' => 'stabilizerkamera.jpeg'
        ]);
    }
}
