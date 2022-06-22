<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faqs')->delete();
        
        \DB::table('faqs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'question' => 'How do I favorite a product?',
                'answer' => 'If you are logged in, go to the products page and select the product you would like to favorite. Then on the products page there will be an icon to favorite the product.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'question' => 'How do I view my orders?',
                'answer' => 'If you are logged in you can click your profile picture in the top right. There will be a link to "My Orders".',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'question' => 'How do I view my cart?',
                'answer' => 'When you are logged in there will be an icon that looks like a shopping cart. If you click that icon your cart will be show.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'question' => 'How do I reset my password?',
                'answer' => 'Click "Login" in the top right and then click "Forgot Password?"',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}