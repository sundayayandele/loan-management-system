<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transactionHistory;
use RealRashid\SweetAlert\Facades\Alert;



class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Payments.create');
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
        $request->validate([
            'loan_number' => 'required|exists:web_loan_applications',
            'loan_amount' => 'required|numeric',
            'transaction_id' => 'required|string|unique:transaction_histories',
            'payment_method' => 'required|string'
            
        ]);

      transactionHistory::create([
        'loan_number' => $request->loan_number,
        'loan_amount' => $request->loan_amount,
        'transaction_id' => $request->transaction_id,
        'user_id' => auth()->user()->employee_id
      ]);
      toast('Your Payment has been added successfully!','success');
      return redirect()->back();

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
