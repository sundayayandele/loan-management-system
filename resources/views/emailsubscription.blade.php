
<div class="container shadow p-3 mb-5 bg-white rounded">
<h3>Hi {{Auth::user()->firstname}} This is the List of Email Subscribers From Your Website </h3>
<br>
<div class="btn btn-success" onclick="window.print()">print</div>
<hr>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">EMAIL</th>
      <th scope="col">SUBSCRIBED ON</th>
     </tr>
  </thead>
  

  @foreach($emailsub as $email)
    <tr>
      
      <td>{{$email->id}}</td>
      <td>{{$email->email}}</td>
      <td>about {{$email->created_at->diffForHumans()}}</td>
    </tr>
   @endforeach  
  </tbody>
  </table>
  {{ $emailsub->links() }}
</div>
