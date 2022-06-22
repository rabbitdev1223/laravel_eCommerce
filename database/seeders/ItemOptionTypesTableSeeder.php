<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemOptionTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('item_option_types')->delete();
        
        \DB::table('item_option_types')->insert(array (
            0 => 
            array (
                'created_at' => '2021-06-16 20:11:35',
                'id' => 1,
                'is_radio' => 1,
                'title' => 'color',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            1 => 
            array (
                'created_at' => '2021-06-16 20:11:35',
                'id' => 2,
                'is_radio' => 0,
                'title' => 'size',
                'updated_at' => '2021-06-16 20:11:35',
            ),
        ));
        
        
    }
}