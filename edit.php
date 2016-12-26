<!DOCTYPE html>
<html lang="en">
<head>
	<title>Try</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="js/jq.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<!-- Custom styles for this template -->
		<script src="js/bootstrap-datepicker.js"></script>
	<link href="css/bootstrap-datepicker.css" rel="stylesheet">
    <link href="dashboard.css" rel="stylesheet">

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
	 <div class="row">
	         <div class="col-md-2 sidebar">
          <div class="row">
		  	         <div class="col-md-12">
		  <ul class="nav nav-sidebar">
            <li class="active"><a href="form.html">Form</a></li>
            <li><a href="table.php">Table</a></li>
          </ul>
		  </div>
		  </div>
        </div>

		
			 <div class="col-md-10 main col-md-offset-2">
	 <div class="row">
	 <div class="col-md-12">
  	 <div class="panel panel-default">
	 <div class="panel-body">
		<form action="update.php" method="post" enctype="multipart/form-data">
		
		
	  <?php 

	  $con=mysqli_connect("localhost","root","","bootstrap");
	  if (!$con)
	  {
		  die('<h1>Connection error :'.mysqli_error($con).'</h1>');
	  }
	  $sql="SELECT * FROM userinfo WHERE email='$_GET[email]' ";
	  $result = mysqli_query($con, $sql);
	  $row=mysqli_fetch_assoc($result);
		echo "<div class='form-group'>
			<label for='name'>Name</label>
			<input type='text' name='name' class='form-control' id='name' value='".$row["name"]."'>
			</div>
			";
			
		echo" <div class='form-group'>
			<label for='email'>Email</label>
			<input type='email' name='email' class='form-control' id='email' value='".$row["email"]."' readonly>
			</div>
			";
		echo"<label for='phone'>Phone</label>
			<div class='input-group'>
			<span class='input-group-addon' id='basic-addon1'>+880</span>
			<input type='text' class='form-control' name='phone' id='phone'  value='".$row["phone"]."' aria-describedby='basic-addon1'>
			</div>
			";
		echo"<label for='dob'>Date of birth</label>
			<div class='input-group date form-group' data-provide='datepicker'>

			<input type='text' class='form-control datepicker' name='dob' id='dob' value='".$row["dob"]."'>
			<div class='input-group-addon'>
			<span class='glyphicon glyphicon-th'></span>
			</div>
			<script type='text/javascript'>$('.datepicker').datepicker({
			format: 'yyyy-mm-dd'
			});</script>
			</div>
			";
		echo"<div class='form-group'>
			<div class='form-group'>
			<label for='address'>Address</label>
			<input type='text' class='form-control' name='address' id='address' value='".$row["address"]."'>
			</div>
			";
  
		echo"<div class='form-group'>
			<label for='file'>File input</label>
			<input type='file' class='form-control-file' name='fileUpload' id='file' aria-describedby='fileHelp'>
			<small id='fileHelp' class='form-text text-muted'>MAX Size: 20MB</small>
			</div>
			";
		if($row["sex"]==1)
		{
		echo "<label for='sex'>Sex</label>
			<select class='form-control' name='sex' id='sex'>
			<option class='form-control' value='1'>Male</option>
			<option class='form-control' value='2'>Female</option>
			</select>
			</div>
			";
			
		}
		else if($row["sex"]==2)
		{
		echo "<label for='sex'>Sex</label>
			<select class='form-control' name='sex' id='sex'>
			<option class='form-control' value='2'>Female</option>
			<option class='form-control' value='1'>Male</option>
			</select>
			</div>
			";
		}
		if($row["disable_body"]==0)
		{
		echo "
			<div class='form-group'>
			<fieldset class='form-group'>
			<legend>Disabled body</legend>
			<div class='form-check'>
			<label class='form-check-label'>
			<input type='radio' name='db' class='form-check-input' id='optionsRadios1' value='1'>
			Yes
			</label>
			</div>
			<div class='form-check'>
			<label class='form-check-label'>
			<input type='radio' class='form-check-input' name='db' id='optionsRadios2' value='0' checked>
			No
			</label>
			</div>
			</fieldset>
			</div>
			";
		}
		else if($row["disable_body"]==1)
		{
		echo "
			<div class='form-group'>
			<fieldset class='form-group'>
			<legend>Disabled body</legend>
			<div class='form-check'>
			<label class='form-check-label'>
			<input type='radio' name='db' class='form-check-input' id='optionsRadios1' value='1' checked>
			Yes
			</label>
			</div>
			<div class='form-check'>
			<label class='form-check-label'>
			<input type='radio' class='form-check-input' name='db' id='optionsRadios2' value='0'>
			No
			</label>
			</div>
			</fieldset>
			</div>
			";
		}
		echo "
			<div class='form-check'>
			<label class='form-check-label'>
			<input type='checkbox' class='form-check-input'>
			are you sure that its your own information here?
			</label>
			</div>

			<button type='submit' class='btn btn-primary'>Submit</button>
			";
		  
	  ?>
</form>	  
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
	
</body>