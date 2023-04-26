<x-guest-layout>
   
<div >
  <h3> PERSONAL DETAILS </h3>
</div>
    <br>
        

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        

       

        <form method="POST" action="{{route('personaldetails',encrypt(Auth::user()->employee_id))}}">
            @csrf



           <!-- Name -->
           <div class="mt-4">
                <x-label for="name" :value="__('Full Names')" />

                <x-input id="name" class="block mt-1 w-full" type="text"  value='{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}' name="name"  readonly/>
            </div>

            
            
     
             <!-- D.O.B -->
             <div class="mt-4">
                <x-label for="email" :value="__('D.O.B')" />

                <x-input id="email" class="block mt-1 w-full" type="date" name="DateofBirth" required/>
            </div>


            <!-- Gender -->
            <div class="mt-4">
                <x-label for="email" :value="__('Please Select Your Gender.')" required/>
<br>
                <x-input id="email" type="radio" name="gender" value="male"/> Male
                <x-input id="email" type="radio" name="gender" value="female"/> Female
            </div>

             <!-- Marital Status -->
             <div class="mt-4">
                <x-label for="email" :value="__('Marital Status.')" required/>
<br>
                <x-input id="email"  type="radio" name="marital" value="single"/> Single <br>
                <x-input id="email"  type="radio" name="marital" value="married"/> Married <br>
                <x-input id="email"  type="radio" name="marital" value="divorced"/> Divorced <br>
                <x-input id="email"  type="radio" name="marital" value="widowed"/>  Widowed <br>
                <x-input id="email"  type="radio" name="marital" value="separated"/>  Separated <br>
            </div>

          

            <!-- Active Phone Number -->
            <div class="mt-4">
                <x-label for="email" :value="__('Mobile Money number')" />

                <x-input id="email" class="block mt-1 w-full" type="number" name="number" required/>
                
            </div>


             <!-- Physical Address -->
             <div class="mt-4">
                <x-label for="email" :value="__('Home Address')" />

                <x-input id="email" class="block mt-1 w-full" type="text" name="address" required/>
                
            </div>

             <!-- Town of Residence -->
             <div class="mt-4">
                <x-label for="email" :value="__('Town of Residence')" />


   <!--Show the retrieved towns from the database--> 

    
 <select class="block mt-1 w-full" name="town" required>
 <option value="Kitwe">Kitwe</option>
  <option value="Lusaka">Lusaka</option>
  <option value="Chingola">Chingola</option>
  <option value="Ndola">Ndola</option>
  <option value="Kalulushi">Kalulushi</option>
  <option value="Kafue">Kafue</option>
  <option value="Nakonde">Nakonde</option>
  <option value="New york">New York</option>
  <option value="Georgia">Georgia</option>
  <option value="Kaoma">Kaoma</option>
</select>
  </div>


             <!-- Province of Residence -->
             <div class="mt-4">
                <x-label for="email" :value="__('Province of Residence')" />

<!--Show the Provinces to the user--> 
<select class="block mt-1 w-full" name="province" required>
  <option value="Southern">Southern </option>
  <option value="Nothern">Nothern</option>
  <option value="Western">Western</option>
  <option value="Eastern">Eastern</option>
  <option value="North Western">North Western</option>
  <option value="Lusaka">Lusaka </option>
  <option value="Luapula">Luapula</option>
  <option value="Central">Central</option>
  <option value="Copperbelt">Copperbelt</option>
  <option value="Muchinga">Muchinga</option>
  
</select>      
                
            </div>


           <br>
               <x-button class="ml-4">
                   {{ __('Next') }}
               </x-button>
           </div>  

        </form>

      
   
</x-guest-layout>












































        