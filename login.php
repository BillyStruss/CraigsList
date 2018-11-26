<?php

//start the session

session_start();

if(empty($_POST['username']) or empty($_POST['password'])) {

//user did not fill in all 

echo 'Please fill in both fields';
} else{

//user filled it all in

$username = mysql_real_escape_string($_POST['username']);
$password = md5($_POST['password']);

//search db for a valid combination
$query = mysql_query("SELECT id from login
			WHERE username = '" . $username . "'
			AND password = '" . $password . "'")
			or die(mysql_error());
list($user_id) = mysql_fetch_row($query);

//if user id is empty no valid combination was found.
if(empty($user_id)) {
	echo "No combination of username and password was found.";

} else {

$_SESSION['$user_id'] = $user_id;

//redirect to userPanel.php
header('location: userpanel.php');
}  // close else
}  // close outer if

?>



