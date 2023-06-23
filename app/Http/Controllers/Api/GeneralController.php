<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\CityResource;
use App\Http\Resources\Api\UserResource;
use App\Http\Resources\LeaderBoardResource;
use App\Http\Traits\HandleApi;
use App\Models\Area;
use App\Models\City;
use App\Models\PlayerRate;
use App\Models\User;
use App\Service\PlayerRateService;
use Illuminate\Support\Facades\DB;


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

    public function getLeaderBoard()
    {
        $users = User::orderBy('overall' , 'DESC')->take(10)->get();

        return $this->sendResponse(LeaderBoardResource::collection($users) , 'top 10 players are fetched');
    }
}
