<x-guest-layout>
<center>
    <h5>LOAN APPLICATION REVIEW</h5>
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

            <x-input id="name" class="block mt-1 w-full" type="text" value="{{$hold->loan_type}}" name="loan_type"  readonly/>
            </div> 

           
 <!-- Employee Id -->
 <div class="mt-4">
            <x-label for="name" :value="__('Employee Id')" />

            <x-input id="name" class="block mt-1 w-full" type="text"  value='{{$hold_loan->employee_id}}' name="employee_id"  readonly/>
            </div> 



        
 

            <!-- Tenure Months -->
<div class="mt-4">
            <x-label for="name" :value="__('How Many Months')" />
<!--Show the number of months to the user--> 

<select class="block mt-1 w-full" name="tenure_months" required>
@php
                              $months = [1,2,3,4,5,6];
                            @endphp
                            @foreach($months as $month)
                              <option
                              @if($month == $hold_loan->months)
                                selected
                              @endif
                              value="{{$month}}" >{{ $month }}</option>
                            @endforeach
 </select>
</div> 


<!-- Loan Amount -->
<div class="mt-4">
            <x-label for="name" :value="__('Loan Amount (ZMW)')" />

            <x-input id="name" class="block mt-1 w-full" value="{{$hold_loan->loan_amount}}" type="number"  name="loan_amt"  />
            </div> 


           


<!-- Reference Payment Mode -->
<div class="mt-4">
            <x-label for="name" :value="__('Payment Mode')" />

        
<!--Show Payments Modes to the user--> 
<select class="block mt-1 w-full" name="payment_mode_id" required>
  
@php
                              $payment_method = ['Bank Transfer','Airtel Money','Mtn Money','Cheque','Cash'];
                            @endphp
                            @foreach($payment_method as $payment_method)
                              <option
                              @if($payment_method == $hold_loan->payment_mode)
                                selected
                              @endif
                              value="{{$payment_method}}" >{{ $payment_method }}</option>
                            @endforeach
  
   
 </select>
            </div> 




<!-- Mobile Number -->
<div class="mt-4">
            <x-label for="name" :value="__('Mobile Money Number')" />

            <x-input id="name" class="block mt-1 w-full" type="number"  value='{{$hold_loan->mobile_money_no}}' name="mobile_money_no"  readonly/>
            </div> 


<!-- Mobile Number Name -->
<div class="mt-4">
            <x-label for="name" :value="__('Mobile Money Name')" />

            <x-input id="name" class="block mt-1 w-full" type="text" value='{{$hold_loan->mobile_money_name}}'  name="mobile_money_name"  />
            </div> 




            <!-- Latest payslip -->
            <div class="mt-4">
                <x-label for="payslip1" :value="__('Upload '.{{date('F Y', strtotime('-1 month'))}} .'Payslip')" />

                <x-input id="payslip1" class="block mt-1 w-full" type="file" value="{{'files/'.$hold_loan->payslip1}}" name="payslip1" required/>
                
            </div>


            <!-- Latest payslip -->
            <div class="mt-4">
                <x-label for="payslip2" :value="__('Upload '.{{date('F Y', strtotime('-2 months'))}} .'Payslip')" />

                <x-input id="payslip2" class="block mt-1 w-full" type="file" value="{{'files/'.$hold_loan->payslip2}}" name="payslip2" required/>
                
            </div>

             <!-- Latest Bank Statement -->
             <div class="mt-4">
                <x-label for="bank statement" :value="__('Upload Latest Bank Statement')" />

                <x-input id="bankstatement" class="block mt-1 w-full" type="file" value="{{'files/'.$hold_loan->bank_statement}}"  name="bankstatement" required/>
                
            </div>


           
<br>
<p><input type="checkbox" name="terms" required> I have read and agreed to the <a href="#" data-toggle="modal" data-target="#exampleModalLong">Terms and Conditions</a> of payroll based loans </p>
             <!-- Loan Application Submitt -->
             <div class="flex items-center justify-end mt-4">
               

                <x-button class="ml-4">
                    {{ __('APPLY') }}
                </x-button>
            </div>
            
               



        
    </form>
            
</div>
</x-guest-layout>
