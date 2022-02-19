<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FEATURES AND ARTICLES</title>
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://getbootstrap.com/examples/dashboard/dashboard.css"> -->
    <!--[if lt IE 9]
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <script src="http://cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
    <script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
        $('#nav').load('elements/nav.html');
    });
    </script>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" id="nav"></nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 ">

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header" style="font-weight:bold">PUBLISH ARTICLES AND NEW FEATURES</h1>

          <form action="{{route('admin_articles')}}" method="POST" enctype="multipart/form-data">
              @csrf
 <!-- Validation Errors -->
 <x-auth-validation-errors style="color:red" class="mb-4" :errors="$errors" />
              
<!--If published successfully-->
@if (session('published'))
      <div class="alert alert-success w-75">
         {!! session('published') !!}
      </div>
@endif
<br>
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" class="form-control" id="title" placeholder="Title">
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-7 col-md-9">
                <div class="form-group">
                  <textarea name="body" id="content"></textarea>
                 <script>CKEDITOR.replace('content');</script>
                </div>
              </div>
              <div class="col-xs-5 col-md-3">
                <div class="form-group">
                 
                  <button type="submit" class="btn btn-primary">Publish</button>
                </div>
               
                <div class="form-group">
                  <label for="status_id">Status</label>
                  <select name="status_id" class="form-control">
                    <option value="">Status 1</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="category_id">Category</label>
                  <div class="checkbox">
                  <label>
                    <input type="checkbox" value="">
                    Category 1
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="" disabled>
                    Category 2
                  </label>
                </div>
                <div class="form-group">
                  <label for="metakeywords">Metakeywords</label>
                  <textarea placeholder="Metakeywords" name="metakeywords" class="form-control" rows="2"></textarea>
                  <p class="help-block">Separate the words with comma</p>
                </div>
                <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file" name="image" id="image" class="form-control" />
                  <p class="help-block">Image definitions</p>
                </div>
                <a href="#" class="thumbnail">
                  <img src="http://fakeimg.pl/300/">
                </a>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>

  </body>
</html>
