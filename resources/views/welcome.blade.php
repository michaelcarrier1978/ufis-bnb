@extends('layouts.default')
    @section('content')
    <div class="col">
    <div class="full-height">
            <div class="content">
                <div class="title m-b-md">
                    Welcome to UFIS-BNB!
                </div>

                <div class="filter">
                    <h2>Filter properties</h2>
                    <a href="#" data-filter="all" class="btn">All</a>
                    @foreach ($types as $type)
                    <a href="#" data-filter="type-{{$type->id}}" class="btn">{{ucFirst($type->name)}}</a>
                    @endforeach
                </div>

                <div class="sort">
                    <select class="rating-sort">
                        <option value="default">Sort by rating</option>
                        <option value="highest">Highes rated</option>
                        <option value="lowest">Lowest rated</option>
                    </select>
                </div>

                <div class="properties">
                    @foreach($properties as $property)
                    <div class="property type-{{$property->type_id}}">
                        <div class="links">                    
                            <a href="{{$property->property_id}}">{{ $property->title }}</a>                    
                        </div>
                        <?php 
                            $rating = 0; 
                            $ratingCount = 0;
                        ?>
                        @foreach ($property->review as $reviews)
                        <?php                         
                            $rating+= $reviews->rating; 
                            $ratingCount++;
                        ?>
                        @endforeach
                        <?php 
                            $avgRating = $rating/$ratingCount;
                        ?>
                        @if ($rating > 1)
                            <div class="avgRating rating-<?php echo $avgRating ?>">Average Rating <?php echo $avgRating; ?></div>
                        @else
                            <div class="avgRating">No ratings</div>
                        @endif

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        let btns = document.querySelectorAll(".btn");
        let properties = document.querySelectorAll(".property");

        for (let i = 0; i < btns.length; i++) {

            btns[i].addEventListener('click', (e) => {
                e.preventDefault()
                
                let filter = e.target.dataset.filter;

                properties.forEach((property) => {
                    if (filter === "all") {
                        property.style.display = "block";
                    } else {
                        if (property.classList.contains(filter)) {
                            property.style.display = "block";
                        } else {
                            property.style.display = "none";
                        }   
                    }
                })
                
            });
        };

        $('.rating-sort').change(function() {
            var selected_value = $(".rating-sort :selected").val();
            if (selected_value === 'highest') {
                highestRatingSort();
            }
            if (selected_value === 'lowest') {
                lowestRatingSort();
            }
        });

        function highestRatingSort() {
            $('.property').sort(function(a, b) {
            if (a.textContent > b.textContent) {
                return -1;
            } else {
                return 1;
            }
            }).appendTo('.properties');
        }

        function lowestRatingSort() {
            $('.property').sort(function(a, b) {
            if (a.textContent < b.textContent) {
                return -1;
            } else {
                return 1;
            }
            }).appendTo('.properties');
        }
    </script>

@stop