<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use http\Env\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }
}
