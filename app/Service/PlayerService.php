<?php

namespace App\Service;

use Illuminate\Http\Request;
use App\Models\Player;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class PlayerService
{ 
    public function store(Request $request)
    {

        $request->validate([
        
            'player_position'=>'required',
            'player_nation'=>'required',
            'player_team'=>'required',
            'player_name'=>'required|min:2',
            'player_gender'=>'required',
            'player_date_birth'=>'required',
        
            
        ]);  

        $Player = new Player ;
        $Player->player_position = $request->player_position ;
        $Player->player_nation = $request->player_nation ;
        $Player->player_team =  Auth::user()->team ;
        $Player->player_name = $request->player_name ;
        $Player->player_gender = $request->player_gender ;
        $Player->player_date_birth = $request->player_date_birth ;
        $Player->save();

        
        return $Player->get();
    } 

     

    public function destroy($Player) 
    {
        DB::table('players')
           ->where('player_id', $Player)
           ->delete();
       // $Event->delete();   
       // return $Event::get(); 
    }
 

}