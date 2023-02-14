<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Rumah Tangga'
        ]);
        Category::create([
            'name' => 'Audio,Kamera & Elektronik lainnya'
        ]);
        Category::create([
            'name' => 'Buku'
        ]);
        Category::create([
            'name' => 'Dapur'
        ]);
        Category::create([
            'name' => 'Elektronik'
        ]);
        Category::create([
            'name' => 'Fashion Anak & Bayi'
        ]);
        Category::create([
            'name' => 'Fashion Muslim'
        ]);
        Category::create([
            'name' => 'Fashion Pria'
        ]);
        Category::create([
            'name' => 'Fashion Wanita'
        ]);
    }
}
