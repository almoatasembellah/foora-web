<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    public function index()
    {
        return view('venue.index');
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show()
    {
        return view('venue.show-details');
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
