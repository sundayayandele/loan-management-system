
<x-guest-layout>
   
<h3>
    KYC Review
</h3>

      

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

               
        
            
          

           <!-- Name -->
           <div>
                <x-label for="name" :value="__('Full Names')" />

                <x-input id="name" class="block mt-1 w-full" type="text"  value='{{$kycreview->name}} {{$kycreview->lastname}}'  readonly/>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" value='{{$kycreview->email}}'  readonly/>
            </div> 
            
               
<!-- NRC Number -->
<div class="mt-4">
                <x-label for="email" :value="__('NRC')" />

                <x-input id="email" class="block mt-1 w-full" type="text"  value='{{$kycreview->nrc}}'  required/>
            </div>

             <!-- D.O.B -->
             <div class="mt-4">
                <x-label for="email" :value="__('D.O.B')" />

                <x-input id="email" class="block mt-1 w-full" type="date" value='{{$kycreview->DateofBirth}}'  required/>
            </div>


            <!-- Gender -->
            <div class="mt-4">
                <x-label for="email" :value="__('Please Select Your Gender.')" required/>
<br>
<span>Selected Gender: </span> {{$kycreview->gender}}            

            </div>

             <!-- Marital Status -->
             <div class="mt-4">
                <x-label for="email" :value="__('Marital Status.')" required/>
<br><span>Selected Marital Status : </span> {{$kycreview->marital}}  
                
            </div>

          

            <!-- Active Phone Number -->
            <div class="mt-4">
                <x-label for="email" :value="__('Phone Number')" />

                <x-input id="email" class="block mt-1 w-full" value='{{$kycreview->number}}' type="number" readonly/>
                
            </div>


             <!-- Physical Address -->
             <div class="mt-4">
                <x-label for="email" :value="__('Home Address')" />

                <x-input id="email" class="block mt-1 w-full" value='{{$kycreview->address}}' type="text" readonly/>
                
            </div>

             <!-- Town of Residence -->
             <div class="mt-4">
                <x-label for="email" :value="__('Town of Residence')" />

                <x-input id="email" value='{{$kycreview->town}}' class="block mt-1 w-full" type="text" readonly/>
                
            </div>
<br>
<h3>Next of Kin</h3>

 <!-- Next of Kin Firstname-->
 <div class="mt-4">
                <x-label for="firstname" :value="__('First Name')" />

                <x-input id="email" class="block mt-1 w-full" type="text" value='{{$kycreview->firstnamenext}}' readonly/>
                
            </div>


            <!-- Next of Kin  Lastname-->
 <div class="mt-4">
                <x-label for="lastname" :value="__('Last Name')" />

                <x-input id="email" class="block mt-1 w-full" type="text" value='{{$kycreview->lastnamenext}}'  readonly/>
                
            </div>

            <!-- Relationship-->
 <div class="mt-4">
                <x-label for="relationship" :value="__('Relationship')" />

                <x-input id="email" class="block mt-1 w-full" type="text" value='{{$kycreview->relationshipnext}}' readonly/>
                
            </div>

             <!--Phone Number -->
 <div class="mt-4">
                <x-label for="phone number" :value="__('Phone Number')" />

                <x-input id="email" class="block mt-1 w-full" type="text" value='{{$kycreview->phonenumbernext}}' relationshipnext readonly/>
                
            </div>



            <!--Physical address  -->
 <div class="mt-4">
                <x-label for="Physical Address" :value="__('Physical Address')" />

                <x-input id="email" class="block mt-1 w-full" type="text" value='{{$kycreview->physicaladdressnext}}' readonly/>
                
            </div>

<h3>Employer Details</h3>
         
<!-- Employment Details -->
<div class="mt-4">
              <x-label for="employer" :value="__('Employer Name')" />

              <x-input id="email" class="block mt-1 w-full" type="text" value='{{$kycreview->employername}}' readonly/>
              
          </div>



 <!-- Employee Monthly Salary -->
 <div class="mt-4">
              <x-label for="employee" :value="__('What is your Monthly Salary (write numbers only)')" />

              <x-input id="email" class="block mt-1 w-full" type="number" value='{{$kycreview->netmonthly}}' readonly/>
              
          </div>



          <!-- Employee Number -->
<div class="mt-4">
              <x-label for="employee" :value="__('Employee Number')" />

              <x-input id="email" class="block mt-1 w-full" type="text" value='{{$kycreview->employeenumber}}'  readonly/>
              
          </div>


<h3>Attatchments</h3>
      
<!--NRC Copy-->
<div class="btn btn-info">
<a style="color:white" href="{{asset('attatchments_loans/'.$kycreview->nrc_file)}}">Check NRC</a>
                
            <hr>


            <!--Passport Photo-->
            
                <a style="color:white" href="{{asset('attatchments_loans/'.$kycreview->passportphoto)}}">Check Passportphoto</a>
                <hr>
                           
<!--Utility Bill-->
            <a style="color:white" href="{{asset('attatchments_loans/'.$kycreview->utility)}}">Check Utility Bill</a>
           
<br>

<form method="GET" action="{{route('kyc',encrypt(Auth::user()->nrc))}}">
            @csrf

           <br>
               <x-button class="ml-4" >
                   {{ __('Submit') }}
               </x-button>
           </div>  

        </form>

        

            </script>
   
</x-guest-layout>
