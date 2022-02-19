@include('admin_top_menu')



<div class="container shadow p-3 mb-5 bg-white rounded">
<h3>ATTACHMENTS (NRC/PAYSLIP/UTILITY)</h3>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">FILES</th>
            
    </tr>
  </thead>
  
  @foreach($reg as $regs)
  
    <tr>
      
      <td><a href="{{asset('attatchments_loans/'.$regs->attachment_name)}}">Check File</a></td>
      
    </tr>
   @endforeach
  </tbody>
  </table>
  
</div>



@include('admin_bottom_menu')