
@extends('layouts.master')

@section('content')

    <h2>Prisijungimas</h2>

    <form method="POST" action="/login">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Elektroninis paštas:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Slaptažodis:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="registerbtn">Prisijungti</button>
        </div>
        @include('partials.formerrors')
    </form>

@endsection
