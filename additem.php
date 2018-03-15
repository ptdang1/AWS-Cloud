<?php
	if(isset($_POST['item']))
	{
		$newItem = $_POST['item'];
		$itemsFile = fopen('items.txt','a') or die('Cannot open file');
		fwrite($itemsFile, $newItem.PHP_EOL);
		fclose($itemsFile);
		echo "New item is successfully added.";
	}	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>My To Do List</title>
	</head>
	<body>
		<h1>Add New Item</h1>
		<form action="additem.php" method="POST">
			<label>New Item: </label> 
			<input type="text" name="item"/>
			<input type="submit"/>
		</form>
		<a href="index.php">See Items</a>
	</body>
</html>

