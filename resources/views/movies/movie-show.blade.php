@extends('layouts/app')

@section('content')
<div>
        <div>
            <h1> {{ $movie->title }} </h1>
            <img src="{{$movie->cover}}" alt="">
            <ul>
                <li>Synopsis : {{ $movie->synopsys }} </li>
                <li>Durée : {{ $movie->duration }}min </li>
                <li>Lien Bande-annonce : {{ $movie->youtube }} </li>
                <li>Date de sortie : {{ $movie->released_at }} </li>
                <li>Catégorie : {{ $movie->category_id }}</li>
            </ul>
        </div>
    
</div>
@endsection