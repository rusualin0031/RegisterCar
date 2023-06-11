<?php


require("connect.php");

if(isset($_GET['criteria'])) {
	
	
	if(!empty($_GET['criteria'])) {
		
		$criteria = trim($_GET['criteria']);
		$criteria = mysqli_real_escape_string($conn,$criteria);
		$query = "SELECT * FROM car WHERE brand LIKE '%{$criteria}%' OR model LIKE '%{$criteria}%'";
		
		$result  = mysqli_query($conn,$query);
		
				if(mysqli_num_rows($result)>0){
					
					while($row = mysqli_fetch_assoc($result)) {
						
						?>
						
						<div id="result">
						<img src="img/logo3d.jpg">
						<p><b>brand: </b> <?php echo $row['brand'] . " " . $row['model']; ?> </p>
					<p><b>year: </b> <?php echo $row['year']; ?> </p>
						
						</div>
						
						
						<?php
					}
					
					echo "Number of results: " . mysqli_num_rows($result);
					
				} else {
					
					echo '<i style="color:red ;"> No car! </i>';
					
				}
		
		
		
	}else {
		
		echo '<i style="color:red ;"> The table is empty! </i>';
		
	}
	
	
}

?>