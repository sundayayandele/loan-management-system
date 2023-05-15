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
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!--Fontawesome--> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!--Fontawsome--> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--End fontawesome-->


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
				<a class="sidebar-brand" href="#">
          <span class="align-middle">Menu Dashboard</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Web Analytics
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="{{route('admindashboard')}}">
              <i class="align-middle fas fa-tachometer"></i> <span style="color:white">Dashboard</span>
            </a>
					</li>


                    <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('emailsub')}}">
              <i class="align-middle fas fa-envelope" ></i> <span class="align-middle" style="color:white">Email Subscribers</span>
            </a>					
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('messages')}}">
              <i class="align-middle fas fa-sms" ></i> <span class="align-middle" style="color:white">Messages</span>
            </a>
				</li>


					<li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('users.index')}}">
              <i class="align-middle fas fa-users" ></i> <span class="align-middle" style="color:white">Registered Users</span>
            </a>					
					</li>


					<li class="sidebar-header">
						Loans
					</li>

					<li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('active_loans')}}">
              <i class="align-middle fas fa-money" ></i> <span class="align-middle" style="color:white">Active Loans</span>
            </a>					
					</li>

					<li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('denied_loans')}}">
              <i class="align-middle fas fa-ban" ></i> <span class="align-middle" style="color:white">Denied Loans</span>
            </a>					
					</li>

					<li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('pending_loans')}}">
              <i class="align-middle fas fa-clock-o" ></i> <span class="align-middle" style="color:white">Pending Loans</span>
            </a>					
					</li>

					<li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('payments.create')}}">
              <i class="align-middle fas fa-money" ></i> <span class="align-middle" style="color:white">Payments updates</span>
            </a>					
					</li>

					<li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('downloading_loan_agreement_forms')}}">
              <i class="align-middle fas fa-copy" ></i> <span class="align-middle" style="color:white">Loan Agreement Forms</span>
            </a>					
					</li> 


				

				
			<li class="sidebar-header">
						My Approvals
					</li>
					<li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('loan_approvals.index')}}">
              <i class="align-middle fas fa-check" ></i> <span class="align-middle" style="color:white">Review Loans - DLO</span>
            </a>
					</li>

			<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('review')}}">
              <i class="align-middle fas fa-copy" ></i> <span class="align-middle" style="color:white">Review Loans - CFO</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('reviewed_loans')}}">
              <i class="align-middle fas fa-copy" ></i> <span class="align-middle" style="color:white">Review Loans - ADMIN</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('settlements.create')}}">
              <i class="align-middle fas fa-upload" ></i> <span class="align-middle" style="color:white">Upload Settlements</span>
            </a>
					</li>


					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('roles.create')}}">
              <i class="align-middle fas fa-user-plus" ></i> <span class="align-middle" style="color:white">Roles</span>
            </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('roles_permissions.create')}}">
              <i class="align-middle fas fa fa-plus-square" ></i> <span class="align-middle" style="color:white">Permissions</span>
            </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('roles_users.create')}}">
              <i class="align-middle fas fa fa-user" ></i> <span class="align-middle" style="color:white">Users</span>
            </a>
					</li>


					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('roles_users.remove')}}">
              <i class="align-middle fas fa fa-ban" ></i> <span class="align-middle" style="color:white">Revoke Roles </span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('view_all_permissions')}}">
              <i class="align-middle fas fa-eye" ></i> <span class="align-middle" style="color:white">Users with Permissions</span>
            </a>
					</li>
					
			<li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('reminders.create')}}">
              <i class="align-middle fas fa-mobile-phone" ></i> <span class="align-middle" style="color:white">Send Text</span>
            </a>					
					</li>		
					

					<li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('export_borrower')}}">
              <i class="align-middle fas fa-share" ></i> <span class="align-middle" style="color:white">Export</span>
            </a>					
					</li>		
					


					<hr>
<center>
					<li class="sidebar-item">
   <!-- Log Out -->
   <form method="POST" action="{{ route('logout') }}">
                            @csrf
                   <button class="btn btn-danger">Log Out</button> 
                           
                        </form>

</center>
					
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
					
                               
                    <a class="dropdown-item" href="{{route('emailsub')}}">
              <i class="align-middle fas fa-envelope" ></i> <span class="align-middle"> Email Subscribers</span>
            </a>					
					
								<!--End profile route-->	



							
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="{{route('password.request')}}"><i class="align-middle me-1" data-feather="settings"></i> Change password</a>
                                <hr>

						<div class="dropdown-item">		
                        <!-- Log Out -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                   <button class="btn btn-danger">Log Out</button> 
                           
                        </form>
                    
</div>



								
								<div class="dropdown-divider"></div>
								
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
			
		




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
