<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CartsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('carts')->delete();
        
        \DB::table('carts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 286,
                'item_id' => 1,
                'quantity' => 2,
                'created_at' => '2021-07-05 10:15:04',
                'updated_at' => '2021-07-05 10:15:25',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 286,
                'item_id' => 32,
                'quantity' => 4,
                'created_at' => '2021-07-05 10:15:11',
                'updated_at' => '2021-07-05 10:15:35',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 286,
                'item_id' => 34,
                'quantity' => 1,
                'created_at' => '2021-07-05 10:15:15',
                'updated_at' => '2021-07-05 10:15:15',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 286,
                'item_id' => 43,
                'quantity' => 3,
                'created_at' => '2021-07-05 10:15:22',
                'updated_at' => '2021-07-05 10:15:30',
            ),
        ));
        
        
    }
}