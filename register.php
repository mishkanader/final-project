<?php

        //i commented these out because i couldn't differentiate between
//MySQL password and password the user is inputting.

// Define username, password, and email from from fields
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];

// Create connection
//$conn = new mysqli("localhost", "root", "cruelangel", "derpderp");
$conn = new mysqli("localhost", "root", "", "derpderp");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO login (username, password, email)
VALUES ('$username', '$password', '$email')";

if ($conn->query($sql) == TRUE) {
	header("Refresh: 5; url=login.html");
	echo 'Registered successfully.';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
