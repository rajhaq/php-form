<!DOCTYPE html>
<html lang="en">
<head>
	<title>Try</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/npm.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Form</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
          </ul>
        </div>
      </div>
    </nav>
	<div class="container">

      <div class="starter-template">
	  <?php 
	  $con=mysqli_connect("localhost","root","");
	  if (!$con)
	  {
		  die('Connection error :'.mysqli_error($con));
	  }
	  mysqli_select_db($con,"bootstrap");
	  $file = "files/" .$_FILES["fileUpload"]["name"];
	  
		move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $file);
		$sql_query="INSERT into test (name, email, phone, address)
	   VALUES ('$_POST[name]','$_POST[email]','$_POST[phone]','$file')
	  ";
	  if(!mysqli_query($con,$sql_query))
	  {
		  die('Error: '.mysqli_error($con));
	  }

	  echo "<h1>Added</h1>";
	  ?>
      </div>

    </div><!-- /.container -->

	
	
	
	
	
	
	
	
	
	
	
	
</body>