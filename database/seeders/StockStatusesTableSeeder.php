<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StockStatusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('stock_statuses')->delete();
        
        \DB::table('stock_statuses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'In Stock',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Pre-Order',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Out Of Stock',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => '2-3 Days',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}