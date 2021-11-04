@extends('layouts.layout')
@section('content')

<div class="card card-custom">
<div class="card-header">
    
    <div class="card-title col-md-12"style="justify-content: center;">
        <h2 class="card-label" style="font-size: 25px;margin-bottom:10px">{{$events->event_name}} ({{$events->event_type}})</h2>
    </div>

    <div class="row col-xl-12">
    <div class="col-xl-4"style="height:140px">
        <!--begin::Stats Widget 13-->
        <a href="#" class="card card-custom bg-danger bg-hover-state-danger card-stretch gutter-b">
            <!--begin::Body-->
            <div class="card-body" style="padding: 1.5rem 2.25rem;">
                <div class="text-inverse-danger font-weight-bolder font-size-h5 mb-2 mt-5">Event category</div>
                <div class="font-weight-bold text-inverse-danger font-size-sm">{{$events->event_cat}}</div>
            </div>
            <!--end::Body-->
        </a>
        <!--end::Stats Widget 13-->
    </div>
    <div class="col-xl-4"style="height:140px">
        <!--begin::Stats Widget 14-->
        <a href="#" class="card card-custom bg-primary bg-hover-state-primary card-stretch gutter-b">
            <!--begin::Body-->
            <div class="card-body"style="padding: 1.5rem 2.25rem;">
                <div class="text-inverse-primary font-weight-bolder font-size-h5 mb-2 mt-5">Event Division</div>
                <div class="font-weight-bold text-inverse-primary font-size-sm">{{$events->event_sub_cat}}</div>
            </div>
            <!--end::Body-->
        </a>
        <!--end::Stats Widget 14-->
    </div>
    <div class="col-xl-4"style="height:140px">
        <!--begin::Stats Widget 15-->
        <a href="#" class="card card-custom bg-success bg-hover-state-success card-stretch gutter-b">
            <!--begin::Body-->
            <div class="card-body"style="padding: 1.5rem 2.25rem;">
                <div class="text-inverse-success font-weight-bolder font-size-h5 mb-2 mt-5">Date</div>
                <div class="font-weight-bold text-inverse-success font-size-sm">{{$events->event_start}}--{{$events->event_end}}</div>
            </div>
            <!--end::Body-->
        </a>
        <!--end::Stats Widget 15-->
    </div>
</div>


   
</div>
<div class="card-body">
<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">Player name</th>
            <th scope="col">Player team</th>
            <th scope="col">Player gender</th>
        </tr>
    </thead>
    <tbody>
    @foreach($list as $play)   
        <tr>
            
            <td>{{$play->player_name}}</td>
            <td>{{$play->player_team}}</td>
            <td>
                <span class="label label-inline label-light-primary font-weight-bold">
                {{$play->player_gender}}
                </span>
            </td>
        </tr>
    @endforeach
  
    </tbody>
</table>
</div>
</div>

@endsection