@extends('layouts.master')

@section('content')

    <h1>Registracija</h1>
    <form method="POST" action="/register">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Vardas:</label>
            <input type="text" placeholder="Įveskite vardą" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="email">Elektroninis paštas:</label>
            <input type="email" placeholder="Įveskite slaptažodį" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Slaptažodis:</label>
            <input type="password" placeholder="Įveskite slaptažodį" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Pakartokite slaptažodį:</label>
            <input type="password" placeholder="Pakartokite slaptažodį:" class="form-control" id="password_confirmation"
                   name="password_confirmation">
        </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="registerbtn">Užsiregistruoti</button>
        </div>
        @include('partials.formerrors')

        <div class="container signin">
            <p>Turite paskyrą? <a href="login">Prisijungti</a>.</p>
        </div>
    </form>

@endsection


