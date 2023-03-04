<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UploadImageRequest;
use App\Http\Resources\Api\UserResource;
use App\Http\Traits\HandleApi;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    use HandleApi;

    public function show(Request $request): JsonResponse
    {

        return $this->sendResponse(UserResource::make($request->user()), 'Profile is fetched successfully.');

    }

    public function uploadProfileImage(UploadImageRequest $request): JsonResponse
    {
        $imagePath = $request->file('profile_image')?->store('users', 'public');

        $request->user()->update([
            'image' => $imagePath
        ]);
        return $this->sendResponse([], 'Profile Image is changed Successfully');

    }

    public function deleteProfileImage(Request $request)
    {
        $request->user()->update([
            'image' => 'user.png'
        ]);

        return $this->sendResponse([], 'Profile Image is deleted Successfully');
    }
}
