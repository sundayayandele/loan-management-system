<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reg_employee_mst;
use DataTables;
class RegisteredUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


public function all_users(Request $request){
    
   // if ($request->ajax()) {
       
        $data = reg_employee_mst::get();
        return Datatables::of($data)
            ->addIndexColumn()  
            ->addColumn('first_name', function($data){
                return $data->firstname;
            })   
            ->addColumn('last_name', function($data){
                return $data->lastname;
            })   
            ->addColumn('mannumber', function($data){
               
                return $data->mannumber;
            })   
            ->addColumn('nrc', function($data){
               return $data->nrc;
            })  
            ->addColumn('dob', function($data){
                return date('d,F-Y',strtotime($data->dob));
            })  
            ->addColumn('gender', function($data){
                return $data->gender;
            })  
            ->addColumn('marital_status', function($data){
                return $data->marital_status;
            })  
            ->addColumn('email', function($data){
                return $data->email;
            })   
            ->addColumn('phone', function($data){
                return $data->phone;
            })  
            ->addColumn('net_salary', function($data){
                return $data->net_salary;
            })  
            ->addColumn('company_id', function($data){
                return $data->company_id;
            })  
            ->addColumn('bank_id', function($data){
                return $data->bank_id;
            })  
            ->addColumn('bank_branch_id', function($data){
                return $data->bank_branch_id;
            })  
            ->addColumn('bank_account_number', function($data){
                return $data->bank_account_no;
            })  
            ->addColumn('bank_account_name', function($data){
                return $data->bank_account_name;
            })  
            ->addColumn('created_at', function($data){
                return date('d,F-Y',strtotime($data->created_dt));
            })  
            
            ->rawColumns(['first_name','last_name','mannumber','nrc','dob','gender','marital_status','email','phone','net_salary','company_id','bank_id','bank_branch_id','bank_account_number','bank_account_name','created_at'])
            ->make(true);
    //}


}



    public function index()
    {
        //
    $employees = reg_employee_mst::get();
    return view('registered_users.users');    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
