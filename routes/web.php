<?php

use App\Http\Controllers\ActiveLoansController;
use App\Http\Controllers\DeniedLoansController;
use App\Http\Controllers\PendingLoansController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\UploadSettlementsFormsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\RolesToPermissions;
use App\Http\Controllers\RolesUsersController;
use App\Http\Controllers\LoanApprovalsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loanapp;
use App\Http\Controllers\RegisteredUsersController;
use App\Http\Controllers\RemindersController;
use App\Http\Controllers\LoanHistoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

## Call the personal details blade
Route::get('/personaldetails_blade', [loanapp::class, 'personaldetails_blade'])
                ->middleware('auth')->name('personaldetails_blade');


## personaldetails route submit   
Route::post('kyc_personaldetails/{id}', [loanapp::class, 'personaldetails'])
                ->middleware('auth')->name('personaldetails');


## Call the next of kin Blade
Route::get('/nextofkindetails', function(){
    return view('nextofkindetails'); 
})->middleware('auth')->name('nextofkindetails');    


## nextofkindetails route submit   
Route::post('kyc_nextofkindetails/{id}', [loanapp::class, 'nextofkindetails'])
                ->middleware('auth')->name('nextofkind');


## Call the Bank details Blade
Route::get('/bankdetails', function(){
    return view('bankdetails'); 
})->middleware('auth')->name('bankdetails'); 




## Call the signature View
Route::get('/signature', function(){
    return view('ClientSignature.create'); 
})->middleware('auth');//->name('signature'); 




## bankdetails route submit   
Route::post('bankdetails/{id}', [loanapp::class, 'bankdetails'])
                ->middleware('auth')->name('bank_submit');


## Call the employer details Blade
Route::get('/employerdetails', function(){
    return view('employerdetails'); 
})->middleware('auth')->name('employerdetails');                 



## Employer route submit   
Route::post('employerdetails/{id}', [loanapp::class, 'employerdetails'])
                ->middleware('auth')->name('employerdetails_submit');



                
## Call the attatchments details Blade
Route::get('/attatchments', function(){
    return view('attatchments'); 
})->middleware('auth')->name('attatchments');   



## Attatchments route submit   
Route::post('attatchments/{id}', [loanapp::class, 'attatchments'])
                ->middleware('auth')->name('attatchments_submit');




##Transaction Histories
Route::get('transaction_histories', [loanapp::class, 'transaction_histories'])
                ->middleware('auth')->name('transaction_histories');                


## paymentscheck status route submit by submitting the loan number   
Route::get('checkpayments', [loanapp::class, 'checkpaymentstatus'])
                ->middleware('auth')->name('checkpayments');



## Articles submission by admin
Route::post('/articles', [loanapp::class, 'admin_articles'])
->middleware('auth')->name("admin_articles");


    

## Get all clients and potential clients who subscribed for the email subscription to
## be recieving updates from the System (ADMIN ONLY)
Route::get('/emailsub', [loanapp::class, 'emailsub'])
->middleware('auth','admin')->name("emailsub");

## Retrieve all emails via AJAX 
Route::get('/emails-all', [loanapp::class, 'all_emails'])
->name('all_emails'); 


## Read Clients Messages and queiries which were sent from the Web (ADMIN ONLY)
Route::get('/messages', [loanapp::class, 'message'])
->middleware('admin','auth')->name("messages");

## Retrieve all messages via AJAX 
Route::get('/messages-all', [loanapp::class, 'all_messages'])
->name('all_messages');


## profile client  
Route::get('profileclient/{id}', [loanapp::class, 'profileclient'])
                ->middleware('auth')->name('profilec');



                
 ## Show profile picture route client  
Route::get('/profilepictureclient', function () {
    return view('profilepictureclient');
})->middleware('auth')->name("profilepictureclient_view");



## Show profile picture route submit client  
Route::post('profilepictureclient/{id}', [loanapp::class, 'profilepictureclient'])
->middleware('auth')->name('profilepictureclient');




                              
## Loan Application
Route::get('application/{id}', [loanapp::class, 'loanapplication'])
->middleware('auth')->name('loanapplication');

                          
## Loan Application submit
Route::post('/web_loan_application/{id}', [loanapp::class, 'web_loan_application'])
->middleware('auth')->name('web_loan_application');


## Settlements Forms Downloads 
Route::get('settlements_forms_downloads', [loanapp::class, 'settlements_forms_downloads'])
->middleware('auth')->name('settlements_forms_downloads');

                      
## Loan Analysis View Armotization 
Route::get('settlement_forms', [loanapp::class, 'settlement_forms'])
->middleware('auth')->name('settlement_forms');

                        



                  
## Loan Customer Profile 
Route::get('customer_profile/{id}', [loanapp::class, 'analyticsView'])
->middleware('auth')->name('analyticsView');

## Loan Analytics Customer Profile Submit
Route::post('analytics_route/{id}', [loanapp::class, 'analytics'])
->middleware('auth')->name('analytics');


## Collections view
Route::get('/collectionsView', function(){
return view("collectionsView");
})->middleware('auth')->name('collectionsView'); 

## Collections Post
Route::post('/collectionsPost', [loanapp::class, 'collectionsPost'])
->middleware('auth')->name("collectionsPost");


## articles and updates route to controller
Route::get('/articles', [loanapp::class, 'articles_view']);




                              
## Loan Application
Route::get('application/{id}', [loanapp::class, 'loanapplication'])
->middleware('auth')->name('loanapplication');

                          
## Loan Application submit
Route::post('/loanapplication/{id}', [loanapp::class, 'loanSubmit'])
->middleware('auth')->name('loansubmit');



## Loan Applications Review (ADMINS ONLY)
Route::get('review', [loanapp::class, 'review'])
->middleware('auth','admin')->name('review');




##Loan Applications - Review Verfied Loans (ADMINS ONLY)
Route::get('reviewed_loans', [loanapp::class, 'reviewed_loans'])
->middleware('auth','admin')->name('reviewed_loans');



## Loan Applications - Approve (ADMINS ONLY)
Route::post('approve_or_denie', [loanapp::class, 'approve'])
->middleware('auth','admin')->name('approve_or_denie');


    
## Regisered Users - CRUD - (ADMINS ONLY)
Route::resource('users', RegisteredUsersController::class)
->middleware('auth','admin');     

## Retrieve all registeeed users via AJAX 
Route::get('/users-all', [RegisteredUsersController::class, 'all_users'])
->name('all_users'); 


## Active Loans
Route::get('active-loans', [ActiveLoansController::class,'index'])
->middleware('auth')     
->name('active_loans');
## Retrieve all active loans via AJAX 
Route::get('/active-all', [ActiveLoansController::class, 'active_loans'])
->name('all_active_loans'); 


## Denied Loans
Route::get('denied-loans', [DeniedLoansController::class,'index'])
->middleware('auth')     
->name('denied_loans');
## Retrieve all denied loans via AJAX 
Route::get('/denied-all', [DeniedLoansController::class, 'denied_loans'])
->name('all_denied_loans'); 



## Pending Loans
Route::get('pendng-loans', [PendingLoansController::class,'index'])
->middleware('auth')     
->name('pending_loans');
## Retrieve all pending loans via AJAX 
Route::get('/pending-all', [PendingLoansController::class, 'pending_loans'])
->name('all_pending_loans'); 


## Update Payments - CRUD - (ADMINS ONLY)
Route::resource('payments', PaymentsController::class)
->middleware('auth','admin');  

## Update Settlements - CRUD - (ADMINS ONLY)
Route::resource('settlements', UploadSettlementsFormsController::class)
->middleware('auth','admin');  

## Roles - CRUD - (ADMINS ONLY)
Route::resource('roles', RolesController::class)
->middleware('auth','admin');  


## Assign Permissions To Users - CRUD - (ADMINS ONLY)
Route::resource('roles_permissions', RolesToPermissions::class)
->middleware('auth','admin');  


## Assign Roles To Users - CRUD - (ADMINS ONLY)
Route::resource('roles_users', RolesUsersController::class)
->middleware('auth','admin'); 


## Show View For Revoking Roles From Users - (ADMINS ONLY)
Route::get('roles_users_remove', [RolesUsersController::class,'remove'])
->middleware('auth','admin')
->name('roles_users.remove'); 


## Revoke Roles From Users - (ADMINS ONLY)
Route::post('roles_users_revoke', [RolesUsersController::class,'revoke'])
->middleware('auth','admin')
->name('roles_users.revoke'); 



## Loan Approvals - DLO
Route::resource('loan_approvals', LoanApprovalsController::class)
->middleware('auth');  


## Reminders Notification
Route::resource('reminders', RemindersController::class)
->middleware('auth'); 



## Download Compressed Loan Agreement Forms
Route::get('downloading_loan_agreement_forms', [loanapp::class,'downloadZip'])
->middleware('auth')
->name('downloading_loan_agreement_forms'); 


## Terms Payroll
Route::get('terms_payroll/{loan_number}', [loanapp::class,'terms_payroll'])
->middleware('auth')
->name('terms_payroll'); 

## Terms Auto
Route::get('terms_auto/{loan_number}', [loanapp::class,'terms_auto'])
->middleware('auth')
->name('terms_auto'); 


## Terms Private
Route::get('terms_private/{loan_number}', [loanapp::class,'terms_private'])
->middleware('auth')
->name('terms_private'); 



## Export
Route::get('/export_borrower', [loanapp::class,'export_borrower'])
->middleware('auth')
->name('export_borrower'); 





## Verify Loan Application
Route::post('verify_loan_application', [loanapp::class,'verify_loan_application'])
->middleware('auth')
->name('verify_loan_application'); 


## Loan History
Route::get('loan-history', [LoanHistoryController::class,'index'])
->middleware('auth')     
->name('loan_history');
## Retrieve all denied loans via AJAX 
Route::get('/all_applied_loans', [LoanHistoryController::class, 'loan_history'])
->name('all_applied_loans'); 




## If the Called Route is not found call this Route
Route::fallback(function () {
    return view('Whoops!!!! this link does not exist');
});







Route::get('/', function () {
    return view('welcome');
});

## Employees Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Verified 

## Admin Dashboard
Route::get('/admindashboard', function () {
    return view('admindashboard');
})->middleware(['auth','admin'])->name('admindashboard');


require __DIR__.'/auth.php';
