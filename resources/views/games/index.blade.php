@extends('layouts.master')

@section('content')

    <form action="{{ route('search') }}" method="GET">
        <input type="text" name="search" required/>
        <button type="submit">Paieška</button>
    </form>

    @if($games->isNotEmpty())
        @foreach ($games as $game)
            @if( $game->admin_approval == 1)
            <div class="col-xs-6">
                <div class="card" style="width: 100%;">
                    <img class="card-img-top" src="{{ Storage::url($game->image)  }}" alt="Card image cap">
                    <div class="card-block">
                        <h3 class="card-title"><a href="/games/{{ $game->id }}">{{ $game->brand }} {{ $game->model }}</a></h3>
                        <p class="col-form-label">Metai: {{ $game->year }}</p>
                        <p class="col-form-label">Rida: {{ $game->runkm }} km</p>
                        <p class="col-form-label">Kuro tipas: {{ $game->fuel }}</p>
                        <p class="col-form-label">Pavarų dėžė: {{ $game->wheels }}</p>
                        <p class="col-form-label">Kaina: {{ $game->price }} €</p>
                        <p class="small">Aukcioną paskelbė: {{ $game->user->name }}</p>
                        <a href="/games/{{ $game->id }}" class="btn btn-primary">Daugiau informacijos</a>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    @else
        <div>
            <h2>Pagal paieškos raktažodį autombilių nerasta</h2>
        </div>
    @endif
@endsection
