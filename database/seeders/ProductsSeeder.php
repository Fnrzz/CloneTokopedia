<?php

namespace Database\Seeders;

use App\Models\ImageProduct;
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
            'name' => 'LIGER Handsfree headset earphone L-10 METAL stereo & bass - Biru',
            'subcategory_id' => 9,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat architecto optio quis repudiandae assumenda rem temporibus. Earum aperiam nemo repellendus animi deserunt dolores quis voluptate corrupti aliquam suscipit. Assumenda quod quo ut eum laborum dolores, obcaecati recusandae est rerum, culpa dolorum eius dignissimos laudantium ipsam odio vel, illum velit eveniet.',
            'stock' => 20,
            'price' => 19000,
            'imageproduct_id' => 1,
        ]);
        ImageProduct::create([
            'name' => 'https://images.tokopedia.net/img/cache/700/VqbcmM/2022/8/2/fec046b9-54c6-4b47-a114-2b50d41034b4.png.webp?ect=4g'
        ]);

        Product::create([
            'name' => 'SATOO FANES Headset Earphone Handsfree High Bass With Microphone',
            'subcategory_id' => 9,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat architecto optio quis repudiandae assumenda rem temporibus. Earum aperiam nemo repellendus animi deserunt dolores quis voluptate corrupti aliquam suscipit. Assumenda quod quo ut eum laborum dolores, obcaecati recusandae est rerum, culpa dolorum eius dignissimos laudantium ipsam odio vel, illum velit eveniet.',
            'stock' => 20,
            'price' => 13500,
            'imageproduct_id' => 2,
        ]);
        ImageProduct::create([
            'name' => 'https://images.tokopedia.net/img/cache/900/product-1/2019/9/27/37162619/37162619_82aa1932-8f36-43e7-bc9d-cc7827a9dd94_1280_1280'
        ]);

        Product::create([
            'name' => '3633 Pelindung / Penutup Kipas Angin /Fan Cover Baby Safety - 16 inch, Panda',
            'subcategory_id' => 1,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat architecto optio quis repudiandae assumenda rem temporibus. Earum aperiam nemo repellendus animi deserunt dolores quis voluptate corrupti aliquam suscipit. Assumenda quod quo ut eum laborum dolores, obcaecati recusandae est rerum, culpa dolorum eius dignissimos laudantium ipsam odio vel, illum velit eveniet.',
            'stock' => 20,
            'price' => 19000,
            'imageproduct_id' => 3,
        ]);
        ImageProduct::create([
            'name' => 'https://images.tokopedia.net/img/cache/700/VqbcmM/2021/9/12/b9020e79-2283-4dc8-b39d-f4cf13aebf4d.jpg.webp?ect=4g'
        ]);

        Product::create([
            'name' => 'Jam Dinding Digital Smart Alarm LED Digital Clock Modern Minimalis',
            'subcategory_id' => 5,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat architecto optio quis repudiandae assumenda rem temporibus. Earum aperiam nemo repellendus animi deserunt dolores quis voluptate corrupti aliquam suscipit. Assumenda quod quo ut eum laborum dolores, obcaecati recusandae est rerum, culpa dolorum eius dignissimos laudantium ipsam odio vel, illum velit eveniet.',
            'stock' => 20,
            'price' => 299000,
            'imageproduct_id' => 4,
        ]);
        ImageProduct::create([
            'name' => 'https://images.tokopedia.net/img/cache/700/hDjmkQ/2022/12/28/7413bc30-394b-4e32-83d2-cbd137d7edf1.jpg.webp?ect=4g'
        ]);

        Product::create([
            'name' => 'Foundations of Landscape Architecture',
            'subcategory_id' => 17,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat architecto optio quis repudiandae assumenda rem temporibus. Earum aperiam nemo repellendus animi deserunt dolores quis voluptate corrupti aliquam suscipit. Assumenda quod quo ut eum laborum dolores, obcaecati recusandae est rerum, culpa dolorum eius dignissimos laudantium ipsam odio vel, illum velit eveniet.',
            'stock' => 20,
            'price' => 80000,
            'imageproduct_id' => 5,
        ]);
        ImageProduct::create([
            'name' => 'https://images.tokopedia.net/img/cache/900/hDjmkQ/2022/8/3/299fa84a-557b-4baf-b9f0-45a334390cda.jpg'
        ]);
    }
}
