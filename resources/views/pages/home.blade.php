@extends('layouts.main-layout')


@section('content')

    <h1>
        People
    </h1>

    <h2>
        <a href="{{ route('person.create') }}">Create new person</a>
    </h2>

    <ul>
        @foreach ($people as $person)

            <li>
                <a href="{{ route('person.show', $person) }}">{{ $person -> firstName }} {{ $person -> lastName }}</a> - <a href="{{ route('person.delete', $person) }}">delete</a> - <a href="{{ route('person.edit', $person) }}">Edit</a>
            </li>
        
        @endforeach
    </ul>
    
    
@endsection