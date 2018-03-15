<?php
	$url ="localhost";
	$database ="todoDB";
	$username ="root";
	$password ="";

	$conn = mysqli_connect($url, $username, $password, $database);

	if(!conn)// $conn== false
	{
		die("Connection failed: " .conn->connect_error);
	}
	$sql ="SELCT * FROM Items";
	$result = mysqli_query($conn, $sql);
	$rows =array();

	if(mysqli_num_rows($result) > 0)
	{
		while($r =mysqli_fetch_assoc($result))
		{
			array_push($rows, $r);
		}
		print json_encode($rows);
	}
	else{
		echo "No data";
	}

	mysqli_close($conn);
?>