<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_user')->delete();
        
        
        
    }
}