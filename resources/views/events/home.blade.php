<div class="row col-xl-12">
    <div class="col-xl-4">
        <!--begin::Stats Widget 13-->
        <a href="#" class="card card-custom bg-danger bg-hover-state-danger card-stretch gutter-b">
            <!--begin::Body-->
            <div class="card-body"style="padding: 1.5rem 2.25rem;">
                <div class="text-inverse-danger font-weight-bolder font-size-h5 mb-2 mt-5">New Events</div>
                <div class="font-weight-bold text-inverse-danger font-size-h4">{{$event_new_nbr}}</div>
            </div>
            <!--end::Body-->
        </a>
        <!--end::Stats Widget 13-->
    </div>
    <div class="col-xl-4">
        <!--begin::Stats Widget 14-->
        <a href="#" class="card card-custom bg-primary bg-hover-state-primary card-stretch gutter-b">
            <!--begin::Body-->
            <div class="card-body"style="padding: 1.5rem 2.25rem;">
                <div class="text-inverse-primary font-weight-bolder font-size-h5 mb-2 mt-5">Poomsae events</div>
                <div class="font-weight-bold text-inverse-primary font-size-h4">{{$poomsae}}</div>
            </div>
            <!--end::Body-->
        </a>
        <!--end::Stats Widget 14-->
    </div>
    <div class="col-xl-4">
        <!--begin::Stats Widget 15-->
        <a href="#" class="card card-custom bg-success bg-hover-state-success card-stretch gutter-b">
            <!--begin::Body-->
            <div class="card-body"style="padding: 1.5rem 2.25rem;">
                <div class="text-inverse-success font-weight-bolder font-size-h5 mb-2 mt-5">Kirogy events</div>
                <div class="font-weight-bold text-inverse-success font-size-h4">{{$kirogy}}</div>
            </div>
            <!--end::Body-->
        </a>
        <!--end::Stats Widget 15-->
    </div>
</div>
                             
							 
<div class="row">
	@foreach($event_new as $new)
	    <div class="col-xl-4">
			<!--begin::Stats Widget 1-->
			<div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url(https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/shapes/abstract-4.svg)">
			   <!--begin::Body-->
				<div class="card-body">
					<a href="/eventShow/{{$new->event_id}}" class="card-title font-weight-bold text-muted text-hover-primary font-size-h5">{{$new->event_name}}</a>
					<div class="font-weight-bold text-success mt-9 mb-5">{{$new->event_start}} / {{$new->event_end}}</div>
					<p class="text-dark-75 font-weight-bolder font-size-h5 m-0">
                        Category: {{$new->event_cat}} 
						<br>
                        Division: {{$new->event_sub_cat}}
                    </p>
				</div>
				<!--end::Body-->
			</div>
			<!--end::Stats Widget 1-->
		</div>
	@endforeach
</div>


                                  
