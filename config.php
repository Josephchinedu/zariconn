
<?php
	
	// Set up a connection
	$connect = mysqli_connect("aqx5w9yc5brambgl.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "shdumyrijc7cm27m", "yilb8786500swywi");
	if(!$connect){
		echo "Connection failed" .mysqli_error();	
	}

	// Connect to a database
	$connected = mysqli_select_db($connect, "xmeead3z8qon4nkv");
	if(!$connected){
		
		echo "Database Selection failed" .mysqli_error();
	
	}
?>
