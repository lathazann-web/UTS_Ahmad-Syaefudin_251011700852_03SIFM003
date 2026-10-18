<?php

namespace App\Http\Controllers;

use App\Models\CampGear;
use Illuminate\Http\Request;

class CampGearController extends Controller
{
    public function index()
    {
        $gears = CampGear::all();
        return view('gears.index', compact('gears'));
    }

    public function show(int $id)
    {
        $gear = CampGear::findOrFail($id);
        return view('gears.show', compact('gear'));
    }
}