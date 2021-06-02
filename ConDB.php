<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Examination";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn)
{
	echo"database is connected";
}
else
  echo"database is not connected";
?>