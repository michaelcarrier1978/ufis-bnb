@foreach ($property as $properties)
    {{$properties->title}}
    {{$properties->type}}
@endforeach

@foreach ($review as $reviews)
    {{$reviews->comment}}
    {{$reviews->rating}}
@endforeach