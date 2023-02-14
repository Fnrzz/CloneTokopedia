<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCategory::create([
            'category_id' => 1,
            'name' => 'Cover Kipas Angin'
        ]);
        SubCategory::create([
            'category_id' => 1,
            'name' => 'Cover Kursi'
        ]);
        SubCategory::create([
            'category_id' => 1,
            'name' => 'Hiasan Dinding'
        ]);
        SubCategory::create([
            'category_id' => 1,
            'name' => 'Hiasan Natal'
        ]);
        SubCategory::create([
            'category_id' => 1,
            'name' => 'Jam Dinding'
        ]);
        SubCategory::create([
            'category_id' => 1,
            'name' => 'Jam Meja'
        ]);
        SubCategory::create([
            'category_id' => 1,
            'name' => 'Keset'
        ]);
        SubCategory::create([
            'category_id' => 1,
            'name' => 'Lampu Pohon Natal'
        ]);
        // -----------------------------------------------------------------------------------------------------
        SubCategory::create([
            'category_id' => 2,
            'name' => 'Konektor Kamera'
        ]);
        SubCategory::create([
            'category_id' => 2,
            'name' => 'Microphone Kamera'
        ]);
        SubCategory::create([
            'category_id' => 2,
            'name' => 'Monopod Kamera'
        ]);
        SubCategory::create([
            'category_id' => 2,
            'name' => 'Remote Wireless Kamera'
        ]);
        SubCategory::create([
            'category_id' => 2,
            'name' => 'Slica Gel Kamera'
        ]);
        SubCategory::create([
            'category_id' => 2,
            'name' => 'Stabilizer Kamera'
        ]);
        SubCategory::create([
            'category_id' => 2,
            'name' => 'Tripod Kamera'
        ]);
        SubCategory::create([
            'category_id' => 2,
            'name' => 'Kamera Film'
        ]);
        // ----------------------------------------------------------------------------------------------------
        SubCategory::create([
            'category_id' => 3,
            'name' => 'Buku Bangunan'
        ]);
        SubCategory::create([
            'category_id' => 3,
            'name' => 'Buku Codes & Standars'
        ]);
        SubCategory::create([
            'category_id' => 3,
            'name' => 'Buku Decoration & Ornamens'
        ]);
        SubCategory::create([
            'category_id' => 3,
            'name' => 'Buku Desain Dapur'
        ]);
        SubCategory::create([
            'category_id' => 3,
            'name' => 'Buku Desain Kamar'
        ]);
        SubCategory::create([
            'category_id' => 3,
            'name' => 'Buku Desain Ruang Keluarga'
        ]);
        SubCategory::create([
            'category_id' => 3,
            'name' => 'Buku Desain Ruang Tamu'
        ]);
        SubCategory::create([
            'category_id' => 3,
            'name' => 'Buku Desain Rumah'
        ]);
        // ---------------------------------------------------------------------------------------------------
        SubCategory::create([
            'category_id' => 4,
            'name' => 'Alat Pemotong Serba Guna'
        ]);
        SubCategory::create([
            'category_id' => 4,
            'name' => 'Capitan Makanan'
        ]);
        SubCategory::create([
            'category_id' => 4,
            'name' => 'Celemek'
        ]);
        SubCategory::create([
            'category_id' => 4,
            'name' => 'Chooper'
        ]);
        SubCategory::create([
            'category_id' => 4,
            'name' => 'Grinder'
        ]);
        SubCategory::create([
            'category_id' => 4,
            'name' => 'Gunting Dapur'
        ]);
        SubCategory::create([
            'category_id' => 4,
            'name' => 'Korek Kompor'
        ]);
        SubCategory::create([
            'category_id' => 4,
            'name' => 'Magnet Kulkas'
        ]);
        // ----------------------------------------------------------------------------------------------------
    }
}