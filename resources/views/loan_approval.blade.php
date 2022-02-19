@include('admin_top_menu')



<div class="container shadow p-3 mb-5 bg-white rounded">
<h3>UNAPPROVED LOAN APPLICATIONS</h3>
@if(Session::has('approved'))
<div class="alert alert-success w-100">{{session::get('approved')}}</div>
@endif
@if(Session::has('denied'))
<div class="alert alert-danger w-100">{{session::get('denied')}}</div>
@endif
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">AMOUNT</th>
      <th scope="col">MONTHS</th>
      <th scope="col">MOBILE NUMBER</th>
      <th scope="col">LOAN NUMBER</th>
      <th scope="col">APPLIED ON</th>
      <th scope="col">DUE DATE</th>
      <th scope="col">ATTACHMENTS</th>
      <th scope="col">APPROVE</th>
      
      
    </tr>
  </thead>
  

  @foreach($loan_applications as $loan_application)
    <tr>
      
      <td>{{$loan_application->id}}</td>
      <td>{{$loan_application->loan_amount}}</td>
      <td>{{$loan_application->months}}</td>
      <td>{{$loan_application->mobile_money_number}}</td>
      <td>{{$loan_application->loan_number}}</td>  
      <td>{{$loan_application->created_at}}</td> 
      <td>{{$loan_application->due_date}}</td>  
       
      <td><button class="btn btn-info"><a href="{{route('find_attachments',encrypt($loan_application->employee_id))}}" style="color:white">View</a></button></td> 
     <td>
         <span class="btn btn-success "><a href="{{route('approve',encrypt($loan_application->employee_id))}}" style="color:white">OK</a></span>
         <span class="btn btn-danger "><a href="{{route('denie',encrypt($loan_application->employee_id))}}" style="color:white">NO</a></span>
</td>
    </tr>
   @endforeach  
  </tbody>
  </table>
  {{ $loan_applications->links() }}
</div>



@include('admin_bottom_menu')