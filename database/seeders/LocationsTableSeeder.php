<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('locations')->delete();
        
        \DB::table('locations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => NULL,
                'city_id' => 24723,
                'code' => '1350',
                'location_type_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => NULL,
                'city_id' => 26149,
                'code' => '1349',
                'location_type_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => NULL,
                'city_id' => 26098,
                'code' => '1348',
                'location_type_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => NULL,
                'city_id' => 927,
                'code' => '1354',
                'location_type_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => NULL,
                'city_id' => 1000,
                'code' => '1353',
                'location_type_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => NULL,
                'city_id' => 1282,
                'code' => '1352',
                'location_type_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'title' => NULL,
                'city_id' => 20878,
                'code' => '3011',
                'location_type_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'title' => NULL,
                'city_id' => 21024,
                'code' => '1346',
                'location_type_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'title' => NULL,
                'city_id' => 27896,
                'code' => NULL,
                'location_type_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'title' => NULL,
                'city_id' => 13942,
                'code' => '1351',
                'location_type_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'title' => NULL,
                'city_id' => 20928,
                'code' => '1347',
                'location_type_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'title' => NULL,
                'city_id' => 27764,
                'code' => '2575',
                'location_type_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'title' => NULL,
                'city_id' => 20878,
                'code' => '2868',
                'location_type_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}