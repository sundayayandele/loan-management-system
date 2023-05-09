<x-guest-layout>
   
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

      




       
<style>

body {
    background: #eee
}

#regForm {
    background-color: #ffffff;
    margin: 0px auto;
    font-family: Raleway;
    padding: 40px;
    border-radius: 10px
}

#register{

  color: #6A1B9A;
}

h1 {
    text-align: center
}

input {
    padding: 10px;
    width: 100%;
    font-size: 17px;
    font-family: Raleway;
    border: 1px solid #aaaaaa;
    border-radius: 10px;
    -webkit-appearance: none;
}



.tab input:focus{

  border:1px solid #6a1b9a !important;
  outline: none;
}

input.invalid {
 
    border:1px solid #e03a0666;
}

.tab {
    display: none
}

button {
    background-color: #6A1B9A;
    color: #ffffff;
    border: none;
    border-radius: 50%;
    padding: 10px 20px;
    font-size: 17px;
    font-family: Raleway;
    cursor: pointer
}

button:hover {
    opacity: 0.8
}

button:focus{

  outline: none !important;
}

#prevBtn {
    background-color: #bbbbbb
}


.all-steps{
      text-align: center;
    margin-top: 30px;
    margin-bottom: 30px;
    width: 100%;
    display: inline-flex;
    justify-content: center;
}

.step {
       height: 40px;
    width: 40px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 15px;
    color: #6a1b9a;
    opacity: 0.5;
}

.step.active {
    opacity: 1
}


.step.finish {
   color: #fff;
   background: #6a1b9a;
   opacity: 1;

}



.all-steps {
    text-align: center;
    margin-top: 30px;
    margin-bottom: 30px
}

.thanks-message {
    display: none
}
</style>



<div class="container">
    <div class="row d-flex justify-content-center align-items-center">
        
            
      
      
        <div class="col-md-8">

<center>
<img src="{{asset('images/eliana_logos/Capture.JPG')}}" width="160" height="100" alt="ElianaCashXpress" style="margin-top:20px;">
<br><br>
</center>
       


            <form id="regForm" method="POST" action="{{ route('register') }}">
             @csrf  
          <center>
                    <h1 id="register">Eliana CashXpress</h1>
                    <h4>Get a Loan From as Low as: </h4>
                   
                        <a href="#" class="btn btn-info btn-lg" style="font-weight:bold;font-size:16px">
                            <span class="glyphicon glyphicon-circle-arrow-right"></span> K500
                          </a>
                    
                   
                </center>
                
  <!-- Session Status -->
  <x-auth-session-status class="mb-4" :status="session('status')" />

<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />
 <!--Warnings--> 
        
@if (Session('warnings'))
<div class="alert alert-danger alert-dismissible fade show " role="alert">
     <div class="font-medium text-600">
            <i class="fa-regular fa-bell"></i>
        <strong>Hello there!</strong> You have some bad feedbacks
        </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
           
            <div>
            {!! Session('warnings') !!}
    </div>
        
          </div>
     
@endif

                <div class="all-steps" id="all-steps"> 
                  <span class="step"><i class="fa fa-user"></i></span> 
                  <span class="step"><i class="fa fa-map-marker"></i></span>
                  <span class="step"><i class="fa fa-phone"></i></span>
                  <span class="step"><i class="fa fa-envelope"></i></span>
                  <span class="step"><i class="fa fa-id-card"></i></span>
                  <span class="step"><i class="fa fa-lock"></i></span>
                  <span class="step"><i class="fa fa-tachometer"></i></span>
                </div>

                <div class="tab">
                 
<!--Loan Tab-->    
<div class="row">
    <div class="col-lg-6">
<div class="form-group">
            <label for="name"> Loan Amount </label>

            <input id="name" class="form-control" type="number" onkeyup="calculateEMI()" id="amount" name="loan_amt"  />
            </div> 
</div>

        
      
 

            <!-- Tenure Months -->
            <div class="col-lg-6">
<div class="form-group">
            <label for="name">Pick Months </label>
<!--Show the number of months to the user--> 
<select class="form-control" onchange="calculateEMI()" name="tenure_months" id="months" required>
  <option value=1>1 Month </option>
  <option value=2>2 Months</option>
  <option value=3>3 Months</option>
  <option value=4>4 Months</option>
  <option value=5>5 Months</option>
  <option value=6>6 Months </option>
 </select>
</div> 

</div>
</div>
<!-- 

            <div class="form-group">
  <label for="company_percentage">Facility Fee - For Loans between (K200-K1000)</label>
  <input type="number" name="lower_facility_fee" value="100" class="form-control"  id="lower_facility_fee" readonly>
    <small>The facility fee of K100 will be added to the loan amount(s) between K200 to K1000</small>  
  </div>
  
  <div class="form-group" style="display:none">
  <label for="company_percentage">Facility Fee - For Loans between (K1001 - K10,000)</label>
  <input type="number" name="higher_facility_fee" value="100" class="form-control"  id="higher_facility_fee" readonly>
    <small>The facility fee of K100 will be added to the loan amount(s) between K1001 - K10,000</small>  
  </div>
-->



 <!-- Loan Repayments Amount -->
 <div class="row">
 <div class="col-lg-6">
<div class="form-group">
            <label for="Total Repayments Amount"> Total Repayments </label>

            <input id="name" class="form-control" type="number" id="total_repayments_amt" name="total_repayments_amt" readonly />
            </div> 

</div>

             <!-- EMI -->
             <div class="col-lg-6">
<div class="form-group">
            <label for="EMI">EMI </label>

            <input id="name" class="form-control" type="number" id="emi"  name="emi"  readonly/>
            </div> 
</div>
</div>

          
<!--Loan Percent-->  
<input id="loan_percent" class="form-control" type="hidden" id="hidden" value="6.69"  id="loan_percent" readonly/>

<!-- Reference Payment Mode -->
<div class="form-group">
            <label for="name">Pick Payment Mode </label>

        
<!--Show Payments Modes to the user--> 
<select class="form-control" name="payment_mode_id" required>
   
<option ><-- Select Payment Mode --></option>
  <option value="Bank transfer">Bank Transfer</option>
  <option value="Airtel Money">Airtel Money</option>
  <option value="Mtn Money">Mtn Money</option>
  <option value="Cheque">Cheque</option>
  <option value="Cash">Cash</option>
  
   
 </select>
            </div> 





            
</div>



<!--End Loan Tab-->




              


                <div class="tab">
                  <h6>What's your Address?</h6>
                    <p><input type="text" placeholder="Address" autofocus oninput="this.className = ''" name="address"></p>
                    
                </div>
                <div class="tab">
                    <h6>What's your Phone Number?</h6>
                    <p><input type="number" value="{{old('number')}}" autofocus placeholder="Phone Number" oninput="this.className = ''" name="phone"></p>
                 
                </div>
                <div class="tab">
                    <h6>Enter Email ?</h6>
                    <p><input type="email" placeholder="Email" value="{{old('email')}}" autofocus oninput="this.className = ''" name="email"></p>
                </div>

                <div class="tab">
                    <h6>What's your NRC Number?</h6>
                    <p><input  type="text" placeholder="NRC" value="{{old('nrc')}}" autofocus oninput="this.className = ''" name="nrc"></p>
                </div>


                <div class="tab">
                    <h6>Create Password</h6>
                    <p><input type="password" placeholder="Atleast 8 characters" oninput="this.className = ''" name="password" value="{{old('password')}}" autofocus></p>
                </div>
               <br>
                <div class="thanks-message text-center" id="text-message"> <img src="{{asset('images/eliana_logos/Capture.JPG')}}" width="120" height="100" class="mb-4">
                    <h3>Thank you for your feedback!</h3> <span>You are one step away from getting your Loan! Click on the Submit button below to get started.</span>
              <br>
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
                <div style="overflow:auto;" id="nextprevious">
                    <div style="float:right;">
                      <button type="button" id="prevBtn" onclick="nextPrev(-1)"><i class="fa fa-angle-double-left"></i></button> 
                      <button type="button" id="nextBtn" onclick="nextPrev(1)"><i class="fa fa-angle-double-right"></i></button> </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
   var currentTab = 0;
              document.addEventListener("DOMContentLoaded", function(event) {


              showTab(currentTab);

              });

              function showTab(n) {
              var x = document.getElementsByClassName("tab");
              x[n].style.display = "block";
              if (n == 0) {
              document.getElementById("prevBtn").style.display = "none";
              } else {
              document.getElementById("prevBtn").style.display = "inline";
              }
              if (n == (x.length - 1)) {
              document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
              } else {
              document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
              }
              fixStepIndicator(n)
              }

              function nextPrev(n) {
              var x = document.getElementsByClassName("tab");
              if (n == 1 && !validateForm()) return false;
              x[currentTab].style.display = "none";
              currentTab = currentTab + n;
              if (currentTab >= x.length) {
            
              document.getElementById("nextprevious").style.display = "none";
              document.getElementById("all-steps").style.display = "none";
              document.getElementById("register").style.display = "none";
              document.getElementById("text-message").style.display = "block";




              }
              showTab(currentTab);
              }

              function validateForm() {
                   var x, y, i, valid = true;
                   x = document.getElementsByClassName("tab");
                   y = x[currentTab].getElementsByTagName("input");
                   for (i = 0; i < y.length; i++) {
                       if (y[i].value == "") {
                           y[i].className += " invalid";
                           valid = false;
                       }


                   }
                   if (valid) {
                       document.getElementsByClassName("step")[currentTab].className += " finish";
                   }
                   return valid;
               }

               function fixStepIndicator(n) {
                   var i, x = document.getElementsByClassName("step");
                   for (i = 0; i < x.length; i++) {
                       x[i].className = x[i].className.replace(" active", "");
                   }
                   x[n].className += " active";
               }
</script>
















   
</x-guest-layout>
