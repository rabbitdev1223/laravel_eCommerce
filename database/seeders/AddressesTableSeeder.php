<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('addresses')->delete();
        
        \DB::table('addresses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 'shipping',
                'address' => '6707 N Interstate Drive',
                'address_2' => NULL,
                'city_id' => 20878,
                'zipcode' => '73069',
                'is_primary' => 0,
                'addressable_id' => 13,
                'addressable_type' => 'App\\Models\\Location',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'type' => 'shipping',
                'address' => '2001 North 13th Street',
                'address_2' => NULL,
                'city_id' => 1282,
                'zipcode' => '72756',
                'is_primary' => 0,
                'addressable_id' => 6,
                'addressable_type' => 'App\\Models\\Location',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'type' => 'shipping',
                'address' => '4647 W. Junction Street',
                'address_2' => NULL,
                'city_id' => 13942,
                'zipcode' => '65802',
                'is_primary' => 0,
                'addressable_id' => 10,
                'addressable_type' => 'App\\Models\\Location',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'type' => 'shipping',
                'address' => '2002 Southwest Blvd.',
                'address_2' => NULL,
                'city_id' => 21024,
                'zipcode' => '74101',
                'is_primary' => 0,
                'addressable_id' => 8,
                'addressable_type' => 'App\\Models\\Location',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'type' => 'shipping',
                'address' => '201 S. Industrial Dr.',
                'address_2' => NULL,
                'city_id' => 26098,
                'zipcode' => '76710',
                'is_primary' => 0,
                'addressable_id' => 3,
                'addressable_type' => 'App\\Models\\Location',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'type' => 'shipping',
                'address' => '2707 Central E. Fwy',
                'address_2' => NULL,
                'city_id' => 26149,
                'zipcode' => '76302',
                'is_primary' => 0,
                'addressable_id' => 2,
                'addressable_type' => 'App\\Models\\Location',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'type' => 'shipping',
                'address' => '6707 N Interstate Drive',
                'address_2' => NULL,
                'city_id' => 20878,
                'zipcode' => '73104',
                'is_primary' => 1,
                'addressable_id' => 280,
                'addressable_type' => 'App\\Models\\User',
                'created_at' => '2021-06-22 02:08:47',
                'updated_at' => '2021-06-22 02:13:39',
            ),
        ));
        
        
    }
}