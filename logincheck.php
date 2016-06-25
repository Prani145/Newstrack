<?php

ob_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="news"; // Database name
$tbl_name="details"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
//require('dbconnect.php');

// Define $myusername and $mypassword 
$myusername=$_POST['userN'];
$mypassword=$_POST['userP'];


$sql="SELECT * FROM $tbl_name WHERE user_name='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

/*$row=mysql_fetch_row($result);
$sname=$row[0];
print("<h1>Welcome, $sname!<br></h1>");
*/

/*for($c=0;$row=mysql_fetch_row($result);$c++){
	foreach($row as $key => $value){
		print("$key:$value, ");
	}
	print("<br>");
}
*/

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
	$row=mysql_fetch_row($result);
 	$sname=$row[0];
	print("<h1>Welcome, $sname!<br></h1>");
	echo "<h2>Login Success!!!</h2>";
	header("location:loginsuccess.html");
}
else {
	echo "<h2>Login Failed!!!</h2>";
}
ob_end_flush();

?>