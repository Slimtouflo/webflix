@extends('layouts/app')

@section('content')
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach

    <form action="" method="POST">
        @csrf
        Titre : <input type="text" name="title" value="{{ old('title') }}"><br>
        Synopsis : <input type="text" name="synopsys" value="{{ old('synopsys') }}"><br>
        Durée : <input type="text" name="duration" value="{{ old('duration') }}"><br>
        Bande-annonce : <input type="text" name="youtube" value="{{ old('youtube') }}"><br>
        Affiche : <input type="text" name="cover" value="{{ old('cover') }}"><br>
        Date de sortie : <input type="date" name="released_at" value="{{ old('released_at') }}"><br>
        <button>Sauvegarder</button>
    </form>
@endsection