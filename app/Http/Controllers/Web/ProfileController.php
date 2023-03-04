<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('web.profile.edit');
    }

    public function show()
    {
        $user = Auth::user();
        return view('web.profile.show',compact('user'));
    }
}
