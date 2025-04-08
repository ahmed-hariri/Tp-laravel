@extends('layout')

@section('content')
    <h1>Articls</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            @if (!$id || $article['id'] == $id)
                <tr>
                    <td>{{ $article['id'] }}</td>
                    <td>{{ $article['name'] }}</td>
                    <td>{{ $article['description'] }}</td>
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>
@endsection
