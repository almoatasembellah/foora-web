<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StadiumRequest;
use App\Models\Area;
use App\Models\City;
use App\Models\Stadium;
use Illuminate\Http\Request;

class StadiumController extends Controller
{
    public function index()
    {
        $stadiums = Stadium::latest()->paginate(10);


        return view('admin.pages.stadiums.index' , compact('stadiums' ));
    }

    public function create()
    {
        $cities = City::all();
        $areas = Area::all();
        return view('admin.pages.stadiums.create' , compact('cities' , 'areas'));
    }
    public function store(StadiumRequest $request)
    {
        Stadium::create($request->validated());
        return redirect()->route('admin.stadiums.index')->with(['success'=>'Stadium created successfully']);
    }

    public function edit(Stadium $stadium)
    {
        $cities = City::all();
        $areas = Area::all();
        return view('admin.pages.stadiums.edit' , compact('stadium','cities' , 'areas'));
    }

    public function update(StadiumRequest $request, Stadium $stadium)
    {
        $stadium->update($request->validated());
        return redirect()->route('admin.stadiums.index')->with(['success'=>'Stadium updated successfully']);
    }

    public function destroy(Stadium $stadium)
    {
        $stadium->delete();
        return redirect()->route('admin.stadiums.index')->with(['success'=>'Stadium deleted successfully']);
    }
}
