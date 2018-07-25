<?php
session_start();
if(isset($_SESSION['logged']) && $_SESSION['logged'] == 1 && $_SESSION['type'] == 0) {
	echo "Logged In as Admin : ".$_SESSION['usern'];
	echo "<br>\n Logout <a href=\"logout.php\">here</a>";
	echo "<br/> <br/> \nAdmin Panel <a href=\"adminPanel.php\"> here</a> to add Admin";
} else {
	echo "Not Logged In";
	echo "<br>\n Go back <a href=\"index.php\">here</br>";
}
?>