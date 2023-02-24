<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;

class   UserController extends Controller
{
    public function getProfile()
    {
        $user = User::where('id',4)->first();
        return view('web.user-profile' , compact('user'));
    }
}
