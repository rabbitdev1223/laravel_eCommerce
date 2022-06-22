<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Cordova Bulldog Safety Glasses',
                'description' => 'Cordova\'s Bulldog™ safety glasses offer a single wrap-around lens, a spatula temple design, integrated nose piece, and a scratch-resistant polycarbonate lens. They meet ANSI Z87.1+ Standards and provide 99.9% UV protection.',
                'slug' => 'cordova-bulldog-safety-glasses',
                'manufacturer_id' => 1,
                'seo_keyword' => 'Clear Safety Glasses',
                'meta_description' => 'Clear Safety Glasses',
                'meta_keywords' => 'cordova,bulldog,safety glasses,clear,polycarbonate',
                'image_id' => 1,
                'product_type_id' => 2,
                'created_at' => '2021-06-18 21:09:56',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Cordova Caliber High Performance Cut Resistant Gloves',
            'description' => 'High-performance gloves are machine knit constructed of high-strength yarns that provide increased levels of dexterity and abrasion- and cut-resistance. Most feature coatings to increase the durability and gripping power. High Performance Polyethylene (HPPE) has a tensile strength 15 times stronger than steel on an equal weight basis. Gloves made with HPPE are lightweight, comfortable and abrasion- and cut-resistant. Tests have shown that gloves made with HPPE fibers have up to 20 times the abrasion resistance of gloves made with spun Aramid yarns. The CORDOVA-brand CALIBER™ glove features a salt & pepper, 13-gauge HPPE shell and gray polyurethane (PU) palm coating. It offers an A2 cut level.',
                'slug' => 'cordova-caliber-high-performance-cut-resistant-gloves',
                'manufacturer_id' => 1,
                'seo_keyword' => 'Cut Resistant Gloves',
                'meta_description' => 'Cut Resistant Gloves',
                'meta_keywords' => 'cordova,caliber,hppe gloves,cut resistant,high performance,a2',
                'image_id' => 2,
                'product_type_id' => 6,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Pyramex Lens Cleaning Towelettes',
                'description' => 'Pyramex LCT100 100 Pre-moistened Lens cleaning wipes with anti-fog, anti-static formula ideal for glasses, goggles, and face shields. Safe and effective with all types of lens coatings.',
                'slug' => 'pyramex-lens-cleaning-towelettes',
                'manufacturer_id' => 2,
                'seo_keyword' => 'Lens Cleaning Wipes',
                'meta_description' => 'Lens Cleaning Wipes',
                'meta_keywords' => 'pyramex,lens,cleaning,towelettes,wipes,anti-fog,anti-static',
                'image_id' => 5,
                'product_type_id' => 8,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Cordova Standard Grain Cowhide Driver',
                'description' => 'Cordova Safety Products grades leather according to the area on the hide from which it is cut. The premium-grade leather comes from side or shoulder and from areas higher on the animal that receive the least amount of movement. Select-grade leather is selected from the areas of the hide that don’t quite make the Premium grade, but are still a higher-quality leather. The regular and economy cuts are selected from the middle and lower portions of the hide, making it thinner than other grades. This leather driver glove is constructed of standard grain cowhide. Cowhide is comfortable, durable, breathable and offers excellent abrasion resistance. It is unlined and features a shirred elastic back and a keystone thumb, which offers the highest range of motion and comfort.',
                'slug' => 'cordova-standard-grain-cowhide-driver',
                'manufacturer_id' => 1,
                'seo_keyword' => 'Standard Leather Gloves',
                'meta_description' => 'Standard Leather Gloves',
                'meta_keywords' => 'cordova,driver,cowhide,leather gloves,unlined,keystone thumb',
                'image_id' => 6,
                'product_type_id' => 10,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Pyramex Ridgeline Ratchet Headgear',
                'description' => 'Pyramex Ridgeline Ratchet Headgear is constructed from durable nylon, has ratchet adjustment for easy fit, pivoting action to lift face shield while wearing and adjustable pegs to accommodate a wide variety of face shields.',
                'slug' => 'pyramex-ridgeline-ratchet-headgear',
                'manufacturer_id' => 2,
                'seo_keyword' => 'Headgear',
                'meta_description' => NULL,
                'meta_keywords' => 'pyramex,ridgeline,headgear,ratchet,head protection,face protection,face shield',
                'image_id' => 7,
                'product_type_id' => 13,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Pyramex Clear Polyethylene Face Shield',
                'description' => 'Pyramex S1010 Clear Polyethylene Face Shield has universal slots to accommodate a wide variety of headgear. This face shield offers secondary protection and must be worn with spectacles or goggles.',
                'slug' => 'pyramex-clear-polyethylene-face-shield',
                'manufacturer_id' => 2,
                'seo_keyword' => 'Clear Face Shields',
                'meta_description' => NULL,
                'meta_keywords' => 'clear,pyramex,head protection,face protection,face shield,polyethylene',
                'image_id' => 8,
                'product_type_id' => 14,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => '3M Half Facepiece Reusable Respirator',
                'description' => 'This half facepiece reusable respirator offers reliable and convenient respiratory protection and is suitable for many situations, helping provide protection against particulates and a wide variety of gases and vapors according to NIOSH approvals.',
                'slug' => '3m-half-facepiece-reusable-respirator',
                'manufacturer_id' => 3,
                'seo_keyword' => 'Half Facepiece Respirator',
                'meta_description' => 'Half Facepiece Respirator',
                'meta_keywords' => '3m,respirator,half-mask,reusable,respiratory protection',
                'image_id' => 9,
                'product_type_id' => 17,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => '3M Organic Vapor/Acid Gas Cartridge/Filter 60923',
            'description' => 'The 3M™ Organic Vapor/Acid Gas Cartridge/Filter 60923 P100 helps provide protection against certain organic vapors, acid gases and particulates in a variety of environments. The cartridge/filter combination may be used for respiratory protection from certain organic vapors, chlorine, hydrogen chloride, sulfur dioxide, hydrogen sulfide, hydrogen fluoride, and non-oil and oil particulate concentrations up to 10 times the Permissible Exposure Limit (PEL) with half facepieces or 50 times PEL with quantitatively fit tested full facepieces. This cartridge/filter is not for use in environments that are immediately dangerous to life or health (IDLH). Recommended applications for the cartridge/filter include chemical manufacturing, laboratories, petrochemical, and pharmaceuticals. Inventory needs and training requirements for safety equipment are reduced because this respirator cartridge/filter selection works for many different applications. This cartridge/filter is commonly used in the following industries: chemicals, general manufacturing, and pharmaceuticals.',
                'slug' => '3m-organic-vaporacid-gas-cartridgefilter-60923',
                'manufacturer_id' => 3,
                'seo_keyword' => 'Organic Vapor/Acid Gas Cartridge/Filter',
                'meta_description' => 'Organic Vapor/Acid Gas Cartridge/Filter',
                'meta_keywords' => '3m,respiratory protection,cartridge,filter,organic vapor,acid gas,particulates,niosh',
                'image_id' => 12,
                'product_type_id' => 18,
                'created_at' => '2021-06-18 21:09:57',
                'updated_at' => '2021-06-18 21:09:57',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'Cordova Encore Disposable Uncorded Ear Plugs',
            'description' => 'The Encore™ line of ear plugs offer a soft, comfortable fit and optimal hearing protection with a 33 decibel noise reduction rating. These foam polyurethane (PU) ear plugs expand to fit snugly within the ear canal. The tapered design allows for easy insertion/removal and the bright orange color makes compliance checks easy. Encore™ PU earplugs are produced in an ISO 9001:2000 Certified Facility to ensure consistent quality and performance.',
                'slug' => 'cordova-encore-disposable-uncorded-ear-plugs',
                'manufacturer_id' => 1,
                'seo_keyword' => 'Uncorded Disposable Ear Plugs',
                'meta_description' => 'Uncorded Disposable Ear Plugs',
                'meta_keywords' => 'cordova,uncorded,ear plugs,noise,decibel,foam,encore,dispenser,hearing protection',
                'image_id' => 15,
                'product_type_id' => 21,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'Cordova Encore Disposable Corded Ear Plugs',
            'description' => 'The Encore™ line of ear plugs offer a soft, comfortable fit and optimal hearing protection with a 33 decibel noise reduction rating. These foam polyurethane (PU) ear plugs expand to fit snugly within the ear canal. The tapered design allows for easy insertion/removal and the bright orange color makes compliance checks easy. A convenient cord keeps them safe around the neck when not in use. Encore™ PU earplugs are produced in an ISO 9001:2000 Certified Facility to ensure consistent quality and performance.',
                'slug' => 'cordova-encore-disposable-corded-ear-plugs',
                'manufacturer_id' => 1,
                'seo_keyword' => 'Corded Disposable Ear Plugs',
                'meta_description' => NULL,
                'meta_keywords' => 'cordova,ear plugs,noise,decibel,foam,encore,dispenser,hearing protection,corded',
                'image_id' => 17,
                'product_type_id' => 22,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'Cordova Defender II Microporous Disposable Coverall',
                'description' => 'CORDOVA SAFETY PRODUCTS brand DEFENDER™ protective clothing is constructed of tough, composite fabric that combines breathable microporous film and soft non-woven polyolefin. It provides an effective barrier against particulates, aerosols, and liquids while maintaining comfort. It is designed for work environments where hazardous and non-hazardous liquid and dry particulate contaminants may be present. DEFENDER II™ is a lighter, cooler version of the original. This Defender II™ microporous coverall features serged seams, a zipper and collar, and elastic waist.',
                'slug' => 'cordova-defender-ii-microporous-disposable-coverall',
                'manufacturer_id' => 1,
                'seo_keyword' => 'Microporous Disposable Coveralls',
                'meta_description' => 'Microporous Disposable Coveralls',
                'meta_keywords' => 'cordova,disposable coverall,disposable protection,defender,microporous',
                'image_id' => 19,
                'product_type_id' => 25,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'Pyramex SS 100 Side Shield',
                'description' => 'Our SS100 side shield is a convenient accessory constructed of clear soft PVC. The unique channel design of SS100 allows easy installation on a wide variety of prescription eyewear',
                'slug' => 'pyramex-ss-100-side-shield',
                'manufacturer_id' => 2,
                'seo_keyword' => 'Microporous Disposable Coveralls',
                'meta_description' => 'Microporous Disposable Coveralls',
                'meta_keywords' => 'cordova,disposable coverall,disposable protection,defender,microporous',
                'image_id' => 21,
                'product_type_id' => 26,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            12 => 
            array (
                'id' => 13,
                'title' => 'Sunnycare 8 Mil Powder Free Nitrile Gloves',
                'description' => 'SunnyCare® 12” Nitrile Medical Exam Gloves Purple. Produced and packed in an ISO 9001 and ISO 13485 quality system certified facility. Tested for use with Chemotherapy drugs using ASTM D6978-05.',
                'slug' => 'sunnycare-8-mil-powder-free-nitrile-gloves',
                'manufacturer_id' => 4,
                'seo_keyword' => '8 Mil Disposable Nitrile Gloves',
                'meta_description' => '8 Mil Disposable Nitrile Gloves',
                'meta_keywords' => 'sunnycare,disposable,gloves,8 mil,nitrile,powder free',
                'image_id' => 23,
                'product_type_id' => 28,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
            13 => 
            array (
                'id' => 14,
                'title' => 'MCR Nitri-Chem Unlined Green 22 mil Nitrile Gloves',
                'description' => 'Nitrile gloves are three times more puncture resistant than rubber and can be used to offer superior resistance to many types of chemicals. This glove is an excellent alternative for individuals who experience allergic reactions to latex. The 5350 series is an unlined industry grade nitrile glove that is 22 mil in thickness and 18 inches long. Component materials comply with all federal regulations for food contact. The 5350 also has a textured palm for additional gripping power.',
                'slug' => 'mcr-nitri-chem-unlined-green-22-mil-nitrile-gloves',
                'manufacturer_id' => 5,
                'seo_keyword' => 'Chemical Resistant Nitrile Gloves',
                'meta_description' => 'Chemical Resistant Nitrile Gloves',
                'meta_keywords' => 'nitrile,mcr safety,nitri-chem,chemical resistant,22 mil,18 inch,extra long',
                'image_id' => 24,
                'product_type_id' => 28,
                'created_at' => '2021-06-18 21:09:58',
                'updated_at' => '2021-06-18 21:09:58',
            ),
        ));
        
        
    }
}