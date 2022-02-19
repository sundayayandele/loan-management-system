<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="#">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                  <!--Register-->
                  <center>
                  <br>
<div style="font-weight:bolder;font-size:22px">PROFILE</div>
<h3>
    <!--Check if the user has uploaded the profile picture and display it--> 
    <!--Else If the user has not yet uploaded the profilepic just show the user icon-->
    <input type="hidden" value="{{$profile->profilepicture}}" id="profilepicture"/>
    
        <h3 >
<i id="usericon"  class="fas fa-user-shield" style="font-size:32px"></i>
<img id="userprofile" src="{{asset('attatchments_loans/'.$profile->profilepicture )}}" style="width:150px; height:150px; border-radius:100%";/>
</h3>
</center>
            </a>



            <script>
        let profilepic = document.getElementById("profilepicture").value;
        if(profilepic.length > 5){
            document.getElementById("usericon").style.display="none";	
           
        }
        else{
            document.getElementById("userprofile").style.display="none";	   
        }
     
        </script>
        </x-slot>
 
      

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

             
            
          

           <!-- Full Names -->
           <div>
           <div class="mt-4">
             <span>  Names : {{$profile->name}}</span>
            </div> 

            <!-- Email Address -->
            <div class="mt-4">
             <span>  Email: {{$profile->email}}</span>
            </div> 

             <!-- NRC Number -->
             <div class="mt-4">
             <span>  NRC: {{$profile->nrc}}</span>
            </div> 

             <!-- Phone Number -->
             <div class="mt-4">
             <span>  Number: {{$profile->number}}</span>
            </div> 

             <!-- DOB -->
             <div class="mt-4">
             <span>  DOB: {{$profile->DateofBirth}}</span>
            </div> 

             <!-- Physical Address -->
             <div class="mt-4">
             <span>  Physical address: {{$profile->address}}</span>
            </div> 

             <!-- Notice -->
             <div class="mt-4">
             <small style="font-style:italic">Some information on your profile maybe incomplete you need to complete your kyc form on your dashboard to have a complete profile. </small>
            </div>

<br>
             <!-- profile picture -->
             <div class="btn btn-success">
           <a style="color:white" href="{{route('profilepicture')}}" > Change your profile picture </a>
            </div> 
            
               



        

            
    </x-auth-card>
</x-guest-layout>
