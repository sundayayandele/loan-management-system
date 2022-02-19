<x-guest-layout>        
            
        <center>
            
        <div style="font-weight:bolder;font-size:22px">{{Auth::user()->firstname}}'s Payments History. </div>
        <table class="table table-striped">  
    <tr>
        <th>NRC</th>
        <th>Message</th>
        <th>Status</th>
        <th>Date of Transaction</th>
</tr>
<hr>
@foreach($checkpayments as $checkpayment)
<tr >

        <td>{{$checkpayment->transaction_id}}</td>
        <td>{{$checkpayment->message}}</td>
        <td>{{$checkpayment->status_code}}</td>
        <td>{{$checkpayment->created_at}}</td>
</tr>
@endforeach
</table>
{{ $checkpayments->links() }}
</center> 
</x-guest-layout>
   