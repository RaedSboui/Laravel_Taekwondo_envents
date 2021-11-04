

        <div class="card-body"style="padding: 1.25rem;">
            <!--begin::Search Form-->
            <div class="mb-7">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-xl-8">
                        <div class="row align-items-center">
                            <div class="col-md-4 my-2 my-md-0">
                                <div class="input-icon">
                                    <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                    <span>
                                        <i class="flaticon2-search-1 text-muted"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Search Form-->
            <!--begin: Datatable-->
            <table class="datatable-bordered datatable-head-custom datatable-table" id="kt_datatable">
                <thead >
                    <tr>
                        <th title="Field #1"  >Name</th>
                        <th title="Field #2" >Type</th>
                        <th title="Field #3" >Category</th>
                        <th title="Field #4">Division</th>
                        <th title="Field #5">Event Date</th>
                        <th title="Field #6">Action</th>
                    </tr>
                </thead>
                <tbody>

                   @foreach($events as $Event)
                         <tr>
                            <td  >{{$Event->event_name}}</td>
                            <td  >{{$Event->event_type}}</td>
                            <td >{{$Event->event_cat}}</td>
                            <td >{{$Event->event_sub_cat}}</td>
                            <td >{{$Event->event_start}}/{{$Event->event_end}}</td>
                            <td class="text-right pr-0">
                            <div class="row">
                                <button  class="btn btn-icon btn-light btn-hover-primary btn-sm mx-2" type="button" onclick="window.location.href = '{{ route('event.show', $Event->event_id) }}';"  title="Show">
                                   <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/General/Visible.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M3,12 C3,12 5.45454545,6 12,6 C16.9090909,6 21,12 21,12 C21,12 16.9090909,18 12,18 C5.45454545,18 3,12 3,12 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                <path d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z" fill="#000000" opacity="0.3"/>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </button>
  
                                <form action="{{ route('event.delete', $Event->event_id) }}" method="POST" class="mx-2">                                       
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


        <script src="{{asset('../theme/html/demo1/dist/assets/js/pages/crud/ktdatatable/base/html-table49d8.js?v=7.2.8')}}"></script>
