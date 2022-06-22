<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as ImageIntervention;

class ImageController extends Controller
{
    public function __invoke(Request $request)
    {
        if ($request->has('type') && $request->type == 'logo') {
            $img = ImageIntervention::cache(function ($image) use ($request) {
                $image->make(storage_path('app/settings/Evans-Logo.jpg'))->fit($request->size);
            }, 1440, true);

            return $img->response();
        }
        
        if($request->has('type') && $request->type == 'black-logo'){
            $img = ImageIntervention::cache(function ($image) use ($request) {
                $image->make(storage_path('app/settings/black-logo.png'))->fit($request->size);
            }, 1440, true);
                
           return $img->response();
        }

        if ($request->has('type') && $request->type == 'favicon') {
            return response()->file(storage_path('app/settings/favicon.ico'));
        }

        if ($request->has('type') && $request->type == 'avatar' && $request->has('user_id')) {
            if (User::find($request->user_id)->image_id) {
                $img = ImageIntervention::cache(function ($image) use ($request) {
                    $image->make(storage_path('app/' . Image::find(User::find($request->user_id)->image_id)->src))->fit($request->size);
                }, 1440, true);

                return $img->response();
            } else {
                $img = ImageIntervention::cache(function ($image) use ($request) {
                    $image->make(storage_path('app/settings/default-avatar.png'))->fit($request->size);
                }, 1440, true);

                return $img->response();
            }
        }

        if ($request->has('type') && $request->type == 'avatar') {
            if (auth()->user()->image_id) {
                $img = ImageIntervention::cache(function ($image) use ($request) {
                    $image->make(storage_path('app/' . Image::find(auth()->user()->image_id)->src))->fit($request->size);
                }, 1440, true);

                return $img->response();
            } else {
                $img = ImageIntervention::cache(function ($image) use ($request) {
                    $image->make(storage_path('app/settings/default-avatar.png'))->fit($request->size);
                }, 1440, true);

                return $img->response();
            }
        }

        $img = ImageIntervention::cache(function ($image) use ($request) {
            $image->make(storage_path('app/' . Image::find($request->image_id)->src))->fit($request->size);
        }, 1440, true);

        return $img->response();
    }
}
