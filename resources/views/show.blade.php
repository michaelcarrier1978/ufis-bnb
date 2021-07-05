@foreach ($property as $properties)
    {{$properties->title}}
    @foreach ($properties->type as $propType)
        {{$propType->name}}
    @endforeach
@endforeach


@foreach ($review as $reviews)
    {{$reviews->comment}}
    {{$reviews->rating}}
@endforeach