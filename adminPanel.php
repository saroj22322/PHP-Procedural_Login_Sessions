<?php
session_start();
if(isset($_SESSION['logged']) && $_SESSION['logged'] == 1 && $_SESSION['type'] == 0) {
	include 'adminPanelContent.php';
} else {
	echo "Not Logged In";
	echo "<br>\n Go back <a href=\"index.php\">here</br>";
}
?>