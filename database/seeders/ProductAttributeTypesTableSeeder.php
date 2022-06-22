<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductAttributeTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_attribute_types')->delete();
        
        \DB::table('product_attribute_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'material',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'features',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'details',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'protection',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'dimensions',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'technology',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'quantities',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'applications',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'noise reduction rating',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'blood penetration',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
        ));
        
        
    }
}