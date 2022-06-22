<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ManufacturersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('manufacturers')->delete();
        
        \DB::table('manufacturers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Cordova',
                'code' => 'COR',
                'image_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Pyramex',
                'code' => 'PYR',
                'image_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => '3M',
                'code' => '3M',
                'image_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'SunnyCare',
                'code' => 'SC',
                'image_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'MCR Safety',
                'code' => 'MCR',
                'image_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}