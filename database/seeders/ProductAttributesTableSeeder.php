<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductAttributesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_attributes')->delete();
        
        \DB::table('product_attributes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 1,
                'product_attribute_type_id' => 1,
                'value' => 'Scratch-Resistant Polycarbonate Lens',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 1,
                'product_attribute_type_id' => 2,
                'value' => 'Single Wrap-Around Lens',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            2 => 
            array (
                'id' => 3,
                'product_id' => 1,
                'product_attribute_type_id' => 2,
                'value' => 'Spatula Temple Design Integrated Nose Piece',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            3 => 
            array (
                'id' => 4,
                'product_id' => 1,
                'product_attribute_type_id' => 3,
                'value' => 'Frosted Frame',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            4 => 
            array (
                'id' => 5,
                'product_id' => 1,
                'product_attribute_type_id' => 4,
                'value' => 'Meets ANSI Z87.1 Standard',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            5 => 
            array (
                'id' => 6,
                'product_id' => 1,
                'product_attribute_type_id' => 4,
                'value' => 'Provides 99.9% UV Protection',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            6 => 
            array (
                'id' => 7,
                'product_id' => 2,
                'product_attribute_type_id' => 2,
                'value' => 'Salt & Pepper, 13-Gauge, HPPE Shell',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            7 => 
            array (
                'id' => 8,
                'product_id' => 2,
                'product_attribute_type_id' => 2,
                'value' => 'Gray PU Palm Coating',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            8 => 
            array (
                'id' => 9,
                'product_id' => 2,
                'product_attribute_type_id' => 4,
                'value' => 'CE/EN 388',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            9 => 
            array (
                'id' => 10,
                'product_id' => 2,
                'product_attribute_type_id' => 3,
                'value' => 'Gloves made with HPPE are lightweight, comfortable and abrasion- and cut-resistant.',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            10 => 
            array (
                'id' => 11,
                'product_id' => 3,
                'product_attribute_type_id' => 5,
                'value' => '5X8 Towelettes',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            11 => 
            array (
                'id' => 12,
                'product_id' => 3,
                'product_attribute_type_id' => 6,
                'value' => 'Anti-fog, anti-static formula',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            12 => 
            array (
                'id' => 13,
                'product_id' => 3,
                'product_attribute_type_id' => 7,
                'value' => '100 individually packaged pre-moistened towelettes.',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            13 => 
            array (
                'id' => 14,
                'product_id' => 4,
                'product_attribute_type_id' => 1,
                'value' => 'Standard Grain Cowhide',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            14 => 
            array (
                'id' => 15,
                'product_id' => 4,
                'product_attribute_type_id' => 2,
                'value' => 'Keystone Thumb',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            15 => 
            array (
                'id' => 16,
                'product_id' => 4,
                'product_attribute_type_id' => 2,
                'value' => 'Shirred Elastic Back',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            16 => 
            array (
                'id' => 17,
                'product_id' => 4,
                'product_attribute_type_id' => 3,
                'value' => 'Unlined',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            17 => 
            array (
                'id' => 18,
                'product_id' => 5,
                'product_attribute_type_id' => 1,
                'value' => 'Durable Nylon',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            18 => 
            array (
                'id' => 19,
                'product_id' => 5,
                'product_attribute_type_id' => 2,
                'value' => 'Adjustable Pegs',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            19 => 
            array (
                'id' => 20,
                'product_id' => 5,
                'product_attribute_type_id' => 2,
                'value' => 'Tension Adjustment',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            20 => 
            array (
                'id' => 21,
                'product_id' => 5,
                'product_attribute_type_id' => 2,
                'value' => 'Adjustable Ratchet Suspension',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            21 => 
            array (
                'id' => 22,
                'product_id' => 5,
                'product_attribute_type_id' => 2,
                'value' => 'Adjustable pin lock for top of head padded brow guard',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            22 => 
            array (
                'id' => 23,
                'product_id' => 5,
                'product_attribute_type_id' => 4,
                'value' => 'Meets ANSI Z87.1 Standard',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            23 => 
            array (
                'id' => 24,
                'product_id' => 6,
                'product_attribute_type_id' => 4,
                'value' => 'Meets ANSI Z87 Standard',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            24 => 
            array (
                'id' => 25,
                'product_id' => 6,
                'product_attribute_type_id' => 1,
                'value' => 'Polyethylene',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            25 => 
            array (
                'id' => 26,
                'product_id' => 6,
                'product_attribute_type_id' => 2,
                'value' => 'Universal slots to accommodate a wide variety of headgear.',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            26 => 
            array (
                'id' => 27,
                'product_id' => 7,
                'product_attribute_type_id' => 1,
            'value' => 'Thermoplastic Elastomer (TPE)',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            27 => 
            array (
                'id' => 28,
                'product_id' => 8,
                'product_attribute_type_id' => 4,
                'value' => 'NIOSH approved for protection against certain organic vapors, acid gases and particulates',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            28 => 
            array (
                'id' => 29,
                'product_id' => 8,
                'product_attribute_type_id' => 3,
                'value' => 'Swept-back design allows an enhanced field of view and comfort',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            29 => 
            array (
                'id' => 30,
                'product_id' => 8,
                'product_attribute_type_id' => 3,
                'value' => 'Bayonet compatibility allows use with many 3M™ half and full facepieces and certain 3M™ Scott™ full facepieces',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            30 => 
            array (
                'id' => 31,
                'product_id' => 8,
                'product_attribute_type_id' => 8,
                'value' => 'Assembly and Mechanical',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            31 => 
            array (
                'id' => 32,
                'product_id' => 8,
                'product_attribute_type_id' => 8,
                'value' => 'Batch-Charging',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            32 => 
            array (
                'id' => 33,
                'product_id' => 8,
                'product_attribute_type_id' => 8,
                'value' => 'Chemical Clean-up',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            33 => 
            array (
                'id' => 34,
                'product_id' => 8,
                'product_attribute_type_id' => 8,
                'value' => 'Chemical Manufacturing',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            34 => 
            array (
                'id' => 35,
                'product_id' => 8,
                'product_attribute_type_id' => 8,
                'value' => 'Cleaning',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            35 => 
            array (
                'id' => 36,
                'product_id' => 8,
                'product_attribute_type_id' => 8,
                'value' => 'Fertilizing',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            36 => 
            array (
                'id' => 37,
                'product_id' => 8,
                'product_attribute_type_id' => 8,
                'value' => 'Finishing Operations',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            37 => 
            array (
                'id' => 38,
                'product_id' => 8,
                'product_attribute_type_id' => 8,
                'value' => 'Handling',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            38 => 
            array (
                'id' => 39,
                'product_id' => 8,
                'product_attribute_type_id' => 8,
                'value' => 'Laboratories',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            39 => 
            array (
                'id' => 40,
                'product_id' => 8,
                'product_attribute_type_id' => 8,
                'value' => 'Maintenance',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            40 => 
            array (
                'id' => 41,
                'product_id' => 8,
                'product_attribute_type_id' => 8,
                'value' => 'Manufacturing',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            41 => 
            array (
                'id' => 42,
                'product_id' => 8,
                'product_attribute_type_id' => 8,
                'value' => 'Metal Pouring Including Exposure to Lead',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            42 => 
            array (
                'id' => 43,
                'product_id' => 8,
                'product_attribute_type_id' => 8,
                'value' => 'Painting',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            43 => 
            array (
                'id' => 44,
                'product_id' => 8,
                'product_attribute_type_id' => 8,
                'value' => 'Pesticide Application',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            44 => 
            array (
                'id' => 45,
                'product_id' => 8,
                'product_attribute_type_id' => 8,
                'value' => 'Petrochemical',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            45 => 
            array (
                'id' => 46,
                'product_id' => 8,
                'product_attribute_type_id' => 8,
                'value' => 'Pharmaceuticals',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            46 => 
            array (
                'id' => 47,
                'product_id' => 8,
                'product_attribute_type_id' => 8,
                'value' => 'Pouring Molten Metal',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            47 => 
            array (
                'id' => 48,
                'product_id' => 8,
                'product_attribute_type_id' => 8,
                'value' => 'Seal Coatings',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            48 => 
            array (
                'id' => 49,
                'product_id' => 8,
                'product_attribute_type_id' => 8,
                'value' => 'Working in dusty and poisonous atmosphere',
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            49 => 
            array (
                'id' => 50,
                'product_id' => 9,
                'product_attribute_type_id' => 1,
                'value' => 'Foam Polyurethane',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            50 => 
            array (
                'id' => 51,
                'product_id' => 9,
                'product_attribute_type_id' => 4,
                'value' => 'Certification/Rating',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            51 => 
            array (
                'id' => 52,
                'product_id' => 9,
                'product_attribute_type_id' => 9,
                'value' => '33 Decibels',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            52 => 
            array (
                'id' => 53,
                'product_id' => 9,
                'product_attribute_type_id' => 3,
                'value' => 'The tapered design allows for easy insertion/removal and the bright orange color makes compliance checks easy.',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            53 => 
            array (
                'id' => 54,
                'product_id' => 10,
                'product_attribute_type_id' => 1,
                'value' => 'Foam Polyurethane',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            54 => 
            array (
                'id' => 55,
                'product_id' => 10,
                'product_attribute_type_id' => 4,
                'value' => 'Certification/Rating',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            55 => 
            array (
                'id' => 56,
                'product_id' => 10,
                'product_attribute_type_id' => 9,
                'value' => '33 Decibels',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            56 => 
            array (
                'id' => 57,
                'product_id' => 10,
                'product_attribute_type_id' => 3,
                'value' => 'The tapered design allows for easy insertion/removal and the bright orange color makes compliance checks easy.',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            57 => 
            array (
                'id' => 58,
                'product_id' => 11,
                'product_attribute_type_id' => 1,
                'value' => 'Composite Fabric - Microporous Film - Soft Non-Woven Polyolefin',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            58 => 
            array (
                'id' => 59,
                'product_id' => 11,
                'product_attribute_type_id' => 4,
                'value' => 'ANSI/ISEA 101 Compliant sizing -ASTM 1670',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            59 => 
            array (
                'id' => 60,
                'product_id' => 11,
                'product_attribute_type_id' => 10,
                'value' => 'Pass - Anti-Static - Safe for Food contact',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            60 => 
            array (
                'id' => 61,
                'product_id' => 11,
                'product_attribute_type_id' => 2,
                'value' => 'Serged Seams - Zipper and Collar - Elastic Waist',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            61 => 
            array (
                'id' => 62,
                'product_id' => 12,
                'product_attribute_type_id' => 1,
                'value' => 'Composite Fabric - Microporous Film - Soft Non-Woven Polyolefin',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            62 => 
            array (
                'id' => 63,
                'product_id' => 12,
                'product_attribute_type_id' => 4,
                'value' => 'ANSI/ISEA 101 Compliant sizing - ASTM 1670',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            63 => 
            array (
                'id' => 64,
                'product_id' => 12,
                'product_attribute_type_id' => 10,
                'value' => 'Pass - Anti-Static - Safe for Food contact',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            64 => 
            array (
                'id' => 65,
                'product_id' => 12,
                'product_attribute_type_id' => 2,
                'value' => 'Serged Seams - Zipper and Collar - Elastic Waist',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            65 => 
            array (
                'id' => 66,
                'product_id' => 13,
                'product_attribute_type_id' => 4,
                'value' => 'Produced and packed in an ISO 9001 and ISO 13485 quality system certified facility. Tested for use with Chemotherapy drugs using ASTM D6978-05.',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            66 => 
            array (
                'id' => 67,
                'product_id' => 13,
                'product_attribute_type_id' => 8,
                'value' => 'Medical',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            67 => 
            array (
                'id' => 68,
                'product_id' => 13,
                'product_attribute_type_id' => 8,
                'value' => 'Industrial',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            68 => 
            array (
                'id' => 69,
                'product_id' => 14,
                'product_attribute_type_id' => 2,
                'value' => '22 mil unlined green nitrile gloves',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            69 => 
            array (
                'id' => 70,
                'product_id' => 14,
                'product_attribute_type_id' => 2,
                'value' => '18 inch length',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            70 => 
            array (
                'id' => 71,
                'product_id' => 14,
                'product_attribute_type_id' => 2,
                'value' => 'Component materials comply with all federal regulations',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            71 => 
            array (
                'id' => 72,
                'product_id' => 14,
                'product_attribute_type_id' => 4,
                'value' => 'ANSI Puncture Level 3',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            72 => 
            array (
                'id' => 73,
                'product_id' => 14,
                'product_attribute_type_id' => 4,
                'value' => 'ANSI/ISEA 105',
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
        ));
        
        
    }
}