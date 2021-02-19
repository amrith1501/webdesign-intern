<!Doctype html>
<html>
<head>
	<title>TRANSFER HISTORY</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="topnav">
  <a class="active" href="home.php">Home</a>
  <div class="topnav-right">
   <a class="active" href="transfer.php">TRANSFER</a>
  <a class="active" href="customers.php">ACCOUNTS</a>

  </div>
</div>
</div>  
<table class="viewusers">
	<h1>Transfer History</h1>
	<tr>
		<th>SENDER ACC</th>
		<th>RECIEVER ACC</th>
		<th>AMOUNT</th>
	</tr>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "database");
	if($conn-> connect_error){
		die("connection failed:". $conn-> connect_error);
	}

	$sql = "SELECT * FROM History";
	$result = $conn-> query($sql);

	if($result-> num_rows > 0){

		while ( $row = $result -> fetch_assoc()) {
			echo "<tr><td>". $row["Sender"] ."</td><td>".  $row["Reciever"] ."</td><td>" .  $row["Amount"] ."</td></tr>";
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


