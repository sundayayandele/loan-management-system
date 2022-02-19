<x-guest-layout>
   <center>
      <h5>LOAN PROFILE</h5>
   </center> 
<br>
<div class="shadow p-3 mb-5 bg-white rounded">
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

             
            
        <form method="POST" action="{{route('analytics',encrypt(Auth::user()->employee_id))}}";>
            @csrf
          
           <!-- NRC -->
           <div>
           <div class="mt-4">
           <x-label for="name" :value="__('NRC')" />

            <x-input id="name" class="block mt-1 w-full" type="text" value='{{$employeeData->nrc}}' name="nrc_number"  readonly/>
            </div> 

                     
<br>
             <!-- Loan Application Submitt -->
             <div class="flex items-center justify-end mt-4">
               

                <x-button class="ml-4">
                    {{ __('Proceed') }}
                </x-button>
            </div>
            
               



        
    </form>
            
</body>
</x-guest-layout>
