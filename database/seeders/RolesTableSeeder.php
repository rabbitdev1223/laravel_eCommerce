<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'super',
                'guard_name' => 'web',
                'created_at' => '2021-05-05 23:51:06',
                'updated_at' => '2021-05-05 23:51:06',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'admin',
                'guard_name' => 'web',
                'created_at' => '2021-05-05 23:51:06',
                'updated_at' => '2021-05-05 23:51:06',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'user',
                'guard_name' => 'web',
                'created_at' => '2021-05-05 23:51:06',
                'updated_at' => '2021-05-05 23:51:06',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'manager',
                'guard_name' => 'web',
                'created_at' => '2021-05-06 00:05:12',
                'updated_at' => '2021-05-06 00:05:16',
            ),
        ));
        
        
    }
}