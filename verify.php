<?php

// Define $username and $password
        $username=$_POST['username'];
        $password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
//
//        $connection = mysql_connect("localhost", "root", "cruelangel", "derpderp");
        $connection = mysql_connect("localhost", "root", "", "derpderp");
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
        if ($query == TRUE && $username != "") {
            $_SESSION['login_user']=$username; // Initializing Session
                $_SESSION['logged_in']=TRUE;
                header("Refresh: 3; url=about.html");// Redirecting To Other Page
                echo 'Logged in successfully.';
                print "<h1>" . "Welcome, $username !!!" . "</h1>";
        } else {
                header("Refresh: 3; url=login.html");
                print "<h1>" . "Error: redirecting to login page..." . "</h1>";
        }
        mysql_close($connection); // Closing Connection



//    }
//}
?>
