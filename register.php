<?php
//session_start(); // Starting Session
//$error=''; // Variable To Store Error Message
//if (isset($_POST['submit'])) {
//    if (empty($_POST['username']) || empty($_POST['password'])) {
//        $error = "Username or Password is invalid";
//   }
//   else
//  {

//Everything connects, but i cant get the sql to check if the user is valid
//correctly.  it goes strait to the page without error checking.

// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
//
//        $connection = mysql_connect("localhost", "root", "cruelangel");
$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("derpderp", $connection);

// SQL query to fetch information of registerd users and finds user match.
$query = "INSERT INTO $db (username, password, email) VALUES ($username, $password, $email)";

if ($query == TRUE && $username != "") {
    $_SESSION['login_user']=$username; // Initializing Session
    $_SESSION['logged_in']=TRUE;
    echo 'Registered successfully.';
    print "<h1>" . "Registered Successfully!!" . "</h1>";
    header("Refresh: 3; url=login.html");// Redirecting To Other Page
} else {
    print "<h1>" . "Error: redirecting to login page..." . "</h1>";
    header("Refresh: 3; url=login.html");
}
mysql_close($connection); // Closing Connection



//    }
//}
?>



