<?php
	$dbhost = "localhost";
	$dbuser = "SiamRafsunjani";
	$dbpass = "01674746604";
	$dbname = "Coaching";
	$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	if(mysqli_connect_errno()) {
		die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"
			);
	};
?>
<?php
	$query = "SELECT * FROM branches";
	$result = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html charset=utf-8" />
	<title>Add Course</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Wellfleet' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Wellfleet' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Goudy+Bookletter+1911' rel='stylesheet' type='text/css'>
</head>
	<body>
		<h1>Add program</h1>
	 	
		<form method="post">
	 	Program Name: <input type="text" name="name" value=""> <br \><br \>

	    <div class="form-group" style="max-width:25%">
			Branch : <select class="form-control" id="sel1">
						<?php
							while($row = mysqli_fetch_assoc($result)){
								echo "<option>";
								echo $row['branch_name'];
								echo "</option>";
							}
							
						?>
  					  </select>
				</div>

        Start date: <input type="date" id="myDate" value="2014-02-09">  <br \><br \>

        End date: <input type="date" id="myDate" value="2014-02-09"> <br \><br \>
        <input type="submit" name="submit" value="Submit"> 
        </form>

	</body>	
</html>


<?php
	mysqli_close($connection);

?>