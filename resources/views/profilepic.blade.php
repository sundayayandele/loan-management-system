<x-guest-layout>
   
      <center>
      <h3><i class="fas fa-user-shield" style="font-size:32px"></i></h3>
      </center>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
        <form enctype="multipart/form-data"  method="POST" action="{{route('profilepictureclient',encrypt(Auth::user()->employee_id))}}">
            @csrf


   
 <!-- profile picture -->
 <div class="container shadow p-3 mb-5 bg-white rounded mt-4">
              <x-label for="profile picture" :value="__('Profile Picture')" />

              <x-input id="profile" class="block mt-1 w-full" type="file" name="profilepicture" required/>
              
          </div>


        <div class="flex items-center justify-end mt-4">
               

                <x-button class="ml-4">
                    {{ __('upload') }}
                </x-button>
            </div>
        </form>
    
</x-guest-layout>







 