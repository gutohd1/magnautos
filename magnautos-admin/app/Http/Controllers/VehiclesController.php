<?php

namespace App\Http\Controllers;

use App\Models\Vehicles;
use Illuminate\Http\Request;

class VehiclesController extends Controller
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
     * Show vehicles.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $vehicles = Vehicles::all();
        return view('vehicles', compact('vehicles'));
    }

    /**
     * Show new vehicle form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function new()
    {
        return view('new-vehicle');
    }

    /**
     * Store a newly created vehicle in storage.
     */
    public function store(Request $request)
    {
        dd($request);
    }
}
