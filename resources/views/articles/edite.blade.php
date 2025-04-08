@extends('layout')

@section('content')
    <h1>Edite article</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
    <form style="display: flex; flex-direction: column; gap : 15px">
        <div style="display: flex; flex-direction: column; gap : 10px">
            <label for="">Name :</label>
            <input type="text">
        </div>
        <div style="display: flex; flex-direction: column; gap : 10px">
            <label for="">Description :</label>
            <input type="text">
        </div>
            <input type="submit" value="Edite Article">
        </form>
@endsection