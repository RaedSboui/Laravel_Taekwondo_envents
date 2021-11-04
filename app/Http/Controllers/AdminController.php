<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Player;
use App\Models\Participation;
use Illuminate\Support\Facades\DB;
use App\Models\Subcategory;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;


class AdminController extends Controller
{
    public function index()
    {
        $events=Event::all();
        $subcat_kirogy=Subcategory::where('subcategory_type','==','Kirogy')->get();
        $subcat_poomsae=Subcategory::where('subcategory_type','=','Poomsae')->get();

        $event_new=Event::whereDate('created_at', Carbon::today())
                         ->get();
        $poomsae=Event::where('event_type','=','Poomsae')
                         ->whereDate('created_at', Carbon::today())
                         ->count();
        $kirogy=Event::where('event_type','=','Kirogy')
                         ->whereDate('created_at', Carbon::today())
                         ->count();
        $event_new_nbr=Event::whereDate('created_at', Carbon::today())
                         ->count();
      
        return view('admin/home',compact('events','subcat_kirogy','subcat_poomsae','event_new_nbr','event_new','poomsae','kirogy'));
    }
}
