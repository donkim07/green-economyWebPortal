<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WasteData;

class VisualizationController extends Controller
{
    public function index()
    {
        $wasteData = WasteData::all();
        return view('pages.visualization', compact('wasteData'));
    }
}
