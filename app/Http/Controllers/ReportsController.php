<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportsController extends Controller
{
    public function index()
    {
        $reports = Report::all();
        return view('pages.reports', compact('reports'));
    }
}
