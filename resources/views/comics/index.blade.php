@extends('layouts.app')
@section('main')
    <h2>
        Elenco Fumetti
    </h2>
    <ul>
        @foreach ($comics as $comic)
            <li>
                {{ $comic['title'] }}
            </li>
        @endforeach
    </ul>
@endsection
