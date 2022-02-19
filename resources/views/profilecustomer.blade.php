<x-guest-layout>
<div class="card">
      
<center>       
<div style="font-weight:bolder;font-size:22px">PROFILE</div>
<h3>
   
    <!--Check if the user has uploaded the profile picture and display it--> 
    <!--Else If the user has not yet uploaded the profilepic just show the user icon-->
    <input type="hidden" value="{{$profileclient->profilepic}}" id="profile"/>
    
<i  id="usersicon" class="fas fa-user-shield" style="font-size:32px"></i>

        <h3> 
<img id="userpic" src="{{asset('attatchments_loans/'.$profileclient->profilepic )}}" style="width:150px; height:150px; border-radius:100%";/>
</h3>

            





            <script>
        let propic = document.getElementById("profile").value;
        if(propic.length >= 1){
            document.getElementById("usersicon").style.display="none";   	
           
        }
        else{
            document.getElementById("userpic").style.display="none";	   
        }
     
        </script>
        
 
        

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

             
            
           <!-- Full Names -->
         <div class="card-header w-75">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-xs-12 col-lg-6">
          Names : {{$profileclient->firstname}} {{$profileclient->lastname}}
          </div>

           <!-- Email -->
          <div class="col-sm-6 col-md-6 col-xs-12 col-lg-6" >
         Email : {{$profileclient->email}}
          </div>
         
        </div>
      </div>


    <!-- NRC Number -->
    <div class="card-header w-75">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-xs-12 col-lg-6">
          NRC: {{$profileclient->nrc}}
          </div>


           <!-- Phone Number -->
          <div class="col-sm-6 col-md-6 col-xs-12 col-lg-6" >
          Number: {{$profileclient->phone}}
          </div>
         
        </div>
      </div> 


      <!-- DOB -->
    <div class="card-header w-75">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-xs-12 col-lg-6">
          DOB: {{$profileclient->dob}}
          </div>


           <!-- Physical Address -->
          <div class="col-sm-6 col-md-6 col-xs-12 col-lg-6" >
          Physical address: {{$profileclient->address}}
          </div>
         
        </div>
      </div> 


        <!-- Notice -->
    <div class="card-header w-75">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-xs-12 col-lg-6">
          <small style="font-style:italic">Some information on your profile maybe incomplete you need to complete your kyc form on your dashboard to have a complete profile. </small>
          </div>


           <!-- Change Avatar -->
          <div class="col-sm-6 col-md-6 col-xs-12 col-lg-6" >
          <a  href="{{route('profilepictureclient_view')}}" > Change your profile picture </a>
          </div>
         
        </div>
      </div>         
      <br> <br> 
    </div>
    </center>
         
   
</x-guest-layout>
