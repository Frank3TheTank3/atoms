<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('atoms')->insert([
            'symbol' => 'H',
            'mass' => 1,
            'boiling_point' => 1,
            'melting_point' => 1,
            'order' => 1,
            'electrons' => 1,
            'protons' => 1,
            'electronegativity' => 1,
            'discovery_date' => '2012-06-18'
        ]);
    }
}
