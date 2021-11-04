<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Participation;
use App\Service\EventService;
use Illuminate\Support\Facades\DB;
use App\Models\Subcategory;
use Carbon\Carbon;


class EventController extends Controller
{
    
    public function index()
    {
        $events=Event::all();
        
        return  view('events.index', compact('events'));
    }

   
   
    public function create()
    {
        $subcat_kirogy=Subcategory::where('subcategory_type','=','Kirogy')->toJson();
        $subcat_poomsae=Subcategory::where('subcategory_type','=','Poomsae')->toJson();
        return view('events.create',compact('subcat_kirogy','subcat_poomsae'));

    }

   
    public function store(Request $request)
    {
        $eventService = new EventService();
        $events = $eventService->store($request);
        //session()->flash('message','événement ajouté avec success.!');
        return redirect()->route('admin.home');
    }

    public function eventShow($id)
    {
        $events=Event::where('event_id','=',$id)->first();
        $list=Participation::leftjoin('events','participations.event_id','=','events.event_id')
                                ->leftjoin('players','participations.player_id','=','players.player_id') 
                                ->where('participations.event_id','=',$id) 
                                ->get();

         //      echo"<pre>";
       //     print_r($events);
        return view('events.show',compact('events','list'));
    }


    public function eventEdit($id)
    {   
        $events=Event::where('event_id','=',$id);
        return view('events.edit',compact('events'));
    }

  
    public function update(Request $request, $id)
    {
        //
    }

   
    public function eventDelete($Event)
    {
        $eventService = new EventService();
        $events = $eventService->destroy($Event);
        session()->flash('message','événement supprimé avec success.');
        return redirect()->route('admin.home');    
    }
}
