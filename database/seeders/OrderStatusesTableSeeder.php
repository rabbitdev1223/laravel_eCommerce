<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderStatusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('order_statuses')->delete();


        \DB::table('order_statuses')->insert(array(
            0 =>
            array(
                'id' => 1,
                'title' => 'Open',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array(
                'id' => 2,
                'title' => 'Archived',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array(
                'id' => 3,
                'title' => 'Canceled',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
