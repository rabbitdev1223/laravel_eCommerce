<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('departments')->delete();
        
        \DB::table('departments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'TUL40',
                'location_id' => 8,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'OKC40',
                'location_id' => 7,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'SPR40',
                'location_id' => 10,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'OKC50',
                'location_id' => 7,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'CRP90',
                'location_id' => 7,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'FSM40',
                'location_id' => 5,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'TUL90',
                'location_id' => 8,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'OKC10',
                'location_id' => 7,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'WAC40',
                'location_id' => 3,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'CRP90',
                'location_id' => 8,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'WFL10',
                'location_id' => 2,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'WAC90',
                'location_id' => 3,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            12 => 
            array (
                'id' => 13,
                'title' => 'PRY40',
                'location_id' => 11,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            13 => 
            array (
                'id' => 14,
                'title' => 'OKC80',
                'location_id' => 7,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            14 => 
            array (
                'id' => 15,
                'title' => 'CRP90',
                'location_id' => 2,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            15 => 
            array (
                'id' => 16,
                'title' => 'TUL80',
                'location_id' => 8,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            16 => 
            array (
                'id' => 17,
                'title' => 'TUL10',
                'location_id' => 8,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            17 => 
            array (
                'id' => 18,
                'title' => 'KEN40',
                'location_id' => 12,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            18 => 
            array (
                'id' => 19,
                'title' => 'ROG40',
                'location_id' => 6,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            19 => 
            array (
                'id' => 20,
                'title' => 'ABL50',
                'location_id' => 1,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            20 => 
            array (
                'id' => 21,
                'title' => 'CON10',
                'location_id' => 4,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            21 => 
            array (
                'id' => 22,
                'title' => 'FSM90',
                'location_id' => 5,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            22 => 
            array (
                'id' => 23,
                'title' => 'KEN90',
                'location_id' => 12,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            23 => 
            array (
                'id' => 24,
                'title' => 'CRP90',
                'location_id' => 13,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            24 => 
            array (
                'id' => 25,
                'title' => 'ABL90',
                'location_id' => 1,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            25 => 
            array (
                'id' => 26,
                'title' => 'WFL80',
                'location_id' => 2,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            26 => 
            array (
                'id' => 27,
                'title' => 'CRP90',
                'location_id' => 5,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            27 => 
            array (
                'id' => 28,
                'title' => 'ROG10',
                'location_id' => 6,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            28 => 
            array (
                'id' => 29,
                'title' => 'CRP90',
                'location_id' => 12,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            29 => 
            array (
                'id' => 30,
                'title' => 'FSM10',
                'location_id' => 5,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            30 => 
            array (
                'id' => 31,
                'title' => 'ABL60',
                'location_id' => 1,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            31 => 
            array (
                'id' => 32,
                'title' => 'WFL40',
                'location_id' => 2,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            32 => 
            array (
                'id' => 33,
                'title' => 'ABL60',
                'location_id' => 12,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            33 => 
            array (
                'id' => 34,
                'title' => 'WAC10',
                'location_id' => 3,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            34 => 
            array (
                'id' => 35,
                'title' => 'CRP90',
                'location_id' => 3,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            35 => 
            array (
                'id' => 36,
                'title' => 'SPR10',
                'location_id' => 10,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            36 => 
            array (
                'id' => 37,
                'title' => 'FSM80',
                'location_id' => 5,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            37 => 
            array (
                'id' => 38,
                'title' => 'CRP90',
                'location_id' => 6,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            38 => 
            array (
                'id' => 39,
                'title' => 'OKC90',
                'location_id' => 7,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            39 => 
            array (
                'id' => 40,
                'title' => 'WAC80',
                'location_id' => 3,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            40 => 
            array (
                'id' => 41,
                'title' => 'CRP90',
                'location_id' => 1,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            41 => 
            array (
                'id' => 42,
                'title' => 'KEN50',
                'location_id' => 12,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
            42 => 
            array (
                'id' => 43,
                'title' => 'SPR90',
                'location_id' => 10,
                'created_at' => '2021-04-13 10:20:09',
                'updated_at' => '2021-04-13 10:20:09',
            ),
        ));
        
        
    }
}