@extends('layouts/app')

@section('content')
    <h1>A propos</h1>

    <h3> {{ $title }} </h3>

    <ul>
    @foreach ($team as $member)
        <li>
            <img src="{{ $member['image'] }}" alt="{{ $member['image'] }}">
            {{ $member['name'] }}
            {{ $member['job'] }}
        </li>
    @endforeach
    </ul>
@endsection