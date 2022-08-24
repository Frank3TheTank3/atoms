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
            'order' => 1,
            'name' => 'Hydrogen',
            'symbol' => 'H',
            'mass' => 1.008,
            'energy_levels' => '1',
            'electronegativity' => 2.2,
            'melting_point' => 14.01,
            'boiling_point' => 20.28,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0.75,
            'series' => 'reactive_nonmetals',
            'discovered' => 1766
        ]);

        DB::table('atoms')->insert([
            'order' => 2,
            'name' => 'Helium',
            'symbol' => 'He',
            'mass' => 4.0026,
            'energy_levels' => '2',
            // 'electronegativity' => N/A,
            // 'melting_point' => N/A,
            'boiling_point' => 4.22,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0.23,
            'series' => 'noble_gasses',
            'discovered' => 1895
        ]);

        // 2 Hull

        DB::table('atoms')->insert([
            'order' => 3,
            'name' => 'Lithium',
            'symbol' => 'Li',
            'mass' => 6.94,
            'energy_levels' => '2,1',
            'electronegativity' => 0.98,
            'melting_point' => 453.69,
            'boiling_point' => 1615,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 6e-9,
            'series' => 'alkali_metals',
            'discovered' => 1817
        ]);

        DB::table('atoms')->insert([
            'order' => 4,
            'name' => 'Beryllium',
            'symbol' => 'Be',
            'mass' => 9.0122,
            'energy_levels' => '2,2',
            'electronegativity' => 1.57,
            'melting_point' => 1560,
            'boiling_point' => 2743,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 1e-9,
            'series' => 'alkaline_earth_metals',
            'discovered' => 1797
        ]);

        DB::table('atoms')->insert([
            'order' => 5,
            'name' => 'Boron',
            'symbol' => 'B',
            'mass' => 10.81,
            'energy_levels' => '2,3',
            'electronegativity' => 2.04,
            'melting_point' => 2348,
            'boiling_point' => 4273,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 1e-9,
            'series' => 'metalloids',
            'discovered' => 1808
        ]);

        DB::table('atoms')->insert([
            'order' => 6,
            'name' => 'Carbon',
            'symbol' => 'C',
            'mass' => 12.011,
            'energy_levels' => '2,4',
            'electronegativity' => 2.55,
            'melting_point' => 3915,
            'boiling_point' => 3915,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0.005,
            'series' => 'reactive_nonmetals',
            'discovered' => -3750
        ]);

        DB::table('atoms')->insert([
            'order' => 7,
            'name' => 'Nitrogen',
            'symbol' => 'N',
            'mass' => 14.007,
            'energy_levels' => '2,5',
            'electronegativity' => 3.04,
            'melting_point' => 63.05,
            'boiling_point' => 77.36,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0.001,
            'series' => 'reactive_nonmetals',
            'discovered' => 1772
        ]);

        DB::table('atoms')->insert([
            'order' => 8,
            'name' => 'Oxygen',
            'symbol' => 'O',
            'mass' => 15.999,
            'energy_levels' => '2,6',
            'electronegativity' => 3.44,
            'melting_point' => 54.8,
            'boiling_point' => 90.2,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0.01,
            'series' => 'reactive_nonmetals',
            'discovered' => 1774
        ]);

        DB::table('atoms')->insert([
            'order' => 9,
            'name' => 'Fluorine',
            'symbol' => 'F',
            'mass' => 18.998403163,
            'energy_levels' => '2,7',
            'electronegativity' => 3.98,
            'melting_point' => 53.5,
            'boiling_point' => 85.03,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0.0000004,
            'series' => 'reactive_nonmetals',
            'discovered' => 1886
        ]);

        DB::table('atoms')->insert([
            'order' => 10,
            'name' => 'Neon',
            'symbol' => 'Ne',
            'mass' => 20.1797,
            'energy_levels' => '2,8',
            // 'electronegativity' => N/A,
            'melting_point' => 24.56,
            'boiling_point' => 27.07,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0.0013,
            'series' => 'noble_gasses',
            'discovered' => 1898
        ]);

        // 3 Hull

        DB::table('atoms')->insert([
            'order' => 11,
            'name' => 'Sodium',
            'symbol' => 'Na',
            'mass' => 22.98976926,
            'energy_levels' => '2,8,1',
            'electronegativity' => 0.93,
            'melting_point' => 370.87,
            'boiling_point' => 1156,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0.00002,
            'series' => 'alkali_metals',
            'discovered' => 1807
        ]);

        DB::table('atoms')->insert([
            'order' => 12,
            'name' => 'Magnesium',
            'symbol' => 'Mg',
            'mass' => 24.305,
            'energy_levels' => '2,8,2',
            'electronegativity' => 1.31,
            'melting_point' => 923,
            'boiling_point' => 1363,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0.0006,
            'series' => 'alkaline_earth_metals',
            'discovered' => 1755
        ]);

        DB::table('atoms')->insert([
            'order' => 13,
            'name' => 'Aluminium',
            'symbol' => 'Al',
            'mass' => 26.9815385,
            'energy_levels' => '2,8,3',
            'electronegativity' => 1.61,
            'melting_point' => 933.47,
            'boiling_point' => 2792,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0.00005,
            'series' => 'post-transition_metals',
            'discovered' => 1825
        ]);

        DB::table('atoms')->insert([
            'order' => 14,
            'name' => 'Silicon',
            'symbol' => 'Si',
            'mass' => 28.085,
            'energy_levels' => '2,8,4',
            'electronegativity' => 1.9,
            'melting_point' => 1687,
            'boiling_point' => 3173,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0.0007,
            'series' => 'metalloids',
            'discovered' => 1824
        ]);

        DB::table('atoms')->insert([
            'order' => 15,
            'name' => 'Phosphorus',
            'symbol' => 'P',
            'mass' => 30.973761998,
            'energy_levels' => '2,8,5',
            'electronegativity' => 2.19,
            'melting_point' => 317.3,
            'boiling_point' => 553.6,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0.000007,
            'series' => 'reactive_nonmetals',
            'discovered' => 1669
        ]);

        DB::table('atoms')->insert([
            'order' => 16,
            'name' => 'Sulfur',
            'symbol' => 'S',
            'mass' => 32.06,
            'energy_levels' => '2,8,6',
            'electronegativity' => 2.58,
            'melting_point' => 388.36,
            'boiling_point' => 717.87,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0.0005,
            'series' => 'reactive_nonmetals',
            'discovered' => -500
        ]);

        DB::table('atoms')->insert([
            'order' => 17,
            'name' => 'Chlorine',
            'symbol' => 'Cl',
            'mass' => 35.45,
            'energy_levels' => '2,8,7',
            'electronegativity' => 3.16,
            'melting_point' => 171.6,
            'boiling_point' => 239.11,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0.000001,
            'series' => 'reactive_nonmetals',
            'discovered' => 1774
        ]);

        DB::table('atoms')->insert([
            'order' => 18,
            'name' => 'Argon',
            'symbol' => 'Ar',
            'mass' => 39.948,
            'energy_levels' => '2,8,8',
            // 'electronegativity' => N/A,
            'melting_point' => 83.8,
            'boiling_point' => 87.3,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0.0002,
            'series' => 'noble_gasses',
            'discovered' => 1894
        ]);

        // 4th Hull

        DB::table('atoms')->insert([
            'order' => 19,
            'name' => 'Potassium',
            'symbol' => 'K',
            'mass' => 39.0983,
            'energy_levels' => '2,8,8,1',
            'electronegativity' => 0.82,
            'melting_point' => 336.53,
            'boiling_point' => 1032,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0.0003,
            'series' => 'alkali_metals',
            'discovered' => 1807
        ]);

        DB::table('atoms')->insert([
            'order' => 20,
            'name' => 'Calcium',
            'symbol' => 'Ca',
            'mass' => 40.078,
            'energy_levels' => '2,8,8,2',
            'electronegativity' => 1,
            'melting_point' => 1115,
            'boiling_point' => 1757,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0.00007,
            'series' => 'alkaline_earth_metals',
            'discovered' => 1808
        ]);

        DB::table('atoms')->insert([
            'order' => 21,
            'name' => 'Scanadium',
            'symbol' => 'Sc',
            'mass' => 44.955908,
            'energy_levels' => '2,8,9,2',
            'electronegativity' => 1.36,
            'melting_point' => 1814,
            'boiling_point' => 3103,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 3e-8,
            'series' => 'transition_metals',
            'discovered' => 1879
        ]);

        DB::table('atoms')->insert([
            'order' => 22,
            'name' => 'Titanium',
            'symbol' => 'Ti',
            'mass' => 47.867,
            'energy_levels' => '2,8,10,2',
            'electronegativity' => 1.54,
            'melting_point' => 1941,
            'boiling_point' => 3560,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0.000003,
            'series' => 'transition_metals',
            'discovered' => 1791
        ]);

        DB::table('atoms')->insert([
            'order' => 23,
            'name' => 'Vanadium',
            'symbol' => 'V',
            'mass' => 50.9415,
            'energy_levels' => '2,8,11,2',
            'electronegativity' => 1.63,
            'melting_point' => 2183,
            'boiling_point' => 3680,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0.000001,
            'series' => 'transition_metals',
            'discovered' => 1801
        ]);

        DB::table('atoms')->insert([
            'order' => 24,
            'name' => 'Chromium',
            'symbol' => 'Cr',
            'mass' => 51.9961,
            'energy_levels' => '2,8,13,1',
            'electronegativity' => 1.66,
            'melting_point' => 2180,
            'boiling_point' => 2944,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0.000015,
            'series' => 'transition_metals',
            'discovered' => 1797
        ]);

        DB::table('atoms')->insert([
            'order' => 25,
            'name' => 'Manganese',
            'symbol' => 'Mn',
            'mass' => 54.938044,
            'energy_levels' => '2,8,13,2',
            'electronegativity' => 1.55,
            'melting_point' => 1519,
            'boiling_point' => 2334,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0.000008,
            'series' => 'transition_metals',
            'discovered' => 1774
        ]);

        DB::table('atoms')->insert([
            'order' => 26,
            'name' => 'Iron',
            'symbol' => 'Fe',
            'mass' => 55.845,
            'energy_levels' => '2,8,14,2',
            'electronegativity' => 1.83,
            'melting_point' => 1811,
            'boiling_point' => 3134,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0.0011,
            'series' => 'transition_metals',
            'discovered' => -2000
        ]);

        DB::table('atoms')->insert([
            'order' => 27,
            'name' => 'Cobalt',
            'symbol' => 'Co',
            'mass' => 58.933194,
            'energy_levels' => '2,8,15,2',
            'electronegativity' => 1.88,
            'melting_point' => 1768,
            'boiling_point' => 3200,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0.000003,
            'series' => 'transition_metals',
            'discovered' => 1735
        ]);

        DB::table('atoms')->insert([
            'order' => 28,
            'name' => 'Nickel',
            'symbol' => 'Ni',
            'mass' => 58.6934,
            'energy_levels' => '2,8,16,2',
            'electronegativity' => 1.19,
            'melting_point' => 1728,
            'boiling_point' => 3168,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0.00006,
            'series' => 'transition_metals',
            'discovered' => 1751
        ]);

        DB::table('atoms')->insert([
            'order' => 29,
            'name' => 'Copper',
            'symbol' => 'Cu',
            'mass' => 63.546,
            'energy_levels' => '2,8,18,1',
            'electronegativity' => 1.9,
            'melting_point' => 1357.77,
            'boiling_point' => 2835,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 6e-8,
            'series' => 'transition_metals',
            'discovered' => -8000
        ]);

        DB::table('atoms')->insert([
            'order' => 30,
            'name' => 'Zinc',
            'symbol' => 'Zn',
            'mass' => 65.38,
            'energy_levels' => '2,8,18,2',
            'electronegativity' => 1.65,
            'melting_point' => 692.68,
            'boiling_point' => 1180,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0.0000003,
            'series' => 'transition_metals',
            'discovered' => 1500
        ]);

        DB::table('atoms')->insert([
            'order' => 31,
            'name' => 'Gallium',
            'symbol' => 'Ga',
            'mass' => 69.723,
            'energy_levels' => '2,8,18,3',
            'electronegativity' => 1.81,
            'melting_point' => 302.91,
            'boiling_point' => 2477,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 1e-8,
            'series' => 'post-transition_metals',
            'discovered' => 1875
        ]);

        DB::table('atoms')->insert([
            'order' => 32,
            'name' => 'Germanium',
            'symbol' => 'Ge',
            'mass' => 72.63,
            'energy_levels' => '2,8,18,4',
            'electronegativity' => 2.01,
            'melting_point' => 1211.4,
            'boiling_point' => 3093,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0.0000002,
            'series' => 'metalloids',
            'discovered' => 1886
        ]);

        DB::table('atoms')->insert([
            'order' => 33,
            'name' => 'Arsenic',
            'symbol' => 'As',
            'mass' => 74.921595,
            'energy_levels' => '2,8,18,5',
            'electronegativity' => 2.18,
            'melting_point' => 1090,
            'boiling_point' => 887,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 8e-9,
            'series' => 'metalloids',
            'discovered' => 1250
        ]);

        DB::table('atoms')->insert([
            'order' => 34,
            'name' => 'Selenium',
            'symbol' => 'Se',
            'mass' => 78.971,
            'energy_levels' => '2,8,18,6',
            'electronegativity' => 2.55,
            'melting_point' => 494,
            'boiling_point' => 958,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 3e-8,
            'series' => 'reactive_nonmetals',
            'discovered' => 1817
        ]);

        DB::table('atoms')->insert([
            'order' => 35,
            'name' => 'Bromine',
            'symbol' => 'Br',
            'mass' => 79.904,
            'energy_levels' => '2,8,18,7',
            'electronegativity' => 2.96,
            'melting_point' => 265.8,
            'boiling_point' => 332,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 7e-9,
            'series' => 'reactive_nonmetals',
            'discovered' => 1826
        ]);

        DB::table('atoms')->insert([
            'order' => 36,
            'name' => 'Krypton',
            'symbol' => 'Kr',
            'mass' => 83.798,
            'energy_levels' => '2,8,18,8',
            'electronegativity' => 3,
            'melting_point' => 115.79,
            'boiling_point' => 119.93,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 4e-8,
            'series' => 'noble_gasses',
            'discovered' => 1898
        ]);

        // 5th hull

        DB::table('atoms')->insert([
            'order' => 37,
            'name' => 'Rubidium',
            'symbol' => 'Rb',
            'mass' => 85.4678,
            'energy_levels' => '2,8,18,8,1',
            'electronegativity' => 0.82,
            'melting_point' => 312.46,
            'boiling_point' => 961,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 1e-8,
            'series' => 'noble_gasses',
            'series' => 'alkali_metals',
            'discovered' => 1861
        ]);

        DB::table('atoms')->insert([
            'order' => 38,
            'name' => 'Strontium',
            'symbol' => 'Sr',
            'mass' => 87.62,
            'energy_levels' => '2,8,18,8,2',
            'electronegativity' => 0.95,
            'melting_point' => 1050,
            'boiling_point' => 1655,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 4e-8,
            'series' => 'alkaline_earth_metals',
            'discovered' => 1790
        ]);

        DB::table('atoms')->insert([
            'order' => 39,
            'name' => 'Yttrium',
            'symbol' => 'Y',
            'mass' => 88.90584,
            'energy_levels' => '2,8,18,9,2',
            'electronegativity' => 1.22,
            'melting_point' => 1799,
            'boiling_point' => 3618,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 7e-9,
            'series' => 'transition_metals',
            'discovered' => 1794
        ]);

        DB::table('atoms')->insert([
            'order' => 40,
            'name' => 'Zirconium',
            'symbol' => 'Zr',
            'mass' => 91.224,
            'energy_levels' => '2,8,18,10,2',
            'electronegativity' => 1.33,
            'melting_point' => 2128,
            'boiling_point' => 4682,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 5e-8,
            'series' => 'transition_metals',
            'discovered' => 1789
        ]);

        DB::table('atoms')->insert([
            'order' => 41,
            'name' => 'Niobium',
            'symbol' => 'Nb',
            'mass' => 92.90637,
            'energy_levels' => '2,8,18,12,1',
            'electronegativity' => 1.6,
            'melting_point' => 2750,
            'boiling_point' => 5017,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 2e-9,
            'series' => 'transition_metals',
            'discovered' => 1801
        ]);

        DB::table('atoms')->insert([
            'order' => 42,
            'name' => 'Molybdenum',
            'symbol' => 'Mo',
            'mass' => 95.95,
            'energy_levels' => '2,8,18,13,1',
            'electronegativity' => 2.16,
            'melting_point' => 2896,
            'boiling_point' => 4912,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 5e-9,
            'series' => 'transition_metals',
            'discovered' => 1781
        ]);

        DB::table('atoms')->insert([
            'order' => 43,
            'name' => 'Technetium',
            'symbol' => 'Tc',
            'mass' => 98,
            'energy_levels' => '2,8,18,13,2',
            'electronegativity' => 1.9,
            'melting_point' => 2430,
            'boiling_point' => 4538,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'series' => 'transition_metals',
            'discovered' => 1937
        ]);

        DB::table('atoms')->insert([
            'order' => 44,
            'name' => 'Ruthenium',
            'symbol' => 'Ru',
            'mass' => 101.07,
            'energy_levels' => '2,8,18,15,1',
            'electronegativity' => 2.2,
            'melting_point' => 2607,
            'boiling_point' => 4423,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 4e-9,
            'series' => 'transition_metals',
            'discovered' => 1844
        ]);

        DB::table('atoms')->insert([
            'order' => 45,
            'name' => 'Rhodium',
            'symbol' => 'Rh',
            'mass' => 102.90550,
            'energy_levels' => '2,8,18,16,1',
            'electronegativity' => 2.28,
            'melting_point' => 2237,
            'boiling_point' => 3968,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 6e-10,
            'series' => 'transition_metals',
            'discovered' => 1803
        ]);

        DB::table('atoms')->insert([
            'order' => 46,
            'name' => 'Palladium',
            'symbol' => 'Pd',
            'mass' => 106.42,
            'energy_levels' => '2,8,18,18',
            'electronegativity' => 2.2,
            'melting_point' => 1828.05,
            'boiling_point' => 3236,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 2e-9,
            'series' => 'transition_metals',
            'discovered' => 1803
        ]);

        DB::table('atoms')->insert([
            'order' => 47,
            'name' => 'Silver',
            'symbol' => 'Ag',
            'mass' => 107.8682,
            'energy_levels' => '2,8,18,8,1',
            'electronegativity' => 1.93,
            'melting_point' => 1234.93,
            'boiling_point' => 2435,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 6e-10,
            'series' => 'transition_metals',
            'discovered' => -3000
        ]);

        DB::table('atoms')->insert([
            'order' => 48,
            'name' => 'Cadmium',
            'symbol' => 'Cd',
            'mass' => 112.414,
            'energy_levels' => '2,8,18,18,2',
            'electronegativity' => 1.69,
            'melting_point' => 594.22,
            'boiling_point' => 1040,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 2e-9,
            'series' => 'transition_metals',
            'discovered' => 1817
        ]);

        DB::table('atoms')->insert([
            'order' => 49,
            'name' => 'Indium',
            'symbol' => 'In',
            'mass' => 114.818,
            'energy_levels' => '2,8,18,18,3',
            'electronegativity' => 1.78,
            'melting_point' => 429.75,
            'boiling_point' => 2345,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 3e-10,
            'series' => 'post-transition_metals',
            'discovered' => 1863
        ]);

        DB::table('atoms')->insert([
            'order' => 50,
            'name' => 'Tin',
            'symbol' => 'Sn',
            'mass' => 118.710,
            'energy_levels' => '2,8,18,18,4',
            'electronegativity' => 1.96,
            'melting_point' => 505.08,
            'boiling_point' => 2875,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 4e-9,
            'series' => 'post-transition_metals',
            'discovered' => -3000
        ]);

        DB::table('atoms')->insert([
            'order' => 51,
            'name' => 'Antimony',
            'symbol' => 'Sb',
            'mass' => 121.760,
            'energy_levels' => '2,8,18,18,5',
            'electronegativity' => 2.05,
            'melting_point' => 903.78,
            'boiling_point' => 1860,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 4e-10,
            'series' => 'metalloids',
            'discovered' => -3000
        ]);

        DB::table('atoms')->insert([
            'order' => 52,
            'name' => 'Tellurium',
            'symbol' => 'Te',
            'mass' => 127.60,
            'energy_levels' => '2,8,18,18,6',
            'electronegativity' => 2.1,
            'melting_point' => 722.66,
            'boiling_point' => 1261,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 9e-9,
            'series' => 'metalloids',
            'discovered' => 1783
        ]);

        DB::table('atoms')->insert([
            'order' => 53,
            'name' => 'Iodine',
            'symbol' => 'I',
            'mass' => 126.90447,
            'energy_levels' => '2,8,18,18,7',
            'electronegativity' => 2.66,
            'melting_point' => 386.85,
            'boiling_point' => 457.4,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 1e-9,
            'series' => 'reactive_nonmetals',
            'discovered' => 1811
        ]);

        DB::table('atoms')->insert([
            'order' => 54,
            'name' => 'Xenon',
            'symbol' => 'Xe',
            'mass' => 131.293,
            'energy_levels' => '2,8,18,18,8',
            'electronegativity' => 2.6,
            'melting_point' => 161.3,
            'boiling_point' => 165.1,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 1e-8,
            'series' => 'noble_gasses',
            'discovered' => 1898
        ]);

        // 6th hull

        DB::table('atoms')->insert([
            'order' => 55,
            'name' => 'Caesium',
            'symbol' => 'Cs',
            'mass' => 132.90545196,
            'energy_levels' => '2,8,18,18,8,1',
            'electronegativity' => 0.79,
            'melting_point' => 301.59,
            'boiling_point' => 944,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 8e-10,
            'series' => 'alkali_metals',
            'discovered' => 1860
        ]);

        DB::table('atoms')->insert([
            'order' => 56,
            'name' => 'Barium',
            'symbol' => 'Ba',
            'mass' => 137.327,
            'energy_levels' => '2,8,18,18,8,2',
            'electronegativity' => 0.89,
            'melting_point' => 1000,
            'boiling_point' => 2143,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 1e-8,
            'series' => 'alkaline_earth_metals',
            'discovered' => 1808
        ]);

        DB::table('atoms')->insert([
            'order' => 57,
            'name' => 'Lanthanum',
            'symbol' => 'La',
            'mass' => 138.90547,
            'energy_levels' => '2,8,18,18,9,2',
            'electronegativity' => 1.1,
            'melting_point' => 1193,
            'boiling_point' => 3737,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 2e-9,
            'series' => 'lanthanoids',
            'discovered' => 1839
        ]);

        DB::table('atoms')->insert([
            'order' => 58,
            'name' => 'Cerium',
            'symbol' => 'Ce',
            'mass' => 140.116,
            'energy_levels' => '2,8,18,19,9,2',
            'electronegativity' => 1.12,
            'melting_point' => 1071,
            'boiling_point' => 3633,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 1e-8,
            'series' => 'lanthanoids',
            'discovered' => 1803
        ]);

        DB::table('atoms')->insert([
            'order' => 59,
            'name' => 'Praseodymium',
            'symbol' => 'Pr',
            'mass' => 140.90766,
            'energy_levels' => '2,8,18,21,8,2',
            'electronegativity' => 1.13,
            'melting_point' => 1204,
            'boiling_point' => 3563,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 2e-9,
            'series' => 'lanthanoids',
            'discovered' => 1885
        ]);

        DB::table('atoms')->insert([
            'order' => 60,
            'name' => 'Neodymium',
            'symbol' => 'Nd',
            'mass' => 144.242,
            'energy_levels' => '2,8,18,22,8,2',
            'electronegativity' => 1.14,
            'melting_point' => 1294,
            'boiling_point' => 3373,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 1e-8,
            'series' => 'lanthanoids',
            'discovered' => 1885
        ]);

        DB::table('atoms')->insert([
            'order' => 61,
            'name' => 'Promethium',
            'symbol' => 'Pm',
            'mass' => 145,
            'energy_levels' => '2,8,18,23,8,2',
            // 'electronegativity' => N/A,
            'melting_point' => 1373,
            'boiling_point' => 3273,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'series' => 'lanthanoids',
            'discovered' => 1945
        ]);

        DB::table('atoms')->insert([
            'order' => 62,
            'name' => 'Samarium',
            'symbol' => 'Sm',
            'mass' => 150.36,
            'energy_levels' => '2,8,18,24,8,2',
            'electronegativity' => 1.17,
            'melting_point' => 1345,
            'boiling_point' => 2076,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 5e-9,
            'series' => 'lanthanoids',
            'discovered' => 1879
        ]);

        DB::table('atoms')->insert([
            'order' => 63,
            'name' => 'Europium',
            'symbol' => 'Eu',
            'mass' => 151.964,
            'energy_levels' => '2,8,18,25,8,2',
            // 'electronegativity' => N/A,
            'melting_point' => 1095,
            'boiling_point' => 1800,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 5e-10,
            'series' => 'lanthanoids',
            'discovered' => 1901
        ]);

        DB::table('atoms')->insert([
            'order' => 64,
            'name' => 'Gadolinium',
            'symbol' => 'Gd',
            'mass' => 157.25,
            'energy_levels' => '2,8,18,25,9,2',
            'electronegativity' => 1.2,
            'melting_point' => 1586,
            'boiling_point' => 3523,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 2e-9,
            'series' => 'lanthanoids',
            'discovered' => 1880
        ]);

        DB::table('atoms')->insert([
            'order' => 65,
            'name' => 'Terbium',
            'symbol' => 'Tb',
            'mass' => 158.92535,
            'energy_levels' => '2,8,18,27,8,2',
            // 'electronegativity' => N/A,
            'melting_point' => 1629,
            'boiling_point' => 3503,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 5e-10,
            'series' => 'lanthanoids',
            'discovered' => 1843
        ]);

        DB::table('atoms')->insert([
            'order' => 66,
            'name' => 'Dysprosium',
            'symbol' => 'Dy',
            'mass' => 162.5,
            'energy_levels' => '2,8,18,28,8,2',
            'electronegativity' => 1.22,
            'melting_point' => 1685,
            'boiling_point' => 2840,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 2e-9,
            'series' => 'lanthanoids',
            'discovered' => 1886
        ]);

        DB::table('atoms')->insert([
            'order' => 67,
            'name' => 'Holmium',
            'symbol' => 'Ho',
            'mass' => 164.93033,
            'energy_levels' => '2,8,18,29,8,2',
            'electronegativity' => 1.23,
            'melting_point' => 1747,
            'boiling_point' => 2973,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 5e-10,
            'series' => 'lanthanoids',
            'discovered' => 1878
        ]);

        DB::table('atoms')->insert([
            'order' => 68,
            'name' => 'Erbium',
            'symbol' => 'Er',
            'mass' => 167.259,
            'energy_levels' => '2,8,18,30,8,2',
            'electronegativity' => 1.24,
            'melting_point' => 1770,
            'boiling_point' => 3141,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 2e-9,
            'series' => 'lanthanoids',
            'discovered' => 1842
        ]);

        DB::table('atoms')->insert([
            'order' => 69,
            'name' => 'Thulium',
            'symbol' => 'Tm',
            'mass' => 168.93422,
            'energy_levels' => '2,8,18,31,8,2',
            'electronegativity' => 1.25,
            'melting_point' => 1818,
            'boiling_point' => 2223,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 1e-10,
            'series' => 'lanthanoids',
            'discovered' => 1879
        ]);

        DB::table('atoms')->insert([
            'order' => 70,
            'name' => 'Ytterbium',
            'symbol' => 'Yb',
            'mass' => 173.045,
            'energy_levels' => '2,8,18,32,8,2',
            // 'electronegativity' => N/A,
            'melting_point' => 1092,
            'boiling_point' => 1469,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 2e-9,
            'series' => 'lanthanoids',
            'discovered' => 1878
        ]);

        DB::table('atoms')->insert([
            'order' => 71,
            'name' => 'Lutetium',
            'symbol' => 'Lu',
            'mass' => 174.9668,
            'energy_levels' => '2,8,18,32,9,2',
            'electronegativity' => 1.27,
            'melting_point' => 1936,
            'boiling_point' => 3675,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 1e-10,
            'series' => 'lanthanoids',
            'discovered' => 1907
        ]);

        DB::table('atoms')->insert([
            'order' => 72,
            'name' => 'Hafnium',
            'symbol' => 'Hf',
            'mass' => 178.486,
            'energy_levels' => '2,8,18,32,10,2',
            'electronegativity' => 1.3,
            'melting_point' => 2506,
            'boiling_point' => 4876,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 7e-9,
            'series' => 'transition_metals',
            'discovered' => 1923
        ]);

        DB::table('atoms')->insert([
            'order' => 73,
            'name' => 'Tantalum',
            'symbol' => 'Ta',
            'mass' => 180.94788,
            'energy_levels' => '2,8,18,32,11,2',
            'electronegativity' => 1.5,
            'melting_point' => 3290,
            'boiling_point' => 5731,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 8e-11,
            'series' => 'transition_metals',
            'discovered' => 1802
        ]);

        DB::table('atoms')->insert([
            'order' => 74,
            'name' => 'Tungsten',
            'symbol' => 'W',
            'mass' => 183.84,
            'energy_levels' => '2,8,18,32,12,2',
            'electronegativity' => 2.36,
            'melting_point' => 3695,
            'boiling_point' => 5828,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 5e-10,
            'series' => 'transition_metals',
            'discovered' => 1783
        ]);

        DB::table('atoms')->insert([
            'order' => 75,
            'name' => 'Rhenium',
            'symbol' => 'Re',
            'mass' => 186.207,
            'energy_levels' => '2,8,18,32,13,2',
            'electronegativity' => 1.9,
            'melting_point' => 3459,
            'boiling_point' => 5869,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 2e-10,
            'series' => 'transition_metals',
            'discovered' => 1925
        ]);

        DB::table('atoms')->insert([
            'order' => 76,
            'name' => 'Osmium',
            'symbol' => 'Os',
            'mass' => 190.23,
            'energy_levels' => '2,8,18,32,14,2',
            'electronegativity' => 2.2,
            'melting_point' => 3306,
            'boiling_point' => 5285,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 3e-9,
            'series' => 'transition_metals',
            'discovered' => 1803
        ]);

        DB::table('atoms')->insert([
            'order' => 77,
            'name' => 'Iridium',
            'symbol' => 'Ir',
            'mass' => 192.217,
            'energy_levels' => '2,8,18,32,15,2',
            'electronegativity' => 2.2,
            'melting_point' => 2739,
            'boiling_point' => 4701,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 2e-9,
            'series' => 'transition_metals',
            'discovered' => 1803
        ]);

        DB::table('atoms')->insert([
            'order' => 78,
            'name' => 'Platinum',
            'symbol' => 'Pt',
            'mass' => 195.084,
            'energy_levels' => '2,8,18,32,17,1',
            'electronegativity' => 2.28,
            'melting_point' => 2041.4,
            'boiling_point' => 4098,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 5e-9,
            'series' => 'transition_metals',
            'discovered' => 1735
        ]);

        DB::table('atoms')->insert([
            'order' => 79,
            'name' => 'Gold',
            'symbol' => 'Au',
            'mass' => 196.966569,
            'energy_levels' => '2,8,18,32,18,1',
            'electronegativity' => 2.54,
            'melting_point' => 1337.33,
            'boiling_point' => 3129,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 6e-10,
            'series' => 'transition_metals',
            'discovered' => -2500
        ]);

        DB::table('atoms')->insert([
            'order' => 80,
            'name' => 'Mercury',
            'symbol' => 'Hg',
            'mass' => 200.59,
            'energy_levels' => '2,8,18,32,18,2',
            'electronegativity' => 2,
            'melting_point' => 234.32,
            'boiling_point' => 629.88,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 1e-9,
            'series' => 'transition_metals',
            'discovered' => -1500
        ]);

        DB::table('atoms')->insert([
            'order' => 81,
            'name' => 'Thallium',
            'symbol' => 'Tl',
            'mass' => 204.38,
            'energy_levels' => '2,8,18,32,88,3',
            'electronegativity' => 1.62,
            'melting_point' => 577,
            'boiling_point' => 1746,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 5e-10,
            'series' => 'post-transition_metals',
            'discovered' => 1861
        ]);

        DB::table('atoms')->insert([
            'order' => 82,
            'name' => 'Lead',
            'symbol' => 'Pb',
            'mass' => 207.2,
            'energy_levels' => '2,8,18,32,18,4',
            'electronegativity' => 2.33,
            'melting_point' => 600.61,
            'boiling_point' => 2022,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 1e-8,
            'series' => 'post-transition_metals',
            'discovered' => -4000
        ]);

        DB::table('atoms')->insert([
            'order' => 83,
            'name' => 'Bismuth',
            'symbol' => 'Bi',
            'mass' => 208.9804,
            'energy_levels' => '2,8,18,32,18,5',
            'electronegativity' => 2.02,
            'melting_point' => 544.4,
            'boiling_point' => 1837,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 7e-10,
            'series' => 'post-transition_metals',
            'discovered' => 1400
        ]);

        DB::table('atoms')->insert([
            'order' => 84,
            'name' => 'Polonium',
            'symbol' => 'Po',
            'mass' => 209,
            'energy_levels' => '2,8,18,32,18,6',
            'electronegativity' => 2,
            'melting_point' => 528,
            'boiling_point' => 1235,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'series' => 'post-transition_metals',
            'discovered' => 1898
        ]);

        DB::table('atoms')->insert([
            'order' => 85,
            'name' => 'Astatine',
            'symbol' => 'At',
            'mass' => 210,
            'energy_levels' => '2,8,18,32,18,7',
            'electronegativity' => 2.2,
            'melting_point' => 575,
            'boiling_point' => 623,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'series' => 'metalloids',
            'discovered' => 1940
        ]);

        DB::table('atoms')->insert([
            'order' => 86,
            'name' => 'Radon',
            'symbol' => 'Rn',
            'mass' => 222,
            'energy_levels' => '2,8,18,32,18,8',
            // 'electronegativity' => N/A,
            'melting_point' => 202,
            'boiling_point' => 211.3,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'series' => 'noble_gasses',
            'discovered' => 1900
        ]);

        // 7th hull

        DB::table('atoms')->insert([
            'order' => 87,
            'name' => 'Francium',
            'symbol' => 'Fr',
            'mass' => 223,
            'energy_levels' => '2,8,18,32,18,8,1',
            'electronegativity' => 0.7,
            'melting_point' => 294,
            'boiling_point' => 923,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'series' => 'alkali_metals',
            'discovered' => 1939
        ]);

        DB::table('atoms')->insert([
            'order' => 88,
            'name' => 'Radium',
            'symbol' => 'Ra',
            'mass' => 226,
            'energy_levels' => '2,8,18,32,18,8,2',
            'electronegativity' => 0.9,
            'melting_point' => 973,
            'boiling_point' => 2010,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'series' => 'alkaline_earth_metals',
            'discovered' => 1898
        ]);

        DB::table('atoms')->insert([
            'order' => 89,
            'name' => 'Actinium',
            'symbol' => 'Ac',
            'mass' => 227,
            'energy_levels' => '2,8,18,32,18,9,2',
            'electronegativity' => 1.1,
            'melting_point' => 1323,
            'boiling_point' => 3473,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'series' => 'actinoids',
            'discovered' => 1899
        ]);

        DB::table('atoms')->insert([
            'order' => 90,
            'name' => 'Thorium',
            'symbol' => 'Th',
            'mass' => 232.0377,
            'energy_levels' => '2,8,18,32,18,10,2',
            'electronegativity' => 1.3,
            'melting_point' => 2023,
            'boiling_point' => 5093,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 4e-10,
            'series' => 'actinoids',
            'discovered' => 1829
        ]);

        DB::table('atoms')->insert([
            'order' => 91,
            'name' => 'Protactinium',
            'symbol' => 'Pa',
            'mass' => 231.03588,
            'energy_levels' => '2,8,18,32,18,9,2',
            'electronegativity' => 1.5,
            'melting_point' => 1845,
            'boiling_point' => 4273,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'series' => 'actinoids',
            'discovered' => 1913
        ]);

        DB::table('atoms')->insert([
            'order' => 92,
            'name' => 'Uranium',
            'symbol' => 'U',
            'mass' => 238.02891,
            'energy_levels' => '2,8,18,32,21,9,2',
            'electronegativity' => 1.38,
            'melting_point' => 1408,
            'boiling_point' => 4200,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 2e-10,
            'series' => 'actinoids',
            'discovered' => 1789
        ]);

        DB::table('atoms')->insert([
            'order' => 93,
            'name' => 'Neptunium',
            'symbol' => 'Np',
            'mass' => 237,
            'energy_levels' => '2,8,18,32,22,9,2',
            'electronegativity' => 1.36,
            'melting_point' => 917,
            'boiling_point' => 4273,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'series' => 'actinoids',
            'discovered' => 1940
        ]);

        DB::table('atoms')->insert([
            'order' => 94,
            'name' => 'Plutonium',
            'symbol' => 'Pu',
            'mass' => 244,
            'energy_levels' => '2,8,18,32,24,8,2',
            'electronegativity' => 1.28,
            'melting_point' => 913,
            'boiling_point' => 3503,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'series' => 'actinoids',
            'discovered' => 1940
        ]);

        DB::table('atoms')->insert([
            'order' => 95,
            'name' => 'Americium',
            'symbol' => 'Am',
            'mass' => 243,
            'energy_levels' => '2,8,18,32,25,8,2',
            'electronegativity' => 1.3,
            'melting_point' => 1449,
            'boiling_point' => 2284,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'series' => 'actinoids',
            'discovered' => 1944
        ]);

        DB::table('atoms')->insert([
            'order' => 96,
            'name' => 'Curium',
            'symbol' => 'Cm',
            'mass' => 247,
            'energy_levels' => '2,8,18,32,25,9,2',
            'electronegativity' => 1.3,
            'melting_point' => 1618,
            'boiling_point' => 3383,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'series' => 'actinoids',
            'discovered' => 1944
        ]);

        DB::table('atoms')->insert([
            'order' => 97,
            'name' => 'Berkelium',
            'symbol' => 'Bk',
            'mass' => 247,
            'energy_levels' => '2,8,18,32,27,8,2',
            'electronegativity' => 1.3,
            'melting_point' => 1323,
            // 'boiling_point' => N/A,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'series' => 'actinoids',
            'discovered' => 1949
        ]);

        DB::table('atoms')->insert([
            'order' => 98,
            'name' => 'Californium',
            'symbol' => 'Cf',
            'mass' => 251,
            'energy_levels' => '2,8,18,32,28,8,2',
            'electronegativity' => 1.3,
            'melting_point' => 1173,
            // 'boiling_point' => N/A,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'series' => 'actinoids',
            'discovered' => 1950
        ]);

        DB::table('atoms')->insert([
            'order' => 99,
            'name' => 'Einsteinium',
            'symbol' => 'Es',
            'mass' => 252,
            'energy_levels' => '2,8,18,32,29,8,2',
            'electronegativity' => 1.3,
            'melting_point' => 1133,
            // 'boiling_point' => N/A,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'series' => 'actinoids',
            'discovered' => 1952
        ]);

        DB::table('atoms')->insert([
            'order' => 100,
            'name' => 'Fermium',
            'symbol' => 'Fm',
            'mass' => 257,
            'energy_levels' => '2,8,18,32,30,8,2',
            'electronegativity' => 1.3,
            'melting_point' => 1800,
            // 'boiling_point' => N/A,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'series' => 'actinoids',
            'discovered' => 1952
        ]);

        DB::table('atoms')->insert([
            'order' => 101,
            'name' => 'Mendelevium',
            'symbol' => 'Md',
            'mass' => 258,
            'energy_levels' => '2,8,18,32,31,8,2',
            'electronegativity' => 1.3,
            'melting_point' => 1100,
            // 'boiling_point' => N/A,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'series' => 'actinoids',
            'discovered' => 1955
        ]);

        DB::table('atoms')->insert([
            'order' => 102,
            'name' => 'Nobelium',
            'symbol' => 'No',
            'mass' => 259,
            'energy_levels' => '2,8,18,32,32,8,2',
            'electronegativity' => 1.3,
            'melting_point' => 1100,
            // 'boiling_point' => N/A,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'series' => 'actinoids',
            'discovered' => 1958
        ]);

        DB::table('atoms')->insert([
            'order' => 103,
            'name' => 'Lawrencium',
            'symbol' => 'Lr',
            'mass' => 266,
            'energy_levels' => '2,8,18,32,32,8,3',
            // 'electronegativity' => N/A,
            'melting_point' => 1900,
            // 'boiling_point' => N/A,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'series' => 'actinoids',
            'discovered' => 1961
        ]);

        DB::table('atoms')->insert([
            'order' => 104,
            'name' => 'Rutherfordium',
            'symbol' => 'Rf',
            'mass' => 267,
            'energy_levels' => '2,8,18,32,32,10,2',
            // 'electronegativity' => N/A,
            // 'melting_point' => N/A,
            // 'boiling_point' => N/A,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'series' => 'transition_metals',
            'discovered' => 1964
        ]);

        DB::table('atoms')->insert([
            'order' => 105,
            'name' => 'Dubnium',
            'symbol' => 'Db',
            'mass' => 268,
            'energy_levels' => '2,8,18,32,32,11,2',
            // 'electronegativity' => N/A,
            // 'melting_point' => N/A,
            // 'boiling_point' => N/A,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'series' => 'transition_metals',
            'discovered' => 1967
        ]);

        DB::table('atoms')->insert([
            'order' => 106,
            'name' => 'Seaborgium',
            'symbol' => 'Sg',
            'mass' => 269,
            'energy_levels' => '2,8,18,32,32,12,2',
            // 'electronegativity' => N/A,
            // 'melting_point' => N/A,
            // 'boiling_point' => N/A,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'series' => 'transition_metals',
            'discovered' => 1974
        ]);

        DB::table('atoms')->insert([
            'order' => 107,
            'name' => 'Bohrium',
            'symbol' => 'Bh',
            'mass' => 270,
            'energy_levels' => '2,8,18,32,32,13,2',
            // 'electronegativity' => N/A,
            // 'melting_point' => N/A,
            // 'boiling_point' => N/A,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'series' => 'transition_metals',
            'discovered' => 1981
        ]);

        DB::table('atoms')->insert([
            'order' => 108,
            'name' => 'Hassium',
            'symbol' => 'Hs',
            'mass' => 270,
            'energy_levels' => '2,8,18,32,32,14,2',
            // 'electronegativity' => N/A,
            // 'melting_point' => N/A,
            // 'boiling_point' => N/A,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'series' => 'transition_metals',
            'discovered' => 1984
        ]);

        DB::table('atoms')->insert([
            'order' => 109,
            'name' => 'Meitnerium',
            'symbol' => 'Mt',
            'mass' => 278,
            'energy_levels' => '2,8,18,32,32,15,2',
            // 'electronegativity' => N/A,
            // 'melting_point' => N/A,
            // 'boiling_point' => N/A,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'discovered' => 1982
        ]);

        DB::table('atoms')->insert([
            'order' => 110,
            'name' => 'Darmstadtium',
            'symbol' => 'Ds',
            'mass' => 281,
            'energy_levels' => '2,8,18,32,32,17,1',
            // 'electronegativity' => N/A,
            // 'melting_point' => N/A,
            // 'boiling_point' => N/A,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'discovered' => 1994
        ]);

        DB::table('atoms')->insert([
            'order' => 111,
            'name' => 'Roentgenium',
            'symbol' => 'Rg',
            'mass' => 282,
            'energy_levels' => '2,8,18,32,32,17,2',
            // 'electronegativity' => N/A,
            // 'melting_point' => N/A,
            // 'boiling_point' => N/A,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'discovered' => 1994
        ]);

        DB::table('atoms')->insert([
            'order' => 112,
            'name' => 'Copernicium',
            'symbol' => 'Cn',
            'mass' => 285,
            'energy_levels' => '2,8,18,32,32,18,2',
            // 'electronegativity' => N/A,
            // 'melting_point' => N/A,
            // 'boiling_point' => N/A,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'discovered' => 1996
        ]);

        DB::table('atoms')->insert([
            'order' => 113,
            'name' => 'Nihonium',
            'symbol' => 'Nh',
            'mass' => 286,
            'energy_levels' => '2,8,18,32,32,18,3',
            // 'electronegativity' => N/A,
            // 'melting_point' => N/A,
            // 'boiling_point' => N/A,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'discovered' => 2004
        ]);

        DB::table('atoms')->insert([
            'order' => 114,
            'name' => 'Flerovium',
            'symbol' => 'Fl',
            'mass' => 289,
            'energy_levels' => '2,8,18,32,32,18,4',
            // 'electronegativity' => N/A,
            // 'melting_point' => N/A,
            // 'boiling_point' => N/A,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'discovered' => 1998
        ]);

        DB::table('atoms')->insert([
            'order' => 115,
            'name' => 'Moscovium',
            'symbol' => 'Mc',
            'mass' => 290,
            'energy_levels' => '2,8,18,32,32,18,5',
            // 'electronegativity' => N/A,
            // 'melting_point' => N/A,
            // 'boiling_point' => N/A,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'discovered' => 2004
        ]);

        DB::table('atoms')->insert([
            'order' => 116,
            'name' => 'Livermorium',
            'symbol' => 'Lv',
            'mass' => 293,
            'energy_levels' => '2,8,18,32,32,18,6',
            // 'electronegativity' => N/A,
            // 'melting_point' => N/A,
            // 'boiling_point' => N/A,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'discovered' => 2000
        ]);

        DB::table('atoms')->insert([
            'order' => 117,
            'name' => 'Tennessine',
            'symbol' => 'Ts',
            'mass' => 294,
            'energy_levels' => '2,8,18,32,32,18,7',
            // 'electronegativity' => N/A,
            // 'melting_point' => N/A,
            // 'boiling_point' => N/A,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'discovered' => 2010
        ]);

        DB::table('atoms')->insert([
            'order' => 118,
            'name' => 'Oganesson',
            'symbol' => 'Og',
            'mass' => 294,
            'energy_levels' => '2,8,18,32,32,18,8',
            // 'electronegativity' => N/A,
            // 'melting_point' => N/A,
            // 'boiling_point' => N/A,
            'electrons' => -1,
            'neutrons' => -1,
            'abundance' => 0,
            'discovered' => 2006
        ]);
    }
}
