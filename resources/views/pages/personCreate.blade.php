@extends('layouts.main-layout')

@section('content')

    <h1>
        Create new person
    </h1>
    
    <form method="POST" action="{{ route('person.store') }}">
        @csrf

        <label for="firstName">First Name: </label>
        <input type="text" name="firstName">
        <br>
        <label for="lastName">Last Name: </label>
        <input type="text" name="lastName">
        <br>
        <label for="dateOfBirth">Date of Birth: </label>
        <input type="date" name="dateOfBirth">
        <br>
        <label for="height">Height: </label>
        <input type="number" name="height">
        <br>
        <input type="submit" value="Create">
    </form>

@endsection