@extends('layouts.master')

@section('content')
    <!--
    <div class="card" style="width: 270px;margin: 5px">
        <img class="card-img-top" src="{{ Storage::url($game->image)  }}" alt="Card image cap">
        <div class="card-block">
            <h3 class="card-title">{{ $game->brand }}</h3>
            <p class="card-text">{{ $game->brand }} is published by {{ $game->model }}</p>
            <p class="small">Game submitted by user {{ $game->user->name }}</p>
            <a href="/games" class="btn btn-primary">List Games</a>
        </div>
    </div>

    <hr>

    <div class="reviews">
        <h4>What Gamers Are Saying</h4>
        <ul class="list-group">
            @foreach($game->reviews as $review)
                <li class="list-group-item">{{ $review->body }}
                    <hr>
                    <small class="text-primary">posted {{$review->created_at->diffForHumans()}} by
                        user {{ $review->user->name }}</small>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="addreview">
        <div class="card-block">
            <form method="POST" action="/games/{{ $game->id }}/reviews">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="body" class="form-control" placeholder="Add a review!"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add a review!</button>
                </div>
                @include('partials.formerrors')
            </form>
        </div>
    </div>
    -->

        <img src="{{ Storage::url($game->image)  }}" alt="Automobilio nuotrauka" >
        <h1>Automobilis</h1>
        <p>{{ $game->brand }} {{ $game->model }}</p>
        <dl>
            <dt>Automobilio buvimo miestas:</dt>
            <dd><b>{{ $game->city }}</b></dd>
            <dt>Metai:</dt>
            <dd>{{ $game->year }}-{{ $game->month }}</dd>
            <dt>Tech. apžiūra iki:</dt>
            <dd>{{ $game->inspection }}</dd>
            <dt>Variklio galia:</dt>
            <dd>{{ $game->power }} KW</dd>
            <dt>Variklio tūris:</dt>
            <dd>{{ $game->capacity }} (litrai)</dd>
            <dt>Rida:</dt>
            <dd>{{ $game->runkm }} km</dd>
            <dt>Kuro tipas:</dt>
            <dd>
                {{ $game->fuel }}
            </dd>
            <dt>Pavarų dėžė:</dt>
            <dd>{{ $game->gearbox }}</dd>
            <dt>Kėbulas:</dt>
            <dd>{{ $game->body }}</dd>
            <dt>Spalva:</dt>
            <dd>{{ $game->color }}</dd>
            <dt>Varomi ratai:</dt>
            <dd>{{ $game->wheels }}</dd>
            <dt>VIN kodas:</dt>
            <dd>{{ $game->vin }}</dd>
            <dt>Kilmės šalis</dt>
            <dd>{{ $game->country }}</dd>
            <dt>Pradinė kaina</dt>
            <dd>{{ $game->price }} €</dd>
        </dl>

        <div>
            <h2 class="h5">Bendras transporto priemonės aprašymas</h2>
            <p>
                {{ $game->description }}
            </p>
        </div>

        <div class="auction_tags">
            <div class="items">
                <h2 class="h5">Iki aukciono pabaigos</h2>
                <div id="clockdiv" class="auction_time" data-until="12/17/2021 19:00:00">
                    <span class="hours">02</span><span class="sep">val.</span>
                    <span class="minutes">23</span><span class="sep">min.</span>
                    <span class="seconds">26</span><span class="sep">s.</span>
                </div>
                <div>
                    <span>Paskutinis statymas:</span>
                    <span> 375,00 €</span>
                </div>
                <a href="/login">Atlikti statymą</a>
            </div>
        </div>


@endsection


