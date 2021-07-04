<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class PropertyController extends Controller
{
    public function index() {
        $properties = Property::all();
        return view('welcome')->with('properties', $properties);
    }
}
