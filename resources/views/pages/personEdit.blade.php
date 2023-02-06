@extends('layouts.main-layout')

@section('content')

    <h1>
        Edit person
    </h1>
    
    <form method="POST" action="{{ route('person.update', $person) }}">
        @csrf

        <label for="firstName">First Name: </label>
        <input type="text" name="firstName" value={{ $person -> firstName }}>
        <br>
        <label for="lastName">Last Name: </label>
        <input type="text" name="lastName" value={{ $person -> lastName }}>
        <br>
        <label for="dateOfBirth">Date of Birth: </label>
        <input type="date" name="dateOfBirth" value={{ $person -> dateOfBirth }}>
        <br>
        <label for="height">Height: </label>
        <input type="number" name="height" value={{ $person -> height }}>
        <br>
        <input type="submit" value="Update">
    </form>
    
@endsection