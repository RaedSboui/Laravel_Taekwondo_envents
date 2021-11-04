<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Event;
use App\Service\PlayerService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PlayerController extends Controller
{
   
    public function index()
    {
      
        $players=Player::all();
        return  view('players.index', compact('players'));
    }

  
    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
        $playerService = new PlayerService();
        $players = $playerService->store($request);
        //session()->flash('message','événement ajouté avec success.!');
        return redirect('/players'); 
    }



  
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    public function delete($Player)
    {
        $playerService = new PlayerService();
        $players = $playerService->destroy($Player);
        session()->flash('message','événement supprimé avec success.');
        return redirect()->route('players.index');    
    }
}
