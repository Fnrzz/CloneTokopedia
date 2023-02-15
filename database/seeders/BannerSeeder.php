<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::create([
            'name' => 'banner1.jpg'
        ]);
        Banner::create([
            'name' => 'banner2.jpg'
        ]);
        Banner::create([
            'name' => 'banner3.jpg'
        ]);
        Banner::create([
            'name' => 'banner4.jpg'
        ]);
    }
}
