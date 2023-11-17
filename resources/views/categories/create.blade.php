@extends('layouts/app')

@section('content')
    <form action="" method="POST">
        @csrf
        <input type="text" name="name">
        <button>Sauvegarder</button>
    </form>
@endsection