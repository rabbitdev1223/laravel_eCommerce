<?php
// .blade.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Image;
use App\Models\User;
use App\Models\Job;
use App\Models\Location;

class AdminUsersController extends Controller
{
    public function __invoke(Request $request)
    {
        $search = "";
        $current_page = 1;
        $column = 'user';
        $is_asc = 'ASC';

        $icon_asc = "<span class='asc_icon'><span class='svg-icon svg-icon-3 svg-icon-success me-2'><svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='24px' height='24px' viewBox='0 0 24 24' version='1.1'><g stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'><polygon points='0 0 24 0 24 24 0 24'></polygon><rect fill='#000000' opacity='0.5' x='11' y='5' width='2' height='14' rx='1'></rect><path d='M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z' fill='#000000' fill-rule='nonzero'></path></g></svg></span></span>";
        $icon_desc = "<span class='desc_icon'><span class='svg-icon svg-icon-3 svg-icon-danger me-2'><svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='24px' height='24px' viewBox='0 0 24 24' version='1.1'><g stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'><polygon points='0 0 24 0 24 24 0 24'></polygon><rect fill='#000000' opacity='0.5' x='11' y='5' width='2' height='14' rx='1'></rect><path d='M6.70710678,18.7071068 C6.31658249,19.0976311 5.68341751,19.0976311 5.29289322,18.7071068 C4.90236893,18.3165825 4.90236893,17.6834175 5.29289322,17.2928932 L11.2928932,11.2928932 C11.6714722,10.9143143 12.2810586,10.9010687 12.6757246,11.2628459 L18.6757246,16.7628459 C19.0828436,17.1360383 19.1103465,17.7686056 18.7371541,18.1757246 C18.3639617,18.5828436 17.7313944,18.6103465 17.3242754,18.2371541 L12.0300757,13.3841378 L6.70710678,18.7071068 Z' fill='#000000' fill-rule='nonzero' transform='translate(12.000003, 14.999999) scale(1, -1) translate(-12.000003, -14.999999)'></path></g></svg></span></span>";


        if ($request->input('column') && strlen($request->column) > 0) {
            $column = trim($request->column);
        }

        if ($request->input('order') && strlen($request->order) > 0) {
            $is_asc = trim($request->order);
        }

        if ($request->input('page') && intval($request->page) > 0) {
            $current_page = intval($request->page);
        }

        if ($request->input('search') && strlen(trim($request->search)) > 0) {
            $search = trim($request->search);
        }


        $url = $request->url();
        $users = User::where('users.email', '!=', null);

        if (!auth()->user()->hasRole('super'))
            $users = $users->Where('users.id', '<>', auth()->user()->id);

        if (strlen($search) > 0) {
            $users = $users->where(function ($join) use ($search) {

                $parts = explode(" ", $search);

                if (count($parts) > 1) {
                    foreach ($parts as $value) {
                        if (trim($value) == "")
                            continue;

                        $join->orWhere('users.first_name', 'LIKE', "{$value}%");
                        $join->orWhere('users.last_name', 'LIKE', "{$value}%");
                        $join->orWhere('users.middle_name', 'LIKE', "{$value}%");
                        $join->orWhere('users.email', 'LIKE', "{$value}%");
                    }
                } else {
                    $join->orWhere('users.first_name', 'LIKE', "{$search}%");
                    $join->orWhere('users.last_name', 'LIKE', "{$search}%");
                    $join->orWhere('users.middle_name', 'LIKE', "{$search}%");
                    $join->orWhere('users.email', 'LIKE', "{$search}%");
                }
            });
        }

        switch ($column) {
            case 'role':
                $users = $users->join('model_has_roles', function ($join) {
                    $join->on('users.id', '=', 'model_has_roles.model_id');
                    $join->where('model_type', 'App\\Models\\User');
                })->orderBy('model_has_roles.role_id', $is_asc);
                break;
            case 'last_login':
                $users = $users->orderBy('users.last_login', $is_asc);
                break;
            case 'created_date':
                $users = $users->orderBy('users.created_at', $is_asc);
                break;
            case 'job':
                $users = $users->join('jobs', function ($join) {
                    $join->on('users.job_id', '=', 'jobs.id');
                })->orderBy('jobs.title', $is_asc);
                break;
            case 'department':
                $users = $users->join('departments', function ($join) {
                    $join->on('users.department_id', '=', 'departments.id');
                })->orderBy('departments.title', $is_asc);
                break;
            default:
                $users = $users->orderBy('users.first_name', $is_asc)->orderBy('users.last_name', $is_asc);
                break;
        }

        $users = $users->paginate(8, ['*'], 'page', $current_page)->onEachSide(2);
        $elements_links = $users->links()['elements'];

        return view('admin.users.index', compact('users', 'url', 'search', 'elements_links', 'column', 'is_asc', 'icon_asc', 'icon_desc'));
    }

    public function create()
    {

        $roles = DB::table("roles")->select('id', 'name')->orderBy('name', 'ASC')->get();

        $jobs = Job::all();
        $locations = Location::all();

        $user = [];
        $role = 'User';

        return view('admin.users.profile', compact('user', 'role', 'jobs', 'roles', 'locations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:colors,title,{$color->id}',
        ]);
    }

    public function edit(User $user)
    {

        if (!auth()->user()->hasRole('super')) {
            return redirect(route('admin.users.index'));
        }

        if ($user->id == auth()->user()->id && !auth()->user()->hasRole('super')) {
            return redirect(route('admin.users.index'));
        }

        $roles = DB::table("roles")->select('id', 'name')->orderBy('name', 'ASC')->get();

        $role = DB::table("roles")->select('name')->join('model_has_roles', function ($join) use ($user) {
            $join->whereRaw("model_has_roles.role_id = roles.id");
            $join->where('model_has_roles.model_type', 'App\\Models\\User');
            $join->where('model_has_roles.model_id', $user->id);
        })->get()->first();

        $jobs = Job::all();
        $locations = Location::all();


        $role = $role ? $role->name : 'User';
        return view('admin.users.profile', compact('user', 'role', 'jobs', 'roles', 'locations'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'email' => "unique:users,email,{$user->id}",

        ]);

        $user->first_name = $request->first_name;
        $user->middle_name = $request->middle_name;
        $user->last_name = $request->last_name;
        $user->job_id = $request->job_id;
        $user->department_id = $request->department_id;
        $user->location_id = $request->location_id;
        $user->email = $request->email;
        $user->is_active = (intval($request->input('is_active', 0)) > 0);
        $user->communication = $request->communication;

        if (intval($request->input('avatar_remove', 0) == 1) && $user->image_id) {
            $image = Image::find($user->image_id);
            $deleted = Storage::delete($image->src);

            if ($deleted) {
                $user->image_id = null;
                $user->save();

                $image->delete();
                $image = null;
            }
        }

        if ($request->avatar) {
            $filename = $request->avatar->store('avatars');
            $uploadedImage = Image::create([
                'alt' => 'User Profile Image',
                'src' => $filename,
                'imageable_id' => $user->id,
                'imageable_type' => 'App\Models\User'
            ]);

            $user->image_id =  $uploadedImage->id;
        }


        $user->save();

        $user->roles()->detach();
        $user->assignRole($request->user_role);

        $user->save();



        session()->flash('message', 'User saved!');
        return redirect()->route('admin.users.profile.edit', $user);
    }
}
