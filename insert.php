<html>

<head>
<meta charset="UTF-8">
<title> Register car </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<body>

	<div id="wrap">
		<div id="search">

		<img src="img/logoauto1.jpg" width="500px" >

			
			<a href="index.php"> <img src="img/addcar1.jpg" height="50px" title="Search"></a>
			<a href="remove.php"> <img src="img/removecar1.jpg" height="50px" title="Remove car"> </a>
		
		<form action="#" method="POST">
		
			<label> <mark>Brand</mark> <br>
		<input type="text" name="brand"> </label><br>
			<label> <mark>Model</mark> <br>
		<input type="text" name="model"> </label><br>
			<label> <mark>Year</mark> <br>
		<input type="text" name="year"> </label><br>
		
		<input type="submit" name="insert" value="insert"> <br>
		
		
		</form>
		
		</div>
		
		<div id="message">
		<?php
		
		if(isset($_POST['insert'])) {
			
		if(isset($_POST['brand']) && isset($_POST['model']) && isset($_POST['year'])) {
			
			if(!empty($_POST['brand']) && !empty($_POST['model']) && !empty($_POST['year'])) {
				
			$brand = trim($_POST['brand']);
			$model = trim($_POST['model']);
			$year = trim($_POST['year']);	
			
			require('inc/connect.php');
			
			$brand = mysqli_real_escape_string($conn,$brand);
			$model = mysqli_real_escape_string($conn,$model);
			$year = mysqli_real_escape_string($conn,$year);
			
			$query = "INSERT INTO car (brand, model, year ) VALUES ('{$brand}','{$model}','{$year}')";
			
			if (mysqli_query($conn,$query) === TRUE){
				echo "New record succesfully created";
			} else {
				echo "Error!";
			}
				
			} else {
				
				echo "All fields must be filled in.";
				
			}
			
		}	else {
			
			echo "All parameters must be sent.";
			
		}
			
		}
		
		?>
		</div>
		
	</div>

</body>

</html>