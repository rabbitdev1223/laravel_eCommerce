<?php

namespace App\Http\Livewire\Admin\Users;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Image;
use App\Models\Job;
use App\Models\Department;
use App\Models\Location;
use Livewire\WithFileUploads;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Password;
use Spatie\Permission\Models\Role;

class Form extends Component
{
    use WithFileUploads;

    public $userid = 0;
    public $image_id = null;
    public $jobs;
    public $departaments;
    public $locations;
    public $first_name;
    public $middle_name;
    public $last_name;
    public $email;
    public $job_id;
    public $department_id;
    public $location_id;
    public $role_selected = 'user';
    public $avatar;
    public $avatar_remove = false;
    public $avatar_updated = false;
    public $is_new_user;
    public $roles_for_users;

    protected $listeners = ['deleteUser', 'toggleUser', 'resetPassword'];

    public function mount()
    {

        $this->jobs = Job::pluck('title', 'id');
        $this->departaments = Department::pluck('title', 'id');
        $this->locations = Location::all();

        $this->avatar;
        $this->first_name = "";
        $this->middle_name = "";
        $this->last_name = "";
        $this->email = "";
        $this->job_id = 0;
        $this->department_id = 0;
        $this->location_id = 0;
        $this->role_selected = 'user';

        $this->roles_for_users = Role::pluck('name');
    }

    public function load()
    {
        if (intval($this->userid) <= 0)
            return;

        $user = User::find($this->userid);

        if (!$user)
            return;

        $this->first_name = $user->first_name;
        $this->last_name = $user->last_name;
        $this->middle_name = $user->middle_name;
        $this->email = $user->email;
        $this->job_id = $user->job_id;
        $this->department_id = $user->department_id;
        $this->location_id = $user->location_id;
        $this->image_id = $user->image_id;
        $user_role = DB::table("roles")->select('name')->join('model_has_roles', function ($join) use ($user) {
            $join->whereRaw("model_has_roles.role_id = roles.id");
            $join->where('model_has_roles.model_type', 'App\\Models\\User');
            $join->where('model_has_roles.model_id', $user->id);
        })->get()->first();

        $this->role_selected = ($user_role ? $user_role->name : 'user');
    }

    public function submit()
    {

        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            //             'avatar' => 'image|mimes:jpg,jpeg,png,svg,gif|max:2048',
        ]);


        if ($this->userid > 0) {
            $this->validate([
                'email' => "unique:users,email,{$this->userid}"
            ]);

            $user = User::find($this->userid);

            if ($this->avatar_remove) {
                $image_id = $user->image_id;
                if ($image_id) {
                    $user->image_id = null;
                    $this->image_id = null;
                    $user->save();


                    Image::find($image_id)->delete();
                }
            }
        } else {
            $this->validate([
                'email' => "unique:users,email"
            ]);

            $user = new User();
        }

        $user->first_name = $this->first_name;
        $user->middle_name = $this->middle_name;
        $user->last_name = $this->last_name;
        $user->email = $this->email;
        if ($this->job_id > 0)
            $user->job_id = $this->job_id;
        if ($this->department_id > 0)
            $user->department_id = $this->department_id;
        if ($this->location_id > 0)
            $user->location_id = $this->location_id;
        $user->is_active = true;
        $user->change_password = true;

        $user->save();

        if ($this->avatar) {

            $filename = $this->avatar->store('avatars');

            $uploadedImage = Image::create([
                'alt' => 'User Profile Image',
                'src' => $filename,
                'imageable_id' => $user->id,
                'imageable_type' => 'App\Models\User'
            ]);

            $user->image_id =  $uploadedImage->id;
            $user->save();
        }

        $user->roles()->detach();
        $user->assignRole($this->role_selected);


        session()->flash('message', ($this->userid  <= 0 ? 'User created with successfully!' : 'User changed with successfully!'));
        return redirect()->to(route('admin.users.index'));
    }

    public function toggleUser($userid)
    {
        $this->avatar;
        $this->first_name = "";
        $this->middle_name = "";
        $this->last_name = "";
        $this->email = "";
        $this->job_id = 0;
        $this->department_id = 0;
        $this->location_id = 0;
        $this->role_selected = 'user';

        $this->userid = $userid;
        $this->load();
    }

    public function deleteUser($id)
    {
        if (!Auth::user()->hasRole('super')) {
            session()->flash('message', 'It was not possible to remove the user, operation canceled!');
            return redirect()->to(route('admin.users.index'));
        }

        $res = User::find($id)->delete();

        session()->flash('message', ($res ? 'User deleted successfully!' : 'It was not possible to remove the user, operation canceled!'));
        return redirect()->to(route('admin.users.index'));
    }

    public function render()
    {
        return view('livewire.admin.users.form-user', [
            "roles_for_users" => DB::table("roles")->select("id", "name")->orderBy('name', 'ASC')->get()->toArray()
        ]);
    }

    public function removeAvatar()
    {
        $this->avatar_remove = true;
    }

    public function updatedAvatar()
    {
        $this->avatar_remove = true;
        $this->avatar_updated = true;
    }

    public function resetPassword($id)
    {
        $user = User::find($id);
        $token = Password::getRepository()->create($user);
        $user->sendPasswordResetNotification($token);

        session()->flash('message', 'E-mail sent successfully, please check email.');
        return redirect()->to(route('admin.users.index'));
    }
}
