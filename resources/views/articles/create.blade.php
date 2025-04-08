@extends('layout')

@section('content')
    <h1>Create article</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
    <form style="display: flex; flex-direction: column; gap : 15px" method="post" action="{{ route('create-new') }}">
        @csrf
        <div style="display: flex; flex-direction: column; gap : 10px">
            <label for="name">Name :</label>
            <input type="text" name="name">
        </div>
        <div style="display: flex; flex-direction: column; gap : 10px">
            <label for="description">Description :</label>
            <input type="text" name="description">
        </div>
        <input type="submit" value="Create Article">
    </form>
@endsection
