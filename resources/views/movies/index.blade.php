@extends('layouts/app')

@section('content')
    <h1>Nos films</h1>
    <a href="/films/creer">Ajouter un film</a>

    <div>
        @foreach ($movies as $movie)
            <div>
                <a href="/films/{{$movie->id}}"><h2> {{ $movie->title }} </h2></a>
                <ul>
                    <li>Synopsis : {{ $movie->synopsys }} </li>
                    <li>Durée : {{ $movie->duration }}min </li>
                    <li>Lien Bande-annonce : {{ $movie->youtube }} </li>
                    <li>Date de sortie : {{ $movie->released_at }} </li>
                </ul>
            </div>
        @endforeach
    </div>
@endsection