<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stakeholder;

class StakeholdersController extends Controller
{
    public function index()
    {
        $stakeholders = Stakeholder::all();
        return view('pages.stakeholders', compact('stakeholders'));
    }
}
