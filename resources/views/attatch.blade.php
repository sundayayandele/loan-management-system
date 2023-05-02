<x-guest-layout>
  <h3>
      Attatchments
  </h3>
      

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
        <form method="POST"  enctype="multipart/form-data" action="{{route('attatchments_submit',encrypt(Auth::user()->employee_id))}}">
            @csrf



          
<!--NRC Copy-->
<div class="mt-4">
                <x-label for="NRC" :value="__('Upload your NRC (PDF Only).')" />

                <x-input id="NRC" class="block mt-1 w-full" type="file"  name="nrc_file" required/>
                
            </div>


            <!--Passport Photo-->
            <div class="mt-4">
                <x-label for="passportphoto" :value="__('Upload your Passport Photo (JPG,PNG Only).')" />

                <x-input id="passportphoto" class="block mt-1 w-full" type="file" name="passportphoto" required/>
                
            </div>



            
            
            <!--utulity Bill-->
<div class="mt-4">
                <x-label for="pay slips" :value="_('Upload any utility (PDF Only).')" />

                <x-input id="email" class="block mt-1 w-full" type="file" name="utility" required/>
                
            </div>
           



            <div class="flex items-center justify-end mt-4">
               

                <x-button class="ml-4">
                    {{ __('Next') }}
                </x-button>
            </div>
        </form>
   
</x-guest-layout>
