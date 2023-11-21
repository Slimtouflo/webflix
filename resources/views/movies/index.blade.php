@extends('layouts/app')

@section('content')
    <div class="flex items-center gap-10 mb-6">
        <h1 class="text-3xl">Films</h1>
        <a href="/films/creer" class="px-4 py-2 text-sm bg-blue-500 hover:bg-blue-300 duration-200 text-white rounded-full shadow-sm">Créer un film</a>
    </div>

    <div class="flex flex-wrap -mx-3">
        @foreach ($movies as $movie)
            <div class="w-1/2 md:w-1/3 lg:w-1/5 group">
                <a href="/films/{{$movie->id}}" class="mx-3 block">
                    <img class="w-full h-[300px] object-cover mb-3" src="{{$movie->cover}}" alt="{{ $movie->title }}">
                    <h3 class="text-sm text-gray-600 underline group-hover:no-underline"> {{ $movie->title }} </h3>
                    <p class="text-sm mb-3">
                        @if ($movie->released_at)
                            {{$movie->released_at->diffForHumans() }} |
                            {{$movie->released_at->translatedformat('d F Y') }} |
                        @endif
                        @if ($movie->category_id)
                            {{$movie->category->name}} |
                        @endif
                        {{$movie->duration()}}
                    </p>
                </a>
            </div>
        @endforeach
    </div>
@endsection