@extends('layout')

@section('content')
    <h1>Articls</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
    @foreach ($articles as $article)
    <div>
        <h2>{{ $article['name'] }}</h2>
        <p>{{ $article['description'] }}</p>
    </div>
    <h1>{{$id}}</h1>
@endforeach
@endsection
