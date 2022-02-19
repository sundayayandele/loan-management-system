<x-guest-layout>
    
<div >
  <h3> NEXT OF KIN  </h3>
</div>
    <br>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
        <form method="POST" action="{{route('nextofkind',encrypt(Auth::user()->employee_id))}}">
            @csrf



           

 <!-- Next of Kin Firstname-->
 <div class="mt-4">
                <x-label for="firstname" :value="__('First Name')" />

                <x-input id="email" class="block mt-1 w-full" type="text" name="firstnamenext" required/>
                
            </div>


            <!-- Next of Kin  Lastname-->
 <div class="mt-4">
                <x-label for="lastname" :value="__('Last Name')" />

                <x-input id="email" class="block mt-1 w-full" type="text" name="lastnamenext" required/>
                
            </div>

            <!-- Relationship-->
            <div class="mt-4">
<x-label for="relationship" :value="__('Relationship')" />

  <select class="block mt-1 w-full" name="relationshipnext" required>
  <option value="Father">Father</option>
  <option value="Mother">Mother</option>
  <option value="Uncle">Uncle</option>
  <option value="Brother">Brother</option>
  <option value="Sister">Sister</option>
  <option value="Cousing">Cousin</option>
  <option value="Aunty">Aunty</option>
  
  
</select>                
            </div>

             <!--Phone Number -->
 <div class="mt-4">
                <x-label for="phone number" :value="__('Phone Number')" />

                <x-input id="email" class="block mt-1 w-full" type="number" name="phonenumbernext" required/>
                
            </div>



            <!--Physical address  -->
 <div class="mt-4">
                <x-label for="Physical Address" :value="__('Physical Address')" />

                <x-input id="email" class="block mt-1 w-full" type="text" name="physicaladdressnext" required/>
                
            </div>



            
            <div class="flex items-center justify-end mt-4">
               

                <x-button class="ml-4">
                    {{ __('Next') }}
                </x-button>
            </div>
        </form>
   
</x-guest-layout>


</body>
</html>