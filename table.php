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
		<link rel="stylesheet" href="css/font-awesome.css">

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
            <li ><a href="form.html">Form</a></li>
            <li class="active"><a href="table.php">Table</a></li>
          </ul>
		  </div>
		  </div>
        </div>
			 <div class="col-md-10 main col-md-offset-2">
	 <div class="row">
	 <div class="col-md-12">
  	 <div class="panel panel-default">
	 <div class="panel-body">

	  <?php 
	  $con=mysqli_connect("localhost","root","","bootstrap");
	  if (!$con)
	  {
		  die('<h1>Connection error :'.mysqli_error($con).'</h1>');
	  }
	  $sql="SELECT name,email,phone,dob,address,sex,disable_body FROM userinfo ";
	  $result = mysqli_query($con, $sql);
	  echo"
          <table class='table table-striped'>
            <thead>
			  <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>DOB</th>
				<th>Address</th>
				<th>Sex</th>
				<th>Disabled</th>
				<th>Edit</th>
              </tr>
            </thead>";
		echo "<tbody>";
		
	  while($row = mysqli_fetch_assoc($result)) {


		  
		echo "<tr>";
		echo "<td>" . $row["name"]. "</td>";
		echo "<td>" . $row["email"]. "</td>";
		echo "<td>+880" . $row["phone"]. "</td>";
		echo "<td>" . $row["dob"]. "</td>";
		echo "<td>" . $row["address"]. "</td>";

		if($row["sex"]=='1')
			echo"<td>Male</td>";
		else if($row["sex"]=='2')
			echo"<td>Female</td>";

		if($row["disable_body"]=='1')
			echo"<td>Yes</td>";
		else if($row["disable_body"]=='0')
			echo"<td>No</td>";
				echo "<td><a  href='edit.php?email=" . $row["email"]. "'><i class='fa fa-edit'></i></a></td>";


		echo "</tr>";
    }
	
	echo"</tbody>
         </table>";

	



	  ?>
	  
      </div>

    </div><!-- /.container -->
	</div>
	</div>
	</div>
	</div>
	
	


	
	
	
	
	
	
	
	
	
	
	
	
</body>