@extends('layouts.userlayout')
@section('content')

<style>
    #dropzone 
    {
        position: relative;
        border: 2px solid lightgrey;
        border-radius: 10px;
        color:#a9aac7;
        font: bold 16px/139px arial;
        height: 128px;
        margin: 22px initial;
        text-align: center;
        width: 185px;
        margin-top:0px;
        margin-left:;
        margin-bottom:25px;
    }

    #dropzone.hover 
    {
        border: 10px solid #FE5;
        color: #FE5;
    }

    #dropzone.dropped 
    {
        background: #222;
        border: 10px solid #444;
    }
    
    #dropzone div 
    {
        position: absolute;
        top: 0px;
        right: 0;
        bottom: 0;
        left: 0;
    }

    #dropzone img 
    {
        border-radius: 10px;
        vertical-align: middle;
        max-width: 95%;
        max-height: 95%;
    }

    #dropzone [type="file"] 
    {
        cursor: pointer;
        position: absolute;
        opacity: 0;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }
</style> 


    <div class="card card-custom">
        <div class="card-body p-0">
            <form class="form" action="{{route('players.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <div id="dropzone">
                            <div>Drop image Here</div>
                            <input type="file" name="player_photo"accept="image/png, application/pdf" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label>Position:</label>
                            <select name="player_position"  id="player_position"  class="form-control  @error('player_position') is-invalid @enderror" role="listbox" >           
                                <option  selected>Select position</option>
                                <option value="Coach" >Coach</option>
                                <option value="Athlete">Athlete </option>
                            </select>
                            @error('player_position')
                                <div class="invalid-feedback">
                                    {{$errors->first('player_position')}}
                                </div>
                            @enderror
                            <span class="form-text text-muted">Please enter player position</span> 
                        </div>
                        <div class="col-lg-4">
                            <label>Nation:</label>
                            <select name="player_nation"  id="player_nation"  class="form-control  @error('player_nation') is-invalid @enderror" role="listbox" >           
                                <option  selected>Select nation</option>
                                <option value="TN" >Tunisie</option>
                            </select>
                            @error('player_nation')
                                <div class="invalid-feedback">
                                    {{$errors->first('player_nation')}}
                                </div>
                            @enderror
                            <span class="form-text text-muted">Please enter player nation</span> 
                        </div>
                        <div class="col-lg-4">
                            <label>Team:</label>
                            <input type="text" class="form-control" id="player_team" name="player_team" value="{{ Auth::user()->team }}" readonly />
                            <span class="form-text text-muted">Please enter your team</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label>Complete Name:</label>
                            <input type="text" class="form-control @error('player_name') is-invalid @enderror" id="player_name" name="player_name" />
                            <span class="form-text text-muted">Please enter your name</span>
                            @error('player_name')
                                <div class="invalid-feedback">
                                    {{$errors->first('player_name')}}
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-4">
                            <label>Gender:</label>
                            <select name="player_gender"  id="player_gender"  class="form-control  @error('player_gender') is-invalid @enderror" role="listbox" >           
                                <option  selected>Select nation</option>
                                <option value="Male" >Male</option>
                                <option value="Female" >Female</option>
                            </select>
                            @error('player_gender')
                                <div class="invalid-feedback">
                                    {{$errors->first('player_gender')}}
                                </div>
                            @enderror
                            <span class="form-text text-muted">Please enter player gender</span> 
                        </div>
                        <div class="col-lg-4">
                            <label>Date of birth:</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" id="kt_datepicker_2" name="player_date_birth" readonly="readonly" placeholder="Select date">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar-check-o"></i>
                                    </span>
                                </div>
                            </div>
                            <span class="form-text text-muted">Please enter date of birth</span> 
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row"  style="text-align: center;">
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
                        <th title="Field #1">No</th>
                        <th title="Field #2">Player nation</th>
                        <th title="Field #3">Player position</th>
                        <th title="Field #4">Player name</th>
                        <th title="Field #6">Player gender</th>
                        <th title="Field #7">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($players as $Player)
                         <tr>
                            <td >{{$Player->player_id}}</td>
                            <td >{{$Player->player_nation}}</td>
                            <td >{{$Player->player_position}}</td>
                            <td >{{$Player->player_name}}</td>
                            <td >{{$Player->player_gender}}</td>
                            <td class="text-right pr-0">
                                <div class="row">
                                <!--    
                                    <button onclick="window.location.href = '{{ route('player.edit', $Player->player_id) }}';" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-2" title="Edit">
                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                    <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                                    </button> -->
                                    <form action="{{ route('player.delete', $Player->player_id) }}" method="POST" class="mx-2">                                       
                                        @csrf
                                        <button class="btn btn-icon btn-light btn-hover-primary btn-sm" title="Delete" >
                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach                          
                </tbody>
            </table>
            <!--end: Datatable-->
        </div>
    </div>
    
@endsection
