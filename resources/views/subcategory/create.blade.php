
<form class="form" action="{{route('subcategories.store')}}" method="POST">
@csrf
 <div class="card-body">
  
  <div class="form-group row">

  <div class="col-lg-6">
    <label>Sub-category Type:</label>
    <select name="subcategory_type"  id="subcategory_type"  class="form-control  " role="listbox" >           
        <option  selected>Select type</option>
        <option value="Poomsae" >Poomsae </option>
        <option value="Kirogy">Kirogy </option>
    </select>
   
    <span class="form-text text-muted">Please enter your sub-cat type</span> 
   </div>


   
   <div class="col-lg-6">
    <label>Sub-cat Name:</label>
    <input type="text" class="form-control" id="subcategory_name" name="subcategory_name" placeholder="Enter sub-cat name"/>
    <span class="form-text text-muted">Please enter your sub-cat name</span>
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>



