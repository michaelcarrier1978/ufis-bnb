<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
Use App\Review;

class PropertyController extends Controller
{
    public function index() {
        $properties = Property::all();
        return view('welcome')->with('properties', $properties);
    }

    public function show($id)
    {
        $review = Review::where('property_id', $id)->get();
        $property = Property::where('property_id', $id)->get();
        
        return view('show', compact('review', 'property'));
    }
}
