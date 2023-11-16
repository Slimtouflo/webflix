@extends('layouts/app')

@section('content')
    <h1>A propos</h1>

    <h3> {{ $title }} </h3>

    <ul>
    @foreach ($team as $member)
        <li>
            <a href="/a-propos/{{ $member['name']}}">
                <img src="{{ $member['image'] }}" alt="{{ $member['image'] }}">
                {{ $member['name'] }}
                {{ $member['job'] }}
            </a>
        </li>
    @endforeach
    </ul>
@endsection