<?php

session_start();
if(isset($_SESSION['logged']) && $_SESSION['logged'] == 1) {
	echo "Logged In as : ".$_SESSION['usern'];	
	echo "<br>\n Logout <a href=\"logout.php\">here</br>";
} else {
	echo "Not logged In";
	echo "<br>\n Go back <a href=\"index.php\">here</br>";
}

?>