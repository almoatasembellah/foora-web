<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function index()
    {
        $cities = City::latest()->paginate(10);
        return view('admin.pages.cities.index' , compact('cities'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

       City::create([
            'name' => $request->get('name')
        ]);
        return redirect()->route('admin.cities.index')->with(['success' => 'City has been added successfully']);
    }



    public function update(Request $request, City $city)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $city->update([
            'name' => $request->get('name')
        ]);
        return redirect()->route('admin.cities.index')->with(['success' => 'City has been updated successfully']);
    }

    public function destroy(City $city): RedirectResponse
    {
        $city->delete();
        return redirect()->route('admin.cities.index')->with(['success' => 'City has been deleted successfully']);
    }
}
