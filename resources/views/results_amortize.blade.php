<x-guest-layout>
    <center>
    <div class="card-header">
  <h5>LOAN AMORTIZATION</h5>
</div>
    </center>
    <br>
  <!-- Validation Errors -->
  <x-auth-validation-errors class="mb-4" :errors="$errors" />


    <div class="card">      

         <!-- Loan Type -->
        <div class="card-header">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-xs-12 col-lg-6">
          Loan Type : {{$loan_type}}
          </div>

           <!-- Loan Period -->
          <div class="col-sm-6 col-md-6 col-xs-12 col-lg-6" >
          Loan Period (Months) : {{$loan_period}}
          </div>
         
        </div>
      </div>


         <!-- Loan Amount -->
         <div class="container shadow p-3 mb-5 bg-white rounded">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-xs-12 col-lg-6">
         Loan Amount : ZMW {{$loan_amount}}
          </div>

           <!-- Loan Interest Rate -->
          <div class="col-sm-6 col-md-6 col-xs-12 col-lg-6" >
         Interest : {{$loan_interest}}
          </div>
         
        </div>
      </div>


    <!-- Total Payments -->
    <div class="card-header">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-xs-12 col-lg-6">
       Total Payments :  ZMW {{$loan_total_payments}}
          </div>

           <!-- Due Date -->
          <div class="col-sm-6 col-md-6 col-xs-12 col-lg-6" >
          Due Date : {{$due_date}}
          </div>
         
        </div>
      </div>

          


             <!-- Go Home -->
             <div class="flex items-center justify-end mt-4">
<form method="GET" action="{{route('dashboard')}}";>
            @csrf
                <x-button class="ml-4">
                {{ __('Go Home') }}
                </x-button>
            </div>      
                      
    </form>
            
</div>
</x-guest-layout>
