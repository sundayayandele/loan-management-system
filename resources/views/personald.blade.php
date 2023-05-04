   
<div >
  <h3> PERSONAL DETAILS </h3>
</div>
    <br>
        

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        

       

        <form method="POST" action="{{route('personaldetails',encrypt(Auth::user()->employee_id))}}">
            @csrf



           <!-- Name -->
   <div class="form-group">
    <label for="Full Names">Full Names</label> <small class="text-danger">*</small>

    <input type="text" class="form-control" name="name" value='{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}' name="name"  readonly>
    
  </div>


           
            
            
     
             <!-- D.O.B -->
 <div class="form-group">
    <label for="Date of Birth (DOB)">Date of Birth (DOB)</label> <small class="text-danger">*</small>

    <input type="text" class="form-control" id="datepicker" name="DateofBirth" required>
</div>



            <!-- Gender -->
<div class="form-group">
    <label for="Please Select Your Gender">Please Select Your Gender</label> <small class="text-danger">*</small>
    <select class="form-control" name="gender" required>
 <option value="Male">Male</option>
  <option value="Female">Female</option>
 
</select>
    
  </div>


            
             <!-- Marital Status -->

<div class="form-group">
<label for="Marital Status">Marital Status</label> <small class="text-danger">*</small>
 <select class="form-control" name="marital" required>
 <option value="Single">Single</option>
 <option value="Married">Married</option>
 <option value="Divorced">Divorced</option>
 <option value="Widowed">Widowed</option>
 <option value="Separated">Separated</option>
 
</select>
    
  </div>






                   

            <!-- Active Phone Number -->
            <div class="form-group">
    <label for="Phone Number">Phone Number</label> <small class="text-danger">*</small>
    <input type="text" name="number" class="form-control" id="phone" placeholder="XXX-XXX-XXXX" autocomplete="off" data-mask="000-000-0000">
  </div>



            
             <!-- Physical Address -->
             <div class="form-group">
    <label for="Home Address">Home Address</label> <small class="text-danger">*</small>
    <input type="text" class="form-control" name="address" required>
    
  </div>

             

             <!-- Town of Residence -->
             <div class="form-group">
    <label for="Town of Residence">Town of Residence</label> <small class="text-danger">*</small>
    <input type="text" class="form-control" name="town" placeholder="Lusaka" required>
    
  </div>




            
             <!-- Province of Residence -->
             <div class="form-group">
    <label for="Province of Residence">Province of Residence</label> <small class="text-danger">*</small>
    <select class="form-control" name="province" required>
    <option value="Southern">Southern </option>
  <option value="Nothern">Nothern</option>
  <option value="Western">Western</option>
  <option value="Eastern">Eastern</option>
  <option value="North Western">North Western</option>
  <option value="Lusaka">Lusaka </option>
  <option value="Luapula">Luapula</option>
  <option value="Central">Central</option>
  <option value="Copperbelt">Copperbelt</option>
  <option value="Muchinga">Muchinga</option>
 
</select>
    
  </div>




             

          
               <button type="submit" class="btn btn-success">Next</button>
                 
           </div>  

        </form>

    <script> 
    $(document).ready(function(){
  $('#datepicker').datepicker({
    format: 'dd/mm/yyyy'
    
  });
});

    </script>  

<script> 

$(document).ready(function(){
    $('#phone').mask('000-000-0000');
});


</script>
   












































        