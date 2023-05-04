
    <h3>
      Bank Details
    </h3>

      

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />


<!--Warning-->
@if (session('warning'))
      <div class="alert alert-warning">
         {!! session('warning') !!}
      </div>
@endif



        
        <form method="POST" action="{{route('bank_submit',encrypt(Auth::user()->employee_id))}}">
            @csrf



           

<!-- Bank Name -->
<div class="form-group">
<label for="Select Your Bank">Select Your Bank</label> <small class="text-danger">*</small>

  <select class="form-control" name="bankname" required>
  <option value="Zambia National Commercial Bank (Zanaco)">Zambia National Commercial Bank (Zanaco)</option>
  <option value="Standard Chartered Bank Zambia">Standard Chartered Bank Zambia</option>
  <option value="Barclays Zambia (Absa)">Barclays Zambia (Absa)</option>
  <option value="Stanbic Bank (Zambia)">Stanbic Bank (Zambia)</option>
  <option value="Cavmont Bank Limited (CBL)">Cavmont Bank Limited (CBL)</option>
  <option value="Ecobank Zambia">Ecobank Zambia</option>
  <option value="Indo Zambia Bank">Indo Zambia Bank</option>
  <option value="Investrust Bank">Investrust Bank</option>
  <option value="First Alliance Bank">First Alliance Bank</option>
  <option value="Access Bank Zambia">Access Bank Zambia</option>
  <option value="ATLASMARA">ATLASMARA</option>
  <option value="BANK OF CHINA (ZAMBIA) LIMITEDk">BANK OF CHINA (ZAMBIA) LIMITEDk</option>
  <option value="FIRST CAPITAL BANK ZAMBIA">FIRST CAPITAL BANK ZAMBIA</option>
  <option value="FNB">FNB</option>
  <option value="UBA">UBA</option>
  <option value="ZNBS">ZNBS</option>
  <option value="CITIBANK B">CITIBANK B</option>  
  
</select>                
            </div>


 <!-- Branch Name -->
 <div class="form-group">
    <label for="Bank Branch Name">Bank Branch Name</label> <small class="text-danger">*</small>
    <input type="text" class="form-control" name="branchname" required>
    
  </div>



 

            <!-- Account Number -->
            <div class="form-group">
    <label for="Bank Account Number">Bank Account Number</label> <small class="text-danger">*</small>
    <input type="text" class="form-control" name="accountnumber" required>
    
  </div>


             <!-- Account Name -->
             <div class="form-group">
    <label for="Bank Account Name">Bank Account Name</label> <small class="text-danger">*</small>
    <input type="text" class="form-control" name="accountname" required>
    
  </div>




             <!-- Mobile Money Number -->
             <div class="form-group">
    <label for="Mobile Money Number">Mobile Money Number</label> <small class="text-danger">*</small>
    <input type="text" name="mobile_money_number" class="form-control" id="phone" placeholder="XXX-XXX-XXXX" autocomplete="off" data-mask="000-000-0000">
  </div>

 
              <!-- Mobile Money Name -->
               <!-- Physical Address -->
             <div class="form-group">
    <label for="Mobile Money Name">Mobile Money Name</label> <small class="text-danger">*</small>
    <input type="text" class="form-control" name="mobile_money_name" required>
    
  </div>

 

  <button type="submit" class="btn btn-success">Finish</button>
        </form>
   
        <script> 

$(document).ready(function(){
    $('#phone').mask('000-000-0000');
});


</script>
