<x-guest-layout>
    <h3>
      Bank Details
    </h3>

      

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />


<!--Warning-->
@if (session('warning'))
      <div class="alert alert-warning">
         {!! session('warning') !!}
      </div>
@endif



        
        <form method="POST" action="{{route('bank_submit',encrypt(Auth::user()->employee_id))}}">
            @csrf



           

<!-- Bank Name -->
<div class="mt-4">
<x-label for="email" :value="__('Select Your Bank')" />

  <select class="block mt-1 w-full" name="bankname" required>
  <option value="Zambia National Commercial Bank (Zanaco)">Zambia National Commercial Bank (Zanaco)</option>
  <option value="Standard Chartered Bank Zambia">Standard Chartered Bank Zambia</option>
  <option value="Barclays Zambia (Absa)">Barclays Zambia (Absa)</option>
  <option value="Stanbic Bank (Zambia)">Stanbic Bank (Zambia)</option>
  <option value="Cavmont Bank Limited (CBL)">Cavmont Bank Limited (CBL)</option>
  <option value="Ecobank Zambia">Ecobank Zambia</option>
  <option value="Indo Zambia Bank">Indo Zambia Bank</option>
  <option value="Investrust Bank">Investrust Bank</option>
  <option value="First Alliance Bank">First Alliance Bank</option>
  <option value="Access Bank Zambia">Access Bank Zambia</option>
  <option value="ATLASMARA">ATLASMARA</option>
  <option value="BANK OF CHINA (ZAMBIA) LIMITEDk">BANK OF CHINA (ZAMBIA) LIMITEDk</option>
  <option value="FIRST CAPITAL BANK ZAMBIA">FIRST CAPITAL BANK ZAMBIA</option>
  <option value="FNB">FNB</option>
  <option value="UBA">UBA</option>
  <option value="ZNBS">ZNBS</option>
  <option value="CITIBANK B">CITIBANK B</option>  
  
</select>                
            </div>


 <!-- Branch Name -->
 <div class="mt-4">
                <x-label for="email" :value="__('Branch Name')" />

                <select class="block mt-1 w-full" name="branchname" required>
  <option value="ZN-Cairo Road Branch">ZN-Cairo Road Branch</option>
  <option value="FBZ - Kamwala Branch">FBZ - Kamwala Branch</option>
  <option value="Bar - Kabwata Branch">Bar - Kabwata Branch</option>
  <option value="FNB - Cairo Road Branch">FNB - Cairo Road Branch</option>
  <option value="SCB - SCB-Cairo">SCB - SCB-Cairo</option>
  <option value="ABZ - Arcades Branch">ABZ - Arcades Branch</option>
  <option value="SCB-Northend-Cairo Road">SCB-Northend-Cairo Road </option>
  <option value="SCB - Buteko Avenue Ndola">SCB - Buteko Avenue Ndola</option>
  <option value="SCB - Chililabombwe">SCB - Chililabombwe</option>
  <option value="SCB - Chingola">SCB - Chingola</option>
  <option value="SCB - Choma">SCB - Choma</option>
  <option value="SCB - Crossroads Lusaka">SCB - Crossroads Lusaka</option>
  <option value="SCB Fallspark - Livingstone">SCB Fallspark - Livingstone</option>
  <option value="SCB - Kabulonga Shopping Centre Lusaka">SCB - Kabulonga Shopping Centre Lusaka</option>
  <option value="SCB - Jacaranda Mall Ndola">SCB - Jacaranda Mall Ndola</option>
  <option value="SCB - Kasama">SCB - Kasama</option>
  <option value="SCB - Zambia Way Kitwe">SCB - Zambia Way Kitwe</option>  
  <option value="SCB - Livingstone">SCB - Livingstone</option>
  <option value="SCB - Luanshya">SCB - Luanshya</option>
  <option value=">SCB - Manda Hill Shopping Mall Lusaka">SCB - Manda Hill Shopping Mall Lusaka</option>
  <option value="SCB - Manda Hill Shopping Mall Lusaka">SCB - Mazabuka</option>
  <option value="SCB - Mongu">SCB - Mongu</option>
  <option value="SCB - Ndola South">SCB - Ndola South</option>
  <option value="SCB - Solwezi">SCB - Solwezi</option>
  <option value="BAR - Central Park Cairo Road">BAR - Central Park Cairo Road</option>  
  
</select>  
                
            </div>

            <!-- Account Number -->
 <div class="mt-4">
                <x-label for="email" :value="__('Account Number')" />

                <x-input id="email" class="block mt-1 w-full" type="number" name="accountnumber" required/>
                
            </div>

            <!-- Account Name -->
 <div class="mt-4">
                <x-label for="email" :value="__('Account Name')" />

                <x-input id="email" class="block mt-1 w-full" type="text" name="accountname" required/>
                
            </div>


            <!-- Mobile Money Number -->
 <div class="mt-4">
                <x-label for="mobile money number" :value="__('Mobile Money Number')" />

                <x-input id="mobile_money_number" class="block mt-1 w-full" type="number" name="mobile_money_number" required/>
                
            </div>


              <!-- Mobile Money Name -->
 <div class="mt-4">
                <x-label for="mobile money name" :value="__('Mobile Money Name')" />

                <x-input id="mobile_money_name" class="block mt-1 w-full" type="text" name="mobile_money_name" required/>
                
            </div>




            <div class="flex items-center justify-end mt-4">
               

                <x-button class="ml-4">
                    {{ __('Submit') }}
                </x-button>
            </div>
        </form>
   
</x-guest-layout>
