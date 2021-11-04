@extends('layouts.userlayout')
@section('content')
    <div class="card card-custom">
        <div class="card-body p-0">
            <form class="form" action="{{route('participations.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Players:</label>
                            <select name="player_id"  id="player_id"  class="form-control " role="listbox" >
                                <option  selected>Select player</option>
                                @foreach($players as $player)          
                                    <option value="{{ $player->player_id }}" >{{$player->player_name}}</option>
                                @endforeach
                            </select>
                            <span class="form-text text-muted">Please enter player position</span> 
                        </div>
                        <div class="col-lg-6">
                            <label>Events:</label>
                            <select name="event_id"  id="event_id"  class="form-control " role="listbox" > 
                                <option  selected>Select event</option> 
                                @foreach($events as $event)         
                                    <option value="{{ $event->event_id }}" >{{ $event->event_name }}</option>
                                @endforeach
                            </select>
                            <span class="form-text text-muted">Please enter player nation</span> 
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row" style="text-align: center;">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <div class="card card-custom mt-6">
        <div class="card-body p-0">
            <!--begin: Datatable-->
            <table class="table" >
                <thead class="thead-light">
                    <tr>
                        <th title="Field #1">Player</th>
                        <th title="Field #2">Event </th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($res as $res)
                        <tr>
                            <td >{{$res->player_name}}</td>
                            <td >{{$res->event_name}}</td>
                        </tr>
                   @endforeach                          
                </tbody>
            </table>
            <!--end: Datatable-->
        </div>
    </div>
               
@endsection
