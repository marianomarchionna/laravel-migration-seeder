<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class TripController extends Controller
{
    public function listMovies() {
        $trips = Trip::all();
        return view('home', compact('trips'));
    }
}
