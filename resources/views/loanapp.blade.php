<x-guest-layout>
<center>
    <h5>LOAN APPLICATION</h5>
    <br>
</center>

<div class="shadow p-3 mb-5 bg-white rounded">

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

             
            
        <form method="POST" action="{{route('web_loan_application',encrypt(Auth::user()->employee_id))}}";>
            @csrf
          
           <!-- Loan Type -->
           <div>
           <div class="mt-4">
           <x-label for="name" :value="__('Loan Type')" />

            <x-input id="name" class="block mt-1 w-full" type="text" value='Personal Loan' name="loan_type"  readonly/>
            </div> 

           
 <!-- Employee Id -->
 <div class="mt-4">
            <x-label for="name" :value="__('Employee Id')" />

            <x-input id="name" class="block mt-1 w-full" type="text"  value='{{$emp
                loyeeData->employee_id}}' name="employee_id"  readonly/>
            </div> 



        
 

            <!-- Tenure Months -->
<div class="mt-4">
            <x-label for="name" :value="__('How Many Months')" />
<!--Show the number of months to the user--> 
<select class="block mt-1 w-full" name="tenure_months" required>
  <option value="1">1 Month </option>
  <option value="2">2 Months</option>
  <option value="3">3 Months</option>
  <option value="4">4 Months</option>
  <option value="5">5 Months</option>
  <option value="6">6 Months </option>
 </select>
</div> 


<!-- Loan Amount -->
<div class="mt-4">
            <x-label for="name" :value="__('Loan Amount (ZMW)')" />

            <x-input id="name" class="block mt-1 w-full" type="number"  name="loan_amt"  />
            </div> 


           


<!-- Reference Payment Mode -->
<div class="mt-4">
            <x-label for="name" :value="__('Payment Mode')" />

        
<!--Show Payments Modes to the user--> 
<select class="block mt-1 w-full" name="payment_mode_id" required>
   
<option ><-- Select Payment Mode --></option>
  <option value="Bank transfer">Bank Transfer</option>
  <option value="Airtel Money">Airtel Money</option>
  <option value="Mtn Money">Mtn Money</option>
  <option value="Cheque">Cheque</option>
  <option value="Cash">Cash</option>
  
   
 </select>
            </div> 




<!-- Mobile Number -->
<div class="mt-4">
            <x-label for="name" :value="__('Mobile Money Number')" />

            <x-input id="name" class="block mt-1 w-full" type="number"  value='{{$employeeData->mobile_money_no}}' name="mobile_money_no"  readonly/>
            </div> 


<!-- Mobile Number Name -->
<div class="mt-4">
            <x-label for="name" :value="__('Mobile Money Name')" />

            <x-input id="name" class="block mt-1 w-full" type="text" value='{{$employeeData->mobile_money_name}}'  name="mobile_money_name"  />
            </div> 




            <!-- Latest payslip -->
            <div class="mt-4">
                <x-label for="payslip1" :value="__('Upload '.{{date('F Y', strtotime('-1 month'))}} .'Payslip')" />

                <x-input id="payslip1" class="block mt-1 w-full" type="file" name="payslip1" required/>
                
            </div>


            <!-- Latest payslip -->
            <div class="mt-4">
                <x-label for="payslip2" :value="__('Upload '.{{date('F Y', strtotime('-2 months'))}} .'Payslip')" />

                <x-input id="payslip2" class="block mt-1 w-full" type="file"  name="payslip2" required/>
                
            </div>

             <!-- Latest Bank Statement -->
             <div class="mt-4">
                <x-label for="bank statement" :value="__('Upload Latest Bank Statement')" />

                <x-input id="bankstatement" class="block mt-1 w-full" type="file"  name="bankstatement" required/>
                
            </div>


           
<br>
             <!-- Loan Application Submitt -->
             <div class="flex items-center justify-end mt-4">
               

                <x-button class="ml-4">
                    {{ __('APPLY') }}
                </x-button>
            </div>
            
               



        
    </form>
            
</div>
</x-guest-layout>
