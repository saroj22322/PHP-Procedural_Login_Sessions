<?php
$conn;
function getConn() {
	$host = "localhost";
	$user = "pma";
	$pass = "55";
	$db = "test";

	$conn = mysqli_connect($host, $user, Null,$db);

	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	return $conn;
}

function closeConn($con) {
	mysqli_close($con);
}

?>