<?php

$host = "localhost";
	$username = 'root';
	$password = '';
	$database = "users";
    $conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>



<!-- $host = "localhost";
// 	$username = 'seafoodtogo';
// 	$password = 'Seafoodtogo123';
//   $username = 'staff@seafoodtogo.store';
//     $password = 'Xymondarcen27-';
  $username = 'u235219407_seafoodtogo';
    $password = 'Seafoodtogo123';
	$database = "u235219407_seafoodtogodb";
    $conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} -->
