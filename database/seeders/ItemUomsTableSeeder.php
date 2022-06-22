<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemUomsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('item_uoms')->delete();
        
        \DB::table('item_uoms')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'dozen',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'pair',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'box',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'each',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'case',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
        ));
        
        
    }
}