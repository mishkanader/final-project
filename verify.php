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
        $query = mysql_query("select * from login where password='$password' AND username='$username'", $connection);
        $rows = mysql_num_rows($query);
        if ($query == TRUE) {
            $_SESSION['login_user']=$username; // Initializing Session
               echo 'Logged in successfully.';
                header("Refresh: 3; url=about.html");// Redirecting To Other Page
        } else {
            $error = "Username or Password is invalid";
        }
        mysql_close($connection); // Closing Connection



//    }
//}
?>