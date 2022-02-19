
<div class="container shadow p-3 mb-5 bg-white rounded">
<h3>Hi {{Auth::user()->firstname}} This is the List of Messages From Your Website </h3>
<br>
<div class="btn btn-success" onclick="window.print()">print</div>
<hr>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">SUBJECT</th>
      <th scope="col">MESSAGE</th>
      <th scope="col">SENT ON</th>
     </tr>
  </thead>
  

  @foreach($message as $messages)
    <tr>
    <td>{{$messages->id}}</td>
      <td>{{$messages->name}}</td>
      <td>{{$messages->email}}</td>
      <td>{{$messages->subject}}</td>
      <td>{{$messages->message}}</td>
      <td>about {{$messages->created_at->diffForHumans()}}</td>
    </tr>
   @endforeach  
  </tbody>
  </table>
  {{ $message->links() }}
</div>
