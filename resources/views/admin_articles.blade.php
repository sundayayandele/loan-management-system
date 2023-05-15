<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FEATURES AND ARTICLES</title>
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://getbootstrap.com/examples/dashboard/dashboard.css"> -->
    <!--[if lt IE 9]
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <script src="http://cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
    <script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
        $('#nav').load('elements/nav.html');
    });
    </script>
  </head>
  <body>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

<div class="grey-bg container-fluid">
  <section id="minimal-statistics">
    <div class="row">
      <div class="col-12 mt-3 mb-1">
        <h4 class="text-uppercase">Payments Analytics</h4>
        <p>Statistics on incoming payments, today's payments and missed payments.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-xl-4 col-sm-6 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="fas fa-money-bill-wave primary font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                  <h3><a href="{{route('users.index')}}">{{\App\Models\reg_employee_mst::count()}}</a></h3>
                  <span>Incoming payments</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="fas fa-pound-sign warning font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                  <h3><a href="{{route('messages')}}">{{\App\Models\message::count()}}</a></h3>
                  <span>Todays Payments</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="fas fa-money-check-alt success font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                  <h3> <h3><a href="{{route('emailsub')}}">{{\App\Models\emailsubscription::count()}}</a></h3></h3>
                  <span>Missed Payments</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>      
    </div>













    <div class="row">
      <div class="col-12 mt-3 mb-1">
        <h4 class="text-uppercase">Web Analytics</h4>
        <p>Statistics on users, emails, messages and loans.</p>
      </div>
    </div>


    <div class="row">
      <div class="col-xl-4 col-sm-6 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="fas fa-tachometer primary font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                  <h3><a href="{{route('users.index')}}">{{\App\Models\reg_employee_mst::count()}}</a></h3>
                  <span>Users</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="icon-speech warning font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                  <h3><a href="{{route('messages')}}">{{\App\Models\message::count()}}</a></h3>
                  <span>Messages</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="icon-graph success font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                  <h3> <h3><a href="{{route('emailsub')}}">{{\App\Models\emailsubscription::count()}}</a></h3></h3>
                  <span>Emails</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>      
    </div>

 
     
    <div class="row">
      <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
                <h3><a href="{{route('active_loans')}}">{{\App\Models\web_loan_application::where('approved',"=",1)->count()}}</a></h3>
                  <span>Active Loans</span>
                </div>
                <div class="align-self-center">
                  <i class="fas fa-money font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
                <h3><a href="{{route('pending_loans')}}">{{\App\Models\web_loan_application::where('approved',"=",2)->count()}}</a></h3>
                  <span>Pending Loans</span>
                </div>
                <div class="align-self-center">
                  <i class="icon-user success font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
                <h3><a href="{{route('active_loans')}}">{{\App\Models\web_loan_application::where('approved',"=",3)->count()}}</a></h3>
                  <span>Denied Loans</span>
                </div>
                <div class="align-self-center">
                  <i class="fas fa-ban warning font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>     
    </div>
  
    <div class="row">
      <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
                <h3><a href="">K{{\App\Models\web_loan_application::where('approved',"=",1)->where('loan_type',"=",1)->sum('amount')}}</a></h3>
                  <span>Disbursed - Payroll</span>
                </div>
                <div class="align-self-center">
                  <i class="fas fa-wallet primary font-large-2 float-right"></i>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
                <h3><a href="">K{{\App\Models\web_loan_application::where('approved',"=",1)->where('loan_type',"=",2)->sum('amount')}}</a></h3>
                  <span>Disbursed - Private</span>
                </div>
                <div class="align-self-center">
                  <i class="fas fa-wallet warning font-large-2 float-right"></i>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
  
      <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
                <h3><a href="">K{{\App\Models\web_loan_application::where('approved',"=",1)->where('loan_type',"=",3)->sum('amount')}}</a></h3>
                  <span>Disbursed - Auto</span>
                </div>
                <div class="align-self-center">
                  <i class="fas fa-money success font-large-2 float-right"></i>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
      







      


      
    </div>
  </section>
  




</div>
<!--Charts For Total Funds Disbursed-->

<div class="row">
  <div class="col-xl-6">
    <div class="">
        {!! $chart->container() !!}
    </div>
    </div>

    <div class="col-xl-6">
    <div class="">
        {!! $chart_collections->container() !!}
    </div>
    </div>




  </body>
</html>
