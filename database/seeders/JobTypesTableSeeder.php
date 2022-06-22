<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('job_types')->delete();
        
        \DB::table('job_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Motor Shop Personnel',
                'code' => '3643',
                'created_at' => '2021-04-12 05:47:31',
                'updated_at' => '2021-04-12 05:47:31',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Clerical',
                'code' => '8810',
                'created_at' => '2021-04-12 05:47:31',
                'updated_at' => '2021-04-12 05:47:31',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Outside Service',
                'code' => '3724',
                'created_at' => '2021-04-12 05:47:31',
                'updated_at' => '2021-04-12 05:47:31',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Outside Sales',
                'code' => '8742',
                'created_at' => '2021-04-12 05:47:31',
                'updated_at' => '2021-04-12 05:47:31',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Drivers',
                'code' => '7380',
                'created_at' => '2021-04-12 05:47:31',
                'updated_at' => '2021-04-12 05:47:31',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Inside Sales',
                'code' => '8090',
                'created_at' => '2021-04-12 05:47:31',
                'updated_at' => '2021-04-12 05:47:31',
            ),
        ));
        
        
    }
}