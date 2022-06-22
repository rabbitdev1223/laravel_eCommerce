<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductModelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_models')->delete();
        
        \DB::table('product_models')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 1,
                'number' => 'EHF10SCLEAR',
                'part_number' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}