<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LocationTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('location_types')->delete();
        
        \DB::table('location_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'corporate',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'storage',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'field',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}