<?php

$servername = "localhost";
$username = "u180693221_niki";
$password = "Nikidb";
$dbname = "u180693221_sub";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO Signformdb 
VALUES ('".$_POST[fname]."','".$_POST[lname]."','".$_POST[email]."','".$_POST[userN]."','".$_POST[userP]."')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
//} 

## CONFIG ##

# LIST EMAIL ADDRESS
$recipient = "newstrack030@gmail.com";

# SUBJECT (Subscribe/Remove)
$subject = "Sign Up Details";

# RESULT PAGE
$location = "signupthanks.html";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER IN THIS SAMPLE
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
$sender = $recipient;
# MAIL BODY

$body .= "Name ".$_REQUEST['fname']." \n"."email: ".$_REQUEST['email']." \n"."User Name: ".$_REQUEST['userN']." \n"."Password: ".$_REQUEST['userP']." \n";

# add more fields here if required

## SEND MESSGAE ##

mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");

## SHOW RESULT PAGE ##

header( "Location: $location" );
?>