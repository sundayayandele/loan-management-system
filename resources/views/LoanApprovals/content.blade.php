<div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Loans</a></li>
            <li class="breadcrumb-item active" aria-current="page">Approvals</li>
          </ol>
        </nav>
      </div>
    </div>


<!--Show Errors if any-->  
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<!--End showing errors if any-->


<!--Clients Details-->   

<table class="table">
  <thead>
    <tr>
      <th>Amount</th>
      <th>Duration</th>
      <th>Mobile Number</th>
      <th>Loan Number</th>
      <th>Payment Mode</th>
      <th>Attachments</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <td>{{$loan_applications->loan_amount ?? ''}}</td>
      <td>{{$loan_applications->duration ?? ''}}</td>
      <td>{{$loan_applications->mobile_money_number ?? ''}}</td>
      <td>{{$loan_applications->loan_number ?? ''}}</td>
      <td>{{$loan_applications->payment_mode ?? ''}}</td>
      @php 
    if ($loan_applications) {
        $attachments = [];
        foreach ($loan_applications as $loan_application) {
            $attachments[] = $loan_application->reg_employee_attachment()->get();
        }
    } else {
        $attachments = [];
    }
@endphp

      @forelse ($attachments as $files)
      <td>
        
        <a href="{{asset('attatchments_loans/'.$files->attachment_name)}}">Check File</a>
        @empty
        <p>No files attached</p>
        </td>
        @endforelse
        
      
    </tr>
   
  </tbody>
</table>




<!--End Clients Details here-->





<div class="border p-3">
  <form method="POST" action="{{ route('loan_approvals.store') }}">
    @csrf <!-- Laravel CSRF protection -->

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Question</th>
          <th>Yes</th>
          <th>No</th>
        </tr>
      </thead>
      <tbody>

      <tr style="display: none;">
          <td>1. Loan Number</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="number" value="{{$loan_applications->loan_number ?? ''}}" name="loan_number" value="yes">
                         </div>
          </td>
          <td>
           
          </td>
        </tr>


      
        <tr>
          <td>1. Has the KYC been done Successfully?</td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer1" value="yes" id="answer1_yes">
              <label class="form-check-label" for="answer1_yes">Yes</label>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer1" value="no" id="answer1_no">
              <label class="form-check-label" for="answer1_no">No</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>2. Has the client provided bank statement(s) Showing transactions for the last three months? </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer2" value="yes" id="answer2_yes">
              <label class="form-check-label" for="answer2_yes">Yes</label>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer2" value="no" id="answer2_no">
              <label class="form-check-label" for="answer2_no">No</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>3. Is the bank account in the name of the client and is active? </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer3" value="yes" id="answer3_yes">
              <label class="form-check-label" for="answer3_yes">Yes</label>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer3" value="no" id="answer3_no">
              <label class="form-check-label" for="answer3_no">No</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>4. Does the Payslip details correspond with the name, surname and National ID (If client is in employement) ? </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer4" value="yes" id="answer4_yes">
              <label class="form-check-label" for="answer4_yes">Yes</label>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer4" value="no" id="answer3_no">
              <label class="form-check-label" for="answer4_no">No</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>5. Does the Passport of the client Match the one on their National ID? </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer5" value="yes" id="answer5_yes">
              <label class="form-check-label" for="answer5_yes">Yes</label>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer5" value="no" id="answer5_no">
              <label class="form-check-label" for="answer5_no">No</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>6. Has the client replaced the National ID at any point? </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer6" value="yes" id="answer6_yes">
              <label class="form-check-label" for="answer6_yes">Yes</label>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer6" value="no" id="answer6_no">
              <label class="form-check-label" for="answer6_no">No</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>7. If the client has never replaced the National ID, Is the National ID number last two digits and the clients Number's last two digits equal ? </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer7" value="yes" id="answer7_yes">
              <label class="form-check-label" for="answer7_yes">Yes</label>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer7" value="no" id="answer7_no">
              <label class="form-check-label" for="answer7_no">No</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>8. Is the client Above 16? </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer8" value="yes" id="answer8_yes">
              <label class="form-check-label" for="answer8_yes">Yes</label>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer8" value="no" id="answer8_no">
              <label class="form-check-label" for="answer8_no">No</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>9. Is the Mobile Money Verified? </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer9" value="yes" id="answer9_yes">
              <label class="form-check-label" for="answer9_yes">Yes</label>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer9" value="no" id="answer9_no">
              <label class="form-check-label" for="answer9_no">No</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>10. Does the client have any altanative Line? </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer10" value="yes" id="answer10_yes">
              <label class="form-check-label" for="answer10_yes">Yes</label>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer10" value="no" id="answer10_no">
              <label class="form-check-label" for="answer10_no">No</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>11. Does the client work or is in business? </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer11" value="yes" id="answer11_yes">
              <label class="form-check-label" for="answer11_yes">Yes</label>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer11" value="no" id="answer11_no">
              <label class="form-check-label" for="answer11_no">No</label>
            </div>
          </td>
        </tr>

        <tr>
          <td><button class="btn btn-danger">Are you approving this Loan?</button></td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer12" value="yes" id="answer12_yes">
              <label class="form-check-label" for="answer12_yes">Yes</label>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer12" value="no" id="answer12_no">
              <label class="form-check-label" for="answer12_no">No</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>Comments</td>
          <td colspan="2">
            <div class="form-floating">
              <textarea class="form-control" name="comments" id="comments" rows="3"></textarea>
              <label for="comments">Enter your comments here</label>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
<br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
