<x-guest-layout>
    <h3>
      Employer Details
    </h3>      

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
        <form method="POST" action="{{route('employerdetails_submit',encrypt(Auth::user()->employee_id)) }}">
            @csrf


    
<!-- Employment Details -->
<div class="mt-4">
<x-label for="email" :value="__('Employer Name ')" />
<select id="employername" class="block mt-1 w-full" name="employername" required>
  <option value="1">The Zambia Revenue Authority (ZRA).</option>
  <option value="3">FinTeck Zambia Limited</option>
  <option value="5">Sis AND Sis Closet</option>
  <option value="6">DEV Zambia Limited</option>
  <option value="7">OTHER</option>
  
</select>                
            </div>


 <!-- Employee Monthly Salary -->
 <div class="mt-4">
              <x-label for="employee" :value="__('What is your Monthly Salary (write numbers only)')" />

              <x-input id="email" class="block mt-1 w-full" type="number" name="netmonthly" required/>
              
          </div>



          <!-- Employee Number -->
<div class="mt-4">
              <x-label for="employee" :value="__('Employee Number')" />

              <x-input id="email" class="block mt-1 w-full" type="text" name="employeenumber" required/>
              
          </div>



            

         
           

            <div class="flex items-center justify-end mt-4">
               

                <x-button class="ml-4">
                    {{ __('Next') }}
                </x-button>
            </div>
        </form>
    
</x-guest-layout>






 