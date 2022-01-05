@extends('layouts.master')

@section('content')

        @foreach ($games as $game)
            @if( $game->admin_approval == 0)
                <div class="col-xs-6">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" src= "{{ Storage::url($game->image)  }}" alt="Card image cap">
                        <div class="card-block">
                            <h3 class="card-title"><a href="/games/{{ $game->id }}">{{ $game->brand }} {{ $game->model }}</a></h3>
                            <p class="small">Aukcioną paskelbė: {{ $game->user->name }}</p>
                            <a href="/games/{{ $game->id }}" class="btn btn-primary">Daugiau informacijos</a>
                            <a href = '/approve/{{ $game->id }}'>Patvirtinti aukcioną</a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach

@endsection
