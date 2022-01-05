<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Review;
class ReviewsController extends Controller
{
     public function store(Game $game)
         {
             $this->validate(request(), [
                 'body' => 'required|min:3'
             ]);

             $game->addReview(request('body'), auth()->id());

             return back();
         }
}
