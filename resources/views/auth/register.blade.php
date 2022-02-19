<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                  <!--Register-->
                  <center>
                  <br>
<div style="font-weight:bolder;font-size:22px; color:black">Sign Up First.</div>
</center>
            </a>
        </x-slot>

      

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
        <form method="POST" action="{{ route('register') }}">
            @csrf


<!-- First Name -->
<div class="mt-4">
                <x-label for="firstname" :value="__('Enter First Name')" />

                <x-input id="nrc" class="block mt-1 w-full" type="text" name="name"  required />
            </div>



            
<!-- Last Name -->
<div class="mt-4">
                <x-label for="firstname" :value="__('Enter Last Name')" />

                <x-input id="nrc" class="block mt-1 w-full" type="text" name="lastname"  required />
            </div>

            
            <!-- NRC Number -->
            <div class="mt-4">
                <x-label for="email" :value="__('Enter NRC Number')" />

                <x-input id="nrc" class="block mt-1 w-full" type="text" name="nrc"  required />
            </div>

              <!-- Email Address -->
              <div class="mt-4">
                <x-label for="email" :value="__('Enter Email Address')" />

                <x-input id="nrc" class="block mt-1 w-full" type="text" name="email"  required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
