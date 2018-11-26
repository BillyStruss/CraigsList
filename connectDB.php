<?php

// open a connection to the database

$conn = mysql_connect('localhost','craigslist','') or die(msql_error());
mysql_select_db('usersDB',$conn);

?>


