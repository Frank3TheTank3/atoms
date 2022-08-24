<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtomCommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 119; $i++) {
            DB::table('atom_comments')->insert([
                "atom_id" => $i,
                "user_id" => 1,
                "content" => "im user 1 commenting on atom with order ".$i
            ]);

            DB::table('atom_comments')->insert([
                "atom_id" => $i,
                "user_id" => 2,
                "content" => "im user 2 commenting on atom with order ".$i
            ]);

            DB::table('atom_comments')->insert([
                "atom_id" => $i,
                "user_id" => 3,
                "content" => "im user 3 commenting on atom with order ".$i
            ]);
        }
    }
}
