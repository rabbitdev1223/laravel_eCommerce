<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentMethodsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('payment_methods')->delete();


        \DB::table('payment_methods')->insert(array(
            0 =>
            array(
                'created_at' => NULL,
                'id' => 1,
                'title' => 'net',
                'updated_at' => NULL,
            ),
            1 =>
            array(
                'created_at' => NULL,
                'id' => 2,
                'title' => 'paypal',
                'updated_at' => NULL,
            ),
            2 =>
            array(
                'created_at' => NULL,
                'id' => 3,
                'title' => 'cash',
                'updated_at' => NULL,
            ),
            3 =>
            array(
                'created_at' => NULL,
                'id' => 4,
                'title' => 'check',
                'updated_at' => NULL,
            ),
        ));
    }
}
