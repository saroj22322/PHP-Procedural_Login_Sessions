<?php

session_start();
unset($SESSION);
session_destroy();
header("Location:index.php");

?>