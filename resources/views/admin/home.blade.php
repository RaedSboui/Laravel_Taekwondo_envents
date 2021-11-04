@extends('layouts.layout')
@section('content')

<div class="card card-custom">
 <div class="card-header card-header-tabs-line">
  <div class="card-toolbar">
   <ul class="nav nav-tabs nav-bold nav-tabs-line">
    <li class="nav-item">
     <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_4">
     <span class="nav-icon"><i class="flaticon-home-2"></i></span>
     <span class="nav-text">Home</span>
     </a>
    </li>
    <li class="nav-item">
     <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_4">
     <span class="nav-icon"><i class="flaticon2-calendar-6"></i></span>
     <span class="nav-text">Create Event</span>
     </a>
    </li>
    <li class="nav-item">
     <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_3_4">
     <span class="nav-icon"><i class="flaticon-event-calendar-symbol"></i></span>
     <span class="nav-text">List of events</span>
     </a>
    </li>
    <li class="nav-item">
     <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_4_4">
     <span class="nav-icon"><i class="flaticon2-files-and-folders"></i></span>
     <span class="nav-text">Subcategories</span>
     </a>
    </li>
   </ul>
  </div>
  
 </div>
 <div class="card-body">
  <div class="tab-content">
   <div class="tab-pane fade show active" id="kt_tab_pane_1_4" role="tabpanel" aria-labelledby="kt_tab_pane_1_4">
   @include('events.home')
   </div>
   <div class="tab-pane fade" id="kt_tab_pane_2_4" role="tabpanel" aria-labelledby="kt_tab_pane_2_4">
    @include('events.create')
   </div>
   <div class="tab-pane fade" id="kt_tab_pane_3_4" role="tabpanel" aria-labelledby="kt_tab_pane_3_4">
   @include('events.index')
   </div>
   <div class="tab-pane fade" id="kt_tab_pane_4_4" role="tabpanel" aria-labelledby="kt_tab_pane_4_4">
   @include('subcategory.create')
   </div>
  </div>
 </div>
</div>



<script src="{{asset('../theme/html/demo1/dist/assets/js/pages/crud/ktdatatable/base/html-table49d8.js?v=7.2.8')}}"></script>

               
@endsection
