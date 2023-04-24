<table class="table" id="users">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Employee ID</th>
      <th scope="col">NRC</th>
     <th scope="col">DOB</th>
      <th scope="col">Gender</th>
      <th scope="col">Marital</th>
      <th scope="col">Email </th>
      <th scope="col">Phone</th>
      <th scope="col">Net Salary</th> 
      <th scope="col">Company</th> 
      <th scope="col">Bank Name</th>
      <th scope="col">Bank Branch</th>
      <th scope="col">Bank Account Number</th>
      <th scope="col">Bank Account Name</th>
     
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(function () {
   
    var table = $('#users').DataTable({
        processing: true,
        serverSide: true,
        "lengthChange": false,
        scrollX: true,
        ajax: "{{ route('all_users') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'first_name', name: 'first_name'},
            {data: 'last_name', name: 'last_name'},
            {data: 'mannumber', name: 'mannumber'},
            {data: 'nrc', name: 'nrc'},

            {data: 'dob', name: 'dob'},
            {data: 'gender', name: 'gender'},
            {data: 'marital_status', name: 'marital_status'},
            {data: 'email', name: 'email'},
            {data: 'phone', name: 'phone'},

            {data: 'net_salary', name: 'net_salary'},
            {data: 'company_id', name: 'company_id'},
            {data: 'bank_id', name: 'bank_id'},
            {data: 'bank_branch_id', name: 'bank_branch_id'},
            {data: 'bank_account_number', name: 'bank_account_number'},
            {data: 'bank_account_name', name: 'bank_account_name'},
            {data: 'created_at', name: 'created_at'},
           
        ]
    });
    
  });
</script>