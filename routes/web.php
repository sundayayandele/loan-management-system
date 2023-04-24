<?php

use App\Http\Controllers\ActiveLoansController;
use App\Http\Controllers\DeniedLoansController;
use App\Http\Controllers\PendingLoansController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loanapp;
use App\Http\Controllers\RegisteredUsersController;

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




## paymentscheck status route submit by submitting the loan number   
Route::get('payments_history/{id}', [loanapp::class, 'checkpaymentstatus'])
                ->middleware('auth')->name('checkpayments');



## Articles submission by admin
Route::post('/articles', [loanapp::class, 'admin_articles'])
->middleware('auth')->name("admin_articles");


    

## Get all clients and potential clients who subscribed for the email subscription to
## be recieving updates from the System (ADMIN ONLY)
Route::get('/emailsub', [loanapp::class, 'emailsub'])
->middleware('auth','admin')->name("emailsub");



## Read Clients Messages and queiries which were sent from the Web (ADMIN ONLY)
Route::get('/messages', [loanapp::class, 'message'])
->middleware('admin','auth')->name("messages");


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

                      
## Loan Analysis View Armotization 
Route::get('loanAnalysisView/{id}', [loanapp::class, 'loanAnalysisView'])
->middleware('auth')->name('loanAnalysisView');

                        
## Loan Analysis Submit Armotization
Route::post('/loanAnalysisView/{id}', [loanapp::class, 'loanAnalysis'])
->middleware('auth')->name('loanAnalysis_submit');

                  
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


##Loan Applications - Find attachments (ADMINS ONLY)
Route::get('find_attachments/{id}', [loanapp::class, 'find_attachments'])
->middleware('auth','admin')->name('find_attachments');




##Loan Applications - Find attachments (ADMINS ONLY)
Route::get('find_attachments', [loanapp::class, 'find_attachments'])
->middleware('auth','admin')->name('approved');



## Loan Applications - Approve (ADMINS ONLY)
Route::get('approve_loan/{id}', [loanapp::class, 'approve'])
->middleware('auth','admin')->name('approve');


## Loan Applications - Denie Approve (ADMINS ONLY)
Route::get('denied_loan_application/{id}', [loanapp::class, 'denie'])
->middleware('auth','admin')->name('denie');

     
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
