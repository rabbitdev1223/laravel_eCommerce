<?php
// .blade.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ContactFormMessage;

class AdminSupportMessageController extends Controller
{
    public function __invoke(Request $request)
    {
        $search = "";
        $current_page = 1;
        if ($request->input('page') && intval($request->page) > 0) {
            $current_page = intval($request->page);
        }

        if ($request->input('search') && strlen(trim($request->search)) > 0) {
            $search = trim($request->search);
        }


        $url = $request->url();
        $messages = new ContactFormMessage();

        if (strlen($search) > 0) {
            $messages = $messages->where(function ($join) use ($search) {

                $parts = explode(" ", $search);

                if (count($parts) > 1) {
                    foreach ($parts as $value) {
                        if (trim($value) == "")
                            continue;

                        $join->orWhere('name', 'LIKE', "{$value}%");
                        $join->orWhere('email', 'LIKE', "{$value}%");
                        $join->orWhere('subject', 'LIKE', "{$value}%");
                        $join->orWhere('phone_number', 'LIKE', "{$value}%");
                        $join->orWhere('message', 'LIKE', "{$value}%");
                    }
                } else {
                    $join->orWhere('name', 'LIKE', "{$search}%");
                    $join->orWhere('email', 'LIKE', "{$search}%");
                    $join->orWhere('subject', 'LIKE', "{$search}%");
                    $join->orWhere('phone_number', 'LIKE', "{$search}%");
                    $join->orWhere('message', 'LIKE', "{$search}%");
                }
            });
        }

        $messages = $messages->orderBy('created_at', 'ASC')->paginate(8, ['*'], 'page', $current_page)->onEachSide(2);
        $elements_links = $messages->links()['elements'];


        return view('admin.support-message.index', compact('messages', 'url', 'search', 'elements_links'));
    }
}
