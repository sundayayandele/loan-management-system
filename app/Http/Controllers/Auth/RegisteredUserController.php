<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use App\Models\reg_employee_mst;
use App\Models\website_profile;
use App\Models\api_logins_mst;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Database\Eloquent\Collection ;
class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'nrc' => ['required', 'string', 'max:255','unique:reg_employee_mst'],
            'email'=>['required','email','unique:reg_employee_mst'],
            'password' => ['required', 'confirmed',Rules\Password::defaults()],
        ]);

        $user = reg_employee_mst::create([
            'firstname' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
             'nrc' => str_replace('/','',$request->nrc),
         ]);


         $user_profile = website_profile::create([
            'nrc' => str_replace('/','',$request->nrc),
        ]);

                
         $reg_employee = reg_employee_mst::find($user->employee_id);
         $api_logins = new api_logins_mst;
         $api_logins->nrc = str_replace('/','',$request->nrc);
         $api_logins->password = Hash::make($request->password);
         //$reg = $reg_employee->api_logins_mst(); 
         //return  $reg->get();
        $reg = $reg_employee->api_logins_mst()->save($api_logins);
          


      //Authenticate and Log In the user to the dashboard now


     event(new Registered($user));
        

     Auth::login($user);



   return redirect(RouteServiceProvider::HOME);

    }
}
