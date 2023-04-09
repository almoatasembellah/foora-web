<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\StoreUserRequest;
use App\Http\Requests\Admin\Users\UpdateUserRequest;
use App\Models\Area;
use App\Models\City;
use App\Models\Role;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('admin.pages.users.index' , compact('users' ));
    }

    public function create()
    {
        $cities = City::all();
        $areas = Area::all();
        $roles = Role::all();
        return view('admin.pages.users.create' , compact('cities' , 'areas' , 'roles'));
    }

    public function store(StoreUserRequest $request)
    {
        User::create($request->validated());
        return redirect()->route('admin.users.index')->with(['success'=>'User created successfully']);
    }

    public function edit(User $user)
    {
        $cities = City::all();
        $areas = Area::all();
        $roles = Role::all();
        return view('admin.pages.users.edit' , compact('user','cities' , 'areas' , 'roles'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $data = $request->validated();
        $data['password'] = $request->get('password') ? bcrypt($request->get('password')) : $user['password'];
        $user->update($data);
        return redirect()->route('admin.users.index')->with(['success'=>'User updated successfully']);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with(['success'=>'User deleted successfully']);
    }
}
