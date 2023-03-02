<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CityResource;
use App\Http\Traits\HandleApi;
use App\Models\Area;
use App\Models\City;


class GeneralController extends Controller
{
    use HandleApi;

    public function getALlCities()
    {
        $cities = City::all();
        return $this->sendResponse(CityResource::collection($cities) , 'ALl cities are fetched');
    }

    public function getCityAreas($city_id)
    {
        $areas = Area::where('city_id' , $city_id)->get();
        return $this->sendResponse(CityResource::collection($areas) , 'ALl areas are fetched');
    }
}
