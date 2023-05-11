<form method="POST" action="{{route('web_loan_application',encrypt(Auth::user()->employee_id))}}"  enctype="multipart/form-data">
            @csrf
          
           <!-- Loan Type -->
           <x-input id="name" class="block mt-1 w-full" type="hidden"  value=1 name="loan_type"  readonly/>
           
 <!-- Employee Id -->
 
            <x-input id="name" class="block mt-1 w-full" type="hidden"  value='{{$employeeData->employee_id}}' name="employee_id"  readonly/>
           



    
 

            <!-- Tenure Months -->
<div class="mt-4">
            <x-label for="name" :value="__('How Many Months')" />
<!--Show the number of months to the user--> 
<select class="block mt-1 w-full" onchange="calculateEMIPayroll()" name="tenure_months" id="months_payroll" required>
  <option value=1>1 Month </option>
  <option value=2>2 Months</option>
  <option value=3>3 Months</option>
  <option value=4>4 Months</option>
  <option value=5>5 Months</option>
  <option value=6>6 Months </option>
 </select>
</div> 


<!-- Loan Amount -->
<div class="mt-4">
            <x-label for="name" :value="__('Loan Amount (ZMW)')" />

            <x-input id="name" class="block mt-1 w-full" type="number" onkeyup="calculateEMIPayroll()" id="amount_payroll" name="loan_amt"  />
            <small>The facility fee of K100 will be added.</small>   
        </div> 

<br>
            <div class="form-group" style="display:none">
  <label for="company_percentage">Facility Fee - For Loans between (K200-K1000)</label>
  <input type="number" name="lower_facility_fee" value="100" class="form-control"  id="lower_facility_fee_payroll" readonly>
    <small>The facility fee of K100 will be added to the loan amount(s) between K200 to K1000</small>  
  </div>
  
  <div class="form-group" style="display:none">
  <label for="company_percentage">Facility Fee - For Loans between (K1001 - K10,000)</label>
  <input type="number" name="higher_facility_fee" value="100" class="form-control"  id="higher_facility_fee_payroll" readonly>
    <small>The facility fee of K100 will be added to the loan amount(s) between K1001 - K10,000</small>  
  </div>




 <!-- Loan Repayments Amount -->
<div class="mt-4">
            <x-label for="Total Repayments Amount" :value="__('Total Repayments Amount (ZMW)')" />

            <x-input id="name" class="block mt-1 w-full" type="number" id="total_repayments_amt_payroll" name="total_repayments_amt" readonly />
            </div> 

             <!-- EMI -->
<div class="mt-4">
            <x-label for="EMI" :value="__('EMI (ZMW)')" />

            <x-input id="name" class="block mt-1 w-full" type="number" id="emi_payroll"  name="emi"  readonly/>
            </div> 
          
<!--Loan Percent-->  
<x-input id="loan_percent" class="block mt-1 w-full" type="hidden" id="hidden" value="6.69"  id="loan_percent_payroll" readonly/>

<!-- Reference Payment Mode -->
<div class="mt-4">
            <x-label for="name" :value="__('Payment Mode')" />

        
<!--Show Payments Modes to the user--> 
<select class="block mt-1 w-full" name="payment_mode_id" required>
   
<option value=""><-- Select Payment Mode --></option>
  <option value="Bank transfer">Bank Transfer</option>
  <option value="Airtel Money">Airtel Money</option>
  <option value="Mtn Money">Mtn Money</option>
  <option value="Cheque">Cheque</option>
  <option value="Cash">Cash</option>
  
   
 </select>
            </div> 






            <!-- Latest payslip -->
            <div class="mt-4">
                <x-label for="payslip1" :value="__('Upload '.date('F Y', strtotime('-1 month')) .' Payslip (PDF)')" />

                <x-input id="payslip1" accept="application/pdf" class="block mt-1 w-full" type="file" name="payslip1" required/>
                
            </div>


            <!-- Latest payslip -->
            <div class="mt-4">
                <x-label for="payslip2" :value="__('Upload '.date('F Y', strtotime('-2 months')) .' Payslip (pdf)')" />

                <x-input id="payslip2" accept="application/pdf" class="block mt-1 w-full" type="file"  name="payslip2" required/>
                
            </div>

             <!-- Latest Bank Statement -->
             <div class="mt-4">
                <x-label for="bank statement" :value="__('Upload Latest Bank Statement (PDF)')" />

                <x-input id="bankstatement" accept="application/pdf" class="block mt-1 w-full" type="file"  name="bankstatement" required/>
                
            </div>


           
<br>
             <!-- Loan Application Submitt -->
             
               
             <p><input type="checkbox" name="terms" required> By Marking this box and applying for this Loan, you have read and agreed to our <a href="#" data-toggle="modal" data-target="#exampleModalLong">Terms and Conditions</a></p>
                <button class="btn btn-success">
                    {{ __('APPLY') }}
                </button>
            
            
               



        
    </form>
            




<script>

  function calculateEMIPayroll() {


    var loan_percent = document.getElementById('loan_percent_payroll').value;
            if (!loan_percent)
            loan_percent = '0';



             var installments = document.getElementById('months_payroll').value;
            if (!installments)
                installments = '0';


                var loan_amount =document.getElementById('amount_payroll').value;
            if (!loan_amount)
                loan_amount = '0';
                
                
                 var lower_facility_fee =document.getElementById('lower_facility_fee_payroll').value;
            if (!lower_facility_fee)
                lower_facility_fee = '0';
                
                
                 var higher_facility_fee =document.getElementById('higher_facility_fee_payroll').value;
            if (!higher_facility_fee)
                higher_facility_fee = '0';


               


            var loan_amount = parseFloat(loan_amount);
            var loan_percent = parseFloat(loan_percent);
            var installments = parseFloat(installments);
            var lower_facility_fee = parseFloat(lower_facility_fee);
            var higher_facility_fee = parseFloat(higher_facility_fee);
            

            
            


if(loan_amount >= 200 && loan_amount <= 1000){
var total = (loan_amount+lower_facility_fee)+((loan_amount+lower_facility_fee)*(loan_percent/100)*installments);
 document.getElementById('total_repayments_amt_payroll').value = parseFloat(total).toFixed(2);
 document.getElementById('emi_payroll').value = parseFloat((total/installments)).toFixed(2);
}

if(loan_amount >= 1001 && loan_amount <= 10000){
var total = (loan_amount+higher_facility_fee)+((loan_amount+higher_facility_fee)*(loan_percent/100)*installments);
 document.getElementById('total_repayments_amt_payroll').value = parseFloat((total)).toFixed(2)
 document.getElementById('emi_payroll').value = parseFloat((total/installments)).toFixed(2);
 //document.getElementById('emi_terms').value = parseFloat((total/installments)).toFixed(2);
 //document.getElementById('loan_amt_terms').value = loan_amount;
 //document.getElementById('loan_amt_terms_conditions').value = loan_amount;
}
 
           
        }
      </script>