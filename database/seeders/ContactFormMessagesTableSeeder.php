<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactFormMessagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('contact_form_messages')->delete();
    }
}
