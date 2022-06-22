<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaggablesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('taggables')->delete();
        
        \DB::table('taggables')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tag_id' => 1,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'tag_id' => 2,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'tag_id' => 3,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'tag_id' => 4,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'tag_id' => 5,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'tag_id' => 1,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'tag_id' => 6,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'tag_id' => 7,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'tag_id' => 8,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'tag_id' => 9,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'tag_id' => 10,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'tag_id' => 11,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'tag_id' => 12,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'tag_id' => 13,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'tag_id' => 14,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'tag_id' => 15,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'tag_id' => 16,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'tag_id' => 17,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'tag_id' => 1,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'tag_id' => 18,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'tag_id' => 19,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'tag_id' => 20,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'tag_id' => 21,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'tag_id' => 22,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'tag_id' => 11,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'tag_id' => 23,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'tag_id' => 24,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'tag_id' => 25,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'tag_id' => 26,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'tag_id' => 27,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'tag_id' => 28,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'tag_id' => 11,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'tag_id' => 26,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'tag_id' => 27,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'tag_id' => 28,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'tag_id' => 4,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'tag_id' => 29,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'tag_id' => 30,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'tag_id' => 31,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'tag_id' => 32,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'tag_id' => 33,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'tag_id' => 34,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'tag_id' => 30,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'tag_id' => 34,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'tag_id' => 35,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'tag_id' => 36,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'tag_id' => 37,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'tag_id' => 38,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'tag_id' => 39,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'tag_id' => 40,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'tag_id' => 1,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'tag_id' => 41,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'tag_id' => 42,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'tag_id' => 43,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'tag_id' => 44,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'tag_id' => 45,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'tag_id' => 46,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'tag_id' => 47,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'tag_id' => 48,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'tag_id' => 1,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'tag_id' => 49,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'tag_id' => 42,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'tag_id' => 43,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'tag_id' => 44,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'tag_id' => 45,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'tag_id' => 46,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'tag_id' => 47,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'tag_id' => 48,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'tag_id' => 1,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'tag_id' => 50,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'tag_id' => 51,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'tag_id' => 52,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'tag_id' => 53,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'tag_id' => 1,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'tag_id' => 50,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'tag_id' => 51,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'tag_id' => 52,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'tag_id' => 53,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'tag_id' => 54,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'tag_id' => 55,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'tag_id' => 56,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'tag_id' => 57,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'tag_id' => 58,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'tag_id' => 59,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'tag_id' => 60,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'tag_id' => 61,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'tag_id' => 62,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'tag_id' => 58,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'tag_id' => 63,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'tag_id' => 64,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'tag_id' => 65,
                'taggable_type' => 'App\\Models\\Product',
                'taggable_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}