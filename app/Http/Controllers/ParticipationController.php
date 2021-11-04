<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Event;
use App\Models\Participation;


use Illuminate\Support\Facades\Auth;

class ParticipationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auth=Auth::user()->team;
        $players=Player::where('player_team','=',$auth)
                        ->where('player_position','=','Athlete')
                        ->get();
        $events=Event::all();
          

            $res=Participation::join('events','participations.event_id','=','events.event_id')
            
            ->join('players','participations.player_id','=','players.player_id') 
            ->get(); 

         //     echo"<pre>";
           //  print_r($res);
        return  view('players.participation', compact('players','events','res'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $participation=new Participation;

            $participation->event_id=$request->event_id;
            $participation->player_id=$request->player_id;
            $participation->save();

            return redirect('/participations');
         
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
