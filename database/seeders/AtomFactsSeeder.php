<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtomFactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 119; $i++) {
            DB::table('atom_facts')->insert([
                "atom_id" => $i,
                "content" => "fact 1 for atom with order " . $i
            ]);

            DB::table('atom_facts')->insert([
                "atom_id" => $i,
                "content" => "fact 2 for atom with order " . $i
            ]);
        }
    }
}
