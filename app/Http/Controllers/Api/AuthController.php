<?php

namespace App\Http\Controllers\Api;

use App\Constants\Roles;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UploadImageRequest;
use App\Http\Resources\Api\UserResource;
use App\Http\Traits\HandleApi;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use HandleApi;
    public function register(RegisterRequest $request): JsonResponse

    {

        $input = $request->validated();

        $input['password'] = Hash::make($input['password']);
        $input['image'] = 'user.png';

        $input['role_id'] = Roles::PLAYER;

        $user = User::create($input);

        $data['token'] =  $user->createToken('FooraGo')->plainTextToken;

        $data['name'] =  $user->name;



        return $this->sendResponse($data, 'You register successfully.');

    }

    public function login(LoginRequest $request): JsonResponse

    {

        if(Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')])){

            $user = Auth::user();

            $data['token'] =  $user?->createToken('FooraGo')->plainTextToken;

            $data['name'] =  $user?->name;



            return $this->sendResponse($data, 'You login successfully.');

        }

        return $this->sendError('Unauthorized',['This email or password is wrong.'],403);
    }

    public function profile(Request $request): JsonResponse
    {

        return $this->sendResponse(UserResource::make($request->user()), 'Profile is fetched successfully.');

    }

    public function logout(Request $request): JsonResponse
    {
        $request->user()->tokens()->delete();
        return $this->sendResponse([], 'You logout Successfully');
    }

    public function uploadProfileImage(UploadImageRequest $request): JsonResponse
    {
        $imagePath = $request->file('profile_image')?->store('users', 'public');

        $request->user()->update([
            'image' => $imagePath
        ]);
        return $this->sendResponse([], 'Profile is changed Successfully');

    }

}
