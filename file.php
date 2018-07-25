<?php
session_start();
include 'manage.php';
if(isset($_POST)) {
	$conn = getConn();
	if(isset($_POST['submit_login'])) {
		$username = $_POST['username'];
		$pass = $_POST['password'];
		$sql = "SELECT type, username FROM tab WHERE username =\"".$username."\" AND  password = \"".md5($pass)."\"";
		echo $sql;
		$result = mysqli_query($conn, $sql);
		print_r($result);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
	        	$_SESSION['type'] = $row['type'];
	        	$_SESSION['usern'] = $username;
	        	$_SESSION['logged'] = 1;
        	}
        	closeConn($conn);
        	unset($_POST);
        	if($_SESSION['type'] == 1) {
        		header("Location:user.php");
        	}
        	elseif ($_SESSION['type'] == 0) {
        		header("Location:admin.php");
        	}
        	else {
        		header("Location:index.php");
        		        	}
    	} else {
    		unset($_POST);
    		header("location:index.php");
    	}
	} elseif (isset($_POST['submit_reg'])) {
		$sql = "INSERT INTO tab (type, username, email, password)
		VALUES (1, \"".$_POST['username']."\",\"". $_POST['email']."\",\"". md5($_POST['password'])."\")";
		if (mysqli_query($conn, $sql)) {
		    echo "<h2>New Member created successfully\n</h2><br/><br/>";		    
		    echo "Click here to login ";
		    echo("<a href=\"index.php\">Goto Homepage</a>");
		    unset($_POST);
		} else {
			  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	} elseif (isset($_POST['submit_areg'])) {
		$sql = "INSERT INTO tab (type, username, email, password)
		VALUES (0, \"".$_POST['username']."\",\"". $_POST['email']."\",\"". md5($_POST['password'])."\")";
		if (mysqli_query($conn, $sql)) {
		    echo "<h2>New Admin created successfully\n</h2><br/><br/>";
		   	echo("Click <a href=\"admin.php\">here</a> to go back");
		   	unset($_POST);
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	} else {
		echo "No Entry for Hackers!";
	}
	closeConn($conn);	
} else {
	echo "You cannot access the file.";
}



?>