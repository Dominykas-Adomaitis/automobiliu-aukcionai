<?php
use Carbon\Carbon;
?>
@extends('layouts.master')

@section('content')
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
                    <span>{{$game->price}} €</span>
                </div>
                <!-- Trigger/Open The Modal -->
                <button class="btn btn-primary" id="myBtn">Atlikti statymą</button>
                <div id="myModal" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <form action="/bid/{{ $game->id }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="priceid" class="col-sm-3 col-form-label">Statymo suma</label>
                            <div class="col-sm-4">
                                <input type="number" min='{{$game->price}}' name="price" class="form-control" id="bidid" placeholder="" required
                                       value="{{ $game->price }}">
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-3 col-sm-9">
                                    <button type="submit" class="btn btn-primary">Pastatyti</button>
                                </div>
                            </div>
                        </div>
                            @include('partials.formerrors')
                        </form>
                    </div>
                </div>

                <script>
                    // Get the modal
                    var modal = document.getElementById("myModal");

                    // Get the button that opens the modal
                    var btn = document.getElementById("myBtn");

                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

                    // When the user clicks the button, open the modal
                    btn.onclick = function() {
                        modal.style.display = "block";
                    }

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() {
                        modal.style.display = "none";
                    }

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                </script>
            </div>
        </div>


@endsection


