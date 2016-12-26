<!DOCTYPE html>
<html lang="en">
<head>
	<title>Try</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Refresh" content="3;url=table.php">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<link href="start.css" rel="stylesheet">
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
            <li><a href="form.html">Form</a></li>
            <li><a href="table.php">Table</a></li>
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
		  die('<h1>Connection error :'.mysqli_error($con).'</h1>');
	  }
	  mysqli_select_db($con,"bootstrap");
	  $file = "files/" .$_FILES["fileUpload"]["name"];
	  
		move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $file);
		UPDATE Customers
SET City='Hamburg'
WHERE CustomerID=1; 
		$sql_query="UPDATE userinfo SET name='$_POST[name]', phone='$_POST[phone]' , dob='$_POST[dob]' ,
		address='$_POST[address]' , picture='$file', sex='$_POST[sex]', disable_body='$_POST[db]'
		WHERE email='$_POST[email]'
	    ;";
	  if(!mysqli_query($con,$sql_query))
	  {
		  die('<h1>Error: '.mysqli_error($con).'</h1>');
	  }
	  echo "<h1>User info updated</h1>
	  </br>
	  <h3>This page will be redirect to table page in 3sec, otherwise <a href='table.php'>cick here</a></h3>";
	  ?>
      </div>

    </div><!-- /.container -->

	
	
	
	
	
	
	
	
	
	
	
	
</body>