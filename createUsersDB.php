<!DOCTYPE HTML>

<body>

  <?php
  $connect = mysql_connect("localhost", "bill", "Tbone123") or die("Check your     
  server connection");

// create the database if it doesn't exist
  $create = mysql_query("CREATE DATABASE IF NOT EXISTS usersDB")
  or die(mysql_error());

// select this database to use
  mysql_select_db("usersDB");

// create a login table
  $login = "CREATE TABLE login (ID mediumint(9) AUTO_INCREMENT PRIMARY KEY,  username varchar(255),
password varchar(40),
email varchar(255))";

$results = msql_query($login) or 
die(mysql_error());

 ?> 
</body>
</html>
