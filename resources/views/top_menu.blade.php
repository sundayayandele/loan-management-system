<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!--Fontawesome--> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--Data mask--> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<!-- Bootstrap Datepicker library -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!--Fontawsome--> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--End fontawesome-->

<!--date picker library--> 


	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>{{config('app.name')}}</title>

	<link href="{{asset('dashboardassets/css/app.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
@include('sweetalert::alert')
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="{{route('dashboard')}}">
          <span class="align-middle">Menu Dashboard</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="{{route('dashboard')}}">
              <i class="fas fa-sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>


					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('profilec', encrypt(Auth::user()->employee_id))}}">
              <i class="fas fa-user" ></i> <span class="align-middle" style="color:white">Personal Profile</span>
            </a>
					</li>


					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('loanapplication',encrypt(Auth::user()->employee_id))}}">
              <i class="fas fa-copy" ></i> <span class="align-middle" style="color:white">Loan Application</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('loan_history')}}">
              <i class="fas fa-file" ></i> <span class="align-middle" style="color:white">Loan History</span>
            </a>
					</li>


					

                   


					<li class="sidebar-item" >
						<a class="sidebar-link" href="{{route('settlement_forms')}}">
              <i class="fas fa-file" ></i> <span class="align-middle" style="color:white">Settlements</span>
            </a>
					</li>

				
					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('collectionsView')}}">
              <i class="fas fa-credit-card" ></i> <span class="align-middle" style="color:white">Payments</span>
            </a>
					</li>



					

					

				
					

				
					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('checkpayments')}}">
              <i class="fas fa-credit-card" ></i> <span class="align-middle" style="color:white">Transactions</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="mailto:instafinance@gmail.com">
              <i class="fas fa-question-circle"></i> <span class="align-middle" style="color:white">help</span>
            </a>
					</li>
				</ul>

				<div class="sidebar-cta">
					<div class="sidebar-cta-content">
						<strong class="d-inline-block mb-2">Download our Android App</strong>
						<div class="mb-3 text-sm">
							Are you looking for a mobile app component? Download it for free here.
						</div>
						<div class="d-grid">
							<a href="upgrade-to-pro.html" class="btn btn-primary">Download</a>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<!--Main Page-->

		<div class="main">
						<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>
		

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						
						
						<li class="nav-item dropdown">
							
						<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
						
							{{Auth::user()->name}} <i id="usericon" class="fas fa-user-shield" style="font-size:26px"></i>

							<img id="userprofile" src="{{asset('attatchments_loans/'.Auth::user()->profilepic)}}" style="width:80px; height:80px; border-radius:100%"/>
</a>
							<div class="dropdown-menu dropdown-menu-end">
								<!--Profile Route-->
                                <a class="dropdown-item" href="{{route('profilec', encrypt(Auth::user()->employee_id))}}">
              <i class="align-middle fas fa-user" ></i> <span class="align-middle"> Personal Profile</span>
            </a>	
								<!--End profile route-->	



							
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="{{route('password.request')}}"><i class="align-middle me-1" data-feather="settings"></i> Change password</a>
                                <hr>
								<form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>



								
								<div class="dropdown-divider"></div>
								
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
			
		


<center>

 <!--Successs Application-->
 @if (session('status'))
      <div class="alert alert-success w-75">
         {!! session('status') !!}
      </div>
@endif


 <!--Successs KYC FORM Application-->
 @if (session('kyc'))
      <div class="alert alert-success w-75">
         {!! session('kyc') !!}
      </div>
@endif


<!--If Multiple loan numbers are detected in the database-->
@if (session('wrongloannumber'))
      <div class="alert alert-danger w-75">
         {!! session('wrongloannumber') !!}
      </div>
@endif



<!--If KYC Invalid-->
@if (session('invalidKYC'))
      <div class="alert alert-danger w-75">
         {!! session('invalidKYC') !!}
      </div>
@endif




<!--Show KYC Form error if user tries to access loanAmortisation/analysis without submitting KYC-->
@if (session('kycError'))
      <div class="alert alert-danger w-75">
         {!! session('kycError') !!}
      </div>
@endif



<!--When a Client has a pending loan and tries to reapply (detected on bank method controller) -->
@if (session('pendingb'))
      <div class="alert alert-danger w-75">
         {!! session('pendingb') !!}
      </div>
@endif



<!--When a Client has a pending loan and tries to reapply (detected on loan method controller) -->
@if (session('pendingl'))
      <div class="alert alert-danger w-75">
         {!! session('pendingl') !!}
      </div>
@endif



<!--profilepicture set Successsfully-->
@if (session('profilepicture'))
      <div class="alert alert-success w-75">
         {!! session('profilepicture') !!}
      </div>
@endif




</center>

					


<!--Check if the profile picture has been uploaded-->
<input type="hidden" value="{{Auth::user()->profilepic}}" id="profilepicture"/>


<script>




//Check if profile picture is present and hide the logo else show the logo
//if the profile picture is not uploaded yet
let profilepic = document.getElementById("profilepicture").value;
        if(profilepic.length >= 1){
            document.getElementById("usericon").style.display="none";	
           
        }
        else{
            document.getElementById("userprofile").style.display="none";	   
        }

	</script>


<!--Import the blade here-->
