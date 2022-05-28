@extends ('layouts.app')
@section('title', $car->title)
@section ('content')
  <h1>{{$car->title}}</h1>
  <h2>{{$car->producer}}</h2>
  <p>{{$car->number_of_doors}}</p>

@endsection 