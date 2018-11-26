<?php

include 'connectDB.php';

session_start();

// Check if user is logged in
if(isset($_SESSION['user_id'])) {

$query = mysql_query("SELECT username FROM login
			WHERE ID = " . $_SESSION['user_id'] 
			or die(mysql_error());

List($username) = mysql_fetch_row($query);

echo 'Hi, ' . $username . ', welcome back.';

} else {

	echo "Please login before opening the user panel";
       }
}


header(Refresh:3; location:index.html");
?>
 

