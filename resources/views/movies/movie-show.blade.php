@extends('layouts.app')

@section('content')
    <a href="/films" class="text-gray-500">Retour aux films</a>
    <div class="flex">
        <div class="w-1/2">
            <img class="w-32" src="{{ $movie->cover }}" alt="{{ $movie->title }}">
        </div>
        <div class="w-1/2">
            <h1>{{ $movie->title }}</h1>
            <p>{{ $movie->synopsys }}</p>
            <p>Durée: {{ $movie->duration }}</p>
            @if ($movie->released_at)
                <p>Sortie: {{ $movie->released_at }}</p>
            @endif
            @if ($movie->category_id)
                <p>Catégorie: {{ $movie->category_id }}</p>
            @endif
        </div>
    </div>
@endsection
