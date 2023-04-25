
<h3>Payments Updates</h3>
<br>
<div class="shadow-sm p-3 mb-5 bg-white rounded">
<form action="{{route('payments.store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="Loan Number">Loan Number</label>
    <input type="number" name="loan_number" class="form-control @error('loan_number') is-invalid @enderror" placeholder="Enter Loan Number">
    @error('loan_number')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <small class="form-text text-muted">Enter valid Loan Number</small>
  </div>
  <div class="form-group">
    <label for="Transaction-ID">Amount</label>
    <input type="text" name="loan_amount" class="form-control @error('loan_amount') is-invalid @enderror" placeholder="Enter Amount">
    @error('loan_amount')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="Transaction-ID">Transaction-ID</label>
    <input type="text" name="transaction_id" class="form-control @error('transaction_id') is-invalid @enderror" placeholder="Transaction-ID">
    @error('transaction_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
  
                          <label for="payment_method">Payment Method</label>
                          <select class="form-control @error('payment_method') is-invalid @enderror" id="is_active" name="is_active">
                            <option value="PEMIC">PEMIC</option>
                            <option value="Airtel Wallet (USSD)">Airtel Wallet (USSD)</option>
                            <option value="MTN Wallet (USSD)">MTN Wallet (USSD)</option>
                            <option value="Zamtel Wallet (USSD)">Zamtel Wallet (USSD)</option>
                            <option value="Bank">Bank</option>
                            <option value="Cheque">Cheque</option>
                            <option value="Cash">Cash</option>
                          </select>
                        </div>
                        @error('payment_method')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  

  <div class="form-group">
    <input type="hidden" value="{{Auth::user()->id}}" name="user_id" class="form-control">
    <label for="pusher">Pushed By</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>