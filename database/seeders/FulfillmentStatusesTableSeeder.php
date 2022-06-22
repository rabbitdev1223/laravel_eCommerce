<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FulfillmentStatusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('fulfillment_statuses')->delete();


        \DB::table('fulfillment_statuses')->insert(array(
            0 =>
            array(
                'id' => 1,
                'title' => 'Fulfilled',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array(
                'id' => 2,
                'title' => 'Unfulfilled',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array(
                'id' => 3,
                'title' => 'Partially fulfilled',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array(
                'id' => 4,
                'title' => 'Scheduled',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array(
                'id' => 5,
                'title' => 'On hold',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
