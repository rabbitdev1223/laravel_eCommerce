<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentStatusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('payment_statuses')->delete();


        \DB::table('payment_statuses')->insert(array(
            0 =>
            array(
                'id' => 1,
                'title' => 'Authorized',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array(
                'id' => 2,
                'title' => 'Paid',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array(
                'id' => 3,
                'title' => 'Partially refunded',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array(
                'id' => 4,
                'title' => 'Partially paid',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array(
                'id' => 5,
                'title' => 'Pending',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array(
                'id' => 6,
                'title' => 'Refunded',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 =>
            array(
                'id' => 7,
                'title' => 'Unpaid',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 =>
            array(
                'id' => 8,
                'title' => 'Voided',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
