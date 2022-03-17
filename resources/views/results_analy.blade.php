<x-guest-layout>
   <center>
   <h5>  LOAN ANALYSIS </h5>
   </center>
        
   <div >
<br>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

           
        <div class="card">      

         <!-- Full Names -->
        <div class="card-header">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-xs-12 col-lg-6">
        Full Names :  {{$loan_profile->firstname}} {{$loan_profile->lastname}}
          </div>

           <!-- Company Name -->
          <div class="col-sm-6 col-md-6 col-xs-12 col-lg-6" >
         Blaklisted   :  {{$loan_profile->is_blacklisted}}
          </div>
         
        </div>
      </div>


         <!-- NRC Number -->
         <div class="container shadow p-3 mb-5 bg-white rounded">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-xs-12 col-lg-6">
         NRC : {{$nrc}}
          </div>

           <!-- Email -->
          <div class="col-sm-6 col-md-6 col-xs-12 col-lg-6" >
         Email :   {{($email)}}
          </div>
         
        </div>
      </div>


    <!-- Phone Number -->
    <div class="card-header">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-xs-12 col-lg-6">
       Phone Number  :  {{($phone)}}
          </div>


           <!-- Maximum Credit -->
          <div class="col-sm-6 col-md-6 col-xs-12 col-lg-6" >
          Maximum Credit : ZMW 10,000 
          </div>
         
        </div>
      </div> 


      <!-- Bank -->
    <div class="container shadow p-3 mb-5 bg-white rounded">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-xs-12 col-lg-6">
       Net Salarie  :  ZMW {{$loan_profile->net_salary}}
          </div>


           <!-- Bank Account Number -->
          <div class="col-sm-6 col-md-6 col-xs-12 col-lg-6" >
         Bank Acc :   {{$bank_account_no}}
          </div>
         
        </div>
      </div> 



      
      <!-- is BLacklisted -->
    <div class="card-header">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-xs-12 col-lg-6">
       Loan Status  : {{$loan_status}} Loan(s)
          </div>
          
        </div>
      </div> 




























            
        
          
         <!--Go Home-->
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
