<?php 
		extract($_POST);
		$mysqli = new mysqli('localhost', 'root','','studb');

		if($mysqli->connect_errno > 0){
    		die('Unable to connect to database [' . $db->connect_error . ']');
		}
		
		$query = "INSERT INTO login VALUES ('$fname','$lname','$email','$userN','$userP')";
		$insert_row = $mysqli->query($query);
		if($insert_row){
    	//	print 'Success! ID of last inserted record is : ' .$mysqli->insert_id .'<br />';
		  header('location:signupthanks.html');
		}
		else{
    		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
		}
		
	?>
