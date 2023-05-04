
    <h3>
      Employer Details
    </h3>      

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
        <form method="POST" action="{{route('employerdetails_submit',encrypt(Auth::user()->employee_id)) }}">
            @csrf


    
<!-- Employment Details -->
<div class="form-group">
    <label for="Enter Company / Ministry">Enter Company / Ministry</label> <small class="text-danger">*</small>
    <input type="text" name="employername" class="form-control" autocomplete="on" required>
  </div>



 <!-- Employee Monthly Salary -->
 <div class="form-group">
    <label for="What is your Net Monthly Salary / Earnings">What is your Net Monthly Salary / Earnings</label> <small class="text-danger">*</small>
    <input type="text" class="form-control" name="netmonthly" required>
    
  </div>



 
          <!-- Employee Number -->
          <div class="form-group">
    <label for="Employee Number">Employee Number</label> 
    <input type="text" class="form-control" name="employeenumber" >
    
  </div>


      

         
           

  <button type="submit" class="btn btn-success">Next</button>
            </div>
        </form>
    







 