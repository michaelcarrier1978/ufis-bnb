@extends('layouts.default')
    @section('content')
        <div class="property col">
        @foreach ($property as $properties)
        <div class="title text-center">
            {{$properties->title}}
        </div>
        
            @foreach ($properties->type as $propType)
                <div class="row">
                    <div class="col-3">
                        <h2>Property Type:</h2>
                    </div>
                    <div class="col-3">
                        <div class="type">
                            <h2>
                                {{ucFirst($propType->name)}}                            
                            </h2>
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach

        <div class="row">
            <div class="col">
                <h2>Reviews</h2>    
            
                @foreach ($review as $reviews)
                <div class="row">
                    <div class="col-2">
                        <div class="rating">
                            <p>{{$reviews->rating}} out of 5</p>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="comment">
                            <p>{{$reviews->comment}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @stop