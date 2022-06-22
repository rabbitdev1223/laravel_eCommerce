<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('images')->delete();

        \DB::table('images')->insert(array(
            0 =>
            array(
                'id' => 1,
                'alt' => 'Cordova Bulldog Safety Glasses',
                'src' => 'products/COREHF10SCLEAR.jpg',
                'imageable_id' => 1,
                'imageable_type' => 'App\\Models\\Product',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            1 =>
            array(
                'id' => 2,
                'alt' => 'Cordova Caliber High Performance Cut Resistant Gloves',
                'src' => 'products/COR3716G_1.jpg',
                'imageable_id' => 2,
                'imageable_type' => 'App\\Models\\Product',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            2 =>
            array(
                'id' => 3,
                'alt' => 'Cordova Caliber High Performance Cut Resistant Gloves',
                'src' => 'products/COR3716G_2.jpg',
                'imageable_id' => 2,
                'imageable_type' => 'App\\Models\\Product',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            3 =>
            array(
                'id' => 4,
                'alt' => 'Cordova Caliber High Performance Cut Resistant Gloves',
                'src' => 'products/COR3716G_3.jpg',
                'imageable_id' => 2,
                'imageable_type' => 'App\\Models\\Product',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            4 =>
            array(
                'id' => 5,
                'alt' => 'Pyramex Lens Cleaning Towelettes',
                'src' => 'products/PYRLCT100.jpg',
                'imageable_id' => 3,
                'imageable_type' => 'App\\Models\\Product',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            5 =>
            array(
                'id' => 6,
                'alt' => 'Cordova Standard Grain Cowhide Driver',
                'src' => 'products/COR8212.jpg',
                'imageable_id' => 4,
                'imageable_type' => 'App\\Models\\Product',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            6 =>
            array(
                'id' => 7,
                'alt' => 'Pyramex Ridgeline Ratchet Headgear',
                'src' => 'products/PYRHGBR.jpg',
                'imageable_id' => 5,
                'imageable_type' => 'App\\Models\\Product',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            7 =>
            array(
                'id' => 8,
                'alt' => 'Pyramex Clear Polyethylene Face Shield',
                'src' => 'products/PYRS1010C.jpg',
                'imageable_id' => 6,
                'imageable_type' => 'App\\Models\\Product',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            8 =>
            array(
                'id' => 9,
                'alt' => '3M Half Facepiece Reusable Respirator',
                'src' => 'products/3M6300_1.jpg',
                'imageable_id' => 7,
                'imageable_type' => 'App\\Models\\Product',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            9 =>
            array(
                'id' => 10,
                'alt' => '3M Half Facepiece Reusable Respirator',
                'src' => 'products/3M6300_2.jpg',
                'imageable_id' => 7,
                'imageable_type' => 'App\\Models\\Product',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            10 =>
            array(
                'id' => 11,
                'alt' => '3M Half Facepiece Reusable Respirator',
                'src' => 'products/3M6300_3.jpg',
                'imageable_id' => 7,
                'imageable_type' => 'App\\Models\\Product',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            11 =>
            array(
                'id' => 12,
                'alt' => '3M Organic Vapor/Acid Gas Cartridge/Filter 60923',
                'src' => 'products/3M60923_1.jpg',
                'imageable_id' => 8,
                'imageable_type' => 'App\\Models\\Product',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            12 =>
            array(
                'id' => 13,
                'alt' => '3M Organic Vapor/Acid Gas Cartridge/Filter 60923',
                'src' => 'products/3M60923_2.jpg',
                'imageable_id' => 8,
                'imageable_type' => 'App\\Models\\Product',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            13 =>
            array(
                'id' => 14,
                'alt' => '3M Organic Vapor/Acid Gas Cartridge/Filter 60923',
                'src' => 'products/3M60923_3.jpg',
                'imageable_id' => 8,
                'imageable_type' => 'App\\Models\\Product',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            14 =>
            array(
                'id' => 15,
                'alt' => 'Cordova Encore Disposable Uncorded Ear Plugs',
                'src' => 'products/COREPFU01_1.jpg',
                'imageable_id' => 9,
                'imageable_type' => 'App\\Models\\Product',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            15 =>
            array(
                'id' => 16,
                'alt' => 'Cordova Encore Disposable Uncorded Ear Plugs',
                'src' => 'products/COREPFU01_2.jpg',
                'imageable_id' => 9,
                'imageable_type' => 'App\\Models\\Product',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            16 =>
            array(
                'id' => 17,
                'alt' => 'Cordova Encore Disposable Corded Ear Plugs',
                'src' => 'products/COREPFC01_1.jpg',
                'imageable_id' => 10,
                'imageable_type' => 'App\\Models\\Product',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            17 =>
            array(
                'id' => 18,
                'alt' => 'Cordova Encore Disposable Corded Ear Plugs',
                'src' => 'products/COREPFC01_2.jpg',
                'imageable_id' => 10,
                'imageable_type' => 'App\\Models\\Product',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            18 =>
            array(
                'id' => 19,
                'alt' => 'Cordova Defender II Microporous Disposable Coverall',
                'src' => 'products/CORMP100_1.jpg',
                'imageable_id' => 11,
                'imageable_type' => 'App\\Models\\Product',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            19 =>
            array(
                'id' => 20,
                'alt' => 'Cordova Defender II Microporous Disposable Coverall',
                'src' => 'products/CORMP100_2.jpg',
                'imageable_id' => 11,
                'imageable_type' => 'App\\Models\\Product',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            20 =>
            array(
                'id' => 21,
                'alt' => 'Pyramex SS 100 Side Shield',
                'src' => 'products/PYRSS100_1.jpg',
                'imageable_id' => 12,
                'imageable_type' => 'App\\Models\\Product',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            21 =>
            array(
                'id' => 22,
                'alt' => 'Pyramex SS 100 Side Shield',
                'src' => 'products/PYRSS100_2.jpg',
                'imageable_id' => 12,
                'imageable_type' => 'App\\Models\\Product',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            22 =>
            array(
                'id' => 23,
                'alt' => 'Sunnycare 8 Mil Powder Free Nitrile Gloves',
                'src' => 'products/SC8704.jpg',
                'imageable_id' => 13,
                'imageable_type' => 'App\\Models\\Product',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            23 =>
            array(
                'id' => 24,
                'alt' => 'MCR Nitri-Chem Unlined Green 22 mil Nitrile Gloves',
                'src' => 'products/MCR5350_1.jpg',
                'imageable_id' => 14,
                'imageable_type' => 'App\\Models\\Product',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
        ));
    }
}
