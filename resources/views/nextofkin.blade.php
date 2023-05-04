
    
<div >
  <h3> NEXT OF KIN  </h3>
</div>
    <br>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
        <form method="POST" action="{{route('nextofkind',encrypt(Auth::user()->employee_id))}}">
            @csrf



           

 <!-- Next of Kin Firstname-->
 <div class="form-group">
    <label for="First Name">First Name</label> <small class="text-danger">*</small>

    <input type="text" class="form-control" name="firstnamenext" required>
</div>



 

            <!-- Next of Kin  Lastname-->
            <div class="form-group">
    <label for="First Name">Last Name</label> <small class="text-danger">*</small>

    <input type="text" class="form-control" name="lastnamenext" required>
</div>



             <!-- Relationship-->
             <div class="form-group">
<label for="relationship">Relationship</label> <small class="text-danger">*</small>
 <select class="form-control" name="relationshipnext" required>
 <option value="Father">Father</option>
  <option value="Mother">Mother</option>
  <option value="Uncle">Uncle</option>
  <option value="Brother">Brother</option>
  <option value="Sister">Sister</option>
  <option value="Cousing">Cousin</option>
  <option value="Aunty">Aunty</option>
  <option value="Other">Other</option>
 
</select>
    
  </div>



            

             <!--Phone Number -->
             <div class="form-group">
    <label for="Phone Number">Phone Number</label> <small class="text-danger">*</small>
    <input type="text" name="phonenumbernext" class="form-control" id="phone" placeholder="XXX-XXX-XXXX" autocomplete="off" data-mask="000-000-0000">
    
    
  </div>


 


            <!--Physical address  -->
            <div class="form-group">
    <label for="Home Address">Home Address</label> <small class="text-danger">*</small>
    <input type="text" class="form-control" name="physicaladdressnext" required>
    
  </div>




            
            
               

            <button type="submit" class="btn btn-success">Next</button>
            
        </form>
   
<script> 

$(document).ready(function(){
    $('#phone').mask('000-000-0000');
});


</script>

</body>
</html>