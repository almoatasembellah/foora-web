<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class   UserController extends Controller
{
    public function getProfile()
    {
        $user = Auth::user();
        return view('web.profile.user-profile' , compact('user'));
    }
}
