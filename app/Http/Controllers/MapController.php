<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class MapController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        return view('pages.map', compact('locations'));
    }
}
