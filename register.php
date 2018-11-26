<?php

if(isset($_GET['TRY'])) {

include 'connectDB.php';

if(empty($_POST['username']) or
  (empty($_POST['password']) or
  (empty($_POST['email']) ) {

  echo"You must fill in all the info.  Please do it again";

} else {

$username = msql_real_escape_string($_POST['username']);
$password = MD5($_POST['password']);
$email = mysql_real_escape_string($_POST['email']);

$query = mysql_query("SELECT COUNT(id) FROM login
			WHERE username = $username OR
			email = $email") or die(mysql_error());

list($count) = mysql_fetch_row($query);

if($count == 0) {

mysql_query("INSERT INTO login(username, password, email)
		VALUES ('" . $username . "', '" $password . "', '" . $_email . "')") or die(mysql_error());

echo "You successfully registered!<br>"
?>

<a href="login.html">
Click here to login</a>
<?php
	} else { // credentials were not unique

	echo "Username and/or Email already taken";}
}
}




















