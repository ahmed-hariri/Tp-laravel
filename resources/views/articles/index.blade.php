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
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            @if (!isset($id) || $article['id'] == $id)
                <tr style="text-align: center">
                    <td>{{ $article['id'] }}</td>
                    <td>
                        <a href="{{ route('articls', ['id' => $article['id']]) }}">
                            {{ $article['name'] }}
                        </a>
                    </td>
                    <td>{{ $article['description'] }}</td>
                    <td style="display: flex; gap: 10px">
                        <a href="">Modify</a>
                        <a href="{{ route('remove-article', ['id' => $article['id']]) }}">Delete</a>
                    </td>
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>
    <a href="{{route('create')}}">
        Create Article
    </a>
@endsection
