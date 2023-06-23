<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\AddHoursRequest;
use App\Http\Requests\Api\Auth\UploadImageRequest;
use App\Http\Requests\Api\Stadium\StadiumRequest;
use App\Http\Requests\VenueImageRequest;
use App\Http\Resources\StadiumResource;
use App\Http\Traits\HandleApi;
use App\Models\Stadium;
use App\Models\StadiumWorkingHour;
use Illuminate\Http\Request;

class VenueController extends Controller

{
    use HandleApi;

    public function getStadium(Request $request)
    {
        $stadium = Stadium::where('owner_id', $request->user()->id)->firstOrFail();
        return self::sendResponse(StadiumResource::make($stadium) , 'Stadium is fetched');
    }
    public function updateStadium(StadiumRequest $request)
    {
        $stadium = Stadium::where('owner_id', $request->user()->id)->firstOrFail();
        $data = $request->validated();
        $stadium->update($data);
        return self::sendResponse([] , 'Stadium is updated successfully');
    }

    public function getStadiumHours($stadiumId)
    {
        return self::sendResponse(StadiumWorkingHour::where('stadium_id', $stadiumId)->get() , 'Hours fetched');
    }

    public function addStadiumHours(AddHoursRequest $request)
    {
        StadiumWorkingHour::create($request->validated());
        return self::sendResponse([] , 'Hours Added');
    }

    public function deleteStadiumHours($hourId)
    {
        $hour = StadiumWorkingHour::where('id' , $hourId)->firstOrFail();
        $hour->delete();
        return self::sendResponse([] , 'Stadium is deleted successfully');
    }

    public function uploadStadiumImage(VenueImageRequest $request)
    {
        $stadium = Stadium::where('owner_id', $request->user()->id)->firstOrFail();
        $data = $request->validated();
        if ($request->has('image')){
            $imagePath = $request->file('image')->store('stadium-images', 'public');
            $data['image'] = $imagePath;
        }
        $stadium->update($data);
        return self::sendResponse([] , 'Stadium is updated successfully');
    }
}
