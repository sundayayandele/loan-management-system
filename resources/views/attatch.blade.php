
  <h3>
      Attatchments
  </h3>
      

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
        <form method="POST" enctype="multipart/form-data" action="{{route('attatchments_submit',encrypt(Auth::user()->employee_id))}}">
            @csrf



          
<!--NRC Copy-->
<div class="form-group">
    <label for="Upload your NRC (PDF Only)">Upload your NRC (PDF Only)</label> <small class="text-danger">*</small>

    <input type="file" accept="application/pdf" class="form-control" name="nrc_file" >
    <small class="text-danger"> The File should not be more than 10 MB </small>
  </div>



            <!--Passport Photo-->
            <div class="form-group">
    <label for="Upload your Selfie">Upload your Passport Photo (JPG/JPEG AND PNG)</label> <small class="text-danger">*</small>

    <input type="file" accept="image/jpeg, image/png" class="form-control" name="passportphoto" >
    <small class="text-danger"> The Photo should not be more than 10 MB </small>
  </div>


           


            
      
           



  <button type="submit" class="btn btn-success">Next</button>
        </form>
   

