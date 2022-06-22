<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class MyAccountController extends Controller
{
    public function __invoke()
    {
        return view('frontend.my-account.account');
    }
}
