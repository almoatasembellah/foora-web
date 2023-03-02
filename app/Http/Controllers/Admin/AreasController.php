<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateAreasRequest;
use App\Models\Area;
use App\Models\City;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AreasController extends Controller
{
    public function index()
    {
        $areas = Area::with('city')->orderBy('id' , 'desc')->paginate(10);
        $cities = City::all();
        return view('admin.pages.areas.index' , compact('areas' , 'cities'));
    }


    public function store(Request $request)
    {
    }



    public function update(UpdateAreasRequest $request, Area $area)
    {
        $area->update($request->validated());
        return redirect()->route('admin.areas.index')->with(['success' => 'Area has been updated successfully']);
    }

    public function destroy(Area $area): RedirectResponse
    {
        $area->delete();
        return redirect()->route('admin.areas.index')->with(['success' => 'Area has been deleted successfully']);
    }
}
