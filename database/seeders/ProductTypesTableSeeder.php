<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_types')->delete();
        
        \DB::table('product_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'eye protection',
                'product_type_id' => NULL,
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'glasses',
                'product_type_id' => 1,
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'hand protection',
                'product_type_id' => NULL,
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'cut resistant',
                'product_type_id' => 3,
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'gloves',
                'product_type_id' => 4,
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'hppe',
                'product_type_id' => 5,
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'accessories',
                'product_type_id' => 1,
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'lens cleaners',
                'product_type_id' => 7,
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'leather gloves',
                'product_type_id' => 3,
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'drivers',
                'product_type_id' => 9,
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'head protection',
                'product_type_id' => NULL,
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'face protection',
                'product_type_id' => 11,
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            12 => 
            array (
                'id' => 13,
                'title' => 'frames and headgear',
                'product_type_id' => 12,
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            13 => 
            array (
                'id' => 14,
                'title' => 'face shields',
                'product_type_id' => 12,
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            14 => 
            array (
                'id' => 15,
                'title' => 'respiratory protection',
                'product_type_id' => NULL,
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            15 => 
            array (
                'id' => 16,
                'title' => 'respirators',
                'product_type_id' => 15,
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            16 => 
            array (
                'id' => 17,
                'title' => 'half-mask facepiece',
                'product_type_id' => 16,
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            17 => 
            array (
                'id' => 18,
                'title' => 'cartridges & filters',
                'product_type_id' => 15,
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            18 => 
            array (
                'id' => 19,
                'title' => 'hearing protection',
                'product_type_id' => NULL,
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            19 => 
            array (
                'id' => 20,
                'title' => 'earplugs',
                'product_type_id' => 19,
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            20 => 
            array (
                'id' => 21,
                'title' => 'uncorded',
                'product_type_id' => 20,
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            21 => 
            array (
                'id' => 22,
                'title' => 'corded',
                'product_type_id' => 20,
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            22 => 
            array (
                'id' => 23,
                'title' => 'clothing',
                'product_type_id' => NULL,
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            23 => 
            array (
                'id' => 24,
                'title' => 'non-fr',
                'product_type_id' => 23,
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            24 => 
            array (
                'id' => 25,
                'title' => 'disposable coveralls',
                'product_type_id' => 24,
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            25 => 
            array (
                'id' => 26,
                'title' => 'side shields',
                'product_type_id' => 7,
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            26 => 
            array (
                'id' => 27,
                'title' => 'disposable gloves',
                'product_type_id' => 3,
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            27 => 
            array (
                'id' => 28,
                'title' => 'nitrile',
                'product_type_id' => 27,
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            28 => 
            array (
                'id' => 29,
                'title' => 'chemical resistant gloves',
                'product_type_id' => 3,
                'created_at' => '2021-06-16 20:11:36',
                'updated_at' => '2021-06-16 20:11:36',
            ),
        ));
        
        
    }
}