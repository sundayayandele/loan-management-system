<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Models\ref_payment_mode;
use App\Models\ref_town_mst;
use App\Models\reg_employee_attachment;
use App\Models\reg_employee_mst;
use App\Models\transactionHistory;
use App\Models\emailsubscription;
use App\Models\message;
use App\Models\website_profile;
use App\Models\web_article;
use App\Models\web_loan_application;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Session;
use App\Notifications\approve;
use App\Notifications\denie;
use App\Models\Approvals;
use Illuminate\Support\Facades\Notification;
use DataTables;
class loanapp extends Controller
{


/**
     * KYC forms to be filled in by the client who wants to apply for a loan.
     * Call personaldetails view blade
     * Submit to personaldetails route
     * 
     * 
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */


public function personaldetails_blade(){
    $personal=ref_town_mst::all(); 
     return view('personaldetails')->with('personal',$personal);  
}

   
 
  public function personaldetails(Request $request,$id){
    $validate=validator::make($request->all(),[
        'name'=>['required','string'],
        'DateofBirth'=>['required'],
        'gender'=>['required','string'],
        'marital'=>['required','string'],
        'number'=>['required','numeric'],
        'address'=>['required','string'],
        'town'=>['required','string'],
        'province'=>['required','string'],
    ]);
   if ($validate->fails()){
    return Redirect::back()->withErrors($validate);
   }
   else{
    $personalDetails=reg_employee_mst::find(decrypt($id));
    $personalDetails->dob=$request->input('DateofBirth');
    $personalDetails->gender=$request->input('gender');
    $personalDetails->marital_status=$request->input('marital');
    $personalDetails->phone=$request->input('number');
    $personalDetails->address=$request->input('address');
    $personalDetails->town_id=$request->input('town');
    $personalDetails->province_id=$request->input('province');
    $personalDetails->save();
    return redirect()->route('nextofkindetails');
 }
}  




/**
     * KYC forms to be filled in by the client who wants to apply for a loan.
     * Next of Kin Details
     * 
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */


  public function nextofkindetails(Request $request,$id){
    $validate=validator::make($request->all(),[
        'firstnamenext'=>['required','string'],
        'lastnamenext'=>['required','string'],
        'relationshipnext'=>['required','string'],
        'physicaladdressnext'=>['required','string'], 
        'phonenumbernext'=>['required','numeric'],        
    ]);
   if ($validate->fails()){
    return Redirect::back()->withErrors($validate)->withInput();
   }
   else{
    $nextofkingDetails=reg_employee_mst::find(decrypt($id));
    $nextofkingDetails->next_of_kin_fname=$request->input('firstnamenext');
    $nextofkingDetails->next_of_kin_lname=$request->input('lastnamenext');
    $nextofkingDetails->next_of_kin_relationship=$request->input('relationshipnext');
    $nextofkingDetails->next_of_kin_address=$request->input('physicaladdressnext');
    $nextofkingDetails->next_of_kin_phone=$request->input('phonenumbernext');
    $nextofkingDetails->save();
    return redirect()->route('employerdetails');
 }
}  





/**
     * KYC forms to be filled in by the client who wants to apply for a loan.
     * Employer Details 
     * 
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     * 
     */


public function employerdetails(Request $request,$id){
    $validate=validator::make($request->all(),[
        'employername'=>['required','string'],
        'employeenumber'=>['required','numeric'],
        'netmonthly'=>['required','numeric'],
             
    ]);
   if ($validate->fails()){
    return Redirect::back()->withErrors($validate)->withInput();
   }
   else{
    $employerDetails=reg_employee_mst::find(decrypt($id));
    $employerDetails->company_id=$request->input('employername');
    $employerDetails->mannumber=$request->input('employeenumber');
    $employerDetails->net_salary=$request->input('netmonthly');
    $employerDetails->save();
    return redirect()->route('attatchments');
 }
}  





/**
     * KYC forms to be filled in by the client who wants to apply for a loan.
     * Attachments
     * 
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */


public function attatchments(Request $request,$id){
    $validate=validator::make($request->all(),[
        'nrc_file'=>'required|mimes:pdf|max:2048',
        'passportphoto'=>'required|mimes:pdf|max:2048',
        'payslip1'=>'required|mimes:pdf|max:2048',
        'payslip2'=>'required|mimes:pdf|max:2048',
        'utility'=>'required|mimes:pdf|max:2048',
                     
    ]);
   if ($validate->fails()){
    return Redirect::back()->withErrors($validate)->withInput();
   }
   else{
       //Submiting NRC File in reg_employee_attachments 
       $attachments_nrc = reg_employee_mst::find(decrypt($id));
       $nrc = new reg_employee_attachment;
       $nrc->attachment_name=$request->nrc_file->storeAs('nrc', $request->nrc_file->getClientOriginalName());
       $nrc->document_type_id=1;
       $nrc_submit = $attachments_nrc->reg_employee_attachment()->save($nrc);

       //Submiting Payslip File in reg_employee_attachments
       $attachments_payslip = reg_employee_mst::find(decrypt($id));
       $payslip = new reg_employee_attachment;
       $payslip->attachment_name=$request->payslip1->storeAs('latest_payslips', $request->payslip1->getClientOriginalName());
       $payslip->document_type_id=3;
       $kyc =  $attachments_payslip->reg_employee_attachment()->save($payslip);

       //Submiting utility attachments in reg_employee_attachments
       $attachments_utilities = reg_employee_mst::find(decrypt($id));
       $utility = new reg_employee_attachment;
       $utility->attachment_name=$request->utility->storeAs('utilities', $request->utility->getClientOriginalName());
       $utility->document_type_id=5;
       $utility = $attachments_utilities->reg_employee_attachment()->save($utility);
       return redirect()->route('bankdetails');

   }    
}  





/**
     * KYC forms to be filled in by the client who wants to apply for a loan.
     * Bank Details
     * KYC Forms Ends Here
     * 
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */


public function bankdetails(Request $request,$id){
    $validate=validator::make($request->all(),[
        'bankname'=>['required','string'],
        'branchname'=>['required','string'],
        'accountnumber'=>['required','numeric'],
        'accountname'=>['required','string'], 
        
    ]);
   if ($validate->fails()){
    return Redirect::back()->withErrors($validate)->withInput();
   }
   
else {
    $bankDetails=reg_employee_mst::find(decrypt($id));
    $bankDetails->bank_id=$request->input('bankname');
    $bankDetails->bank_branch_id=$request->input('branchname');
    $bankDetails->bank_account_no=$request->input('accountnumber');
    $bankDetails->bank_account_name=$request->input('accountname');
    $bankDetails->save();

   
   //Show that the form KYC has been submitted successfully
   return redirect('dashboard')->with('kyc', 'Your KYC form has been Submitted successfully');
    
}

}









/**
     * Loan Application Form Blade View.
     * 
     * 
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    
public function loanapplication($id){
    $profileclient=reg_employee_mst::find(decrypt($id));
    $employeeData=reg_employee_mst::where('email',"=",$profileclient->email)->firstOrFail();
    $refPaymentMode=ref_payment_mode::all();
    return view('loanapplication', compact('profileclient','employeeData','refPaymentMode'));
  
} 









/**
     * Loan Application Form to be filled in by the client who wants to apply for a loan.
     * 
     * 
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */

public function web_loan_application(Request $request,$id){
   
    $validate=validator::make($request->all(),[
        'loan_type'=>['required','string'],
        'employee_id'=>['required','numeric'],
        'company_id'=>['required','numeric'], 
        'tenure_months'=>['required','numeric'],         
        'loan_amt'=>['required','numeric'],  
        'payment_mode_id'=>['required','string'],   
        'mobile_money_no'=>['required','numeric'],   
        'mobile_money_name'=>['required','string'], 
         
    ]);
   if ($validate->fails()){
    return Redirect::back()->withErrors($validate)->withInput();
   }

   

/**
 * Generate the Loan Number in the system and save it in the database
 * If the Loan Number exists in the database tell the user to resubmit
 * 
**/
   $number = random_int(1000000000, 9999999999);
   $loannumber = decrypt($id).$number;

   if(web_loan_application::where('loan_number',"=",$loannumber)->exists()){
   
   return redirect('dashboard')->with('wrongloannumber', 'Invalid wrong Loan Number, try to reapply');     
  

} 


/**
 * Check if the user has already submitted a loan. 
 * If Yes Denie application and redirect back with Msg.
 * 
**/
   
   else if (web_loan_application::where('employee_id',"=",$request->employee_id)->exists()){
    return redirect('dashboard')->with('pendingl', 'It seems You have a pending Loan. First settle this Loan then you can apply later.');     
    } 

    
/**
 * Proceed with Loan submission if the above two conditions  
 * are not met and everything is ok.
 * 
**/

else{
    $loan_application= new web_loan_application;
    $loan_application->loan_type = $request->loan_type;
    $loan_application->employee_id = $request->employee_id;
    $loan_application->company_id = $request->company_id;
    $loan_application->months = $request->tenure_months;
    $loan_application->loan_amount = $request->loan_amt;
    $loan_application->payment_mode = $request->payment_mode_id;
    $loan_application->mobile_money_number = $request->mobile_money_no;
    $loan_application->mobile_monney_name = $request->mobile_money_name;
    $loan_application->loan_number = $loannumber;
    $loan_application->approved = 0;
    $loan_application->due_date = Carbon::now()->addMonths($request->tenure_months)->format('d-m-Y');
    $loan_application->save();

      
return redirect('dashboard')->with('status', 'Your Loan has been submitted successfully. Wait for the email confirmation once approved.'); 
    
    
}
}





/**
 * Check payments of the user from Loan settlements. 
 * Once a user has settled payments on the system
 * Using the Local Mobile Money integrated in our system
 * The system Local Mobile Money will send a request
 * To our callbackUrl and we will keep that data in 
 * the transactions_histories table 
 * 
 * 
**/


public function checkpaymentstatus(Request $request,$id){
    
    
    $checkpayments=transactionHistory::where('transaction_id',"=",decrypt($id))->paginate(2);
    return view('checkpayments')->with("checkpayments",$checkpayments);
  
}  






/**
     * Here follows the actions to be peformed by the Admin
     * Submiting of new articles on the Website's Landing Page 
     * 
     * 
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */

 

public function admin_articles(Request $request){
    $request->validate([
        'title' => ['required', 'string', 'max:255'],
        'body' => ['required', 'string', 'max:5000'],
        'image' => ['required', 'file', 'mimes:jpg,png,gif,jpeg'],
       ]);

       $article = new web_article;
       $article->title = $request->title;
       $article->body = strip_tags($request->body);
       $article->cover_page = $request->image->storeAs('articles_images', $request->image->getClientOriginalName());
       $article->created_by =  Auth::user()->firstname. " " . Auth::user()->lastname;
       $article->save();
      

    return Redirect::back()->with("published","Published Successfully");
  
}  







## Showing the articles to the viewers  who visits the Landing Page 

public function articles_view(Request $request){
   
       $articles =web_article::paginate(1);
       return view('news',compact('articles'));
      
}  








/**
     * Here follows the actions to be peformed by the Admin
     * Check Email Subscribers  
     * 
     * 
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */


public function all_emails(){
    $data = emailsubscription::get();
    
        return Datatables::of($data)
            ->addIndexColumn()  
            ->addColumn('email', function($data){
                return $data->email;
            })   
            ->addColumn('created_at', function($data){
                return date('d,F-Y',strtotime($data->created_at));
            })   

             
            ->rawColumns(['email','created_at','action'])
            ->make(true);
}






public function emailsub(){
    
    return view('Emails.index'); 
  
} 





/**
     * Here follows the actions to be peformed by the Admin
     * Check Messages sent by users from the main website 
     * 
     * 
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */

     public function all_messages(){
        $data = message::get();
        
            return Datatables::of($data)
                ->addIndexColumn()  
                ->addColumn('name', function($data){
                    return $data->name;
                })  
                ->addColumn('email', function($data){
                    return $data->email;
                })  
                ->addColumn('subject', function($data){
                    return $data->subject;
                })   
                ->addColumn('message', function($data){
                    return $data->message;
                })  
                ->addColumn('created_at', function($data){
                    return date('d,F-Y',strtotime($data->created_at));
                })   
    
                 
                ->rawColumns(['name','email','subject','message','created_at'])
                ->make(true);
    }
    



public function message(){
 
    return view('Messages.index');
   
  
} 







/**
     * Here follows the actions to be peformed by the Clients & Admin Sometimes
     * Check Your Profile  
     * 
     * 
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */   

 
public function profileclient($id){
    $profileclient=reg_employee_mst::find(decrypt($id));
    return view('profileclient')->with("profileclient",$profileclient);
   
  
} 





/**
     * Here follows the actions to be peformed by the Clients & Admin Sometimes
     * Submit Your Profile Picture  
     * 
     * 
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */



public function profilepictureclient(Request $request,$id){
    $validate=validator::make($request->all(),[
        'profilepicture'=>'required|mimes:jpg,jpeg,png|max:2048',
                     
    ]);

   if ($validate->fails()){
    return Redirect::back()->withErrors($validate)->withInput();
   }
   
       else{
        $profilepicture=reg_employee_mst::find(decrypt($id));
        $profilepicture->profilepic=$request->profilepicture->storeAs('profilepicture',$request->profilepicture->getClientOriginalName());
       
       ## Save profile picture
       $profilepicture->save();
       return redirect('dashboard')->with('profilepicture', 'Profile picture set Successfully');  
     }
    }  







/**
     * Here follows the actions to be peformed by the Client 
     * Loan Analysis  
     * 
     * 
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    


public function loanAnalysisView($id){
  //  $profileclient=reg_employee_mst::find(decrypt($id));
  $employeeData=reg_employee_mst::find(decrypt($id));

if (is_null($employeeData) || $employeeData->company_id == 0){
    return redirect('dashboard')->with('kycError', 'Fill In Your KYC Form First.'); 
    
}
else{
   return view('loanAnalysisView', compact('employeeData'));
}
   
  
  
} 


## Loan Analysis and Amortization submitted data

public function loanAnalysis(Request $request,$id){
       
    $loan_type = $request->loan_type;
    $loan_period = $request->company_id; 
    $loan_amount = $request->loan_amt;
    $loan_interest = "15%";
    $loan_period = $request->tenure_months;
    $loan_total_payments = (0.15*$loan_amount*$loan_period) + $loan_amount;
    $due_date = Carbon::now()->addMonths($loan_period)->format('d-m-Y'); 


## Check if company ID is filled or not

if (is_null($request->company_id)){
    return redirect('dashboard')->with('invalid_company_id', 'Please submit your KYC Forms First'); 
    
}


else{
  
   return view("results_amortisation",compact("loan_type","loan_period","loan_amount","loan_interest","loan_period","loan_total_payments","due_date"));
}   

    
}






/**
     * Here follows the actions to be peformed by the Client
     * Check Loan Profile  
     * 
     * 
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */


    
public function analyticsView($id){
    $profileclient=reg_employee_mst::find(decrypt($id));
    $employeeData=reg_employee_mst::where('email',"=",$profileclient->email)->first();
    $refPaymentMode=ref_payment_mode::all();
    return view('AnalyticsView', compact('profileclient','employeeData','refPaymentMode')); 
     
  
} 


## Loan Analytics Customer Profile View 
    
public function analytics(Request $request,$id){
    
    $loan_profile = reg_employee_mst::find(decrypt($id));
    $email = preg_replace("/(?!^).(?=[^@]+@)/", "*",$loan_profile->email);
    $phone = substr($loan_profile->phone,0,-6).str_repeat('*',4).substr($loan_profile->phone,8);
    $bank_account_no = substr($loan_profile->bank_account_no,0,-6).str_repeat('*',4).substr($loan_profile->bank_account_no,8);
    $nrc = substr($loan_profile->nrc,0,-4).str_repeat('*',4).substr($loan_profile->nrc,6);
   
   ## Checking Loan Status
   $loan_s = web_loan_application::where('employee_id',"=",decrypt($id))->first();
   

   
   if (is_null($loan_profile) || is_null($loan_s)){
    return redirect('dashboard')->with('invalidKYC', 'You need to apply for a Loan First'); 
    }

else{
    $loan_status = $loan_s->approved;
return view("results_analytics",compact("loan_profile","email","phone","nrc","loan_status","bank_account_no"));

}

}







/**
     * Here follows the actions to be peformed by the Admin
     * Review Loan Applications which have not been approved 
     * 
     * 
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */


public function review(){
$loan_status = Approvals::where('cfo_decision', "=", 0)->first();
$loan_applications = web_loan_application::where('loan_number', "=", $loan_status->loan_number)->where('approved',"=",5)->orWhere('approved',"=",6)->first();
return view('LoanApprovals_CFO.index',[
    'loan_applications' =>     $loan_applications,
    'loan_status' => $loan_status
]);
//return view('loan_approval', compact('loan_applications'));
  
}




/**
     * Here follows the actions to be peformed by the Admin
     * Review Loan Applications Attachments For Each Employee 
     * Retrieving KYC attachments associated with each user 
     * (NRC,Payslip, and Utility)
     * 
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */



public function find_attachments($id){
$loan_applications = reg_employee_mst::find(decrypt($id));
$reg = $loan_applications->reg_employee_attachment()->get(); 
return view('review_attachments',compact('reg'));
  

}









/**
     * Here follows the actions to be peformed by the Admin
     * Approve Loan Applications if satsfied 
     * 
     * 
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */


public function approve($id){
    $loan_applications = web_loan_application::where('employee_id',"=",decrypt($id))->firstOrFail();
    $loan_applications-> approved = 1;
    $loan_applications->save();
    session::flash('approved', 'Loan Approved Successfully');

    ## Send Email Notification to the user together with the loan number
    ## If Loan Application has been approved successfully

     $loan_number =  $loan_applications->loan_number;     
     $email_notification = reg_employee_mst::find(decrypt($id));
     $loan_applicant_name = $email_notification->firstname;
     $email_notification->notify(new approve($loan_number,$loan_applicant_name));
     return Redirect::back();
     
     }



  

/**
     * Here follows the actions to be peformed by the Admin
     * Denie Loan Applications if not satsfied 
     * 
     * 
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */


public function denie($id){
    $loan_applications = web_loan_application::where('employee_id',"=",decrypt($id))->firstOrFail();
    $loan_applications->delete();
    Session::flash('denied', 'Loan Application Denied succesfully');

    ## Send Email Notification to the user
    ## If Loan Application has been Denied

    $loan_number =  $loan_applications->loan_number;
    $email_notification = reg_employee_mst::find(decrypt($id));
    $loan_applicant_name = $email_notification->firstname;
    $email_notification->notify(new denie($loan_applicant_name));
    return Redirect::back();
    
    
    }







/**
     * Here follows the actions to be peformed by the Client
     * Settle payments using airtel Mobile Money (LocalMobileMoney) 
     * Using Airtel MoMo API (https://developers.airtel.africa/documentation)
     * 
     * 
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */


public function collectionsPost(Request $request){

## Bearer Token
## Creating Bearer Token
    $airtelTokenAccessAttempt = Http::withHeaders([
    "Content-Type" => "application/json",
    "Accept" => "*/*",
   
])->post('https://openapiuat.airtel.africa/auth/oauth2/token', [
    "client_id"=> config('airtelMoMoAPI.client_id'),
    "client_secret"=> config('airtelMoMoAPI.client_secret'),
    "grant_type"=> config('airtelMoMoAPI.grant_type'),
]);



## Check if the one testing this system has configured any means of collecting payments
## from customers. If not stop the process

if ($airtelTokenAccessAttempt->status() != 200) {

return "This system uses airtel Mobile Money API (https://developers.airtel.africa/login) for testing transactions
in collecting funds from customers. Now it seems you have not configured any API's in `config -> airtelMoMoAPI` and in `.env`";
    }
     else {

        $access_token  = $airtelTokenAccessAttempt->object();

        ## Bearer Token Created Successfully
        $token = $access_token->access_token;

        ## Unique Transaction Id sent to airtel from customer
        $id = random_int(1000000000, 9999999999);

        


        /**
         * REQUEST TO PAY
         * The transaction will be executed once the payer has authorized the payment
         *  The request to pay will be in status PENDING until the transaction is authorized
         * or declined by the payer or it is timed out by the system.
         */
       

    $airtelRequestToPayAttempt = Http::withHeaders([
    "Content-Type" => "application/json",
    "Accept" => "*/*",
    "X-Country" => "ZM",
    "X-Currency" => "ZMW",
    "Authorization" => "Bearer ".$token,
   
])->post('https://openapiuat.airtel.africa/merchant/v1/payments/', [

    "reference" => "$request->reference",
      "subscriber" =>[
        "country" => "ZM",
        "currency" => "ZMW",
        "msisdn" => "$request->phone_number"
      ],
      "transaction" => [
        "amount" =>  "$request->amount",
        "country" => "ZM",
        "currency" => "ZMW",
        "id" => "$id"
      ]
]);

    

        ## Payment status requests
        $paymentRequest = $airtelRequestToPayAttempt->object();
        ## Transaction Id
        $paymentRequest->data->transaction->id;
        ## Message
        $paymentRequest->data->transaction->status;

       ## Payment status requests

        return $paymentRequest = $airtelRequestToPayAttempt->object();
    }
}
}
