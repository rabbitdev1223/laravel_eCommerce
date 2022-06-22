<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Faq;
use App\Models\Setting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function __invoke()
    {
        
        $facebook = Setting::where('title','facebook')->first()->value;
        $twitter = Setting::where('title','twitter')->first()->value;
        $youtube = Setting::where('title','youtube')->first()->value;
        $instagram = Setting::where('title','instagram')->first()->value;
        
        return view('frontend.support.index', compact('facebook','twitter','youtube','instagram'));
        
    }
}
