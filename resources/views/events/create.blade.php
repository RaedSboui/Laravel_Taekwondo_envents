<form class="form" action="{{route('events.store')}}" method="POST">
  @csrf
  <div class="card-body">
    <div class="form-group row">
      <div class="col-lg-4">
        <label>Event Type:</label>
        <select name="event_type"  id="event_type"  class="form-control  @error('event_type') is-invalid @enderror" role="listbox" >           
          <option  selected>Select type</option>
          <option value="Poomsae" > Poomsae </option>
          <option value="Kirogy"> Kirogy </option>
        </select>
        @error('event_type')
          <div class="invalid-feedback">
            {{$errors->first('event_type')}}
          </div>
        @enderror
        <span class="form-text text-muted">Please enter your event type</span> 
      </div>
      <div class="col-lg-4">
        <label>Event Category:</label>
        <select style="width: 100%;" name="event_cat[]"  id="kt_select2_4"  class="form-control select2 @error('event_cat') is-invalid @enderror" multiple="multiple" role="listbox"  >           
          <option value="Poussin" >Poussin (9,10,11 ans)</option>
          <option value="Benjamin">Benjamin (12,13 ans) </option>
          <option value="Minime">Minime (14,15 ans) </option>
          <option value="Cadet">Cadet (16,17 ans) </option>
          <option value="Junior">Junior (18, 19, 20 ans) </option>
          <option value="Senior">Senior (21 ans et +)</option>
        </select>
        @error('event_cat')
          <div class="invalid-feedback">
            {{$errors->first('event_cat')}}
          </div>
        @enderror
        <span class="form-text text-muted">Please enter your event category</span> 
      </div>
      <div class="col-lg-4">
        <label>Event Sub-Category:</label>
        <select style="width: 100%;" name="event_sub_cat[]"  id="kt_select2_3"  class="form-control select2 @error('event_sub_cat') is-invalid @enderror"  multiple="multiple" role="listbox" >           
          <option value="" disabled selected>Please select an option</option>
        </select>
        @error('event_sub_cat')
          <div class="invalid-feedback">
            {{$errors->first('event_sub_cat')}}
          </div>
        @enderror
        <span class="form-text text-muted">Please enter your event category</span> 
      </div>
    </div>

    <div class="form-group row">
      <div class="col-lg-4">
        <label>Event Name:</label>
        <input type="text" class="form-control @error('event_name') is-invalid @enderror" id="event_name" name="event_name" placeholder="Enter event name"/>
        <span class="form-text text-muted">Please enter your event name</span>
        @error('event_name')
          <div class="invalid-feedback">
            {{$errors->first('event_name')}}
          </div>
        @enderror
      </div>
      <div class="col-lg-4">
        <label >Event date</label>
        <div class="input-daterange input-group" id="kt_datepicker_5">
          <input type="text" class="form-control" name="event_start"/>
          <div class="input-group-append">
            <span class="input-group-text"><i class="la la-ellipsis-h"></i></span>
          </div>
          <input type="text" class="form-control" name="event_end"/>
        </div>
        <span class="form-text text-muted">Please enter your event date</span>
      </div>
      <div class="col-lg-4">
        <label >Register date</label>
        <div class="input-daterange input-group" id="kt_datepicker_6">
          <input type="text" class="form-control" name="event_register_start"/>
          <div class="input-group-append">
            <span class="input-group-text"><i class="la la-ellipsis-h"></i></span>
          </div>
          <input type="text" class="form-control" name="event_register_end"/>
        </div>
        <span class="form-text text-muted">Please enter your event rgister date</span>
      </div>
    </div>
  </div>
  <div class="card-footer">
    <div class="row">
      <div class="col-lg-12"style="text-align: center;">
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button type="reset" class="btn btn-secondary">Cancel</button>
      </div>
    </div>
  </div>
</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<script>
// Map your choices to your option value
var lookup = {
   'Poomsae': [<?php foreach ($subcat_poomsae as $pom): ?>'<?php echo $pom["subcategory_name"] ?>',<?php endforeach; ?>],
   'Kirogy': [<?php foreach ($subcat_kirogy as $kiro): ?>'<?php echo $kiro["subcategory_name"] ?>',<?php endforeach; ?>],
};

// When an option is changed, search the above for matching choices
$('#event_type').on('change', function() {
   // Set selected option as variable
   var selectValue = $(this).val();

   // Empty the target field
   $('#kt_select2_3').empty();
   
   // For each chocie in the selected option
   for (i = 0; i < lookup[selectValue].length; i++) {
      // Output choice in the target field
      $('#kt_select2_3').append("<option value='" + lookup[selectValue][i] + "'>" + lookup[selectValue][i] + "</option>");
   }
});
</script>
<script>
 // range picker
 $('#kt_datepicker_5').datepicker({
   format: 'Y-m-d h:m:s',
   rtl: KTUtil.isRTL(),
   todayHighlight: true,
   templates: arrows
  });
   // range picker
 $('#kt_datepicker_6').datepicker({
   format: 'Y-m-d h:m:s',
   rtl: KTUtil.isRTL(),
   todayHighlight: true,
   templates: arrows
  });
</script>
