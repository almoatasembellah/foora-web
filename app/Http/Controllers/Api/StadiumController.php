<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\StadiumResource;
use App\Http\Traits\HandleApi;
use App\Models\Stadium;
use Illuminate\Http\Request;

class StadiumController extends Controller
{
    use HandleApi;

    public function searchStadiums(Request $request)
    {
        $stadiums = Stadium::where('city_id' , $request->get('city_id'))
            ->where(function ($query) use ($request) {
                if ($request->get('area_id')){
                    return $query->where('area_id' , $request->get('area_id'));
                }
                return $query;
            })->get();
        return $this->sendResponse(StadiumResource::collection($stadiums) , 'Stadium list is fetched successfully');
    }
}
