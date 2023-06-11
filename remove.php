<html>

<head>
<meta charset="UTF-8">
<title> Register car  </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<body>

	<div id="wrap">
		<div id="search">

		<img src="img/logoauto1.jpg" width="500px">

			
			<a href="index.php"> <img src="img/removecar1.jpg" height="50px" title="Remove car"></a>
			<a href="insert.php"> <img src="img/addcar1.jpg" height="50px" title="Add car"> </a>
		
		</div>
		
		<?php
		
		require('inc/connect.php');
		$query = "SELECT * FROM car ";
		$result = mysqli_query($conn,$query);
		
		if(mysqli_num_rows($result) > 0) {
			
			while($row = mysqli_fetch_assoc($result)) {
				?>
				
				<div id="result">
				
				<a href="inc/removecar.php?id=<?php echo $row['id'] ?>"> <img src="img/delete1.jpg"> </a>
				<p><b>Car: </b> <?php echo $row['brand'] . " " . $row['model']; ?> </p>
				<p><b>Year: </b> <?php echo $row['year']; ?> </p>
				
				</div>
				
				<?php
			}
			
		} else {
			echo '<i style="color:red ;"> No car! </i>';
		}
		
		?>
		
		
	</div>

</body>

</html>