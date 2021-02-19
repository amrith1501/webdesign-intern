<!Doctype html>
<html>
<head>
	<title>View Users</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="topnav">
  <a class="active" href="home.php">Home</a>
  <div class="topnav-right">
  <a class="active" href="transferinfo.php">Transfer History</a>
  

  </div>
</div>
</div>  
<table class="viewusers">
	<h1>Customers DETAILS</h1>
	<tr>
		<th>NAME</th>
		<th>Email</th>
		<th>BALANCE</th>
		
	</tr>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "mydatabase");
	if($conn-> connect_error){
		die("connection failed:". $conn-> connect_error);
	}

	$sql = "SELECT Name, Email, Balance FROM Details";
	$result = $conn-> query($sql);

	if($result-> num_rows > 0){

		while ( $row = $result -> fetch_assoc()) {
			echo "<tr><td>". $row["Name"] ."</td><td>".  $row["Email"] ."</td><td>" .  $row["Balance"] ."</td></tr>";
		}
		echo "</table>";

	}
	else {
		echo "no result";
	}
    $conn-> close();
	?>
	</table>
</body>
</html>