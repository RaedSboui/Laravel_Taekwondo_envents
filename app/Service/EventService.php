<?php

namespace App\Service;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\DB;


class EventService
{ 
    public function store(Request $request)
    {

        $request->validate([
            'event_name'=>'required|min:2',
            'event_type'=>'required',
            'event_cat'=>'required',
            'event_sub_cat'=>'required',
            'event_start'=>'required',
            'event_end'=>'required',
            'event_register_start'=>'required',
            'event_register_end'=>'required',
        
            
        ]);  

        $getcatReq = $request->event_cat;
        $cats = implode(',', $getcatReq);

        $getsubcatReq = $request->event_sub_cat;
        $subcats = implode(',', $getsubcatReq);

        $Event = new Event ;
        $Event->event_name = $request->event_name ;
        $Event->event_type = $request->event_type ;
        $Event->event_start = $request->event_start ;
        $Event->event_end = $request->event_end ;
        $Event->event_register_start = $request->event_register_start ;
        $Event->event_register_end = $request->event_register_end ;

        $Event->event_cat=$cats;
        $Event->event_sub_cat=$subcats;

        $Event->save();

        
        return $Event->get();
    } 

     

    public function destroy($Event) 
    {
        DB::table('events')
           ->where('event_id', $Event)
           ->delete();
       // $Event->delete();   
       // return $Event::get(); 
    }
 

}