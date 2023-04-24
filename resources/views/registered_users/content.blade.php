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
<!--Datatables Buttons starts here-->    

<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
     <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
     <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js" type="text/javascript"></script>

<!--Datatables Buttons ends here-->
<script type="text/javascript">
  $(function () {
   
    var table = $('#users').DataTable({
        processing: true,
        serverSide: true,
        "lengthChange": false,
        scrollX: true,
        dom:'lBfrtip',
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
           
        ],
        buttons: [
                   {
                       extend: 'pdf',
                       exportOptions: {
                           columns: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,4,15,16] // Column index which needs to export
                       },
                       customize: function (doc) {
            doc.defaultStyle.fontSize = 10;
            doc.pageMargins = [22, 22, 22, 22];
            doc.pageOrientation = 'landscape';
            doc.pageSize = 'A4';
        },
                   },
                   {
                       extend: 'csv',
                       exportOptions: {
                           columns: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,4,15,16] // Column index which needs to export
                       }
                   },
                   {
                       extend: 'excel',
                       exportOptions: {
                           columns: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,4,15,16] // Column index which needs to export
                       }
                   },
                   {
                       extend: 'print',
                       exportOptions: {
                           columns: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,4,15,16] // Column index which needs to export
                       }
                   },
              ],
    });
    
  });
</script>