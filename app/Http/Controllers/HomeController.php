<?php

namespace App\Http\Controllers;
use App\Models\Image;
use App\Models\Station;

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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $images = Image::orderBy('id', 'DESC')->get();
        $stations = Station::get()->count();
        $stationlate = Station::latest()->get();
        return view('dashboard', compact('images','stations','stationlate'));
    }
}
