<?php
use Carbon\Carbon;
?>
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
                <script>
                    function startTimer(duration, display) {
                        var timer = duration, m, s;
                        setInterval(function () {

                            let d = Math.floor(timer / (3600*24));
                            let h = Math.floor(timer % (3600*24) / 3600);
                            let m = Math.floor(timer % 3600 / 60);
                            let s = Math.floor(timer % 60);

                            let dDisplay = d > 0 ? d + (d == 1 ? " dienos, " : " dienų ") : "";
                            let hDisplay = h < 10 ? "0" + h : h;
                            let mDisplay = m < 10 ? "0" + m : m;
                            let sDisplay = s < 10 ? "0" + s : s;

                            display.textContent = dDisplay + hDisplay + ":" + mDisplay + ":" + sDisplay;

                            if (--timer < 0) {
                                timer = 0;
                            }

                        }, 1000);
                    }
                    let secdiff = <?php
                        $now = Carbon::now();
                        $realnow = $now->addHour(2);
                        $timecreated = $game->created_at;
                        $timeending = $timecreated -> copy() -> addDays($game->time);

                        $secdiff =  $realnow->diffInSeconds($timeending);
                        echo $secdiff;
                        ?>

                        window.onload = function () {
                        var fiveMinutes = secdiff ,
                            display = document.querySelector('#time');
                        startTimer(fiveMinutes, display);
                    };
                </script>
                <div id="clockdiv" class="auction_time">Aukcionas baigiasi už
                    <span id="time"></span>
                </div>
                <div>
                    <span>Paskutinis statymas:</span>
                    <span> 375,00 €</span>
                </div>
                <a href="/login">Atlikti statymą</a>
            </div>
        </div>


@endsection


