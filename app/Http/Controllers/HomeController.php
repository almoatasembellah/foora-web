<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function changePassword()
    {
        return view('change-password');
    }

    public function updatePassword(Request $request){
        #validation
        $request->validate([
            'old_password' =>'required',
            'new_password' =>'required|confirmed',
        ]);
        #Match The old password
        if (!Hash::check($request->old_password,auth()->user()->password)){
            return back()->with("error", "Old password Doesnt Match");
        }

        #Update the new password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        return back()->with("status", "Password changed successfully!");
    }

}
