<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [

            ['id' => 1, 'name' => 'Satılık ev', 'price' =>'1200', 'city_id' => '17', 'district_id' => '187', 'type_id' => '1'],

            ['id' => 2, 'name' => 'Kiralık oda', 'price' =>'300', 'city_id' => '17', 'district_id' => '186', 'type_id' => '2'],
        ];
        DB::table('houses')->insert($items);
    }
}
