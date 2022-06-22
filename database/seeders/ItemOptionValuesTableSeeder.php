<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemOptionValuesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('item_option_values')->delete();
        
        \DB::table('item_option_values')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'clear',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'xs',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'gray',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 's',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'm',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'l',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'xl',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => '2xl',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'beige',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => '3xl',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'black',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'orange',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            12 => 
            array (
                'id' => 13,
                'title' => 'white',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            13 => 
            array (
                'id' => 14,
                'title' => '4xl',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            14 => 
            array (
                'id' => 15,
                'title' => '5xl',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            15 => 
            array (
                'id' => 16,
                'title' => 'purple',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            16 => 
            array (
                'id' => 17,
                'title' => 'green',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
        ));
        
        
    }
}