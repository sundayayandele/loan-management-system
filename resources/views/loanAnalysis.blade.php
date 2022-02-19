<x-guest-layout>
    <center>
      <h5>LOAN ANALYSIS</h5>
      <br>
    </center>
        
    <div class="shadow p-3 mb-5 bg-white rounded">
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

             
            
        <form method="POST" action="{{route('loanAnalysis_submit',encrypt(Auth::user()->nrc))}}">
            @csrf
          
           <!-- Loan Type -->
           <div>
           <div class="mt-4">
           <x-label for="name" :value="__('Loan Type')" />

            <x-input id="name" class="block mt-1 w-full" type="text" value='Personal Loan' name="loan_type"  readonly/>
            </div> 

          



        
         <!-- Company Id -->
          <div class="mt-4">
            <x-label for="name" :value="__('Company Id')" />

            <x-input id="name" class="block mt-1 w-full" type="text"  value='{{$employeeData->company_id}}' name="company_id"  readonly/>
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


           





           
<br>
             <!-- Loan Application Submitt -->
             <div class="flex items-center justify-end mt-4">
               

                <x-button class="ml-4">
                    {{ __('Calculate') }}
                </x-button>
            </div>
             
    </form>
</div>
            
   </x-guest-layout>
