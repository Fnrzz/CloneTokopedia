<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Magsafe Clear Case iPhone 11 Pro Max iPhone 11 iPhone Xs Max iPhone Xr - iPhone X Xs',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat architecto optio quis repudiandae assumenda rem temporibus. Earum aperiam nemo repellendus animi deserunt dolores quis voluptate corrupti aliquam suscipit. Assumenda quod quo ut eum laborum dolores, obcaecati recusandae est rerum, culpa dolorum eius dignissimos laudantium ipsam odio vel, illum velit eveniet.',
            'stock' => 20,
            'price' => 120000
        ]);
    }
}
