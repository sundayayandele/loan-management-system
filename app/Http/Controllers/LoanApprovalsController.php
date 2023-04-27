<?php

namespace App\Http\Controllers;

use App\Models\web_loan_application;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Approvals;
use Illuminate\Http\Request;

class LoanApprovalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('LoanApprovals.index',[
            'loan_applications' => web_loan_application::where('approved', "=", 0)->first(),
            'total_to_approve' => web_loan_application::where('approved', "=", 0)->count()
        ]);
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
        $request->validate([
            'loan_number' => 'required|numeric',
            'answer1' => 'required|string',
            'answer2' => 'required|string',
            'answer3' => 'required|string',
            'answer4' => 'required|string',
            'answer5' => 'required|string',
            'answer7' => 'required|string',
            'answer8' => 'required|string',
            'answer9' => 'required|string',
            'answer10' => 'required|string',
            'answer11' => 'required|string',
            'answer12' => 'required|string',
            'comments' => 'required|string',
            
        ]);
        //
        $add_user = new Approvals; 
        $add_user -> answer1 = $request->answer1; 
        $add_user -> answer2 = $request->answer2; 
        $add_user -> answer3 = $request->answer3; 
        $add_user -> answer4 = $request->answer4; 
        $add_user -> answer5 = $request->answer5; 
        $add_user -> answer6 = $request->answer6; 
        $add_user -> answer7 = $request->answer7; 
        $add_user -> answer8 = $request->answer8; 
        $add_user -> answer9 = $request->answer9; 
        $add_user -> answer10 = $request->answer10; 
        $add_user -> answer11 = $request->answer11; 
        $add_user -> answer12 = $request->answer12; 
        $add_user -> comments = $request->comments; 
        $add_user -> user_id = auth()->user()->employee_id; 
        $add_user -> save(); 
       
        toast('The Loan Analysis has been submitted for verification to the CFO Succesfully!','success');
        return redirect()->route('loan_approvals.index');    

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
