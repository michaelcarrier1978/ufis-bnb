<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
Use App\Review;
use App\Type;

class PropertyController extends Controller
{
    public function index() 
    {
        $types = Type::all();
        $properties = Property::with('review')->get();
        
        return view('welcome', compact('types', 'properties'));
    }

    public function show($id)
    {
        $review = Review::where('property_id', $id)->get();
        $property = Property::where('property_id', $id)->get();
        
        return view('show', compact('review', 'property'));
    }
}
