<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index()
    {
        $roles = Role::latest()->paginate(10);
        return view('admin.pages.roles.index' , compact('roles'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Role::create([
            'name' => $request->get('name')
        ]);
        return redirect()->route('admin.roles.index')->with(['success' => 'Role has been added successfully']);
    }



    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $role->update([
            'name' => $request->get('name')
        ]);
        return redirect()->route('admin.roles.index')->with(['success' => 'Role has been updated successfully']);
    }

    public function destroy(Role $role): RedirectResponse
    {
        $role->delete();
        return redirect()->route('admin.roles.index')->with(['success' => 'Role has been deleted successfully']);
    }
}
