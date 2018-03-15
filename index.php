<!DOCTYPE html>
<!--http://api.openweathermap.org/data/2.5/weather?q=Chicago,usa&appid=5fbae381fa4d4c26202c93fcc80ab400-->
<html>
	<head>
		<title>My To Do List</title>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
		<script>
			$(document).ready(function(){
				var weatherURL = "http://api.openweathermap.org/data/2.5/weather?q=Chicago,usa&appid=5fbae381fa4d4c26202c93fcc80ab400";
				$.ajax({
					url: weatherURL,
					type: 'GET',
					success: function(data){	
						console.log(data);				
						//F = 9/5 (K - 273) + 32
						var temp =data.main.temp;
						var F = 9/5 *(temp - 273) + 32;
						var locTemp="Chicago, " + F + "F.";
						$("#location_temp").html(locTemp);
					},
					error: function(data){
						alert("There is the problem with this service. No weather data.");
					}
				})
			});
		</script>
		
	</head>
	<body>
		<div id="location_temp"></div>
		<h1>To Do Items</h1>
		<ol>
			<?php 
				$itemsFile = fopen("items.txt", "r");
				if($itemsFile){
					while(($line = fgets($itemsFile)) !== false){
						echo "<li>".$line."</li>";
					}
					fclose($itemsFile);
				}			
			?>
		</ol>
		<a href="additem.php">Add a New Item</a>
	</body>
</html>

