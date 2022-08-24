<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtomImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 119; $i++) {
            DB::table('atom_images')->insert([
                "atom_id" => $i,
                "file_name" => "img1.png"
            ]);

            DB::table('atom_images')->insert([
                "atom_id" => $i,
                "file_name" => "img2.png"
            ]);
        }
    }
}
