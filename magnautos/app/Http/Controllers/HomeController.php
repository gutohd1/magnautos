<?php

namespace App\Http\Controllers;

use App\Models\Vehicles;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicles::where('featured', 1)->get();
        return view('home', compact('vehicles'));
    }
}
