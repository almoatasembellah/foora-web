<?php

namespace App\Http\Controllers\Api;

use App\Constants\Roles;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Http\Requests\UploadImageRequest;
use App\Http\Resources\Api\UserResource;
use App\Http\Traits\HandleApi;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

        return $this->sendError('Unauthorized','This email or password is wrong.',403);
    }



    public function logout(Request $request): JsonResponse
    {
        $request->user()->tokens()->delete();
        return $this->sendResponse([], 'You logout Successfully');
    }




    public function changePassword(ChangePasswordRequest $request)
    {

        #Match The Old Password
        if(!Hash::check($request->get('old_password'), auth()->user()->password)){
            return $this->sendError('Error','Old Password Doesn\'t match!',400);
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->get('new_password'))
        ]);

        return $this->sendResponse([], 'Password changed successfully!');
    }
}
