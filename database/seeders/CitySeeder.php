<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert(array(
            array(
                'provinceId' => '1',
                'city' => 'Caloocan City',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'provinceId' => '1',
                'city' => 'City of Manila',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'provinceId' => '1',
                'city' => 'Las Piñas City',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'provinceId' => '1',
                'city' => 'Makati City',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'provinceId' => '1',
                'city' => 'Malabon City',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'provinceId' => '1',
                'city' => 'Mandaluyong City',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'provinceId' => '1',
                'city' => 'Marikina City',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'provinceId' => '1',
                'city' => 'Muntinlupa City',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'provinceId' => '1',
                'city' => 'Navotas City',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'provinceId' => '1',
                'city' => 'Parañaque City',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'provinceId' => '1',
                'city' => 'Pasay City',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'provinceId' => '1',
                'city' => 'Pasig City',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'provinceId' => '1',
                'city' => 'Pateros',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'provinceId' => '1',
                'city' => 'Quezon City',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'provinceId' => '1',
                'city' => 'San Juan City',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'provinceId' => '1',
                'city' => 'Taguig City',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'provinceId' => '1',
                'city' => 'Valenzuela City',
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));
    }
}
