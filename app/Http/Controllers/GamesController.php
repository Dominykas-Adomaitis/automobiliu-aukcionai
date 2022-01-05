<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GamesController extends Controller
{
   public function index()
   {
       $games = Game::all();
       return view('games.index', ['games' => $games]);
   }

   public function show($id)
   {
       $game = Game::find($id);
       return view('games.show', ['game' => $game]);
   }

   public function showmylist()
   {
        $games = Game::all();
        return view('games.showmylist', ['games' => $games]);
   }

   public function approval()
   {
       $games = Game::all();
       return view('admin.approval', ['games' => $games]);
   }

    public function approve($id)
   {
        $game = Game::find($id);
        $game->admin_approval = 1;
        $game->save();
        return redirect()->to('approval');
   }

    public function create()
    {
        return view('games.create');
    }

    public function edit($id)
    {
        $game = Game::find($id);
        return view('games.edit', ['game' => $game]);
    }

     public function update(Request $request, $id)
        {
            $this->validate(request(), [
                   'brand' => 'required',
                   'model' => 'required',
                   'power' => 'required',
                   'capacity' => 'required',
                   'fuel' => 'required',
                   'gas' => 'required',
                   'gearbox' => 'required',
                   'wheels' => 'required',
                   'body' => 'required',
                   'year' => 'required',
                   'month' => 'required',
                   'runkm' => 'required',
                   'country' => 'required',
                   'vin' => 'required',
                   'inspection' => 'required',
                   'color' => 'required',
                   'city' => 'required',
                   //'image' => 'required',
                   'description' => 'required',
                   'time' => 'required',
                   'price' => 'required',
              ]);

            $game = Game::find($id);
            $game->brand = $request->input('brand');
            $game->model = $request->input('model');
            $game->power = $request->input('power');
            $game->capacity = $request->input('capacity');
            $game->fuel = $request->input('fuel');
            $game->gas = $request->input('gas');
            $game->gearbox = $request->input('gearbox');
            $game->wheels = $request->input('wheels');
            $game->body = $request->input('body');
            $game->year = $request->input('year');
            $game->month = $request->input('month');
            $game->runkm = $request->input('runkm');
            $game->country = $request->input('country');
            $game->vin = $request->input('vin');
            $game->inspection = $request->input('inspection');
            $game->color = $request->input('color');
            $game->city = $request->input('city');
            //$game->image = $request->input('image');
            $game->description = $request->input('description');
            $game->time = $request->input('time');
            $game->price = $request->input('price');
            $game->save();

          return redirect()->to('mylist');

        }


    public function destroy($id)
    {
        $game = Game::find($id);
        $game->delete();
        echo "Record deleted successfully.";
        echo 'Click Here to go back.';
        return view('games.index', ['games' => $games]);
    }

    public function search(Request $request){
        $search = $request->input('search');

        $games = Game::query()
            ->where('brand', 'LIKE', "%{$search}%")
            ->orWhere('model', 'LIKE', "%{$search}%")
            ->orWhere('fuel', 'LIKE', "%{$search}%")
            ->get();

        return view('games.index', compact('games'));
    }

   public function store()
       {
            $this->validate(request(), [
                    'brand' => 'required',
                    'model' => 'required',
                    'power' => 'required',
                    'capacity' => 'required',
                    'fuel' => 'required',
                    'gas' => 'required',
                    'gearbox' => 'required',
                    'wheels' => 'required',
                    'body' => 'required',
                    'year' => 'required',
                    'month' => 'required',
                    'runkm' => 'required',
                    'country' => 'required',
                    'vin' => 'required|unique:games',
                    'inspection' => 'required',
                    'color' => 'required',
                    'city' => 'required',
                    'image' => 'required',
                    'description' => 'required',
                    'time' => 'required',
                    'price' => 'required',
               ]);
           $game = new Game;
           $game->brand = request('brand');
           $game->model = request('model');
           $game->power = request('power');
           $game->capacity = request('capacity');
           $game->fuel = request('fuel');
           $game->gas = request('gas');
           $game->gearbox = request('gearbox');
           $game->wheels = request('wheels');
           $game->body = request('body');
           $game->year = request('year');
           $game->month = request('month');
           $game->runkm = request('runkm');
           $game->country = request('country');
           $game->vin = request('vin');
           $game->inspection = request('inspection');
           $game->color = request('color');
           $game->city = request('city');
           $game->image = request()->file('image')->store('public/images');
           $game->description = request('description');
           $game->time = request('time');
           $game->price = request('price');
           $game->user_id = auth()->id();
           $game->admin_approval = 0;
           $game->save();

            return redirect()->to('/games');
       }
}



