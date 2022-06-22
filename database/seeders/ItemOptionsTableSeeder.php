<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemOptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('item_options')->delete();
        
        \DB::table('item_options')->insert(array (
            0 => 
            array (
                'id' => 1,
                'item_id' => 1,
                'item_option_value_id' => 1,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            1 => 
            array (
                'id' => 2,
                'item_id' => 2,
                'item_option_value_id' => 2,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            2 => 
            array (
                'id' => 3,
                'item_id' => 2,
                'item_option_value_id' => 3,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            3 => 
            array (
                'id' => 4,
                'item_id' => 3,
                'item_option_value_id' => 4,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            4 => 
            array (
                'id' => 5,
                'item_id' => 3,
                'item_option_value_id' => 3,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            5 => 
            array (
                'id' => 6,
                'item_id' => 4,
                'item_option_value_id' => 5,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            6 => 
            array (
                'id' => 7,
                'item_id' => 4,
                'item_option_value_id' => 3,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            7 => 
            array (
                'id' => 8,
                'item_id' => 5,
                'item_option_value_id' => 6,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            8 => 
            array (
                'id' => 9,
                'item_id' => 5,
                'item_option_value_id' => 3,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            9 => 
            array (
                'id' => 10,
                'item_id' => 6,
                'item_option_value_id' => 7,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            10 => 
            array (
                'id' => 11,
                'item_id' => 6,
                'item_option_value_id' => 3,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            11 => 
            array (
                'id' => 12,
                'item_id' => 7,
                'item_option_value_id' => 8,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            12 => 
            array (
                'id' => 13,
                'item_id' => 7,
                'item_option_value_id' => 3,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            13 => 
            array (
                'id' => 14,
                'item_id' => 9,
                'item_option_value_id' => 9,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            14 => 
            array (
                'id' => 15,
                'item_id' => 9,
                'item_option_value_id' => 2,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            15 => 
            array (
                'id' => 16,
                'item_id' => 10,
                'item_option_value_id' => 9,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            16 => 
            array (
                'id' => 17,
                'item_id' => 10,
                'item_option_value_id' => 2,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            17 => 
            array (
                'id' => 18,
                'item_id' => 11,
                'item_option_value_id' => 9,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            18 => 
            array (
                'id' => 19,
                'item_id' => 11,
                'item_option_value_id' => 4,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            19 => 
            array (
                'id' => 20,
                'item_id' => 12,
                'item_option_value_id' => 9,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            20 => 
            array (
                'id' => 21,
                'item_id' => 12,
                'item_option_value_id' => 4,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            21 => 
            array (
                'id' => 22,
                'item_id' => 13,
                'item_option_value_id' => 9,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            22 => 
            array (
                'id' => 23,
                'item_id' => 13,
                'item_option_value_id' => 5,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            23 => 
            array (
                'id' => 24,
                'item_id' => 14,
                'item_option_value_id' => 9,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            24 => 
            array (
                'id' => 25,
                'item_id' => 14,
                'item_option_value_id' => 5,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            25 => 
            array (
                'id' => 26,
                'item_id' => 15,
                'item_option_value_id' => 9,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            26 => 
            array (
                'id' => 27,
                'item_id' => 15,
                'item_option_value_id' => 6,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            27 => 
            array (
                'id' => 28,
                'item_id' => 16,
                'item_option_value_id' => 9,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            28 => 
            array (
                'id' => 29,
                'item_id' => 16,
                'item_option_value_id' => 6,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            29 => 
            array (
                'id' => 30,
                'item_id' => 17,
                'item_option_value_id' => 9,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            30 => 
            array (
                'id' => 31,
                'item_id' => 17,
                'item_option_value_id' => 7,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            31 => 
            array (
                'id' => 32,
                'item_id' => 18,
                'item_option_value_id' => 9,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            32 => 
            array (
                'id' => 33,
                'item_id' => 18,
                'item_option_value_id' => 7,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            33 => 
            array (
                'id' => 34,
                'item_id' => 19,
                'item_option_value_id' => 9,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            34 => 
            array (
                'id' => 35,
                'item_id' => 19,
                'item_option_value_id' => 8,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            35 => 
            array (
                'id' => 36,
                'item_id' => 20,
                'item_option_value_id' => 9,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            36 => 
            array (
                'id' => 37,
                'item_id' => 20,
                'item_option_value_id' => 8,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            37 => 
            array (
                'id' => 38,
                'item_id' => 21,
                'item_option_value_id' => 9,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            38 => 
            array (
                'id' => 39,
                'item_id' => 21,
                'item_option_value_id' => 10,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            39 => 
            array (
                'id' => 40,
                'item_id' => 22,
                'item_option_value_id' => 9,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            40 => 
            array (
                'id' => 41,
                'item_id' => 22,
                'item_option_value_id' => 10,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            41 => 
            array (
                'id' => 42,
                'item_id' => 23,
                'item_option_value_id' => 11,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            42 => 
            array (
                'id' => 43,
                'item_id' => 24,
                'item_option_value_id' => 1,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            43 => 
            array (
                'id' => 44,
                'item_id' => 25,
                'item_option_value_id' => 4,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            44 => 
            array (
                'id' => 45,
                'item_id' => 26,
                'item_option_value_id' => 5,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            45 => 
            array (
                'id' => 46,
                'item_id' => 27,
                'item_option_value_id' => 6,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            46 => 
            array (
                'id' => 47,
                'item_id' => 29,
                'item_option_value_id' => 12,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            47 => 
            array (
                'id' => 48,
                'item_id' => 30,
                'item_option_value_id' => 12,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            48 => 
            array (
                'id' => 49,
                'item_id' => 31,
                'item_option_value_id' => 13,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            49 => 
            array (
                'id' => 50,
                'item_id' => 31,
                'item_option_value_id' => 4,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            50 => 
            array (
                'id' => 51,
                'item_id' => 32,
                'item_option_value_id' => 13,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            51 => 
            array (
                'id' => 52,
                'item_id' => 32,
                'item_option_value_id' => 5,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            52 => 
            array (
                'id' => 53,
                'item_id' => 33,
                'item_option_value_id' => 13,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            53 => 
            array (
                'id' => 54,
                'item_id' => 33,
                'item_option_value_id' => 6,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            54 => 
            array (
                'id' => 55,
                'item_id' => 34,
                'item_option_value_id' => 13,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            55 => 
            array (
                'id' => 56,
                'item_id' => 34,
                'item_option_value_id' => 7,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            56 => 
            array (
                'id' => 57,
                'item_id' => 35,
                'item_option_value_id' => 13,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            57 => 
            array (
                'id' => 58,
                'item_id' => 35,
                'item_option_value_id' => 8,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            58 => 
            array (
                'id' => 59,
                'item_id' => 36,
                'item_option_value_id' => 13,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            59 => 
            array (
                'id' => 60,
                'item_id' => 36,
                'item_option_value_id' => 10,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            60 => 
            array (
                'id' => 61,
                'item_id' => 37,
                'item_option_value_id' => 13,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            61 => 
            array (
                'id' => 62,
                'item_id' => 37,
                'item_option_value_id' => 14,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            62 => 
            array (
                'id' => 63,
                'item_id' => 38,
                'item_option_value_id' => 13,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            63 => 
            array (
                'id' => 64,
                'item_id' => 38,
                'item_option_value_id' => 15,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            64 => 
            array (
                'id' => 65,
                'item_id' => 39,
                'item_option_value_id' => 1,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            65 => 
            array (
                'id' => 66,
                'item_id' => 40,
                'item_option_value_id' => 1,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            66 => 
            array (
                'id' => 67,
                'item_id' => 41,
                'item_option_value_id' => 16,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            67 => 
            array (
                'id' => 68,
                'item_id' => 41,
                'item_option_value_id' => 4,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            68 => 
            array (
                'id' => 69,
                'item_id' => 42,
                'item_option_value_id' => 16,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            69 => 
            array (
                'id' => 70,
                'item_id' => 42,
                'item_option_value_id' => 4,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            70 => 
            array (
                'id' => 71,
                'item_id' => 43,
                'item_option_value_id' => 16,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            71 => 
            array (
                'id' => 72,
                'item_id' => 43,
                'item_option_value_id' => 5,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            72 => 
            array (
                'id' => 73,
                'item_id' => 44,
                'item_option_value_id' => 16,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            73 => 
            array (
                'id' => 74,
                'item_id' => 44,
                'item_option_value_id' => 5,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            74 => 
            array (
                'id' => 75,
                'item_id' => 45,
                'item_option_value_id' => 16,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            75 => 
            array (
                'id' => 76,
                'item_id' => 45,
                'item_option_value_id' => 6,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            76 => 
            array (
                'id' => 77,
                'item_id' => 46,
                'item_option_value_id' => 16,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            77 => 
            array (
                'id' => 78,
                'item_id' => 46,
                'item_option_value_id' => 6,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            78 => 
            array (
                'id' => 79,
                'item_id' => 47,
                'item_option_value_id' => 16,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            79 => 
            array (
                'id' => 80,
                'item_id' => 47,
                'item_option_value_id' => 7,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            80 => 
            array (
                'id' => 81,
                'item_id' => 48,
                'item_option_value_id' => 16,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            81 => 
            array (
                'id' => 82,
                'item_id' => 48,
                'item_option_value_id' => 7,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            82 => 
            array (
                'id' => 83,
                'item_id' => 49,
                'item_option_value_id' => 17,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            83 => 
            array (
                'id' => 84,
                'item_id' => 49,
                'item_option_value_id' => 6,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            84 => 
            array (
                'id' => 85,
                'item_id' => 50,
                'item_option_value_id' => 17,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            85 => 
            array (
                'id' => 86,
                'item_id' => 50,
                'item_option_value_id' => 7,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            86 => 
            array (
                'id' => 87,
                'item_id' => 51,
                'item_option_value_id' => 17,
                'item_option_type_id' => 1,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            87 => 
            array (
                'id' => 88,
                'item_id' => 51,
                'item_option_value_id' => 8,
                'item_option_type_id' => 2,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
        ));
        
        
    }
}