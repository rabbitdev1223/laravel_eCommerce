<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'cordova',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'bulldog',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'safety glasses',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'clear',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'polycarbonate',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'caliber',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'hppe gloves',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'cut resistant',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'high performance',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'a2',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'pyramex',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'lens',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            12 => 
            array (
                'id' => 13,
                'title' => 'cleaning',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            13 => 
            array (
                'id' => 14,
                'title' => 'towelettes',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            14 => 
            array (
                'id' => 15,
                'title' => 'wipes',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            15 => 
            array (
                'id' => 16,
                'title' => 'anti-fog',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            16 => 
            array (
                'id' => 17,
                'title' => 'anti-static',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            17 => 
            array (
                'id' => 18,
                'title' => 'driver',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            18 => 
            array (
                'id' => 19,
                'title' => 'cowhide',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            19 => 
            array (
                'id' => 20,
                'title' => 'leather gloves',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            20 => 
            array (
                'id' => 21,
                'title' => 'unlined',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            21 => 
            array (
                'id' => 22,
                'title' => 'keystone thumb',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            22 => 
            array (
                'id' => 23,
                'title' => 'ridgeline',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            23 => 
            array (
                'id' => 24,
                'title' => 'headgear',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            24 => 
            array (
                'id' => 25,
                'title' => 'ratchet',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            25 => 
            array (
                'id' => 26,
                'title' => 'head protection',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            26 => 
            array (
                'id' => 27,
                'title' => 'face protection',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            27 => 
            array (
                'id' => 28,
                'title' => 'face shield',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            28 => 
            array (
                'id' => 29,
                'title' => 'polyethylene',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            29 => 
            array (
                'id' => 30,
                'title' => '3m',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            30 => 
            array (
                'id' => 31,
                'title' => 'respirator',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            31 => 
            array (
                'id' => 32,
                'title' => 'half-mask',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            32 => 
            array (
                'id' => 33,
                'title' => 'reusable',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            33 => 
            array (
                'id' => 34,
                'title' => 'respiratory protection',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            34 => 
            array (
                'id' => 35,
                'title' => 'cartridge',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            35 => 
            array (
                'id' => 36,
                'title' => 'filter',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            36 => 
            array (
                'id' => 37,
                'title' => 'organic vapor',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            37 => 
            array (
                'id' => 38,
                'title' => 'acid gas',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            38 => 
            array (
                'id' => 39,
                'title' => 'particulates',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            39 => 
            array (
                'id' => 40,
                'title' => 'niosh',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            40 => 
            array (
                'id' => 41,
                'title' => 'uncorded',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            41 => 
            array (
                'id' => 42,
                'title' => 'ear plugs',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            42 => 
            array (
                'id' => 43,
                'title' => 'noise',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            43 => 
            array (
                'id' => 44,
                'title' => 'decibel',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            44 => 
            array (
                'id' => 45,
                'title' => 'foam',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            45 => 
            array (
                'id' => 46,
                'title' => 'encore',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            46 => 
            array (
                'id' => 47,
                'title' => 'dispenser',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            47 => 
            array (
                'id' => 48,
                'title' => 'hearing protection',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            48 => 
            array (
                'id' => 49,
                'title' => 'corded',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            49 => 
            array (
                'id' => 50,
                'title' => 'disposable coverall',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            50 => 
            array (
                'id' => 51,
                'title' => 'disposable protection',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            51 => 
            array (
                'id' => 52,
                'title' => 'defender',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            52 => 
            array (
                'id' => 53,
                'title' => 'microporous',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            53 => 
            array (
                'id' => 54,
                'title' => 'sunnycare',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            54 => 
            array (
                'id' => 55,
                'title' => 'disposable',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            55 => 
            array (
                'id' => 56,
                'title' => 'gloves',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            56 => 
            array (
                'id' => 57,
                'title' => '8 mil',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            57 => 
            array (
                'id' => 58,
                'title' => 'nitrile',
                'created_at' => '2021-06-16 20:11:35',
                'updated_at' => '2021-06-16 20:11:35',
            ),
            58 => 
            array (
                'id' => 59,
                'title' => 'powder free',
                'created_at' => '2021-06-16 20:11:36',
                'updated_at' => '2021-06-16 20:11:36',
            ),
            59 => 
            array (
                'id' => 60,
                'title' => 'mcr safety',
                'created_at' => '2021-06-16 20:11:36',
                'updated_at' => '2021-06-16 20:11:36',
            ),
            60 => 
            array (
                'id' => 61,
                'title' => 'nitri-chem',
                'created_at' => '2021-06-16 20:11:36',
                'updated_at' => '2021-06-16 20:11:36',
            ),
            61 => 
            array (
                'id' => 62,
                'title' => 'chemical resistant',
                'created_at' => '2021-06-16 20:11:36',
                'updated_at' => '2021-06-16 20:11:36',
            ),
            62 => 
            array (
                'id' => 63,
                'title' => '22 mil',
                'created_at' => '2021-06-16 20:11:36',
                'updated_at' => '2021-06-16 20:11:36',
            ),
            63 => 
            array (
                'id' => 64,
                'title' => '18 inch',
                'created_at' => '2021-06-16 20:11:36',
                'updated_at' => '2021-06-16 20:11:36',
            ),
            64 => 
            array (
                'id' => 65,
                'title' => 'extra long',
                'created_at' => '2021-06-16 20:11:36',
                'updated_at' => '2021-06-16 20:11:36',
            ),
        ));
        
        
    }
}